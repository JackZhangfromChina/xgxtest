<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="red" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href="<?php echo C('SITE_URL'); echo C('CSS_URL');?>all.css"/>
    <title>发布页</title>
    <script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>common.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo C('SITE_URL'); echo C('JS_URL');?>jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
			//定义页面的载入事件
			$(function(){
				//给省份下拉列表绑定一个change方法
				$('#province').on('change',function(){
					//先获取省份/直辖市的地区id
					var provinceId = $(this).val();
					//发送ajax请求
					$.ajax({
						url: "<?php echo U('Index/getAreaByAreaId');?>",
						type: 'POST',
						dataType: 'json',
						data: {pid: provinceId},
						success: function(jsonObj){
							//转成jQuery对象使用
							//先清空原有的城市信息 还需要清空区县信息
							$('#city option:gt(0)').remove();
							$('#district option:gt(0)').remove();
							$(jsonObj).each(function(index,el){
								//将获取到的城市数据追加到city下拉列表中
								$('#city').append("<option value='" + el.id + "'>" + el.name + "</option>");
							});
						}
					});
				});
				//给city添加change事件
				$('#city').on('change',function(){
					//先获取城市的地区id
					var cityId = $(this).val();
					//发送ajax请求
					$.ajax({
						url: "<?php echo U('Index/getAreaByAreaId');?>",
						type: 'POST',
						dataType: 'json',
						data: {pid: cityId},
						success: function(jsonObj){
							//清空原有的区县信息
							$('#district option:gt(0)').remove();
							//遍历并且追加
							$(jsonObj).each(function(index,el){
								//向地区下拉列表中追加数据
								$('#district').append("<option value='" + el.id + "'>" + el.name + "</option>");
							});
						}
					});
				});
			});


			//兴趣标签多选信息的提交
			$(function(){
				// 设置属性值
				$("input:submit").on('click' ,function() {
					var interest = "";
					$("input:checkbox[name='interest']:checked").each(function() {
						interest += $(this).val() + " ";
					});

					//alert($("input[name='text']").val());
					//alert($('.question input:text').val());
					//alert($('input:text').val());
					// alert(interest);
					// alert($('input:text').val());
					// alert($("#province option:selected").val());
					//alert($("#sex option:selected").val());
					// $.post(url:<?php echo U('doajax');?>,
					//data: 'post', 
					//dataType:'json',
					//success:function(obj){
					// 	 	}

					// 	 );
						
				});
				$('#sex').on('change' ,function(){
					alert($(this).val());
				});

				$('#age').on('change' ,function(){
					alert($(this).val());
				});

				$('#province').on('change' ,function(){
					alert($(this).val());
				});
				$('#city').on('change' ,function(){
					alert($(this).val());
				});
				$('#district').on('change' ,function(){
					alert($(this).val());
				});
				$('.correct_bj input').on('blur' ,function(){
					alert($(this).val());
				});



				  $("ul").click(function ()
			        {
			             //alert($(this).find ("option:selected").attr ("aaa"));
			             // $(this).find("option:selected").attr ("bbb");
			             // $('#province').val();
			             // $('#city').val();
			             // $('#district').val();
			        
			              // alert($("#sex option:selected").val());
			              // alert($("#age option:selected").val());
			             //alert($('input[type=text]').val());

			        });
			})

			
		</script>
</head>
<body class="bj-white">
	<header>
		<a href="index.html">
			<div class="header-back">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Head_Fanhui_bai@2x.png" />
			</div>
		</a>
		发布
	</header>
