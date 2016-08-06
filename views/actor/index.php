<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Actors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Actor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-bordered'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'actorID',
            'FirstName',
            'LastName',
            'Nationality',
            'Birth',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'rowOptions' => function ($model, $index, $widget, $grid){

          if($model->Birth == NULL){
            return ['class' => 'text-warning'];
          }else{
            return ['class' => 'text-success'];
          }
        },
    ]); ?>
</div>
