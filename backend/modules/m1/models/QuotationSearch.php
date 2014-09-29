<?php

namespace app\modules\m1\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\m1\models\Quotation;

/**
 * QuotationSearch represents the model behind the search form about `app\modules\m1\models\Quotation`.
 */
class QuotationSearch extends Quotation
{
    public function rules()
    {
        return [
            [['id', 'approved_by', 'created_by', 'prospect_card_id'], 'integer'],
            [['qutation_no', 'type', 'quotation_date', 'valid_date', 'destination_company', 'company_address', 'letter', 'status', 'approved_date', 'created_date', 'attn', 're'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Quotation::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'quotation_date' => $this->quotation_date,
            'valid_date' => $this->valid_date,
            'approved_by' => $this->approved_by,
            'approved_date' => $this->approved_date,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'prospect_card_id' => $this->prospect_card_id,
        ]);

        $query->andFilterWhere(['like', 'qutation_no', $this->qutation_no])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'destination_company', $this->destination_company])
            ->andFilterWhere(['like', 'company_address', $this->company_address])
            ->andFilterWhere(['like', 'letter', $this->letter])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'attn', $this->attn])
            ->andFilterWhere(['like', 're', $this->re]);

        return $dataProvider;
    }
}
