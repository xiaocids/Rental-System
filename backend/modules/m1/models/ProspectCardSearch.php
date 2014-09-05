<?php

namespace app\modules\m1\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\m1\models\ProspectCard;

/**
 * ProspectCardSearch represents the model behind the search form about `app\modules\m1\models\ProspectCard`.
 */
class ProspectCardSearch extends ProspectCard
{
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by'], 'integer'],
            [['prospect_card_number', 'marketing_officer_name', 'company_name', 'company_title', 'company_address', 'business_type', 'phone_code_area', 'telephone', 'fax', 'email', 'other_information', 'customer_type', 'cp_name1', 'cp_title1', 'cp_name2', 'cp_title2', 'cp_name3', 'cp_title3', 'created_date', 'updated_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = ProspectCard::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'updated_date' => $this->updated_date,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'prospect_card_number', $this->prospect_card_number])
            ->andFilterWhere(['like', 'marketing_officer_name', $this->marketing_officer_name])
            ->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'company_title', $this->company_title])
            ->andFilterWhere(['like', 'company_address', $this->company_address])
            ->andFilterWhere(['like', 'business_type', $this->business_type])
            ->andFilterWhere(['like', 'phone_code_area', $this->phone_code_area])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'other_information', $this->other_information])
            ->andFilterWhere(['like', 'customer_type', $this->customer_type])
            ->andFilterWhere(['like', 'cp_name1', $this->cp_name1])
            ->andFilterWhere(['like', 'cp_title1', $this->cp_title1])
            ->andFilterWhere(['like', 'cp_name2', $this->cp_name2])
            ->andFilterWhere(['like', 'cp_title2', $this->cp_title2])
            ->andFilterWhere(['like', 'cp_name3', $this->cp_name3])
            ->andFilterWhere(['like', 'cp_title3', $this->cp_title3]);

        return $dataProvider;
    }
}
