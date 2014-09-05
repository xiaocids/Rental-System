<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\aOrganization $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'A Organizations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="a-organization-view">

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
            'parent_id',
            'branch_code',
            'branch_code_number',
            'name',
            'address',
            'kabupaten_id',
            'propinsi_id',
            'pos_code',
            'phone_code_area',
            'telephone',
            'fax',
            'email:email',
            'website',
            'photo_path',
            'status_id',
            'custom1',
            'custom2',
            'custom3',
            'custom4',
            'custom5',
            'created_date',
            'created_by',
            'updated_date',
            'updated_by',
        ],
    ]) ?>

</div>
