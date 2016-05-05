<?php
/* @var $this NonUitmQualificationController */
/* @var $model NonUitmQualification */

$this->breadcrumbs=array(
	'Non Uitm Qualifications'=>array('index'),
	$model->qualification_id=>array('view','id'=>$model->qualification_id),
	'Update',
);

?>

<h1>Update NonUitmQualification <?php echo $model->qualification_id; ?></h1>

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