<?php
/* @var $this CampusFacultyController */
/* @var $model CampusFaculty */

$this->breadcrumbs=array(
	'Campus Faculties'=>array('index'),
	'Create',
);

?>

<h1>Create CampusFaculty</h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">Create New Campus Faculty</span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div>
			</div>
		</div>
	</div>
</section>