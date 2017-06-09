<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%lgutype}}".
 *
 * @property string $id
 * @property string $name
 *
 * @property Lguprofile[] $lguprofiles
 */
class Lgutype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lgutype}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 12],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLguprofiles()
    {
        return $this->hasMany(Lguprofile::className(), ['cap_lgutype_id' => 'id']);
    }
}
