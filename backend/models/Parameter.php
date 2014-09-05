<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "s_parameter".
 *
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $type
 * @property integer $status_id
 */
class Parameter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_parameter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'type'], 'required'],
            [['status_id'], 'integer'],
            [['name', 'code'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'type' => 'Type',
            'status_id' => 'Status ID',
        ];
    }
    
    public function getCustomerType()
    {
    	$customer_type = Parameter::findAll(['type'=>'customer_type']);
    	return ArrayHelper::map($customer_type, 'code', 'name');
    }
    
    public function getCompanyTitle()
    {
    	$customer_type = Parameter::findAll(['type'=>'company_title']);
    	return ArrayHelper::map($customer_type, 'code', 'name');
    }
    
    public function getBusinessType()
    {
    	$customer_type = Parameter::findAll(['type'=>'business_type']);
    	return ArrayHelper::map($customer_type, 'code', 'name');
    }
}
