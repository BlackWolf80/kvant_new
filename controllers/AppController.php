<?php
namespace app\controllers;
use app\models\Publication;
use yii\web\Controller;

class AppController extends Controller
{



    public function debug($arr)
    {
        echo '<pre>'. print_r($arr, true).'</pre>';
    }


    protected function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }


    public function showPublication($section){
        return $publications = Publication::find()->where(['section'=>$section])->orderBy(['id' => SORT_DESC])->all();
    }

}

function debug($arr){echo '<pre>'. print_r($arr, true).'</pre>';}