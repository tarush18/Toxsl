<?php

namespace app\controllers;

use Yii;
// yii\filters\AccessControl;
use yii\web\Controller;
// use yii\web\Response;
// use yii\filters\VerbFilter;
// use app\models\LoginForm;
// use app\models\ContactForm;

class FirstController extends Controller
{
      public function actionIndex()
      {
        $data= Yii::$app->db->CreateCommand('Select * from user')->queryAll();
        print_r('$data');
        echo "yes"; 
        die;
      }    

      public function actionTest()
      {
        return $this->render('newpage');
      }
}
