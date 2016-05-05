<?php
/* @var $this SkillCategoryController */
/* @var $model SkillCategory */

$this->breadcrumbs=array(
	'Skill Categories'=>array('index'),
	$model->SkillCatID,
);

?>

<h1>View SkillCategory #<?php echo $model->SkillCatID; ?></h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">View</span>
                </div>
                <div class="panel-body">
                	<?php $this->widget('zii.widgets.CDetailView', array(
						'data'=>$model,
						'attributes'=>array(
							'SkillCatID',
							'SkillCatName',
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>