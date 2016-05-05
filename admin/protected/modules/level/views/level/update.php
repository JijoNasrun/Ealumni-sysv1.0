<?php
/* @var $this LevelController */
/* @var $model Level */

$this->breadcrumbs=array(
	'Levels'=>array('index'),
	$model->LevelID=>array('view','id'=>$model->LevelID),
	'Update',
);

?>

<h1>Update Level <?php echo $model->LevelID; ?></h1>

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