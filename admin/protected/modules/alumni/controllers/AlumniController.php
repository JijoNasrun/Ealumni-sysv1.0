<?php

class AlumniController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','dashboard'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionDashboard()
	{
		
		$select = 'select count(*) as a from alumni';
		$result = Yii::app()->db->createCommand($select)->queryRow();
		$select2 = 'select count(*) as b from campus';
		$result2 = Yii::app()->db->createCommand($select2)->queryRow();
		$select3 = 'select count(*) as c from faculty';
		$result3 = Yii::app()->db->createCommand($select3)->queryRow();
		$select4 = 'select count(*) as d from campus_faculty';
		$result4 = Yii::app()->db->createCommand($select4)->queryRow();
		$select5 = 'select count(*) as e from level';
		$result5 = Yii::app()->db->createCommand($select5)->queryRow();
		$select6 = 'select count(*) as f from mode';
		$result6 = Yii::app()->db->createCommand($select6)->queryRow();
		$select7 = 'select count(*) as g from organization';
		$result7 = Yii::app()->db->createCommand($select7)->queryRow();
		$select8 = 'select count(*) as h from organization_type';
		$result8 = Yii::app()->db->createCommand($select8)->queryRow();
		$select9 = 'select count(*) as i from pending';
		$result9 = Yii::app()->db->createCommand($select9)->queryRow();
		$select10 = 'select count(*) as j from program';
		$result10 = Yii::app()->db->createCommand($select10)->queryRow();
		$select11 = 'select count(*) as k from race';
		$result11 = Yii::app()->db->createCommand($select11)->queryRow();
		$select12 = 'select count(*) as l from religion';
		$result12 = Yii::app()->db->createCommand($select12)->queryRow();
		$select13 = 'select count(*) as m from salary_range';
		$result13 = Yii::app()->db->createCommand($select13)->queryRow();
		$select14 = 'select count(*) as n from skill';
		$result14 = Yii::app()->db->createCommand($select14)->queryRow();
		$select15 = 'select count(*) as o from skill_category';
		$result15 = Yii::app()->db->createCommand($select15)->queryRow();
		$select16 = 'select count(*) as p from state';
		$result16 = Yii::app()->db->createCommand($select16)->queryRow();

		$this->render('dashboard',array(
			'result'=>$result,
			'result2'=>$result2,
			'result3'=>$result3,
			'result4'=>$result4,
			'result5'=>$result5,
			'result6'=>$result6,
			'result7'=>$result7,
			'result8'=>$result8,
			'result9'=>$result9,
			'result10'=>$result10,
			'result11'=>$result11,
			'result12'=>$result12,
			'result13'=>$result13,
			'result14'=>$result14,
			'result15'=>$result15,
			'result16'=>$result16,
		));
	}
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Alumni;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Alumni']))
		{
			$model->attributes=$_POST['Alumni'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->no_matrik));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Alumni']))
		{
			$model->attributes=$_POST['Alumni'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->no_matrik));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Alumni');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Alumni('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Alumni']))
			$model->attributes=$_GET['Alumni'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Alumni the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Alumni::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Alumni $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='alumni-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
