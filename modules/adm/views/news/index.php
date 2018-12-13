<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'title:html',
//            'spoiler:html',
//            'body:html',
            [
                'attribute' => 'status',
                'value' => function($data){
                    return !$data->status ?
                        '<span class = "text-danger">Не опубликовано</span>' :
                        '<span class = "text-success">Опубликовано</span>';
                },
                'format'=>'raw',
            ],
//             'type',
            ['attribute'=> 'type',
             'value'=> function($data){
                switch ($data->type){
                    case 0:
                        $type  = 'сообщение';
                        break;
                    case 1:
                        $type  = 'информация';
                        break;
                    case 2:
                        $type  =  'преупреждение';
                        break;
                }
                return $type;
             }   ],
//             'pred',
            [
                'attribute' => 'pred',
                'value' => function($data){
                    return !$data->pred ?
                        '<span class = "text-success">Общее</span>' :
                        '<span class = "text-danger">Председатель</span>';
                },
                'format'=>'raw',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
