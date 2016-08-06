<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Director;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
  #w0 {
color: #37A1FF;
    }

</style>


<div class="movie-form">
<div class="col-md-4">
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
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary','style' => 'width: 100%;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div></div>
