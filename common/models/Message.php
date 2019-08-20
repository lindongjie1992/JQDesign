<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string $name 姓名
 * @property string $email 邮箱
 * @property string $mobile 电话
 * @property string $content 内容
 * @property string $ip 发布ip
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['name', 'mobile'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 255],
            [['ip'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'mobile' => Yii::t('app', 'Mobile'),
            'content' => Yii::t('app', 'Content'),
            'ip' => Yii::t('app', 'Ip'),
        ];
    }
}
