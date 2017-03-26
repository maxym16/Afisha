<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'События';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-index">
<?php  
//debug($show);
//debug($dataProvider);
?>
    
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать Событие', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            [
              'attribute' => '№ Шоу',
              'value' => 'showes',  
            ],
            [
              'attribute' => 'showes',
              'value'=> 
//                $dataProvider->query->join[0][2],
                function($data) use ($show) {
                return $show[$data->showes-1]['name'];
              },
              'format'=>'html',
            ],
                      
//            'showes',
            [
              'attribute' => '№ Площадки',
              'value' => 'platform',  
            ],
            [
              'attribute' => 'platform',
              'value'=> 
                function($data) use ($plat) {
                return $plat[$data->platform-1]['name'];
              },
              'format'=>'html',
            ],
//            'platform',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
