<?php

namespace common\modules\classes\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "mtm_class".
 *
 * @property int $id
 * @property int $group_id
 * @property int $subject_id
 * @property int $class_subject_id
 * @property int $class_assets_id
 *
 * @property Assignment[] $Assignment
 * @property User[] $users
 * @property ClassAssets $classAssets
 * @property ClassSubjects $classSubject
 * @property Groups $group
 * @property Subjects $subject
 */
class Mtm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mtm_class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'subject_id', 'class_subject_id', 'class_assets_id'], 'required'],
            [['group_id', 'subject_id', 'class_subject_id', 'class_assets_id'], 'integer'],
            [['group_id', 'subject_id', 'class_subject_id', 'class_assets_id'], 'unique', 'targetAttribute' => ['group_id', 'subject_id', 'class_subject_id', 'class_assets_id']],
            [['class_assets_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClassAssets::className(), 'targetAttribute' => ['class_assets_id' => 'id']],
            [['class_subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClassSubjects::className(), 'targetAttribute' => ['class_subject_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['subject_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('classes', 'ID'),
            'group_id' => Yii::t('classes', 'Group ID'),
            'subject_id' => Yii::t('classes', 'Subject ID'),
            'class_subject_id' => Yii::t('classes', 'Class Subject ID'),
            'class_assets_id' => Yii::t('classes', 'Class Assets ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignment()
    {
        return $this->hasMany(Assignment::className(), ['mtm_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->viaTable('mtm_assignment', ['mtm_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassAssets()
    {
        return $this->hasOne(ClassAssets::className(), ['id' => 'class_assets_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassSubject()
    {
        return $this->hasOne(ClassSubjects::className(), ['id' => 'class_subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subjects::className(), ['id' => 'subject_id']);
    }

    /**
     * @inheritdoc
     * @return MtmQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MtmQuery(get_called_class());
    }
}
