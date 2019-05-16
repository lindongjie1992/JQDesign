<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "configs".
 *
 * @property string $key
 * @property string $value
 * @property string $name
 * @property string $description
 * @property int $sort
 */
class Configs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'configs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'value', 'name', 'description','sort'], 'required'],
            [['value'], 'string'],
            [['sort'], 'integer'],
            [['key'], 'string', 'max' => 100],
            [['name', 'description'], 'string', 'max' => 255],
            [['key'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'key' => '变量名',
            'value' => '值',
            'name' => '名字',
            'description' => '描述',
            'sort' => '排序',
        ];
    }
}
