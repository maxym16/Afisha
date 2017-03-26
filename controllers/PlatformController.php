<?php

namespace app\controllers;

use app\models\Platform;
use app\models\Showes;
use app\models\Events;
use Yii;

class PlatformController extends AppController
{
    public function actionIndex()
    {
        $showes = Showes::find()->asArray()->all();
        $countplat = Platform::find()->asArray()->count();
        $events= Events::find()->asArray()->all();
//        $platforms= Platform::find()->asArray()->all();
        $platforms = Platform::find()->asArray()->orderBy('sort')->all();
//        debug($platforms);
        return $this->render('index', compact('showes','countplat','events','platforms'));
    }

    public function actionView(){
        $id = Yii::$app->request->get('id');//отримуємо id із запиту GET
        $platform= Platform::findOne(['=','id',$id]);
//        $events= Events::find()->asArray()->all();
        //жадібне завантаження
        $events = Events::find()->asArray()->with('showes')->where(['platform' => $id])->all();
        $showes = Showes::find()->asArray()->all();
        
        if(empty($platform)){
            throw new HttpException(404,'Такой площадки не существует. Platform Not Found.');
        }

        $this->setMeta('АФИША | '.mb_convert_case($platform['name'], 0), $platform['keywords'], $platform['description']);

        return $this->render('view', compact('platform','events','showes'));
    }
    
}
