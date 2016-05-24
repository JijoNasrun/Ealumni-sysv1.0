<?php
/* @var $this SalaryRangeController */
/* @var $model SalaryRange */

$this->breadcrumbs=array(
	'Salary Ranges'=>array('index'),
	'Create',
);

?>

<h1>Create Salary Range</h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">Create New Salary Range</span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div>
			</div>
		</div>
	</div>
</section>