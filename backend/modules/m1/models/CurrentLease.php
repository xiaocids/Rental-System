<?php

namespace app\modules\m1\models;

use Yii;

/**
 * This is the model class for table "b_current_lease".
 *
 * @property string $id
 * @property integer $b_prospect_id
 * @property string $brand_type_year
 * @property integer $unit
 * @property string $end_of_contract
 * @property string $rental_company
 *
 * @property BProspectCard $bProspect
 */
class CurrentLease extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_current_lease';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_prospect_id', 'unit'], 'integer'],
            [['brand_type_year', 'unit', 'end_of_contract', 'rental_company'], 'required'],
            [['end_of_contract'], 'safe'],
            [['brand_type_year', 'rental_company'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'b_prospect_id' => 'B Prospect ID',
            'brand_type_year' => 'Brand Type Year',
            'unit' => 'Unit',
            'end_of_contract' => 'End Of Contract',
            'rental_company' => 'Rental Company',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBProspect()
    {
        return $this->hasOne(BProspectCard::className(), ['id' => 'b_prospect_id']);
    }
}
