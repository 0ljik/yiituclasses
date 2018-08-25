<?php

namespace common\modules\classes\models;

use Yii;

/**
 * This is the model class for table "mtm_class".
 *
 * @property int $mtm_id
 * @property int $mtm_group_id
 * @property int $mtm_subject_id
 * @property int $mtm_class_subject_id
 * @property int $mtm_class_assets_id
 *
 * @property MtmAssignment[] $mtmAssignments
 * @property User[] $mtaUsers
 * @property ClassAssets $mtmClassAssets
 * @property ClassSubjects $mtmClassSubject
 * @property Groups $mtmGroup
 * @property Subjects $mtmSubject
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
            [['mtm_group_id', 'mtm_subject_id', 'mtm_class_subject_id', 'mtm_class_assets_id'], 'required'],
            [['mtm_group_id', 'mtm_subject_id', 'mtm_class_subject_id', 'mtm_class_assets_id'], 'integer'],
            [['mtm_group_id', 'mtm_subject_id', 'mtm_class_subject_id', 'mtm_class_assets_id'], 'unique', 'targetAttribute' => ['mtm_group_id', 'mtm_subject_id', 'mtm_class_subject_id', 'mtm_class_assets_id']],
            [['mtm_class_assets_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClassAssets::className(), 'targetAttribute' => ['mtm_class_assets_id' => 'cas_id']],
            [['mtm_class_subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClassSubjects::className(), 'targetAttribute' => ['mtm_class_subject_id' => 'casu_id']],
            [['mtm_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['mtm_group_id' => 'group_id']],
            [['mtm_subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subjects::className(), 'targetAttribute' => ['mtm_subject_id' => 'su_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mtm_id' => Yii::t('classes', 'Mtm ID'),
            'mtm_group_id' => Yii::t('classes', 'Mtm Group ID'),
            'mtm_subject_id' => Yii::t('classes', 'Mtm Subject ID'),
            'mtm_class_subject_id' => Yii::t('classes', 'Mtm Class Subject ID'),
            'mtm_class_assets_id' => Yii::t('classes', 'Mtm Class Assets ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmAssignments()
    {
        return $this->hasMany(MtmAssignment::className(), ['mta_mtmc_id' => 'mtm_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtaUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'mta_user_id'])->viaTable('mtm_assignment', ['mta_mtmc_id' => 'mtm_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmClassAssets()
    {
        return $this->hasOne(ClassAssets::className(), ['cas_id' => 'mtm_class_assets_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmClassSubject()
    {
        return $this->hasOne(ClassSubjects::className(), ['casu_id' => 'mtm_class_subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmGroup()
    {
        return $this->hasOne(Groups::className(), ['group_id' => 'mtm_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmSubject()
    {
        return $this->hasOne(Subjects::className(), ['su_id' => 'mtm_subject_id']);
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
