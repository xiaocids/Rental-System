<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "web_job_vacation".
 *
 * @property integer $id
 * @property string $job_name
 * @property string $job_description
 * @property string $job_responsibility
 * @property string $req_gender
 * @property integer $req_age
 * @property string $req_marital_status
 * @property string $req_last_education
 * @property string $req_majoring
 * @property string $req_min_experiance
 * @property string $contact
 * @property string $send_to
 * @property string $valid_until
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class JobVacation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_job_vacation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_name', 'job_description', 'job_responsibility', 'req_gender', 'req_age', 'req_marital_status', 'req_last_education', 'req_majoring', 'req_min_experiance', 'contact', 'send_to', 'valid_until', 'created_at', 'created_by'], 'required'],
            [['job_description', 'job_responsibility'], 'string'],
            [['req_age', 'created_by', 'updated_by'], 'integer'],
            [['valid_until', 'created_at', 'updated_at'], 'safe'],
            [['job_name'], 'string', 'max' => 80],
            [['req_gender', 'req_last_education', 'req_min_experiance'], 'string', 'max' => 20],
            [['req_marital_status'], 'string', 'max' => 15],
            [['req_majoring'], 'string', 'max' => 255],
            [['contact', 'send_to'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_name' => 'Position',
            'job_description' => 'Job Description',
            'job_responsibility' => 'Job Responsibility',
            'req_gender' => 'Gender',
            'req_age' => 'Max Age',
            'req_marital_status' => 'Marital Status',
            'req_last_education' => 'Last Education',
            'req_majoring' => 'Majoring',
            'req_min_experiance' => 'Min Experiance',
            'contact' => 'Contact',
            'send_to' => 'Send To',
            'valid_until' => 'Expired Until',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
    
    public static function getMaritalStatus($param)
    {
    	$status = [
			'S'=>'Single',
			'M'=>'Maried',
    	];
    	return $status[$param];
    }
    
    public static function getReqGender($param)
    {
    	$genders = [
			'M'=>'Male',
			'F'=>'Female',
			'MF'=>'Male/Female'
    	];
    	return $genders[$param];
    }
}
