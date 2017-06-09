<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%lguprofile}}".
 *
 * @property string $cap_barangay_id
 * @property string $cap_region_id
 * @property string $cap_province_id
 * @property string $cap_municipal_id
 * @property string $cap_lgutype_id
 * @property string $cap_lguclass_id
 * @property string $cap_designation_id
 * @property string $landarea
 * @property string $landunit
 * @property string $district
 * @property string $fname
 * @property string $mname
 * @property string $lname
 *
 * @property Designation $capDesignation
 * @property Lguclass $capLguclass
 * @property Lgutype $capLgutype
 * @property Municipal $capMunicipal
 * @property Province $capProvince
 * @property Region $capRegion
 */
class Lguprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lguprofile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_barangay_id', 'cap_region_id', 'cap_province_id', 'cap_municipal_id', 'cap_lgutype_id', 'cap_lguclass_id', 'cap_designation_id', 'landarea', 'landunit', 'district', 'fname', 'mname', 'lname'], 'required'],
            [['cap_barangay_id', 'cap_region_id', 'cap_province_id', 'cap_municipal_id', 'cap_lgutype_id', 'cap_lguclass_id', 'cap_designation_id', 'landarea'], 'integer'],
            [['landunit'], 'string', 'max' => 17],
            [['district'], 'string', 'max' => 12],
            [['fname', 'mname', 'lname'], 'string', 'max' => 40],
            [['cap_designation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Designation::className(), 'targetAttribute' => ['cap_designation_id' => 'id']],
            [['cap_lguclass_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lguclass::className(), 'targetAttribute' => ['cap_lguclass_id' => 'id']],
            [['cap_lgutype_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgutype::className(), 'targetAttribute' => ['cap_lgutype_id' => 'id']],
            [['cap_municipal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Municipal::className(), 'targetAttribute' => ['cap_municipal_id' => 'id']],
            [['cap_province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['cap_province_id' => 'id']],
            [['cap_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['cap_region_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cap_barangay_id' => 'Barangay',
            'cap_region_id' => 'Region',
            'cap_province_id' => 'Province',
            'cap_municipal_id' => 'Municipal',
            'cap_lgutype_id' => 'Lgutype',
            'cap_lguclass_id' => 'Lguclass',
            'cap_designation_id' => 'Designation',
            'landarea' => 'Landarea',
            'landunit' => 'Landunit',
            'district' => 'District',
            'fname' => 'Fname',
            'mname' => 'Mname',
            'lname' => 'Lname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapDesignation()
    {
        return $this->hasOne(Designation::className(), ['id' => 'cap_designation_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapLguclass()
    {
        return $this->hasOne(Lguclass::className(), ['id' => 'cap_lguclass_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapLgutype()
    {
        return $this->hasOne(Lgutype::className(), ['id' => 'cap_lgutype_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapMunicipal()
    {
        return $this->hasOne(Municipal::className(), ['id' => 'cap_municipal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'cap_province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'cap_region_id']);
    }
}
