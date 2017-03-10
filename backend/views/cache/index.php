<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = \Yii::$app->name;

use yongtiger\admin\components\MenuHelper;
use yii\bootstrap\Nav;

?>
<div class="site-index">

	<?= Html::a(\Yii::t('app', 'Clear Caches'), ['cache/clear-caches'], ['class'=>'btn btn-primary']) ?>

	<?= Html::a(\Yii::t('app', 'Clear Dirs'), ['cache/clear-dirs'], ['class'=>'btn btn-primary']) ?>

</div>
