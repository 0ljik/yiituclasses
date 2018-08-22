<?php

namespace common\modules\classes\models;

/**
 * This is the ActiveQuery class for [[Assign]].
 *
 * @see Assign
 */
class AssignQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Assign[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Assign|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
