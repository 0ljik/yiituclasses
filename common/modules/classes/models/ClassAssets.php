<?php

namespace common\modules\classes\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "class_assets".
 *
 * @property int $cas_id
 * @property string $cas_title
 * @property string $cas_body
 * @property string $cas_start_time this!
 * @property string $cas_end_time
 * @property int $author_id autoadd
 *
 * @property User $author
 * @property MtmClass[] $mtmClasses
 */
class ClassAssets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_assets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cas_body'], 'string'],
            [['cas_start_time', 'cas_end_time'], 'safe'],
            [['author_id'], 'integer'],
            [['cas_title'], 'string', 'max' => 50],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cas_id' => Yii::t('classes', 'Cas ID'),
            'cas_title' => Yii::t('classes', 'Cas Title'),
            'cas_body' => Yii::t('classes', 'Cas Body'),
            'cas_start_time' => Yii::t('classes', 'Cas Start Time'),
            'cas_end_time' => Yii::t('classes', 'Cas End Time'),
            'author_id' => Yii::t('classes', 'Author ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMtmClasses()
    {
        return $this->hasMany(MtmClass::className(), ['mtm_class_assets_id' => 'cas_id']);
    }

    /**
     * @inheritdoc
     * @return ClassAssetsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClassAssetsQuery(get_called_class());
    }
}
