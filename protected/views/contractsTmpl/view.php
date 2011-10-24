<?php
$this->breadcrumbs=array(
	'Contracts Tmpls'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Создать шаблон', 'url'=>array('create')),
	array('label'=>'Изменить шаблон', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить шаблон', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Действительно удалить?')),
	array('label'=>'Управление шаблонами договоров', 'url'=>array('admin')),
);
?>

<h1>Просмотр шаблона договора #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'body:html',
	),
)); ?>
