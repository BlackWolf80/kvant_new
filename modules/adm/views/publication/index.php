<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PublicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publication-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Publication', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'spoiler:html',
//            'body:html',
//            'section',
            [
                'attribute' => 'section',
                'value' => function($data){

                    switch ($data->section){
                        case 'garden':
                            return 'Сад';
                        break;
                        case 'kaleyard':
                            return 'Огород';
                            break;
                        case 'agronomist':
                            return 'Советы агронома';
                            break;
                        case 'flower':
                            return 'Цветник';
                            break;
                        case 'grapes':
                            return 'Виноград';
                            break;
                        case 'build':
                            return 'Строю сам';
                            break;
                        case 'experienced':
                            return 'Советы бывалых';
                            break;
                    }

                },
                'format'=>'raw',
            ],
//            'status',
            [
                'attribute' => 'status',
                'value' => function($data){
                    return !$data->status ?
                        '<span class = "text-danger">Не опубликовано</span>' :
                        '<span class = "text-success">Опубликовано</span>';
                },
                'format'=>'raw',
            ],
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
