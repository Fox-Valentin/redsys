<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>个人信息</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">
    <meta name="x5-fullscreen" content="true">
    <meta name="x5-page-mode" content="app">
	<link rel="stylesheet" href="static/css/basic.css">
	<link rel="stylesheet" type="text/css" href="static/js/uploadify/uploadifive.css">
	<link rel="stylesheet" href="static/css/demo.css">
	<script src="static/js/jquery-1.10.2.min.js"></script>
<script src="static/js/uploadify/jquery.uploadifive.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="page-header">
		<img src="static/img/header01.png" alt="">
	</div>
	<div class="page-body clearfix">
		<div class="input-file-title">录入资料</div>
		<div class="clearfix" style="text-align: center;">
			<div class="input-file-left">
				上传身份证（正面）
				<input id="file_upload" name="file_upload" type="file" multiple="true">
			</div>
			<div class="input-file-mid">
				上传身份证（背面）
				<input id="file_upload2" name="file_upload" type="file" multiple="true">
			</div>
			<div class="input-file-right">
				上传银行卡（正面）
				<input id="file_upload3" name="file_upload" type="file" multiple="true">
			</div>
		</div>
	</div>
	<div class="page-footer">
		扬我国威.民族大业.志在你我.匹夫有责
	</div>
</body>
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : true ,
				'checkScript'      : 'check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'uploadScript'     : 'uploadifive.php',
				'buttonText' :"上传身份证（正面）",
				'height': 30,
				'width':184,
				'onUploadComplete' : function(file, data) { console.log(file); }
			});
			$('#file_upload2').uploadifive({
				'auto'             : true ,
				'checkScript'      : 'check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'uploadScript'     : 'uploadifive.php',
				'buttonText' :"上传身份证（正面）",
				'height': 30,
				'width':184,
				'onUploadComplete' : function(file, data) { console.log(file); }
			});
			$('#file_upload3').uploadifive({
				'auto'             : true ,
				'checkScript'      : 'check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'uploadScript'     : 'uploadifive.php',
				'buttonText' :"上传身份证（正面）",
				'height': 30,
				'width':184,
				'onUploadComplete' : function(file, data) { console.log(file); }
			});
		});
	</script>
</html>