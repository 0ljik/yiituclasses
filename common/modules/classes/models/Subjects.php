<?php

namespace common\modules\classes\models;

use Yii;

/**
 * This is the model class for table "subjects".
 *
 * @property int $su_id
 * @property string $su_name
 *
 * @property MtmClass[] $mtmClasses
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subjects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['su_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'su_id' => Yii::t('classes', 'Su ID'),
            'su_name' => Yii::t('classes', 'Su Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmClasses()
    {
        return $this->hasMany(MtmClass::className(), ['mtm_subject_id' => 'su_id']);
    }

    /**
     * @inheritdoc
     * @return SubjectsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SubjectsQuery(get_called_class());
    }
}
