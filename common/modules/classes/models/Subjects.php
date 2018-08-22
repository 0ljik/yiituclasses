<?php

namespace common\modules\classes\models;

use Yii;

/**
 * This is the model class for table "subjects".
 *
 * @property int $id
 * @property string $name
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
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('classes', 'ID'),
            'name' => Yii::t('classes', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmClasses()
    {
        return $this->hasMany(MtmClass::className(), ['subject_id' => 'id']);
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
