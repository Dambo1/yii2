<?php

use app\assets\AppAsset;
use yii\helpers\Html;
/** @var string $content */
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->title ?></title>
</head>
<?php $this->head() ?>

<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">

        <ul class="nav nav-pills">
            <li role="presentation" class="active"><?= Html::a('Главная', '/web/') ?></li> &nbsp;
            <li role="presentation"><?= Html::a('Отправить сообщение', ['post/index']) ?></li> &nbsp;
            <li role="presentation"><?= Html::a('Отправленные сообщения', ['post/show']) ?></li>
        </ul>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

