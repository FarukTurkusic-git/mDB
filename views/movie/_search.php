<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'movieID') ?>

    <?= $form->field($model, 'movieName') ?>

    <?= $form->field($model, 'movieTitle') ?>

    <?= $form->field($model, 'movieLenght') ?>

    <?= $form->field($model, 'plot') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'realiseDate') ?>

    <?php // echo $form->field($model, 'directorsID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
