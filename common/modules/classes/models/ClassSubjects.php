<?php

namespace common\modules\classes\models;

use Yii;

/**
 * This is the model class for table "class_subjects".
 *
 * @property int $casu_id
 * @property string $casu_name
 * @property string $casu_start
 * @property string $casu_end
 * @property string $casu_body
 *
 * @property MtmClass[] $mtmClasses
 */
class ClassSubjects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_subjects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['casu_start', 'casu_end'], 'required'],
            [['casu_start', 'casu_end'], 'safe'],
            [['casu_body'], 'string'],
            [['casu_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'casu_id' => Yii::t('classes', 'Casu ID'),
            'casu_name' => Yii::t('classes', 'Casu Name'),
            'casu_start' => Yii::t('classes', 'Casu Start'),
            'casu_end' => Yii::t('classes', 'Casu End'),
            'casu_body' => Yii::t('classes', 'Casu Body'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmClasses()
    {
        return $this->hasMany(MtmClass::className(), ['mtm_class_subject_id' => 'casu_id']);
    }

    /**
     * @inheritdoc
     * @return ClassSubjectsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClassSubjectsQuery(get_called_class());
    }
}
