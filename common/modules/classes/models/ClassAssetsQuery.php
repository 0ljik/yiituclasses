<?php

namespace common\modules\classes\models;

/**
 * This is the ActiveQuery class for [[ClassAssets]].
 *
 * @see ClassAssets
 */
class ClassAssetsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ClassAssets[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ClassAssets|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
