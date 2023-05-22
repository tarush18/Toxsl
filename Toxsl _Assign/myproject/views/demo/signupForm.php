<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title='Signup Form';
$this->params['breadcrumbs'][] = $this->title;

/** @var yii\web\View $this */
/** @var app\models\UserTable $model */
/** @var ActiveForm $form */
?>
<div class="demo-signupForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Username') ?>
        <?= $form->field($model, 'FirstName') ?>
        <?= $form->field($model, 'LastName') ?>
        <?= $form->field($model, 'EmailID') ?>
        <?= $form->field($model, 'Password') ?>
        <?= $form->field($model, 'Role') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- demo-signupForm -->
