<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

//$this->title = 'Афиша|Show';
//        debug($showes);
?>
<!-- Page Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Афиши
            <small>Список шоу</small>
        </h1>
    </div>
</div>
<!-- /.row -->
<?php //debug(Yii::$app->user->identity) ?>
<!--<section id="content">-->
<!-- Projects Row -->
<?php $i=0;?>
    <?php //foreach ($showes as $show): $i++;?>
<?php //if(($i==1) || ($i%3==0) || ($i==$countshow)):?>    
<div class="row">
<?php //endif;?>
    <?php foreach ($showes as $show):?>
    <div class="col-md-4 portfolio-item">
        <a href="<?= Url::to(['showes/view','id'=>$show['id']]) ?>">
        <!--    <img class="img-responsive" src="<? = $show['img']?>" alt="<? = $show['name']?>">-->
            <?= Html::img("@web{$show['img']}", ['alt'=>$show['name'], 'class'=>'img-responsive']) ?>
        </a>
        <h3>
            <a href="<?= Url::to(['showes/view','id'=>$show['id']]) ?>"><?= $show['name']?></a>
        </h3>
        <?php foreach ($events as $event): ?>
        <?php if($event['showes']===$show['id']):?>
        <h4>
            <a href="<?= Url::to(['events/view','id'=>$event['id']]) ?>"><?= $event['date']?></a>
        </h4>
            <?php foreach ($platforms as $platform): ?>
            <?php if($platform['id']===$event['platform']):?>
            <h4>
                <a href="<?= Url::to(['platform/view','id'=>$platform['id']]) ?>"><?= $platform['name']?></a>
            </h4>
            <?php endif;?>
            <?php endforeach; ?>
        <?php endif;?>
        <?php endforeach; ?>
        <p><?= $show['descript']?></p>
    </div>
    <?php endforeach; ?>
<?php //if(($i==1) || ($i%3==0) || ($i==$countshow)):?>    
</div>
<?php //endif;?>
    <?php //endforeach; ?>
<?php $i=0;?>
<!-- /.row -->
<!--</section> -->
<hr>
<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <?php echo LinkPager::widget(['pagination' => $pages,]); ?>
            </li>

<!--            <li>
                <a href="#">&laquo;</a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">&raquo;</a>
            </li>-->
        </ul>
    </div>
</div>
<!-- /.row -->

