<?php

namespace common\modules\classes\models;

use Yii;

/**
 * This is the model class for table "class_subjects".
 *
 * @property int $id
 * @property string $name
 * @property string $start
 * @property string $end
 * @property string $body
 *
 * @property Mtm[] $mtm
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
            [['start', 'end'], 'required'],
            [['start', 'end'], 'safe'],
            [['body'], 'string'],
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
            'start' => Yii::t('classes', 'Start'),
            'end' => Yii::t('classes', 'End'),
            'body' => Yii::t('classes', 'Body'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtm()
    {
        return $this->hasMany(Mtm::className(), ['class_subject_id' => 'id']);
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
