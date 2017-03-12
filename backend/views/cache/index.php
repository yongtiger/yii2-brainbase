<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = \Yii::t('app', 'Caches');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="cache-index">

	<?= Html::a(\Yii::t('app', 'Clear Caches'), ['cache/clear-caches'], ['class'=>'btn btn-primary']) ?>

	<?= Html::a(\Yii::t('app', 'Clear Dirs'), ['cache/clear-dirs'], ['class'=>'btn btn-primary']) ?>

</div>
