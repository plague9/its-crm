<?php
	$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'invoicesfkt-grid',
		'dataProvider' => $dtprv,
//	'filter'=>$model,
		'columns' => array(
			'id',
			'date',
			'name',
			array(
				'class' => 'MyButtonColumn',
				'deleteButtonUrl' => 'Yii::app()->createUrl("invoicesfkt/delete", array("id"=>$data->id))',
				'viewButtonUrl' => 'Yii::app()->createUrl("invoicesfkt/view", array("id"=>$data->id))',
				'updateButtonUrl' => 'Yii::app()->createUrl("invoicesfkt/update", array("id"=>$data->id))',
			),
		),
		'ajaxUpdate'=>false,
	));
	echo CHtml::link('<span class="icon addnew">Создать счет-фактуру</span>', Yii::app()->createUrl('invoicesfkt/create', array('byorder' => $model->id)), array('class' => 'button'));

?>
