<?php

namespace common\modules\classes\models;

/**
 * This is the ActiveQuery class for [[MtmAssignment]].
 *
 * @see MtmAssignment
 */
class MtmAssignmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return MtmAssignment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MtmAssignment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
