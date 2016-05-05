<?php
/* @var $this PendingController */
/* @var $model Pending */

$this->breadcrumbs=array(
	'Pendings'=>array('index'),
	'Create',
);

?>

<h1>Create Pending</h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">Create New Pending</span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div>
			</div>
		</div>
	</div>
</section>