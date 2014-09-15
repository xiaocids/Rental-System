<?php

namespace app\modules\m1\models;

use Yii;
use kartik\builder\TabularForm;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "b_current_asset".
 *
 * @property string $id
 * @property integer $b_propect_id
 * @property string $brand_type
 * @property integer $unit
 * @property string $manufacture_year
 *
 * @property BProspectCard $bPropect
 */
class CurrentAsset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_current_asset';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_propect_id', 'unit'], 'integer'],
            [['brand_type', 'unit', 'manufacture_year'], 'required'],
            [['brand_type'], 'string', 'max' => 200],
            [['manufacture_year'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'b_propect_id' => 'B Propect ID',
            'brand_type' => 'Brand Type',
            'unit' => 'Unit',
            'manufacture_year' => 'Manufacture Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBPropect()
    {
        return $this->hasOne(BProspectCard::className(), ['id' => 'b_propect_id']);
    }
}
