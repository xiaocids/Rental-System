<?php

namespace frontend\modules\administrator\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\administrator\models\Menu;

/**
 * MenuSearch represents the model behind the search form about `frontend\modules\administrator\models\Menu`.
 */
class MenuSearch extends Menu
{
    public function rules()
    {
        return [
            [['id', 'parent_id', 'active'], 'integer'],
            [['menu_name', 'url'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Menu::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'menu_name', $this->menu_name])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
