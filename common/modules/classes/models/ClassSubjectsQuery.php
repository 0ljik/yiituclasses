<?php

namespace common\modules\classes\models;

/**
 * This is the ActiveQuery class for [[ClassSubjects]].
 *
 * @see ClassSubjects
 */
class ClassSubjectsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ClassSubjects[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ClassSubjects|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
