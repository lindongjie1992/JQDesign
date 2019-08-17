<?php
/**
 * Created by PhpStorm.
 * User: Lindongjie
 * Date: 2019/8/6
 * Time: 10:14
 */

namespace frontend\controllers;

use common\models\Configs;
use common\models\Message;
use common\models\Project;
use common\models\ProjectCategory;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class IndexController extends Controller
{
    public function actionIndex(){
        $project_category = ProjectCategory::find()->all();
        $about = Configs::find()->where(['key' => 'about'])->one();
        return $this->render('index',[
            'project_category' => $project_category,
            'about' => $about
        ]);
    }

    public function actionPostMessage(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $name = Yii::$app->request->post('name');
        $email = Yii::$app->request->post('email');
        $mobile = Yii::$app->request->post('mobile');
        $content = Yii::$app->request->post('content');

        if(!$name || !$email || !$mobile || !$content){
            return [
                'status' => 0,
                'msg' => '请填写完整信息'
            ];
        }
        $model = new Message();
        $model->name = $name;
        $model->email = $email;
        $model->mobile = $mobile;
        $model->content = $content;
        $model->ip = $_SERVER["REMOTE_ADDR"];
        if($model->save()){
            return [
                'status' => 1,
                'msg' => '提交成功',
            ];
        } else {
            return [
                'status' => 0,
                'msg' => '提交失败',
            ];
        }
    }


    public function actionGetCase(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $cid = Yii::$app->request->get('cid',false);
        $limit = Yii::$app->request->get('limit',4);
        $query = Project::find()->orderBy(['sort' => SORT_ASC,'created_at' => SORT_DESC])->limit($limit);
        if($cid){
            $query->andWhere(['=','cid',$cid]);
        };
        $list = $query->all();
        return [
            'status' => '1',
            'msg' => '成功',
            'data' => $list
        ];
    }

    public function actionCaseDetail(){
        $id = Yii::$app->request->get('id');
        $model = Project::find()->joinWith(['category'])->where([Project::tableName() . '.id'=>$id])->one();
        return $this->render('case-detail',[
            'model' => $model
        ]);
    }

    public function actionCaseList(){
        $cid = Yii::$app->request->get('cid');
        $project_category = ProjectCategory::find()->all();

        $query = Project::find()->orderBy(['sort' => SORT_ASC,'created_at' => SORT_DESC]);
        if($cid){
            $query->andWhere(['=','cid',$cid]);
        };
        $list = $query->all();
        return $this->render('case-list',[
            'project_category' => $project_category,
            'list' => $list
        ]);
    }
}