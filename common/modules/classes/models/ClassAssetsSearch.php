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
            [['cas_id', 'author_id'], 'integer'],
            [['cas_title', 'cas_body', 'cas_start_time', 'cas_end_time'], 'safe'],
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
            'cas_id' => $this->cas_id,
            'cas_start_time' => $this->cas_start_time,
            'cas_end_time' => $this->cas_end_time,
            'author_id' => $this->author_id,
        ]);

        $query->andFilterWhere(['like', 'cas_title', $this->cas_title])
            ->andFilterWhere(['like', 'cas_body', $this->cas_body]);

        return $dataProvider;
    }
}
