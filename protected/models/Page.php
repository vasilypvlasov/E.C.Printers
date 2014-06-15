<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $links
 * @property string $created
 * @property string $updated
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'links'], 'string'],
            [['created', 'updated'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    public function getComments()
    {
        return self::hasMany('app\models\Comment', ['page_id'=>'id'])->where('visible = TRUE');
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Контент',
            'links' => 'Цікаві посилання',
            'created' => 'Створено',
            'updated' => 'Оновлено',
        ];
    }
}
