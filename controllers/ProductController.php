<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$modelProduct = Product::find()->all();

    	return $this->render('index',[
    		'model'=>$modelProduct,
    	]);
        
    }

}
