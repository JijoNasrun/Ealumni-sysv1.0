<?php
/* @var $this RaceController */
/* @var $model Race */

$this->breadcrumbs=array(
	'Races'=>array('index'),
	$model->RaceID=>array('view','id'=>$model->RaceID),
	'Update',
);

?>

<h1>Update Race <?php echo $model->RaceID; ?></h1>

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