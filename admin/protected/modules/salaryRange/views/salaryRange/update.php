<?php
/* @var $this SalaryRangeController */
/* @var $model SalaryRange */

$this->breadcrumbs=array(
	'Salary Ranges'=>array('index'),
	$model->SalRangeID=>array('view','id'=>$model->SalRangeID),
	'Update',
);

?>

<h1>Update Salary Range <?php echo $model->SalRangeID; ?></h1>

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