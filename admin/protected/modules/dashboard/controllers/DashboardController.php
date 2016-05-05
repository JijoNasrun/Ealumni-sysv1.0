<?php

class DashboardController extends Controller
{

	public $layout='//layouts/column2';

	public function actionIndex()
	{
		$this->render('index');
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
}