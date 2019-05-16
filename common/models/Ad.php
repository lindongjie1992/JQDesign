<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ad".
 *
 * @property int $id
 * @property int $cid
 * @property string $title 标题
 * @property string $link 链接
 * @property string $pic
 * @property int $created_at
 * @property int $updated_at
 */
class Ad extends \yii\db\ActiveRecord
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
        return 'ad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cid', 'pic'], 'required'],
            [['cid', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['link', 'pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => '所属分类',
            'title' => '标题',
            'link' => '链接',
            'pic' => '图片',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
