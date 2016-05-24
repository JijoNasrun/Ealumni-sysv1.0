<?php
/* @var $this SkillCategoryController */
/* @var $model SkillCategory */

$this->breadcrumbs=array(
	'Skill Categories'=>array('index'),
	'Create',
);
?>

<h1>Create SkillCategory</h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">Create New Skill Category</span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div>
			</div>
		</div>
	</div>
</section>