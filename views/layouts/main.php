<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!--CSS -->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">
-->
    <link href="/css/3-col-portfolio.css" rel="stylesheet">
    <link href="/css/heroic-features.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php $this->beginBody() ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Url::to(['/']) ?>">Главная</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= Url::to(['/platform']) ?>">Площадки</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/site/about']) ?>">О нас</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['/site/contact']) ?>">Контакты</a>
                    </li>
                    <?php if(!Yii::$app->user->isGuest){ ?>    
                    <li>
                        <a href="<?= Url::to(['/site/logout']) ?>"><?= Yii::$app->user->identity['username'] ?> (Выход)</a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <a href="<?= Url::to(['/admin']) ?>">Вход</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

<?= $content; ?>

    <div class="row col-md-12">
        <hr>
    </div>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Afisha 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery  and Bootstrap Core JavaScript-->
<!--    <script src="js/jquery.js"></script>
-->
    <script src="js/bootstrap.min.js"></script>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
