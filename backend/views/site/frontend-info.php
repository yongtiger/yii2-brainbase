<?php

use yii\helpers\Url;
use yii\bootstrap\Modal;
use backend\models\SysInfo;

/* @var $this yii\web\View */

$this->title = \Yii::t('app', 'Frontend Info');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'System Info'), 'url' => ['site/index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="table-responsive">

    <!--///Yii::$app (not includes object and array)-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-3">
            <col class="col-xs-6">
            <col class="col-xs-3">
        </colgroup>
        <thead>
            <tr>
                <th>Yii::$app</th>
                <th><?= \Yii::t('app', 'Value') ?></th>
                <th><?= \Yii::t('app', 'Note') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>Yii::$app->id</code></td>
                <td><?= $app->id ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->name</code></td>
                <td><?= $app->name ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->version</code></td>
                <td><?= $app->version ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->charset</code></td>
                <td><?= $app->charset ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->language</code></td>
                <td><?= $app->language ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->sourceLanguage</code></td>
                <td><?= $app->sourceLanguage ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->defaultRoute</code></td>
                <td><?= $app->defaultRoute ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->controllerNamespace</code></td>
                <td><?= $app->controllerNamespace ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->layout</code></td>
                <td><?= $app->layout ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->basePath</code></td>
                <td><?= $app->basePath ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->vendorPath</code></td>
                <td><?= $app->vendorPath ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->runtimePath</code></td>
                <td><?= $app->runtimePath ?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->timeZone</code></td>
                <td><?= $app->timeZone ?></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <!--///Yii::$app->params-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-3">
            <col class="col-xs-6">
            <col class="col-xs-3">
        </colgroup>
        <thead>
            <tr>
                <th>Yii::$app->params</th>
                <th><?= \Yii::t('app', 'Value') ?></th>
                <th><?= \Yii::t('app', 'Note') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($app->params as $key => $value): ?>
            <tr>
                <td><code><?= $key ?></code></td>
                <td>
                <?php
                if(is_array($value)){
                    echo '<pre>';var_dump($value);echo '</pre>';
                }else{
                    echo $value;
                }
                ?></td>
                <td></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!--///Yii::$app->bootstrap-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-3">
            <col class="col-xs-6">
            <col class="col-xs-3">
        </colgroup>
        <thead>
            <tr>
                <th>Yii::$app->bootstrap</th>
                <th><?= \Yii::t('app', 'Value') ?></th>
                <th><?= \Yii::t('app', 'Note') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($app->bootstrap as $key => $value): ?>
            <tr>
                <td><code><?= $key ?></code></td>
                <td><?= $value ?></td>
                <td></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!--///Yii::$app->loadedModules-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-3">
            <col class="col-xs-6">
            <col class="col-xs-3">
        </colgroup>
        <thead>
            <tr>
                <th>Yii::$app->loadedModules</th>
                <th><?= \Yii::t('app', 'Value') ?></th>
                <th><?= \Yii::t('app', 'Note') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($app->loadedModules as $key => $value): ?>
            <tr>
                <td><code><?= $key ?></code></td>
                <td>Object: <?= get_class($value) ?></td>
                <td><a href="#<?= str_replace('\\', '', $key) ?>" class="btn btn-default btn-xs" data-toggle="modal"><?= \Yii::t('app', 'Object Info') ?></a>
                <?php
                Modal::begin([
                    'id' => str_replace('\\', '', $key),
                    'header' => '<h3>Object: ' . $key . '</h3>',
                ]);
                    echo '<pre>';var_dump($value);echo '</pre>';
                Modal::end();
                ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!--///Yii::$app->extensions-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-3">
            <col class="col-xs-6">
            <col class="col-xs-3">
        </colgroup>
        <thead>
            <tr>
                <th>Yii::$app->extensions</th>
                <th><?= \Yii::t('app', 'Value') ?></th>
                <th><?= \Yii::t('app', 'Note') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($app->extensions as $key => $value): ?>
            <tr>
                <td><code><?= $key ?></code></td>
                <td><?= var_dump($value) ?></td>
                <td></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
