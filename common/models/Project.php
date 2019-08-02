<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "project".
 *
 * @property int $id 自增id
 * @property string $title 标题
 * @property int $content 内容
 * @property int $sort 排序
 * @property int $cid 排序
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 */
class Project extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['sort', 'cid'], 'integer'],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'sort' => '排序',
            'cid' => '所属栏目',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}