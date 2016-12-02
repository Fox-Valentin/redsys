<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>UploadiFive Test</title>
<script src="jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
	<h1>Uploadify Demo</h1>
	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
	</form>

	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'buttonText':'上传身份证（正面）',
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'width':184,
				'height':36,
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php',
				onUploadSuccess : function(file,data,response) {//上传完成时触发（每个文件触发一次）
				console.log( 'id: ' + file.id
				　　+ ' - 索引: ' + file.index
				　　+ ' - 文件名: ' + file.name
				　　+ ' - 文件大小: ' + file.size
				　　+ ' - 类型: ' + file.type
				　　+ ' - 创建日期: ' + file.creationdate
				　　+ ' - 修改日期: ' + file.modificationdate
				　　+ ' - 文件状态: ' + file.filestatus
				　　+ ' - 服务器端消息: ' + data
				　　+ ' - 是否上传成功: ' + response);
				}
			});
		});
	</script>
</body>
</html>