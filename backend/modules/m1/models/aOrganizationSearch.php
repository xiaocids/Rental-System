<?php

namespace app\modules\m1\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\m1\models\aOrganization;

/**
 * aOrganizationSearch represents the model behind the search form about `app\modules\m1\models\aOrganization`.
 */
class aOrganizationSearch extends aOrganization
{
    public function rules()
    {
        return [
            [['id', 'parent_id', 'kabupaten_id', 'propinsi_id', 'status_id', 'created_by', 'updated_by'], 'integer'],
            [['branch_code', 'branch_code_number', 'name', 'address', 'pos_code', 'phone_code_area', 'telephone', 'fax', 'email', 'website', 'photo_path', 'custom1', 'custom2', 'custom3', 'custom4', 'custom5', 'created_date', 'updated_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = aOrganization::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'kabupaten_id' => $this->kabupaten_id,
            'propinsi_id' => $this->propinsi_id,
            'status_id' => $this->status_id,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'updated_date' => $this->updated_date,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'branch_code_number', $this->branch_code_number])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'pos_code', $this->pos_code])
            ->andFilterWhere(['like', 'phone_code_area', $this->phone_code_area])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'photo_path', $this->photo_path])
            ->andFilterWhere(['like', 'custom1', $this->custom1])
            ->andFilterWhere(['like', 'custom2', $this->custom2])
            ->andFilterWhere(['like', 'custom3', $this->custom3])
            ->andFilterWhere(['like', 'custom4', $this->custom4])
            ->andFilterWhere(['like', 'custom5', $this->custom5]);

        return $dataProvider;
    }
}
