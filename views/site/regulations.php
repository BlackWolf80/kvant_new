<?php
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="p8b">
    <?php
        foreach ($statute as $items)
        {
            echo '<a class="button-blue ident-bot-2 nomark" href="'.\yii\helpers\Url::toRoute(['/site/statute','id'=>$items['id']]).'">- '.$items['title'].'</a><br>';
        }
    ?>
</div>