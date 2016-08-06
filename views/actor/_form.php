<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
//use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Actor */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-6">
<div class="actor-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'actorID')->textInput() ?> -->

    <?= $form->field($model, 'FirstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nationality')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'Birth')->textInput() ?> -->

    <?= $form->field($model, 'Birth')->widget(\yii\jui\DatePicker::classname(), [
      //'language' => 'ru',
      'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Kreiraj' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div></div>
