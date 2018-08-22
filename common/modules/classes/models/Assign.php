<?php

namespace common\modules\classes\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "mtm_assignment".
 *
 * @property int $mtm_id
 * @property int $user_id
 *
 * @property User $user
 * @property Mtm $mtm
 */
class Assign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mtm_assignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mtm_id', 'user_id'], 'required'],
            [['mtm_id', 'user_id'], 'integer'],
            [['mtm_id', 'user_id'], 'unique', 'targetAttribute' => ['mtm_id', 'user_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['mtm_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mtm::className(), 'targetAttribute' => ['mtm_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mtm_id' => Yii::t('classes', 'Mtm ID'),
            'user_id' => Yii::t('classes', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtm()
    {
        return $this->hasOne(Mtm::className(), ['id' => 'mtm_id']);
    }

    /**
     * @inheritdoc
     * @return AssignQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AssignQuery(get_called_class());
    }
}
