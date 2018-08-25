<?php

namespace common\modules\classes\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\classes\models\MtmAssignment;

/**
 * MtmAssignmentSearch represents the model behind the search form of `common\modules\classes\models\MtmAssignment`.
 */
class MtmAssignmentSearch extends MtmAssignment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mta_mtmc_id', 'mta_user_id'], 'integer'],
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
        $query = MtmAssignment::find();

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
            'mta_mtmc_id' => $this->mta_mtmc_id,
            'mta_user_id' => $this->mta_user_id,
        ]);

        return $dataProvider;
    }
}
