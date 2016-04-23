<?php
/**
 * products_all  header_php.php
 *
 * @package page
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_php.php 6912 2007-09-02 02:23:45Z drbyte $
 */

  require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));


  $breadcrumb->add('Receive coupons');
  $define_page = zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_TEST_PAGE, 'false');
  try {
      if (!isset($_SESSION['customer_id']) || !$_SESSION['customer_id']) { 
          $_SESSION['navigation']->set_snapshot(); 
          zen_redirect(zen_href_link(FILENAME_LOGIN, '', 'SSL')); 
      } else { 
       
        if (zen_get_customer_validate_session($_SESSION['customer_id']) == false) { 
          $_SESSION['navigation']->set_snapshot(array('mode' => 'SSL', 'page' => FILENAME_CHECKOUT_SHIPPING)); 
          zen_redirect(zen_href_link(FILENAME_LOGIN, '', 'SSL')); 
        } 
      }


      /*--设置数据-*/
      $arr = array(
          '1'=>array(
               'amount' => '5',
               'fullcouponf' => 'Unlimited', 
               'couponf'=>'0',
          ),
          '2'=>array(
               'amount' => '10',
               'fullcouponf' => 'Orders over 100.00 $',
               'couponf'=>'100',
          ),
          '3'=>array(
               'amount' => '50',
               'fullcouponf' => 'Orders over 500.00 $',
               'couponf'=>'500',
          ),
          '4'=>array(
               'amount' => '100',
               'fullcouponf' => 'Orders over 1000.00 $',
               'couponf'=>'1000',
           ),
         
      );
      /*---end-*/
      $date = date("Y-m-d");
      $over =  date("Y-m-d",strtotime("+7 days"));

      $view ='';
      $i = 0;

      foreach ($arr as $key => $value) {
        $i++;
        $view .=  '<div class="stamp stamp0'.$i.'">
          <div class="par"><p>'.STORE_NAME.'</p><sub class="sign">$</sub><span>'.$value['amount'].'</span><sub>coupon</sub><p>'.$value['fullcouponf'].'</p></div>
          <div class="copy">';
              $isreceive  = "select * from coupons where restrict_to_customers = ".$_SESSION['customer_id']." and coupon_amount = '".sprintf('%.3f',$value['amount'])."'order by coupon_id desc limit 1 ";
              $result =  $db->Execute($isreceive);
              if(!$result->EOF){
                $view .= 'coupon is<p><input value="'.$result->fields['coupon_code'].'" style="width: 76px; margin-bottom: 5px"; /></p><a href="index.php">Shop  now</a>';
              }
              else{
                $view .= ' Effective time<p>'.$date.'<br>'.$over.'</p><a href="index.php?main_page=receive_coupons&id='.$i.'">Get  now</a>';
              }
        $view .= '</div>
          <i></i>
          </div>';
      }
      if(isset($_GET['id'])){

         $issetid  = "select coupon_code from coupons where restrict_to_customers = ".$_SESSION['customer_id']." and coupon_amount = '".sprintf('%.3f',$arr[$_GET['id']]['amount'])."'order by coupon_id desc limit 1 ";
         $result =  $db->Execute($issetid);
         if($result->fields['coupon_code'] != ''){
            $localurl = 'http://'.$_SERVER['SERVER_NAME'].'/index.php?main_page=receive_coupons';
            echo '<script>alert("You have already received the coupon!");window.location.href="'.$localurl.'"</script>';
            exit();
         }
         require(DIR_WS_CLASSES . 'receive_coupons.php');
         $coupons = new coupons;
    

         $juanamout  =  $arr[$_GET['id']]['amount']; //劵金额
         $juan = $coupons->random('5','all','0');
       
         $fullcouponf = $arr[$_GET['id']]['couponf']; //满多少减多少


         $overdate = "2017-04-22 00:00:00";
         $startdate = date("Y-m-d H:i:s");
          

         $insertsql ="INSERT INTO `coupons` (`coupon_id`,`coupon_type`,`coupon_code`,`coupon_amount`,
            `coupon_minimum_order`,`coupon_start_date`,`coupon_expire_date`,`uses_per_coupon`,
            `uses_per_user`,`restrict_to_products`,`restrict_to_categories`,`restrict_to_customers`,
            `coupon_active`,`date_created`,`date_modified`,`coupon_zone_restriction`
          )
          VALUES
            (
              '".$juan."',
              'F',
              '".$juan."',
              '".$juanamout."',
              '".$fullcouponf."',
              '".$startdate."',
              '".$overdate."',
              '0',
              '1',
              NULL,
              NULL,
              '".$_SESSION['customer_id']."',
              'Y',
              '".$startdate."',
              '".$startdate."',
              '0'
          )";
       $couponfresult =  $db->Execute($insertsql);
       if($couponfresult) {
          $localurl = 'http://'.$_SERVER['SERVER_NAME'].'/index.php?main_page=receive_coupons';
          echo '<script>alert("Receive success! Please copy the use");window.location.href="'.$localurl.'"</script>';
       }
    }
   
     



  

}
  catch (Exception $e) {
    
  }
?>