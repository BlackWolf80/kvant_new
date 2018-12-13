<?php
$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class=" p8b">


<a class="button-blue ident-bot-2 nomark" href="/">Назад</a><br>

    <?='['.$new->date.']'; ?>

    <h2 class="title_news"><?=$new->title; ?></h2>
<br>
<?=$new->spoiler; ?>
<br>
<?=$new->body; ?>
</div>