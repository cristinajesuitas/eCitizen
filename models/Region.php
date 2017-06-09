<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%region}}".
 *
 * @property string $id
 * @property string $name
 * @property string $code
 *
 * @property Barangay[] $barangays
 * @property Lguprofile[] $lguprofiles
 * @property Municipal[] $municipals
 * @property Province[] $provinces
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%region}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 40],
			['name','match','pattern'=>'/^[a-zA-Z ]+$/'],
			['name','match','pattern'=>'/^[a-zA-Z ]+$/'],
            [['code'], 'string', 'max' => 9],
			['code','match','pattern'=>'/^(?:[0-1])(?:[0-9])[0]+$/'],
            [['name','code'], 'unique','attributes'=>['name','code']],
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
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangays()
    {
        return $this->hasMany(Barangay::className(), ['cap_region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLguprofiles()
    {
        return $this->hasMany(Lguprofile::className(), ['cap_region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipals()
    {
        return $this->hasMany(Municipal::className(), ['cap_region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinces()
    {
        return $this->hasMany(Province::className(), ['cap_region_id' => 'id']);
    }
}
