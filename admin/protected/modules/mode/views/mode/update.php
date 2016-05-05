<?php
/* @var $this ModeController */
/* @var $model Mode */

$this->breadcrumbs=array(
	'Modes'=>array('index'),
	$model->ModeID=>array('view','id'=>$model->ModeID),
	'Update',
);

?>

<h1>Update Mode <?php echo $model->ModeID; ?></h1>

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