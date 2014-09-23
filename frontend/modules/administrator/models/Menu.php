<?php

namespace frontend\modules\administrator\models;

use Yii;

/**
 * This is the model class for table "web_menu".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $menu_name
 * @property string $url
 * @property integer $active
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'menu_name', 'url'], 'required'],
            [['parent_id', 'active'], 'integer'],
            [['menu_name'], 'string', 'max' => 60],
            [['url'], 'string', 'max' => 255]
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
            'menu_name' => 'Menu Name',
            'url' => 'Url',
            'active' => 'Active',
        ];
    }
}
