<?php 
namespace app\controllers;


class HelloController extends \yii\web\Controller{

	public function actionIndex(){
		$weigth = 42;

		return $this->render('index',[
				'firstname'=>'ฮาฟเสาะ',
				'lastname'=>'กาเสาะ',
				'wegth'=> $weigth

			]
		);

	}
	public function actionProfile(){
		return $this->render('profile');

	}

}


?>