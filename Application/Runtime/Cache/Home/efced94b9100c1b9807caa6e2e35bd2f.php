<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="red" />
		<link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
		<title>我的收益</title>
		<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bj-white">
		<!--头部-->
		<header>
			<a href="<?php echo U('User/center');?>">
				<div class="header-back">
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Head_Fanhui_bai@2x.png" />
				</div>
			</a>
			我的收益
		</header>
		<section class="income-out">
			<p>余额：<b class="red-color">26.60</b>元</p>
			<input type="button" value="提取" />
		</section>
		<h4 class="income-title">收益记录</h4>
		<ul class="income-record">
			<a href="<?php echo U('user/incomeDetail');?>">
				<li>
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>income.png" />
					<div>
						<p>今天</p>
						<p>2014-11-6 11.11.11</p>
					</div>
					<b class="income-num">-300</b>
					<b class="red-color income-process">投放中</b>
				</li>
			</a>
			<a href="person-incomedetail.html">
				<li>
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>income.png" />
					<div>
						<p>今天</p>
						<p>2014-11-6 11.11.11</p>
					</div>
					<b class="income-num">-300</b>
					<b class="red-color income-process">投放中</b>
				</li>
			</a>
			<a href="person-incomedetail.html">
				<li>
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>income.png" />
					<div>
						<p>今天</p>
						<p>2014-11-6 11.11.11</p>
					</div>
					<b class="income-num">-300</b>
					<b class="red-color income-process">投放中</b>
				</li>
			</a>
			<a href="person-incomedetail.html">
				<li>
					<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>income.png" />
					<div>
						<p>今天</p>
						<p>2014-11-6 11.11.11</p>
					</div>
					<b class="income-num">-300</b>
					<b class="red-color income-process">投放中</b>
				</li>
			</a>
		</ul>
	</body>
</html>