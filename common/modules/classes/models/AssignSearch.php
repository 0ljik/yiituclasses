<?php

namespace common\modules\classes\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\classes\models\Assign;

/**
 * AssignSearch represents the model behind the search form of `common\modules\classes\models\Assign`.
 */
class AssignSearch extends Assign
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mtm_id', 'user_id'], 'integer'],
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
        $query = Assign::find();

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
            'mtm_id' => $this->mtm_id,
            'user_id' => $this->user_id,
        ]);

        return $dataProvider;
    }
}
