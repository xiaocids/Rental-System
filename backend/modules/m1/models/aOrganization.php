<?php

namespace app\modules\m1\models;

use Yii;

/**
 * This is the model class for table "a_organization".
 *
 * @property string $id
 * @property integer $parent_id
 * @property string $branch_code
 * @property string $branch_code_number
 * @property string $name
 * @property string $address
 * @property integer $kabupaten_id
 * @property integer $propinsi_id
 * @property string $pos_code
 * @property string $phone_code_area
 * @property string $telephone
 * @property string $fax
 * @property string $email
 * @property string $website
 * @property string $photo_path
 * @property integer $status_id
 * @property string $custom1
 * @property string $custom2
 * @property string $custom3
 * @property string $custom4
 * @property string $custom5
 * @property string $created_date
 * @property integer $created_by
 * @property string $updated_date
 * @property integer $updated_by
 */
class aOrganization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'a_organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'kabupaten_id', 'propinsi_id', 'status_id', 'created_by', 'updated_by'], 'integer'],
            [['branch_code', 'name', 'created_date', 'created_by'], 'required'],
            [['created_date', 'updated_date'], 'safe'],
            [['branch_code', 'branch_code_number'], 'string', 'max' => 50],
            [['name', 'email', 'custom1', 'custom2', 'custom3', 'custom4', 'custom5'], 'string', 'max' => 200],
            [['address', 'photo_path'], 'string', 'max' => 255],
            [['pos_code'], 'string', 'max' => 8],
            [['phone_code_area'], 'string', 'max' => 5],
            [['telephone'], 'string', 'max' => 20],
            [['fax'], 'string', 'max' => 25],
            [['website'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'branch_code' => 'Branch Code',
            'branch_code_number' => 'Branch Code Number',
            'name' => 'Name',
            'address' => 'Address',
            'kabupaten_id' => 'Kabupaten ID',
            'propinsi_id' => 'Propinsi ID',
            'pos_code' => 'Pos Code',
            'phone_code_area' => 'Phone Code Area',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'email' => 'Email',
            'website' => 'Website',
            'photo_path' => 'Photo Path',
            'status_id' => 'Status ID',
            'custom1' => 'Custom1',
            'custom2' => 'Custom2',
            'custom3' => 'Custom3',
            'custom4' => 'Custom4',
            'custom5' => 'Custom5',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'updated_date' => 'Updated Date',
            'updated_by' => 'Updated By',
        ];
    }
}
