<?php

namespace common\modules\classes\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property int $group_id
 * @property string $group_name
 *
 * @property MtmClass[] $mtmClasses
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'group_id' => Yii::t('classes', 'Group ID'),
            'group_name' => Yii::t('classes', 'Group Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmClasses()
    {
        return $this->hasMany(MtmClass::className(), ['mtm_group_id' => 'group_id']);
    }

    /**
     * @inheritdoc
     * @return GroupsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GroupsQuery(get_called_class());
    }
}