<form action="<?php echo U('Index/dealfabu');?>" method="post" enctype="multipart/form-data">
	<section class="putout-box putout-start">
		<p class="putout-title">可添加图片(1张)</p>
		<!--<div class="box-border">
			<div class="img-border">
				<img src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Tupian@2x.png" />
			</div>
		</div>-->
		<div class="tjimg">
			<div id="imgPreview" class="imgPreview">

			</div>
			<div class="add_img">
				<input type="file" name="pic" id="up_load" onchange="PreviewImage(this)" class="up_load" />
				<img class="add" src="<?php echo C('SITE_URL'); echo C('IMG_URL');?>Iconfont_Tupian@2x.png" alt="" />
			</div>
		</div>
		<p class="putout-title">设置问题（正确答案按钮请保持<span class="red-color">红色</span>）</p>
		<div class="box-border">
			<p>问题:<b class="question">星享APP是一个做什么的APP?</b></p>
			<b class="putout-answer">答案：</b>
			<ul>
				<li><span>赚钱</span></li>
				<li><span>直播</span></li>
				<li class="correct-bj"><span></span></li>
			</ul>
		</div>
		<div class="some-more">
			<p>目标受众性别：
				<select id="sex">
					<option aaa="all">全部</option>
					<option aaa="boy">男</option>
					<option aaa="girl">女</option>
				</select>
			</p>
			<p>目标受众年龄：
				<select id="age">
						<option bbb="all">全部</option>
						<option bbb="teen">15-20</option>
						<option bbb="young">20-30</option>
						<option bbb="man">30-40</option>
						<option bbb="middle-aged">40-60</option>
				</select>
			</p>
	
			<p>目标受众城市：
				<b class="balck-color">
					<select id='province'>
						<option value="-1">省份/直辖市</option>
						<!--遍历省份/直辖市信息-->
						<?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					<select id="city">
						<option value="-1">市</option>
					</select>
					<select id="district">
						<option value="-1">区/县</option>
					</select>
				</b>
			</p>
			<p>预算：<b class="red-color">￥<em class="accunt-num">500</em></b>元
			</p>
		</div>
		<a href="javascript:void(0)">
		<input type="button" value="下一步"  class="button-style" id="nextstep"/>
		</a>
	</section>
	<section class="putout-box putout-end disapear">
		<p class="kind-title">请选择您的目标受众兴趣标签</p>
			<a href="javascript:void(0)" class="type-style putout-spacer" id="all-check">全选
				<input type="checkbox" name="interest[]" value="all"/>
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacer">美容
				<input type="checkbox" name="interest[]"  value="meirong" />
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacer">旅游
				<input type="checkbox" name="interest[]" value="traval" />
			</a>
			<a href="javascript:void(0)" class="type-style">钓鱼
				<input type="checkbox" name="interest[]" value="fish"/>
			</a>
			<a href="javascript:void(0)" class="type-style big-width putout-spacerb">吃喝玩乐
				<input type="checkbox" name="interest[]" value="playing"/>
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacerb">上网
				<input type="checkbox"  name="interest[]" value="internet"/>
			</a>
			<a href="javascript:void(0)" class="type-style">泡吧
				<input type="checkbox" name="interest[]" value="paoba"/>
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacer">魔兽
				<input type="checkbox"  name="interest[]" value="WOW"/>
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacer">逛超市
				<input type="checkbox" name="interest[]" value="supermarket"/>
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacer">购物
				<input type="checkbox" name="interest[]" value="shopping"/>
			</a>
			<a href="javascript:void(0)" class="type-style">看电影
				<input type="checkbox" name="interest[]" value="movie"/>
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacer">打豆豆
				<input type="checkbox" name="interest[]" value="dadoudou"/>
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacer">跳水
				<input type="checkbox" name="interest[]" value="tiaoshui"/>
			</a>
			<a href="javascript:void(0)" class="type-style putout-spacer">蹦极
				<input type="checkbox" name="interest[]" value="bengji"/>
			</a>
			<a href="javascript:void(0)" class="type-style">直播
				<input type="checkbox" name="interest[]" value="zhibo"/>
			</a>
			<input type="submit" value="提交"  class="button-style"/>

	</section>
</form>
</body>
<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>zepto_1.1.3.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo C('SITE_URL'); echo C('JS_URL');?>all.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
		//图片上传
		var count = 0;
		function PreviewImage(imgFile) {
			var filextension = imgFile.value.substring(imgFile.value.lastIndexOf("."), imgFile.value.length);
			filextension = filextension.toLowerCase();
			if((filextension != '.jpg') && (filextension != '.gif') && (filextension != '.jpeg') && (filextension != '.png') && (filextension != '.bmp')) {
				alert("对不起，系统仅支持标准格式的照片，请您调整格式后重新上传，谢谢 !");
				imgFile.focus();
			} else {
				var path;
				if(document.all) //IE
				{
					imgFile.select();
					path = document.selection.createRange().text;
					document.getElementById("imgPreview").innerHTML = "";
					document.getElementById("imgPreview").style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='scale',src=\"" + path + "\")"; //使用滤镜效果  
				} else {
					count++;
					var reader = new FileReader();
					reader.readAsDataURL(imgFile.files[0]);
					reader.onload = function(e) {
						var urlData = this.result;
						if(count == 1) {
							document.getElementById("imgPreview").innerHTML = '<img src="' + urlData + '" class="addImg" />';
						} else {
							var str = document.createElement("img");
							str.src = urlData;
							str.className = "addImg";
							document.getElementById("imgPreview").appendChild(str);
						}
					}
				}
			}
		}
	</script>
</html>