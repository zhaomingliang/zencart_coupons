<?php
/**
 * Page Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_login_default.php 18695 2011-05-04 05:24:19Z drbyte $
 */
?>
  <style>
  .couponf {
    width:410px;
    margin:0 auto;
  }
  .stamp * {
    padding: 0;
    margin: 0;
    list-style:none;
    font-family:"Microsoft YaHei", 'Source Code Pro', Menlo, Consolas, Monaco, monospace;
  }
  .stamp {
    width: 387px;
    height: 140px;
    padding: 0 10px;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
  }
  .stamp:before {
    content: '';
    position: absolute;
    top:0;
    bottom:0;
    left:10px;
    right:10px;
    z-index: -1;
  }
  .stamp i {
    position: absolute;
    left: 20%;
    top: 45px;
    height: 190px;
    width: 390px;
    background-color: rgba(255, 255, 255, .15);
    transform: rotate(-30deg);
    z-index: 1;
  }
  .stamp .par {
    float: left;
    padding: 16px 15px;
    width: 220px;
    border-right:2px dashed rgba(255, 255, 255, .3);
    text-align: left;
  }
  .stamp .par p {
    color:#fff;
    font-size: 16px;
    line-height: 21px;
  }
  .stamp .par span {
    font-size: 50px;
    color:#fff;
    margin-right: 5px;
    line-height: 65px;
  }
  .stamp .par .sign {
    font-size: 34px;
  }
  .stamp .par sub {
    position: relative;
    top:-5px;
    color:rgba(255, 255, 255, .8);
  }
  .stamp .copy {
    display: inline-block;
    padding:21px 14px;
    width:100px;
    vertical-align: text-bottom;
    font-size: 14px;
    color:rgb(255,255,255);
    text-align: center;
    line-height: initial;
      position: absolute;
    z-index: 99;
  }
  .stamp .copy p {
    font-size: 16px;
    margin-top: 15px;
  }
  .stamp01 {
  
    background-size: 15px 15px;
    background-position: 9px 3px;
  }
  .stamp01 .copy a {
    background-color:#fff;
    color:#333;
    font-size: 14px;
    text-decoration:none;
    padding:5px 10px;
    border-radius:3px;
    display: block;
  }
  .stamp01:before {
    background-color:#F39B00;
  }
  .stamp02 {
    background-size: 15px 15px;
    background-position: 9px 3px;
  }
  .stamp02 .copy a {
    background-color:#fff;
    color:#333;
    font-size: 14px;
    text-decoration:none;
    padding:5px 10px;
    border-radius:3px;
    display: block;
  }
  .stamp02:before {
    background-color:#D24161;
  }
  .stamp03 {
    background-size: 15px 15px;
    background-position: 9px 3px;
  }
  .stamp03:before {
    background-color:#7EAB1E;
  }
  .stamp03 .copy {
    padding: 10px 6px 10px 12px;
    font-size: 14px;
  }
  .stamp03 .copy p {
    font-size: 14px;
    margin-top: 5px;
    margin-bottom: 8px;
  }
  .stamp03 .copy a {
    background-color:#fff;
    color:#333;
    font-size: 14px;
    text-decoration:none;
    padding:5px 10px;
    border-radius:3px;
    display: block;
  }
  .stamp04 {
    width: 390px;
    background-size: 12px 8px;
    background-position: -5px 10px;
  }
  .stamp04:before {
    background-color:#50ADD3;
    left: 5px;
    right: 5px;
  }
  .stamp04 .copy {
    padding: 10px 6px 10px 12px;
    font-size: 14px;
  }
  .stamp04 .copy p {
    font-size: 14px;
    margin-top: 5px;
    margin-bottom: 8px;
  }
  .stamp04 .copy a {
    background-color:#fff;
    color:#333;
    font-size: 14px;
    text-decoration:none;
    padding:5px 10px;
    border-radius:3px;
    display: block;
  }

    .stamp01 {
       background:#F39B00;
    }
    .stamp02 {
       background: #D24161;
    }
    .stamp03 {
       background:#7EAB1E;
    }
    .stamp04 {
       background: #50ADD3;
   }

  </style>
  <div class="couponf">
<?php
  echo $view;
?>
  </div>