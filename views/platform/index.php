<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'АФИША | ПЛОЩАДКИ';
?>

<!-- Title -->
<div class="row">
    <div class="col-lg-12">
        <h3>Площадки</h3>
    </div>
</div>
<!-- /.row -->

<!-- Page Features -->
<div class="row text-center">

    <?php foreach ($platforms as $platform):?>
    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
<!--                    <img src="http://placehold.it/800x500" alt="">-->
            <?= Html::img("@web{$platform['img']}", ['alt'=>$platform['name']]) ?>
            <div class="caption">
                <h3><?= $platform['name']?></h3>
                <p><?= $platform['descript']?></p>
                <p>
                    <a href="<?= Url::to(['platform/view','id'=>$platform['id']]) ?>" class="btn btn-primary">События площадки</a> 
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>
<!-- /.row -->

