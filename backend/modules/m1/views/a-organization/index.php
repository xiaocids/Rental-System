<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\m1\models\aOrganizationSearch $searchModel
 */

$this->title = Yii::t('app', 'A Organizations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="a-organization-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'A Organization',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parent_id',
            'branch_code',
            'branch_code_number',
            'name',
            // 'address',
            // 'kabupaten_id',
            // 'propinsi_id',
            // 'pos_code',
            // 'phone_code_area',
            // 'telephone',
            // 'fax',
            // 'email:email',
            // 'website',
            // 'photo_path',
            // 'status_id',
            // 'custom1',
            // 'custom2',
            // 'custom3',
            // 'custom4',
            // 'custom5',
            // 'created_date',
            // 'created_by',
            // 'updated_date',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
