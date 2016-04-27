<a name="Basic-usage"></a>
# zencart plug

---

- [zencart 优惠劵](https://github.com)
- [zencart 大转盘](https://github.com)
- [zencart 分享领取优惠劵](https://github.com)
- [zencart 9宫格抽奖](https://github.com)

---
# 功能截图
<img src="http://www.zhaomingliang.cn/usr/uploads/zencart_coupons.png" width="986" height="735" />

# 配置文件
配置领取金额
<hr>
你可以通过编辑  modules/pages/receive_coupons/header_php.php 来实现优惠劵的配置
```json
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
```
#安装插件
请将文件上传到 includes 目录，访问域名+/index.php?main_page=receive_coupons


#唠嗑
欢迎大家的对项目进行Pull 

#打赏
开源项目，欢迎打赏。谢谢各位支持
<br>
<img src="http://www.zhaomingliang.cn/usr/uploads/qc.jpg"  width="340" />
