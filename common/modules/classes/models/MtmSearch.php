<?php

namespace common\modules\classes\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\classes\models\Mtm;

/**
 * MtmSearch represents the model behind the search form of `common\modules\classes\models\Mtm`.
 */
class MtmSearch extends Mtm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mtm_id', 'mtm_group_id', 'mtm_subject_id', 'mtm_class_subject_id', 'mtm_class_assets_id'], 'integer'],
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
        $query = Mtm::find();

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
            'mtm_group_id' => $this->mtm_group_id,
            'mtm_subject_id' => $this->mtm_subject_id,
            'mtm_class_subject_id' => $this->mtm_class_subject_id,
            'mtm_class_assets_id' => $this->mtm_class_assets_id,
        ]);

        return $dataProvider;
    }
}
