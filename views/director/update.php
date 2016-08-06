<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Director */

$this->title = 'Update Director: ' . $model->directorID;
$this->params['breadcrumbs'][] = ['label' => 'Directors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->directorID, 'url' => ['view', 'id' => $model->directorID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="director-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
