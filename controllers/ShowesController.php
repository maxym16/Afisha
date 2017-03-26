<?php

namespace app\controllers;

use app\models\Showes;
use app\models\Platform;
use app\models\Events;
use yii\data\Pagination;
//use Yii;

class ShowesController extends AppController
{
    public function actionIndex()
    {
//        $showes = Showes::find()->asArray()->all();
        $query = Showes::find();
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize'   => 9,//скільки на сторінку
            'forcePageParam' => false,
            'pageSizeParam'  => false,
        ]);
        $showes = $query->offset($pages->offset)->limit($pages->limit)->asArray()->all();
        
        $countshow = Showes::find()->asArray()->count();
        $events= Events::find()->asArray()->all();
        $platforms= Platform::find()->asArray()->all();
        $this->setMeta('АФИША');
//        debug($countshow);
//        debug($showes);
        return $this->render('index', compact('showes','pages','countshow','events','platforms'));
    }

}
