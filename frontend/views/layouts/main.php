<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= \Yii::$app->language ?>">
<head>
    <meta charset="<?= \Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => \yongtiger\setting\Setting::get('site', 'name', \Yii::$app->name),
        'brandUrl' => \yongtiger\setting\Setting::get('site', 'homeUrl', \Yii::$app->homeUrl),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => \Yii::t('common', 'Home'), 'url' => ['/site/index']],
        ['label' => \Yii::t('app', 'About'), 'url' => ['/site/about']],
        ['label' => \Yii::t('app', 'Contact'), 'url' => ['/site/contact']],
    ];
    if (\Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => \Yii::t('common', 'Signup'), 'url' => ['/site/signup']];
        $menuItems[] = ['label' => \Yii::t('common', 'Login'), 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(isset($this->params['logoutUrl']) ? $this->params['logoutUrl'] : ['/site/logout'], 'post')
            . Html::submitButton(
                \Yii::t('common', 'Logout') . ' (' . \Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= \yongtiger\setting\Setting::get('site', 'name', \Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= \Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
