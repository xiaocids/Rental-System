<?php

namespace frontend\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\admin\models\Applicant;

/**
 * ApplicantSearch represents the model behind the search form about `frontend\modules\admin\models\Applicant`.
 */
class ApplicantSearch extends Applicant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'job_id', 'age', 'term_condition'], 'integer'],
            [['applicant_id', 'full_name', 'gender', 'born_date', 'marital_status', 'photo', 'phone', 'mobile', 'home_address', 'email', 'education_level1', 'university_name1', 'majoring1', 'join_graduate_year1', 'gpa1', 'education_level2', 'university_name2', 'majoring2', 'join_graduate_year2', 'gpa2', 'education_level3', 'university_name3', 'majoring3', 'join_graduate_year3', 'gpa3', 'organization_name1', 'org_position1', 'join_out_year1', 'responsibility1', 'organization_name2', 'org_position2', 'join_out_year2', 'responsibility2', 'organization_name3', 'org_position3', 'join_out_year3', 'responsibility3', 'award1', 'year1', 'description1', 'award2', 'year2', 'description2', 'award3', 'year3', 'description3', 'work_experience1', 'work_periode1', 'work_position1', 'work_description1', 'work_experience2', 'work_periode2', 'work_position2', 'work_description2', 'work_experience3', 'work_periode3', 'work_position3', 'work_description3', 'language1', 'listening1', 'writing1', 'speaking1', 'language2', 'listening2', 'writing2', 'speaking2', 'language3', 'listening3', 'writing3', 'speaking3', 'other_skill', 'created_at', 'updated_at'], 'safe'],
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
        $query = Applicant::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'job_id' => $this->job_id,
            'age' => $this->age,
            'born_date' => $this->born_date,
            'term_condition' => $this->term_condition,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'applicant_id', $this->applicant_id])
            ->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'home_address', $this->home_address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'education_level1', $this->education_level1])
            ->andFilterWhere(['like', 'university_name1', $this->university_name1])
            ->andFilterWhere(['like', 'majoring1', $this->majoring1])
            ->andFilterWhere(['like', 'join_graduate_year1', $this->join_graduate_year1])
            ->andFilterWhere(['like', 'gpa1', $this->gpa1])
            ->andFilterWhere(['like', 'education_level2', $this->education_level2])
            ->andFilterWhere(['like', 'university_name2', $this->university_name2])
            ->andFilterWhere(['like', 'majoring2', $this->majoring2])
            ->andFilterWhere(['like', 'join_graduate_year2', $this->join_graduate_year2])
            ->andFilterWhere(['like', 'gpa2', $this->gpa2])
            ->andFilterWhere(['like', 'education_level3', $this->education_level3])
            ->andFilterWhere(['like', 'university_name3', $this->university_name3])
            ->andFilterWhere(['like', 'majoring3', $this->majoring3])
            ->andFilterWhere(['like', 'join_graduate_year3', $this->join_graduate_year3])
            ->andFilterWhere(['like', 'gpa3', $this->gpa3])
            ->andFilterWhere(['like', 'organization_name1', $this->organization_name1])
            ->andFilterWhere(['like', 'org_position1', $this->org_position1])
            ->andFilterWhere(['like', 'join_out_year1', $this->join_out_year1])
            ->andFilterWhere(['like', 'responsibility1', $this->responsibility1])
            ->andFilterWhere(['like', 'organization_name2', $this->organization_name2])
            ->andFilterWhere(['like', 'org_position2', $this->org_position2])
            ->andFilterWhere(['like', 'join_out_year2', $this->join_out_year2])
            ->andFilterWhere(['like', 'responsibility2', $this->responsibility2])
            ->andFilterWhere(['like', 'organization_name3', $this->organization_name3])
            ->andFilterWhere(['like', 'org_position3', $this->org_position3])
            ->andFilterWhere(['like', 'join_out_year3', $this->join_out_year3])
            ->andFilterWhere(['like', 'responsibility3', $this->responsibility3])
            ->andFilterWhere(['like', 'award1', $this->award1])
            ->andFilterWhere(['like', 'year1', $this->year1])
            ->andFilterWhere(['like', 'description1', $this->description1])
            ->andFilterWhere(['like', 'award2', $this->award2])
            ->andFilterWhere(['like', 'year2', $this->year2])
            ->andFilterWhere(['like', 'description2', $this->description2])
            ->andFilterWhere(['like', 'award3', $this->award3])
            ->andFilterWhere(['like', 'year3', $this->year3])
            ->andFilterWhere(['like', 'description3', $this->description3])
            ->andFilterWhere(['like', 'work_experience1', $this->work_experience1])
            ->andFilterWhere(['like', 'work_periode1', $this->work_periode1])
            ->andFilterWhere(['like', 'work_position1', $this->work_position1])
            ->andFilterWhere(['like', 'work_description1', $this->work_description1])
            ->andFilterWhere(['like', 'work_experience2', $this->work_experience2])
            ->andFilterWhere(['like', 'work_periode2', $this->work_periode2])
            ->andFilterWhere(['like', 'work_position2', $this->work_position2])
            ->andFilterWhere(['like', 'work_description2', $this->work_description2])
            ->andFilterWhere(['like', 'work_experience3', $this->work_experience3])
            ->andFilterWhere(['like', 'work_periode3', $this->work_periode3])
            ->andFilterWhere(['like', 'work_position3', $this->work_position3])
            ->andFilterWhere(['like', 'work_description3', $this->work_description3])
            ->andFilterWhere(['like', 'language1', $this->language1])
            ->andFilterWhere(['like', 'listening1', $this->listening1])
            ->andFilterWhere(['like', 'writing1', $this->writing1])
            ->andFilterWhere(['like', 'speaking1', $this->speaking1])
            ->andFilterWhere(['like', 'language2', $this->language2])
            ->andFilterWhere(['like', 'listening2', $this->listening2])
            ->andFilterWhere(['like', 'writing2', $this->writing2])
            ->andFilterWhere(['like', 'speaking2', $this->speaking2])
            ->andFilterWhere(['like', 'language3', $this->language3])
            ->andFilterWhere(['like', 'listening3', $this->listening3])
            ->andFilterWhere(['like', 'writing3', $this->writing3])
            ->andFilterWhere(['like', 'speaking3', $this->speaking3])
            ->andFilterWhere(['like', 'other_skill', $this->other_skill]);

        return $dataProvider;
    }
}
