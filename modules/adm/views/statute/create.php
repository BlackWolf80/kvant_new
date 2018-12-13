<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Statute */

$this->title = 'Create Statute';
$this->params['breadcrumbs'][] = ['label' => 'Statutes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statute-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
