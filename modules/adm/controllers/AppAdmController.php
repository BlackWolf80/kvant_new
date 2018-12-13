<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 27.08.18
 * Time: 10:22
 */

namespace app\modules\adm\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;



class AppAdmController extends Controller{


    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

}