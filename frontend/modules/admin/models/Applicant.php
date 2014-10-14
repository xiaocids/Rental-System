<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "web_applicant".
 *
 * @property integer $id
 * @property string $applicant_id
 * @property integer $job_id
 * @property string $full_name
 * @property integer $age
 * @property string $gender
 * @property string $born_date
 * @property string $marital_status
 * @property string $photo
 * @property string $phone
 * @property string $mobile
 * @property string $home_address
 * @property string $email
 * @property string $education_level1
 * @property string $university_name1
 * @property string $majoring1
 * @property string $join_graduate_year1
 * @property string $gpa1
 * @property string $education_level2
 * @property string $university_name2
 * @property string $majoring2
 * @property string $join_graduate_year2
 * @property string $gpa2
 * @property string $education_level3
 * @property string $university_name3
 * @property string $majoring3
 * @property string $join_graduate_year3
 * @property string $gpa3
 * @property string $organization_name1
 * @property string $org_position1
 * @property string $join_out_year1
 * @property string $responsibility1
 * @property string $organization_name2
 * @property string $org_position2
 * @property string $join_out_year2
 * @property string $responsibility2
 * @property string $organization_name3
 * @property string $org_position3
 * @property string $join_out_year3
 * @property string $responsibility3
 * @property string $award1
 * @property string $year1
 * @property string $description1
 * @property string $award2
 * @property string $year2
 * @property string $description2
 * @property string $award3
 * @property string $year3
 * @property string $description3
 * @property string $work_experience1
 * @property string $work_periode1
 * @property string $work_position1
 * @property string $work_description1
 * @property string $work_experience2
 * @property string $work_periode2
 * @property string $work_position2
 * @property string $work_description2
 * @property string $work_experience3
 * @property string $work_periode3
 * @property string $work_position3
 * @property string $work_description3
 * @property string $language1
 * @property string $listening1
 * @property string $writing1
 * @property string $speaking1
 * @property string $language2
 * @property string $listening2
 * @property string $writing2
 * @property string $speaking2
 * @property string $language3
 * @property string $listening3
 * @property string $writing3
 * @property string $speaking3
 * @property string $other_skill
 * @property integer $term_condition
 * @property string $created_at
 * @property string $updated_at
 */
