<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\Quotation $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Quotations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'qutation_no',
            'type',
            'quotation_date',
            'valid_date',
            'destination_company',
            'company_address:ntext',
            'letter:ntext',
            'status',
            'approved_by',
            'approved_date',
            'created_date',
            'created_by',
            'prospect_card_id',
            'attn',
            're',
        ],
    ]) ?>

</div>
