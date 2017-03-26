<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

//$event=$platform->eventpl;
//    debug($events);
//    debug($platform);
?>
<!-- Page Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?= $platform->name ?>
            <small>Список событий</small>
        </h1>
    </div>
</div>
<!-- /.row -->
<div class="platform row">
    <div class="col-md-8">
        <?= Html::img("@web{$platform->img}", ['alt'=>$platform->name, 'class'=>'img-responsive']) ?>
    </div>
    <div class="col-md-4">
        <h3>
        <?= $platform->name ?>
        </h3>
        <hr>
        <p><?= $platform->descript ?></p>
    </div>
</div>
<div class="row col-md-12">
    <hr>
</div>
<!-- Projects Row -->
<div class="row">
    <?php foreach ($events as $event):?>
    <div class="col-md-4 portfolio-item">
        <a href="<?= Url::to(['showes/view','id'=>$event['showes']['id']]) ?>">
            <?= Html::img("@web{$event['showes']['img']}", ['alt'=>$event['showes']['name'], 'class'=>'img-responsive']) ?>
        </a>
        <h3>
            <a href="<?= Url::to(['showes/view','id'=>$event['showes']['id']]) ?>"><?= $event['showes']['name']?></a>
        </h3>
        <h4>
            <a href="<?= Url::to(['events/view','id'=>$event['id']]) ?>"><?= $event['date']?></a>
        </h4>
        <p><?= $event['showes']['descript']?></p>
    </div>
    <?php endforeach; ?>
</div>
<!-- /.row -->

