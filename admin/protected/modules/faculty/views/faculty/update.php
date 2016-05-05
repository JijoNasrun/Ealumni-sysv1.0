<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	$model->FacID=>array('view','id'=>$model->FacID),
	'Update',
);

?>

<h1>Update Faculty <?php echo $model->FacID; ?></h1>

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