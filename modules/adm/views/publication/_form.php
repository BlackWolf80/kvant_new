<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Publication */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publication-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php

    echo $form->field($model, 'spoiler')->widget(CKEditor::className(),[
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
    ]);

    ?>

    <?php

    echo $form->field($model, 'body')->widget(CKEditor::className(),[
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
    ]);

    ?>

    <?= $form->field($model, 'section')->dropDownList([
        'garden' => 'Сад',
        'kaleyard' => 'Огород',
        'agronomist' => 'Советы агронома',
        'flower' => 'Цветник',
        'grapes' => 'Виноград',
        'build' => 'Строю сам',
        'experienced' => 'Советы бывалых',
    ]) ?>

    <?= $form->field($model, 'status')->checkbox([ '0' => 'Не опубликовано', '1' => 'Опубликовано' ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
