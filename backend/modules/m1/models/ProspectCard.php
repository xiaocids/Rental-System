<?php

namespace app\modules\m1\models;

use Yii;

/**
 * This is the model class for table "b_prospect_card".
 *
 * @property string $id
 * @property string $prospect_card_number
 * @property string $marketing_officer_name
 * @property string $company_name
 * @property string $company_title
 * @property string $company_address
 * @property string $business_type
 * @property string $phone_code_area
 * @property string $telephone
 * @property string $fax
 * @property string $email
 * @property string $other_information
 * @property string $customer_type
 * @property string $cp_name1
 * @property string $cp_title1
 * @property string $cp_name2
 * @property string $cp_title2
 * @property string $cp_name3
 * @property string $cp_title3
 * @property string $created_date
 * @property integer $created_by
 * @property string $updated_date
 * @property integer $updated_by
 *
 * @property CQuotation[] $cQuotations
 * @property BCurrentLease[] $bCurrentLeases
 * @property BCurrentAsset[] $bCurrentAssets
 * @property BProspectHistory[] $bProspectHistories
 */
class ProspectCard extends \yii\db\ActiveRecord
{
	public function behaviors()
	{
		return [
			[
			'class' => 'mdm\autonumber\Behavior',
			'attribute' => 'prospect_card_number', // required
			//'group' => $this->id_branch, // optional
			'value' => 'PC?' , // format auto number. '?' will be replaced with generated number
			'digit' => 5// optional, default to null.
			],	
		];
	}
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_prospect_card';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prospect_card_number', 'marketing_officer_name', 'company_name', 'company_address', 'business_type', 'customer_type', 'created_date', 'created_by'], 'required'],
            [['company_address', 'other_information'], 'string'],
            [['created_date', 'updated_date'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['prospect_card_number', 'telephone', 'fax'], 'string', 'max' => 25],
            [['marketing_officer_name'], 'string', 'max' => 100],
            [['company_name'], 'string', 'max' => 150],
            [['company_title', 'customer_type'], 'string', 'max' => 10],
            [['business_type', 'cp_name1', 'cp_name2', 'cp_name3'], 'string', 'max' => 60],
            [['phone_code_area'], 'string', 'max' => 6],
            [['email'], 'string', 'max' => 200],
            [['cp_title1', 'cp_title2', 'cp_title3'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prospect_card_number' => 'Prospect Card Number',
            'marketing_officer_name' => 'Marketing Officer Name',
            'company_name' => 'Company Name',
            'company_title' => 'Company Title',
            'company_address' => 'Company Address',
            'business_type' => 'Business Type',
            'phone_code_area' => 'Phone Code Area',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'email' => 'Email',
            'other_information' => 'Other Information',
            'customer_type' => 'Customer Type',
            'cp_name1' => 'Cp Name1',
            'cp_title1' => 'Cp Title1',
            'cp_name2' => 'Cp Name2',
            'cp_title2' => 'Cp Title2',
            'cp_name3' => 'Cp Name3',
            'cp_title3' => 'Cp Title3',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'updated_date' => 'Updated Date',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCQuotations()
    {
        return $this->hasMany(CQuotation::className(), ['prospect_card_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBCurrentLeases()
    {
        return $this->hasMany(CurrentLease::className(), ['b_prospect_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBCurrentAssets()
    {
        return $this->hasMany(CurrentAsset::className(), ['b_propect_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBProspectHistories()
    {
        return $this->hasMany(ProspectHistory::className(), ['b_prospect_id' => 'id']);
    }
}
