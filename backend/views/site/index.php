<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use backend\models\SysInfo;

/* @var $this yii\web\View */

$this->title = \Yii::t('app', 'System Info');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="table-responsive">

    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-3">
            <col class="col-xs-6">
            <col class="col-xs-3">
        </colgroup>
        <thead>
            <tr>
                <th><?= \Yii::t('app', 'Item') ?></th>
                <th><?= \Yii::t('app', 'Info') ?></th>
                <th><?= \Yii::t('app', 'Note') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= \Yii::t('app', 'OS') ?></td>
                <td><?= SysInfo::getOs() ?></td>
                <td></td>
            </tr>
            <tr>
                <td><?= \Yii::t('app', 'Web Service') ?></td>
                <td><?= SysInfo::getWebService() ?></td>
                <td></td>
            </tr>
            <tr>
                <td>PHP <?= \Yii::t('app', 'Version') ?></td>
                <td><?= SysInfo::getPhpVersion() ?></td>
                <td><a href="<?= Url::to(['site/phpinfo']) ?>" target="_blank" class="btn btn-default btn-xs">phpinfo</a></td>
            </tr>
            <tr>
                <td>PHP HHVM <?= \Yii::t('app', 'Version') ?></td>
                <td><?= SysInfo::getPhpHhvmVersion() ?></td>
                <td></td>
            </tr>
            <tr>
                <td><?= \Yii::t('app', 'Database') ?> <?= \Yii::t('app', 'Driver') ?> <?= \Yii::t('app', 'Version') ?></td>
                <td><?= SysInfo::getDatabaseDriverName() ?> <?= SysInfo::getDatabaseDriverVersion() ?></td>
                <td></td>
            </tr>
            <tr>
                <td><?= \Yii::t('app', 'Database') ?> DSN</td>
                <td><?= SysInfo::getDatabaseDsn() ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Yii2 <?= \Yii::t('app', 'Version') ?></td>
                <td><?= SysInfo::getYiiVersion() ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Yii2 Brainbase <?= \Yii::t('app', 'Version') ?></td>
                <td><?= \Yii::$app->params['yii2-brainbase-version'] ?> build <?= \Yii::$app->params['yii2-brainbase-build'] ?></td>
                <td><?= \Yii::t('app', 'Has already been the latest version, no need to update.') ?></td>
            </tr>
        </tbody>
    </table>

    <?= Html::a(\Yii::t('app', 'Frontend Info'), ['site/frontend-info'], ['class'=>'btn btn-default']) ?>

    <?= Html::a(\Yii::t('app', 'Backend Info'), ['site/backend-info'], ['class'=>'btn btn-default']) ?>

</div>
