<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
//use yii\filters\AccessControl;

/**
 * Description of AppAdminController
 */
class AppAdminController extends Controller {
    
/*    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
*/                
/*                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],//для гостей
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],//тільки для авторизованих користувачів
                    ],
                ],                
*/                
/*                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                
            ],
        ];
    }
*/    
}
