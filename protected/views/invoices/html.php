<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl . '/css/' . Yii::app()->config->get('global.style') . '/print.css'); ?>
	<title>Счёт ID#<?php echo $data['invoice']->id ?></title>
</head>
<body>
	<div class="">

		<div class="span_24">
			<div class="">
				<?php echo $data['body'] ?>
			</div><!-- class="box content" -->
		</div><!-- class="grid_9" id="content" -->

		<div class="">&nbsp;</div>
	</div><!-- class="container_12" id="base" -->
</body>
</html>