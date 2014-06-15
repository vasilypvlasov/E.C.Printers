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
 * @property integer $page_id
 * @property integer $visible
 */
class Comment extends \yii\db\ActiveRecord
{
    public function getUserName()
    {
        return 'Анонім'; //TODO get real user name if it set
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['created'], 'safe'],
            [['visible', 'page_id'], 'integer'],
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
            'page_id' => 'Сторінка'
        ];
    }

    
}
