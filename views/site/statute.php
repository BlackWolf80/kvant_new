<?php
$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\Html;
?>


<div class="p8b">
    <?= Html::a('Назад', \yii\helpers\Url::to('regulations'),['class'=>'button-blue ident-bot-2 nomark']) ?><br><br>
    <?=$statute->body; ?>
</div>