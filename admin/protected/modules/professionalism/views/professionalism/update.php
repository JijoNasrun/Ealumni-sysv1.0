<?php
/* @var $this ProfessionalismController */
/* @var $model Professionalism */

$this->breadcrumbs=array(
	'Professionalisms'=>array('index'),
	$model->professionalID=>array('view','id'=>$model->professionalID),
	'Update',
);

?>

<h1>Update Professionalism <?php echo $model->professionalID; ?></h1>

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