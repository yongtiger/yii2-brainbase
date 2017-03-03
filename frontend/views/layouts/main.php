<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Dropdown;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

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
        'brandLabel' => isset(\Yii::$app->params['brandLabel']) ? \Yii::$app->params['brandLabel'] : \Yii::$app->name,
        'brandUrl' => isset(\Yii::$app->params['brandUrl']) ? \Yii::$app->params['brandUrl'] : \Yii::$app->homeUrl,
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
        $menuItems[] = ['label' => \Yii::t('common', 'Signup'), 'url' => isset($this->params['signupUrl']) ? $this->params['signupUrl'] : ['/user/registration/signup']];
        $menuItems[] = ['label' => \Yii::t('common', 'Login'), 'url' => \Yii::$app->user->loginUrl];
    } else {
        ///[v0.9.2 (frontend\views\layouts\main.php:Dropdown Logout by `a` tag)]
        ///@see http://www.yiiframework.com/doc-2.0/yii-bootstrap-dropdown.html
        ///@see http://v3.bootcss.com/components/#dropdowns
        $menuItems[] = '<li class="dropdown">'
            . '<a href="#" data-toggle="dropdown" class="dropdown-toggle">(' . \Yii::$app->user->identity->username . ')<b class="caret"></b></a>'    ///?????caret
            . Dropdown::widget([
                'items' => [
                    ['label' => \Yii::t('common', 'Account'), 'url' => ['/user/account']],
                    ['label' => \Yii::t('common', 'Profile'), 'url' => ['/user/profile/update', 'id' => \Yii::$app->user->id]],
                    
                    '<li class="divider"></li>',
                    '<li>'
                    . Html::a(
                        \Yii::t('common', 'Logout'),
                        isset($this->params['logoutUrl']) ? $this->params['logoutUrl'] : ['/site/logout'],
                        ['data-method' => 'post']
                    )
                    . '</li>'

                ],
            ])
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