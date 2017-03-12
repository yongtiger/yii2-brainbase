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

    <!--///Yii常量-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-2">
            <col class="col-xs-4">
            <col class="col-xs-6">
        </colgroup>
        <thead>
            <tr>
                <th>Yii常量</th>
                <th>值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>YII_DEBUG</code></td>
                <td><?=YII_DEBUG?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>YII_ENV</code></td>
                <td><?=YII_ENV?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>YII_ENV_PROD</code></td>
                <td><?=YII_ENV_PROD?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>YII_ENV_DEV</code></td>
                <td><?=YII_ENV_DEV?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>YII_ENV_TEST</code></td>
                <td><?=YII_ENV_TEST?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>YII_ENABLE_ERROR_HANDLER</code></td>
                <td><?=YII_ENABLE_ERROR_HANDLER?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>YII2_PATH</code></td>
                <td><?=YII2_PATH?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>YII_BEGIN_TIME</code></td>
                <td><?=YII_BEGIN_TIME?> (<?=date('Y-m-d H:i:s', YII_BEGIN_TIME) . ' '. (YII_BEGIN_TIME - (int)(YII_BEGIN_TIME))?>)</td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <!--///Yii别名-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-2">
            <col class="col-xs-4">
            <col class="col-xs-6">
        </colgroup>
        <thead>
            <tr>
                <th>Yii别名</th>
                <th>值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <?php
            ///只显示二维数组！
            foreach (\Yii::$aliases as $key => $value) {
                if(is_array($value)){
                    foreach ($value as $k => $v) {
            ?>
            <tr>
                <td><code><?=$k?></code></td>
                <td><?=$v?></td>
                <td></td>
            </tr>
            <?php
                    }
                }else{
            ?>
            <tr>
                <td><code><?=$key?></code></td>
                <td><?=$value?></td>
                <td></td>
            </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

    <!--///当前应用(Yii::$app)的变量，不包括对象、数组！-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-2">
            <col class="col-xs-4">
            <col class="col-xs-6">
        </colgroup>
        <thead>
            <tr>
                <th>当前应用(Yii::$app)的变量</th>
                <th>值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>Yii::$app->id</code></td>
                <td><?=\Yii::$app->id?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->name</code></td>
                <td><?=\Yii::$app->name?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->version</code></td>
                <td><?=\Yii::$app->version?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->charset</code></td>
                <td><?=\Yii::$app->charset?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->language</code></td>
                <td><?=\Yii::$app->language?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->sourceLanguage</code></td>
                <td><?=\Yii::$app->language?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->defaultRoute</code></td>
                <td><?=\Yii::$app->defaultRoute?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->controllerNamespace</code></td>
                <td><?=\Yii::$app->controllerNamespace?></td>
                <td></td>
            </tr>
            <tr>
                <td><code>Yii::$app->layout</code></td>
                <td><?=\Yii::$app->layout?></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <!--///当前应用(Yii::$app)的参数-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-2">
            <col class="col-xs-4">
            <col class="col-xs-6">
        </colgroup>
        <thead>
            <tr>
                <th>当前应用(Yii::$app)的参数</th>
                <th>值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (\Yii::$app->params as $key => $value) {
            ?>
            <tr>
                <td><code><?=$key?></code></td>
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
            <?php
            }
            ?>
        </tbody>
    </table>

    <!--///当前应用(Yii::$app)的bootstrap-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-2">
            <col class="col-xs-4">
            <col class="col-xs-6">
        </colgroup>
        <thead>
            <tr>
                <th>当前应用(Yii::$app)的bootstrap</th>
                <th>值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (\Yii::$app->bootstrap as $key => $value) {
            ?>
            <tr>
                <td><code><?=$key?></code></td>
                <td><?=$value?></td>
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!--///当前应用(Yii::$app)已加载模块-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-2">
            <col class="col-xs-4">
            <col class="col-xs-6">
        </colgroup>
        <thead>
            <tr>
                <th>当前应用(Yii::$app)已加载模块</th>
                <th>值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (\Yii::$app->loadedModules as $key => $value) {
            ?>
            <tr>
                <td><code><?=$key?></code></td>
                <td>Object: <?=get_class($value)?></td>
                <td><a href="#<?=str_replace('\\','',$key)?>" class="btn btn-default btn-xs" data-toggle="modal">查看对象</a>
                <?php
                Modal::begin([
                    'id' => str_replace('\\','',$key),
                    'header' => '<h3>Object: '.$key.'</h3>',
                ]);
                    echo '<pre>';var_dump($value);echo '</pre>';
                Modal::end();
                ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!--///当前应用(Yii::$app)的扩展-->
    <table class="table table-bordered table-striped">
        <colgroup>
            <col class="col-xs-2">
            <col class="col-xs-4">
            <col class="col-xs-6">
        </colgroup>
        <thead>
            <tr>
                <th>当前应用(Yii::$app)的扩展</th>
                <th>值</th>
                <th>说明</th>
            </tr>
        </thead>
        <tbody>
            <?php ///var_dump(\Yii::$app->extensions);die;
            foreach (\Yii::$app->extensions as $key => $value) {
            ?>
            <tr>
                <td><code><?=$key?></code></td>
                <td><?=var_dump($value)?></td><!--///获得关联数组的第一个元素 -->
                <td></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>
