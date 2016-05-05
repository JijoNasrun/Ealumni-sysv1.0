<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
// $this->breadcrumbs=array(
// 	'Login',
// );
?>


<!-- end .form-header section -->
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
    <div class="panel-body bg-light p30">
        <div class="row">
            <div class="col-sm-7 pr30">
            	<div class="section">
            		<?php echo $form->labelEx($model,'username', array('class'=>'field-label text-muted fs18 mb10')); ?>
            		<label for="username" class="field prepend-icon">
            			<?php echo $form->textField($model,'username', array('class'=>'gui-input', 'placeholder'=>'Enter username')); ?>
            			<label for="username" class="field-icon"><i class="fa fa-user"></i>
            			</label>
            		</label>
            		<?php echo $form->error($model,'username'); ?>
            	</div>
            	<!-- end section -->

            	<div class="section">
            		<?php echo $form->labelEx($model,'password', array('class'=>'field-label text-muted fs18 mb10')); ?>
            		<label for="password" class="field prepend-icon">
            			<?php echo $form->passwordField($model,'password', array('class'=>'gui-input', 'placeholder'=>'Enter password')); ?>
            			<label for="password" class="field-icon"><i class="fa fa-lock"></i>
            			</label>
            		</label>
            		<?php echo $form->error($model,'password'); ?>
            	</div>
            	<!-- end section -->
            </div>
            <div class="col-sm-5 br-l br-grey pl30">
            	<center><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/logos/fskm.png" width="170px" height="180px"></center>
            </div>
        </div>
    </div>
    <!-- end .form-body section -->

    <div class="panel-footer clearfix p10 ph15">
    	<?php echo CHtml::submitButton('Login', array('class'=>'button btn-primary mr10 pull-right')); ?>
    	<label class="switch block switch-primary pull-left input-align mt10">
    		<!-- <input type="checkbox" name="remember" id="remember" checked> -->
    		<?php echo $form->checkBox($model,'rememberMe'); ?>
    		<?php // echo $form->label($model,'rememberMe', array('data-on'=>'YES', 'data-off'=>'NO')); ?>
    		<label for="LoginForm_rememberMe" data-on="YES" data-off="NO"></label>
    		<span>Remember me</span>
    		<?php echo $form->error($model,'rememberMe'); ?>
    	</label>
    </div>
    <!-- end .form-footer section -->
<?php $this->endWidget(); ?>