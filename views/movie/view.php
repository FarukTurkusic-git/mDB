<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use app\models\Director;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */

$this->title = $model->movieID;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->movieID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->movieID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'movieID',
            'movieName',
            'movieTitle',
            'movieLenght',
            'plot',
            'rating',
            'realiseDate',
            [
              'attribute'=>'director',
              'value'=>$model->director->FirstName,
              'widgetOptions'=>[
                'data'=>ArrayHelper::map(Director::find()->orderBy('FirstName')->asArray()->all(), 'directorID', 'FirstName'),
              ]
            ],
    ]])
    ?>

</div>
