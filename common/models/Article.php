<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "article".
 *
 * @property int $id 自增id
 * @property int $cid 分类id
 * @property string pic 封面图片
 * @property string $title 标题
 * @property string $author 作者
 * @property string $description 描述
 * @property string $content 内容
 * @property int $sort 排序
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 */
class Article extends \yii\db\ActiveRecord
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
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cid', 'title', 'content'], 'required','message' => '{attribute}不能为空'],
            [['cid', 'sort'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 50],
            [['description','author'], 'string', 'max' => 100],
            [['pic','cover'],'string','max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => '所属栏目',
            'title' => '标题',
            'description' => '描述',
            'pic' => '封面图片',
            'content' => '内容',
            'sort' => '排序',
            'author' => '作者',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
