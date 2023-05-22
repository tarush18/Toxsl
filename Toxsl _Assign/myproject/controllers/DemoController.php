<?php

namespace app\controllers;
use Yii;
use app\models\UserTable;

class DemoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSignupForm()
    {
    $model = new \app\models\UserTable();

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        if ($model->validate()) {
            return $this->redirect(['index']);   
            // form inputs are valid, do something here
         //   return Yii::$app->getSession()->setFlash('success', 'Your message has been successfully recorded.');            ;
        }
    }

    return $this->render('signupForm', [
        'model' => $model,
    ]);
    }


   
}
