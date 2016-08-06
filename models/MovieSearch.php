<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movie;

/**
 * MovieSearch represents the model behind the search form about `app\models\Movie`.
 */
class MovieSearch extends Movie
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movieID', 'directorsID'], 'integer'],
            [['movieName', 'movieTitle', 'movieLenght', 'plot', 'rating', 'realiseDate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Movie::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'movieID' => $this->movieID,
            'realiseDate' => $this->realiseDate,
            'directorsID' => $this->directorsID,
        ]);

        $query->andFilterWhere(['like', 'movieName', $this->movieName])
            ->andFilterWhere(['like', 'movieTitle', $this->movieTitle])
            ->andFilterWhere(['like', 'movieLenght', $this->movieLenght])
            ->andFilterWhere(['like', 'plot', $this->plot])
            ->andFilterWhere(['like', 'rating', $this->rating]);

        return $dataProvider;
    }
}