class Applicant extends \yii\db\ActiveRecord
{
	public $verificationCode;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_applicant';
    }

    // 	public function behaviors()
    // 	{
    // 		return [
    // 		[
    // 		'class' => 'mdm\autonumber\Behavior',
    // 		'attribute' => 'applicant_id', // required
    // 		//'group' => $this->id_branch, // optional
    // 		'value' => 'AP?' , // format auto number. '?' will be replaced with generated number
    // 		'digit' => 5// optional, default to null.
    // 		],
    // 		];
    // 	}
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['applicant_id', 'job_id', 'full_name', 'age', 'gender', 'born_date', 'marital_status', 'photo', 'phone', 'mobile', 'home_address', 'email', 'education_level1', 'university_name1', 'majoring1', 'join_graduate_year1', 'gpa1', 'education_level2', 'university_name2', 'majoring2', 'join_graduate_year2', 'gpa2', 'education_level3', 'university_name3', 'majoring3', 'join_graduate_year3', 'gpa3', 'term_condition', 'created_at'], 'required'],
            [['job_id', 'age', 'term_condition'], 'integer'],
            [['born_date', 'created_at', 'updated_at'], 'safe'],
            [['home_address', 'other_skill'], 'string'],
            [['applicant_id', 'org_position1', 'org_position2', 'org_position3'], 'string', 'max' => 50],
            [['full_name'], 'string', 'max' => 70],
            [['gender', 'marital_status', 'listening1', 'writing1', 'speaking1', 'listening2', 'writing2', 'speaking2', 'listening3', 'writing3', 'speaking3'], 'string', 'max' => 2],
            [['photo', 'description1', 'description2', 'description3', 'work_description1', 'work_description2', 'work_description3'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 30],
            [['mobile'], 'string', 'max' => 15],
            [['email', 'university_name1', 'university_name2', 'university_name3', 'organization_name1', 'organization_name2', 'organization_name3'], 'string', 'max' => 100],
            [['education_level1', 'education_level2', 'education_level3', 'language1', 'language2', 'language3'], 'string', 'max' => 25],
            [['majoring1', 'majoring2', 'majoring3'], 'string', 'max' => 60],
            [['join_graduate_year1', 'join_graduate_year2', 'join_graduate_year3', 'join_out_year1', 'join_out_year2', 'join_out_year3', 'work_periode1', 'work_periode2', 'work_periode3'], 'string', 'max' => 10],
            [['gpa1', 'gpa2', 'gpa3', 'year1', 'year2', 'year3'], 'string', 'max' => 5],
            [['responsibility1', 'responsibility2', 'responsibility3'], 'string', 'max' => 200],
            [['award1', 'award2', 'award3', 'work_experience1', 'work_experience2', 'work_experience3'], 'string', 'max' => 150],
            [['work_position1', 'work_position2', 'work_position3'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'applicant_id' => 'Applicant ID',
            'job_id' => 'Job Position',
            'full_name' => 'Full Name',
            'age' => 'Age',
            'gender' => 'Gender',
            'born_date' => 'Born Date',
            'marital_status' => 'Marital Status',
            'photo' => 'Photo',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'home_address' => 'Home Address',
            'email' => 'Email',
            'education_level1' => 'Education Level',
            'university_name1' => 'University Name',
            'majoring1' => 'Majoring',
            'join_graduate_year1' => 'Join-Graduate Year',
            'gpa1' => 'GPA (Scale 4.00)',
            'education_level2' => 'Education Level',
            'university_name2' => 'University Name',
            'majoring2' => 'Majoring',
            'join_graduate_year2' => 'Join-Graduate Year',
            'gpa2' => 'GPA',
            'education_level3' => 'Education Level',
            'university_name3' => 'University Name',
            'majoring3' => 'Majoring',
            'join_graduate_year3' => 'Join-Graduate Year',
            'gpa3' => 'GPA',
            'organization_name1' => 'Organization Name',
            'org_position1' => 'Position',
            'join_out_year1' => 'Join/Out Year',
            'responsibility1' => 'Responsibility',
            'organization_name2' => 'Organization Name',
            'org_position2' => 'Position',
            'join_out_year2' => 'Join/Out Year',
            'responsibility2' => 'Responsibility',
            'organization_name3' => 'Organization Name',
            'org_position3' => 'Position',
            'join_out_year3' => 'Join/Out Year',
            'responsibility3' => 'Responsibility',
            'award1' => 'Award',
            'year1' => 'Year',
            'description1' => 'Description',
            'award2' => 'Award',
            'year2' => 'Year',
            'description2' => 'Description',
            'award3' => 'Award',
            'year3' => 'Year',
            'description3' => 'Description',
            'work_experience1' => 'Work Experience',
            'work_periode1' => 'Work Periode',
            'work_position1' => 'Work Position',
            'work_description1' => 'Work Description',
            'work_experience2' => 'Work Experience',
            'work_periode2' => 'Work Periode',
            'work_position2' => 'Work Position',
            'work_description2' => 'Work Description',
            'work_experience3' => 'Work Experience',
            'work_periode3' => 'Work Periode',
            'work_position3' => 'Work Position',
            'work_description3' => 'Work Description',
            'language1' => 'Language',
            'listening1' => 'Listening',
            'writing1' => 'Writing',
            'speaking1' => 'Speaking',
            'language2' => 'Language',
            'listening2' => 'Listening',
            'writing2' => 'Writing',
            'speaking2' => 'Speaking',
            'language3' => 'Language',
            'listening3' => 'Listening',
            'writing3' => 'Writing',
            'speaking3' => 'Speaking',
            'other_skill' => 'Other Skill',
            'term_condition' => 'Term Condition',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
    public function getJob(){
    	return $this->hasOne(JobVacation::className(), ['id' => 'job_id']);
    }
}
