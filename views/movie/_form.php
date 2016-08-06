<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Director;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-6">
<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'movieName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movieTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movieLenght')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'realiseDate')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
      'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <!-- <?= $form->field($model, 'directorsID')->textInput() ?> -->

    <?= $form->field($model, 'directorsID')->dropDownList(
      ArrayHelper::map(Director::find()->all(), 'directorID', 'FirstName')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div></div>
