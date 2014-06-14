<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $user_id
 * @property string $content
 * @property string $created
 * @property integer $visible
 */
class comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['created'], 'safe'],
            [['visible'], 'integer'],
            [['user_id'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'user_id' => 'ID користувача',
            'content' => 'Текст',
            'created' => 'Створено',
            'visible' => 'Видимість',
        ];
    }
}
