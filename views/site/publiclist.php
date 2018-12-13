<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>




<div class=" p8b">
    <div class="grid_11">
        <?php

        if($publications!=null){
            foreach ($publications as $publication){
                if ($publication['status'] == 1){
                    echo '<br /><p class="message-box-success">'.$publication['title'].'</p>';
                    echo '<i>'.$publication['spoiler'].'</i><br>';
                    echo '['.$publication['date'].']<br />';
                    echo '<a class="button-blue ident-bot-2 nomark" href="'.Url::to(['site/public','id'=>$publication['id']]).'">Подробнее</a>';
                    echo '<div class="separator"></div>';
                }

            }
        }


        ?>
    </div>

</div>
