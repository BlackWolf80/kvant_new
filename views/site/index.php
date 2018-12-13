<?php
use yii\helpers\Url;
?>



<div class=" p8b">
    <div class="grid_11">
        <?php
            foreach ($news as $items){
                if($items['type']==0){$type='message-box-success';}
                elseif ($items['type']==1){$type='message-box-info';}
                elseif ($items['type']==2){$type='message-box-error';}

                echo '<h2>['.$items['date'].']</h2><br><p class="'.$type.'">'.$items['title'].'</p>';
                echo '<i>'.$items['spoiler'].'</i><br>';
                echo '<a class="button-blue ident-bot-2 nomark" href="'.Url::to(['site/news','id'=>$items['id']]).'">Подробнее</a>';
                echo '<div class="separator"></div>';

            }
        ?>
    </div>

</div>

