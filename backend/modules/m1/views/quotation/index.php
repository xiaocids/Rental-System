<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\m1\models\QuotationSearch $searchModel
 */

$this->title = Yii::t('app', 'Quotations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Quotation',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'qutation_no',
            'type',
            'quotation_date',
            'valid_date',
            // 'destination_company',
            // 'company_address:ntext',
            // 'letter:ntext',
            // 'status',
            // 'approved_by',
            // 'approved_date',
            // 'created_date',
            // 'created_by',
            // 'prospect_card_id',
            // 'attn',
            // 're',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
