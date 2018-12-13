<?php
$this->title = $public['title'];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class=" p8b">
    <a class="button-blue ident-bot-2 nomark" href="" onclick="javascript:history.back(); return false;"> Назад</a>

<br>


    <?='['.$public['date'].']'; ?>

<!--    <h2 class="title_news">--><?//=$public['title']; ?><!--</h2>-->
<br>
<?=$public['spoiler']; ?>
<br>
<?=$public['body']; ?>
</div>
<br />
<a class="button-blue ident-bot-2 nomark" href="" onclick="javascript:history.back(); return false;"> Назад</a>