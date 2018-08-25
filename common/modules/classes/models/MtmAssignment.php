<?php

namespace common\modules\classes\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "mtm_assignment".
 *
 * @property int $mta_mtmc_id
 * @property int $mta_user_id
 *
 * @property User $mtaUser
 * @property Mtm $mtaMtmc
 */
class MtmAssignment extends \yii\db\ActiveRecord
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
            [['mta_mtmc_id', 'mta_user_id'], 'required'],
            [['mta_mtmc_id', 'mta_user_id'], 'integer'],
            [['mta_mtmc_id', 'mta_user_id'], 'unique', 'targetAttribute' => ['mta_mtmc_id', 'mta_user_id']],
            [['mta_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['mta_user_id' => 'id']],
            [['mta_mtmc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mtm::className(), 'targetAttribute' => ['mta_mtmc_id' => 'mtm_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mta_mtmc_id' => Yii::t('classes', 'Mta Mtmc ID'),
            'mta_user_id' => Yii::t('classes', 'Mta User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtaUser()
    {
        return $this->hasOne(User::className(), ['id' => 'mta_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtaMtmc()
    {
        return $this->hasOne(Mtm::className(), ['mtm_id' => 'mta_mtmc_id']);
    }

    /**
     * @inheritdoc
     * @return MtmAssignmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MtmAssignmentQuery(get_called_class());
    }
}
