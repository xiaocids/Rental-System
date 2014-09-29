<?php

namespace frontend\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\admin\models\JobVacation;

/**
 * JobVacationSearch represents the model behind the search form about `frontend\modules\admin\models\JobVacation`.
 */
class JobVacationSearch extends JobVacation
{
    public function rules()
    {
        return [
            [['id', 'req_age', 'created_by', 'updated_by'], 'integer'],
            [['job_name', 'job_description', 'job_responsibility', 'req_gender', 'req_marital_status', 'req_last_education', 'req_majoring', 'req_min_experiance', 'contact', 'send_to', 'valid_until', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = JobVacation::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'req_age' => $this->req_age,
            'valid_until' => $this->valid_until,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'job_name', $this->job_name])
            ->andFilterWhere(['like', 'job_description', $this->job_description])
            ->andFilterWhere(['like', 'job_responsibility', $this->job_responsibility])
            ->andFilterWhere(['like', 'req_gender', $this->req_gender])
            ->andFilterWhere(['like', 'req_marital_status', $this->req_marital_status])
            ->andFilterWhere(['like', 'req_last_education', $this->req_last_education])
            ->andFilterWhere(['like', 'req_majoring', $this->req_majoring])
            ->andFilterWhere(['like', 'req_min_experiance', $this->req_min_experiance])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'send_to', $this->send_to]);

        return $dataProvider;
    }
}
