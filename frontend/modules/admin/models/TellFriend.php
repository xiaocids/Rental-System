<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "web_tell_friend".
 *
 * @property integer $id
 * @property string $sender_name
 * @property string $sender_email
 * @property string $receiver_email
 * @property string $message_detail
 * @property string $create_at
 */
class TellFriend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_tell_friend';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender_name', 'sender_email', 'receiver_email', 'message_detail', 'create_at'], 'required'],
            [['message_detail'], 'string'],
            [['create_at'], 'safe'],
            [['sender_name', 'sender_email', 'receiver_email'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender_name' => 'Sender Name',
            'sender_email' => 'Sender Email',
            'receiver_email' => 'Receiver Email',
            'message_detail' => 'Message Detail',
            'create_at' => 'Create At',
        ];
    }
}
