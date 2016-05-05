<?php
/* @var $this ProgramController */
/* @var $model Program */

$this->breadcrumbs=array(
	'Programs'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#program-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Programs</h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">Project List</span>
                </div>
                <div class="panel-body">
                	<div class="form-group">
						<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-default')); ?>
                		<?php echo CHtml::link('Create New',array('/program/program/create'),array('class'=>'btn btn-default')); ?>
		                	</div>
							<div class="search-form" style="display:none">
							<div class="search-form" style="display:none">
							<?php $this->renderPartial('_search',array(
								'model'=>$model,
							)); ?>
							</div>
							</div><!-- search-form -->
								<?php $this->widget('zii.widgets.grid.CGridView', array(
									'id'=>'program-grid',
									'dataProvider'=>$model->search(),
									'filter'=>$model,
									'columns'=>array(
										'ProgramID',
										'ProgramName',
										'FacID',
										array(
											'class'=>'CButtonColumn',
										),
									),
								)); ?>
                </div>
			</div>
		</div>
	</div>
</section>


