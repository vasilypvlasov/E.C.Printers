<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comments;

/**
 * CommentsSearch represents the model behind the search form about `app\models\Comments`.
 */
class CommentSearch extends Comment
{
    public function rules()
    {
        return [
            [['id', 'visible'], 'integer'],
            [['user_id', 'content', 'created'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Comment::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created' => $this->created,
            'visible' => $this->visible,
        ]);

        $query->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
