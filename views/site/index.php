<?php

/* @var $this yii\web\View */

$this->title = 'Страница пользователя';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Добрый день <?= Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->username ?>! </h1>
    </div>

</div>
