<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "article_category".
 *
 * @property int $id 自增id
 * @property string $name 分类名称
 * @property int $pid 父id
 * @property int $sort 排序id
 */
class ArticleCategory extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['pid','sort'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pid' => 'Pid',
        ];
    }

    /**
     * 获取所有的分类
     */
    public function getCategories()
    {
        $data = self::find()->orderBy(['sort'=>SORT_ASC])->all();
        $data = ArrayHelper::toArray($data);
        return $data;
    }


    /**
     *遍历出各个子类 获得树状结构的数组
     */
    public static function getTree($data,$pid = 0,$lev = 1)
    {
        $tree = [];
        foreach($data as $value){
            if($value['pid'] == $pid){
                $value['name'] = str_repeat('|___',$lev).$value['name'];
                $tree[] = $value;
                $tree = array_merge($tree,self::getTree($data,$value['id'],$lev+1));
            }
        }
        return $tree;
    }

    /**
     * 得到相应  id  对应的  分类名  数组
     */
    public function getOptions()
    {
        $data = $this->getCategories();
        $tree = $this->getTree($data);
        foreach($tree as $value){
            $list[$value['id']] = $value['name'];
        }
        return $list;
    }

    public function getList()
    {
        $data = $this->getCategories();
        $tree = $this->getTree($data);
        $list = [];
        foreach($tree as $value){
            $list[$value['id']] = ['name' => $value['name'],'sort' => $value['sort']];
        }
        return $list;
    }
}
