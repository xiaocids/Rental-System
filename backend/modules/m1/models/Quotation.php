<?php

namespace app\modules\m1\models;

use Yii;

/**
 * This is the model class for table "c_quotation".
 *
 * @property integer $id
 * @property string $qutation_no
 * @property string $type
 * @property string $quotation_date
 * @property string $valid_date
 * @property string $destination_company
 * @property string $company_address
 * @property string $letter
 * @property string $status
 * @property integer $approved_by
 * @property string $approved_date
 * @property string $created_date
 * @property integer $created_by
 * @property integer $prospect_card_id
 * @property string $attn
 * @property string $re
 *
 * @property BProspectCard $prospectCard
 * @property CDriverFeeQuot[] $cDriverFeeQuots
 */
class Quotation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_quotation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qutation_no', 'type', 'quotation_date', 'valid_date', 'destination_company', 'status', 'created_date', 'created_by', 'attn', 're'], 'required'],
            [['quotation_date', 'valid_date', 'approved_date', 'created_date'], 'safe'],
            [['company_address', 'letter'], 'string'],
            [['approved_by', 'created_by', 'prospect_card_id'], 'integer'],
            [['qutation_no'], 'string', 'max' => 35],
            [['type'], 'string', 'max' => 10],
            [['destination_company', 'attn'], 'string', 'max' => 60],
            [['status'], 'string', 'max' => 30],
            [['re'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'qutation_no' => 'Qutation No',
            'type' => 'Type',
            'quotation_date' => 'Quotation Date',
            'valid_date' => 'Valid Date',
            'destination_company' => 'Destination Company',
            'company_address' => 'Company Address',
            'letter' => 'Letter',
            'status' => 'Status',
            'approved_by' => 'Approved By',
            'approved_date' => 'Approved Date',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'prospect_card_id' => 'Prospect Card ID',
            'attn' => 'Attn',
            're' => 'Re',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProspectCard()
    {
        return $this->hasOne(BProspectCard::className(), ['id' => 'prospect_card_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCDriverFeeQuots()
    {
        return $this->hasMany(CDriverFeeQuot::className(), ['quotation_id' => 'id']);
    }
}
