<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\m1\models\ProspectCardSearch $searchModel
 */

$this->title = Yii::t('app', 'Prospect Cards');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prospect-card-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Prospect Card',
]), ['begin-prospecting'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'prospect_card_number',
            'marketing_officer_name',
            ['attribute'=>'company_name', 'value'=>function($data) { return $data->company_name.', '.$data->company_title; }],
            //'company_name',
            //'company_title',
            // 'company_address:ntext',
            'business_type',
            // 'phone_code_area',
            // 'telephone',
            // 'fax',
            // 'email:email',
            // 'other_information:ntext',
            'customer_type',
            // 'cp_name1',
            // 'cp_title1',
            // 'cp_name2',
            // 'cp_title2',
            // 'cp_name3',
            // 'cp_title3',
            // 'created_date',
            // 'created_by',
            // 'updated_date',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
