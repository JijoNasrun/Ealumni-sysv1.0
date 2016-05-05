<?php
/* @var $this ProgramController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Programs',
);

?>

<h1>Programs</h1>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel">
                <div class="panel-heading">
                	<span class="panel-title">List</span>
                </div>
                <div class="panel-body">
                	<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
