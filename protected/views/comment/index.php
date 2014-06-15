<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper; // load classes
use app\models\Page;

/**
 * @var yii\web\View $this
 * @var app\models\CommentsSearch $searchModel
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
$dataList=ArrayHelper::map(Page::find()->asArray()->all(), 'id');
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <?=$form->field($model, 'center_id')->dropDownList($dataList, 
         ['prompt'=>'-Choose a Course-']) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'content:ntext',
            'created',
            'visible',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
