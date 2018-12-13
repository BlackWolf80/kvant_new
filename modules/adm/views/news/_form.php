<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

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

    <?= $form->field($model, 'type')->dropDownList([ '0' => 'сообщение', '1' => 'информация', '2' => 'преупреждение' ]) ?>

    <?= $form->field($model, 'pred')->checkbox([ '0' => 'Не опубликовано', '1' => 'Опубликовано' ]) ?>

    <?= $form->field($model, 'status')->checkbox([ '0' => 'Не опубликовано', '1' => 'Опубликовано' ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
