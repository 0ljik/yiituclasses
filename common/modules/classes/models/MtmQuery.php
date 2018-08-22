<?php

namespace common\modules\classes\models;

/**
 * This is the ActiveQuery class for [[Mtm]].
 *
 * @see Mtm
 */
class MtmQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Mtm[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Mtm|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
