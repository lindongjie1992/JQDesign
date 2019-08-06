<?php
/**
 * Created by PhpStorm.
 * User: Lindongjie
 * Date: 2019/8/6
 * Time: 10:14
 */

namespace frontend\controllers;


use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}