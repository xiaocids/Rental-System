<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "web_page".
 *
 * @property integer $id
 * @property string $title_id
 * @property string $title_en
 * @property string $title_jp
 * @property string $content_id
 * @property string $content_en
 * @property string $content_jp
 * @property string $thumbnail
 * @property string $status
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'created_by'], 'required'],
            [['content_id', 'content_en', 'content_jp'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['title_id', 'title_en', 'title_jp'], 'string', 'max' => 80],
            [['thumbnail'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_id' => 'Title Indonesia',
            'title_en' => 'Title English',
            'title_jp' => 'Title Japan',
            'content_id' => 'Content Indonesia',
            'content_en' => 'Content English',
            'content_jp' => 'Content Japan',
            'thumbnail' => 'Thumbnail',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
