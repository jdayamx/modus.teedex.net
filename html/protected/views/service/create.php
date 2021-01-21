<?php
/* @var $this ServiceController */
/* @var $model Service */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Service', 'url'=>array('index')),
	array('label'=>'Manage Service', 'url'=>array('admin')),
);
?>

<h1>Додавання послуги</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>