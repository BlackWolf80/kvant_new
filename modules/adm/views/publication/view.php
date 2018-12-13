<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Publication */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Publications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publication-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'title',
            'spoiler:html',
            'body:html',
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
        ],
    ]) ?>

</div>
