<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Lguprofile;

/**
 * LguprofileSearch represents the model behind the search form about `backend\models\Lguprofile`.
 */
class LguprofileSearch extends Lguprofile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_barangay_id', 'cap_region_id', 'cap_province_id', 'cap_municipal_id', 'cap_lgutype_id', 'cap_lguclass_id', 'cap_designation_id', 'landarea'], 'integer'],
            [['landunit', 'district', 'fname', 'mname', 'lname'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Lguprofile::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cap_barangay_id' => $this->cap_barangay_id,
            'cap_region_id' => $this->cap_region_id,
            'cap_province_id' => $this->cap_province_id,
            'cap_municipal_id' => $this->cap_municipal_id,
            'cap_lgutype_id' => $this->cap_lgutype_id,
            'cap_lguclass_id' => $this->cap_lguclass_id,
            'cap_designation_id' => $this->cap_designation_id,
            'landarea' => $this->landarea,
        ]);

        $query->andFilterWhere(['like', 'landunit', $this->landunit])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'lname', $this->lname]);

        return $dataProvider;
    }
}
