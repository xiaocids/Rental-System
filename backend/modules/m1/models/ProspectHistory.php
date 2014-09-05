<?php

namespace app\modules\m1\models;

use Yii;

/**
 * This is the model class for table "b_prospect_history".
 *
 * @property string $id
 * @property integer $b_prospect_id
 * @property string $prospect_date
 * @property string $meet_call_with
 * @property string $description
 * @property string $visit_call
 * @property string $class_status
 * @property string $next_action
 * @property string $comment
 *
 * @property BProspectCard $bProspect
 */
class ProspectHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_prospect_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_prospect_id'], 'integer'],
            [['prospect_date', 'meet_call_with', 'class_status'], 'required'],
            [['prospect_date'], 'safe'],
            [['description', 'next_action', 'comment'], 'string'],
            [['meet_call_with'], 'string', 'max' => 200],
            [['visit_call'], 'string', 'max' => 2],
            [['class_status'], 'string', 'max' => 5]
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
            'prospect_date' => 'Prospect Date',
            'meet_call_with' => 'Meet Call With',
            'description' => 'Description',
            'visit_call' => 'Visit Call',
            'class_status' => 'Class Status',
            'next_action' => 'Next Action',
            'comment' => 'Comment',
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
