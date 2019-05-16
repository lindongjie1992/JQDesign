<?php
/**
 * Created by PhpStorm.
 * User: Lindongjie
 * Date: 2019/5/15
 * Time: 15:53
 */

namespace backend\controllers;

use common\models\Upload;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class FileController extends Controller
{
    public function actionUpload(){
        try {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model = new Upload();
            $info = $model->upImage();
            if ($info && is_array($info)) {
                return $info;
            } else {
                return ['code' => 1, 'msg' => 'error'];
            }
        } catch (\Exception $e) {
            return ['code' => 1, 'msg' => $e->getMessage()];
        }
    }
}