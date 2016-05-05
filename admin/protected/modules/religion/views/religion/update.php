<?php
/* @var $this ReligionController */
/* @var $model Religion */

$this->breadcrumbs=array(
	'Religions'=>array('index'),
	$model->ReligionID=>array('view','id'=>$model->ReligionID),
	'Update',
);

?>

<h1>Update Religion <?php echo $model->ReligionID; ?></h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">Update</span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div>
			</div>
		</div>
	</div>
</section>