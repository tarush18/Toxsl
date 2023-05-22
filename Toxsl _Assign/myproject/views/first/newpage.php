<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use app\assets\TestAppAsset;
TestAppAsset::register($this);

$this->title = 'New Page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h2>
        This is the new page i make 
    </h2>

    <code><?= __FILE__ ?></code>
</div>
