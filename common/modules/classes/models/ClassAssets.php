<?php

namespace common\modules\classes\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "class_assets".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $start this!
 * @property string $end
 * @property int $author_id autoadd
 *
 * @property User $author
 * @property Mtm[] $Mtm
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
            [['body'], 'string'],
            [['start', 'end'], 'safe'],
            [['author_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('classes', 'ID'),
            'title' => Yii::t('classes', 'Title'),
            'body' => Yii::t('classes', 'Body'),
            'start' => Yii::t('classes', 'Start'),
            'end' => Yii::t('classes', 'End'),
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
    public function getMtm()
    {
        return $this->hasMany(Mtm::className(), ['class_assets_id' => 'id']);
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
