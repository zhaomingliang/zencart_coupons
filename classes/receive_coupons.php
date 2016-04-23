<?php
/**
 * File contains the order-processing class ("order")
 *
 * @package classes
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: Ian Wilson  Fri Jun 1 14:21:21 2012 +0000 Modified in v1.5.1 $
 */
/**
 * order class
 *
 * Handles all order-processing functions
 *
 * @package classes
 */
class coupons extends base {
      
      /**
       * 随机字符
       * @param number $length 长度
       * @param string $type 类型
       * @param number $convert 转换大小写
       * @return string
      */
      function random($length=6, $type='string', $convert=0){
       
          $config = array(
              'number'=>'1234567890',
              'letter'=>'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
              'string'=>'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789',
              'all'=>'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
          );
           
          if(!isset($config[$type])) $type = 'string';
          $string = $config[$type];
           
          $code = '';
          $strlen = strlen($string) -1;
          for($i = 0; $i < $length; $i++){
              $code .= $string{mt_rand(0, $strlen)};
          }
          if(!empty($convert)){
              $code = ($convert > 0)? strtoupper($code) : strtolower($code);
          }
          return $code;
      }

}
