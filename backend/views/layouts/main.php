<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

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

    <!--///[yii2-brainbase v0.4.0 (admin:login layout)]-->
    <?php if (\Yii::$app->controller->action->id === 'login'): ?> 

        <div class="container">
            <?= $content ?>
        </div>

    <?php else: ?> 
    <!--///[http://www.brainbook.cc]-->
        <?php
        NavBar::begin([
        'brandLabel' => isset(\Yii::$app->params['brandLabel']) ? \Yii::$app->params['brandLabel'] : \Yii::$app->name,
        'brandUrl' => isset(\Yii::$app->params['brandUrl']) ? \Yii::$app->params['brandUrl'] : \Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        $menuItems = [
            ['label' => \Yii::t('common', 'Home'), 'url' => ['/site/index']],
        ];
        if (\Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => \Yii::t('common', 'Login'), 'url' => ['/site/login']];
        } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
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
            <?= call_user_func([isset($this->params['alertClassName']) ? $this->params['alertClassName'] : ['common/widgets/Alert'], 'widget']); ?>
            <?= $content ?>
        </div>

    <?php endif; ?> <!--///[yii2-brainbase v0.4.0 (admin:login layout)]-->

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= \Yii::$app->name ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= \Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
