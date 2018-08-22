<?php

namespace common\modules\classes\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\classes\models\ClassAssets;

/**
 * ClassAssetsSearch represents the model behind the search form of `common\modules\classes\models\ClassAssets`.
 */
class ClassAssetsSearch extends ClassAssets
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'author_id'], 'integer'],
            [['title', 'body', 'start', 'end'], 'safe'],
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
        $query = ClassAssets::find();

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
            'id' => $this->id,
            'start' => $this->start,
            'end' => $this->end,
            'author_id' => $this->author_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'body', $this->body]);

        return $dataProvider;
    }
}
