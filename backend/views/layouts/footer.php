<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">Powered by 
                <a href="<?= \Yii::$app->params['poweredByUrl'] ?>" target="_blank"> <?= \Yii::$app->params['poweredByName'] ?>
                    <?= \Yii::$app->params['poweredByVersion'] ?> build <?= \Yii::$app->params['poweredByBuild'] ?>
                </a>
                <?= \Yii::$app->params['poweredBySourceLabel'] ?>
            </div>
            <div class="col-md-4 text-center">Email: 
                <a href="mailto:<?= \Yii::$app->params['poweredByEmail'] ?>"><?= \Yii::$app->params['poweredByEmail'] ?></a>
            </div>
            <div class="col-md-4 text-center">Copyright &copy; <?= \Yii::$app->params['poweredByCopyrightLabel'] ?>
            </div>
        </div>
    </div>
</footer>
