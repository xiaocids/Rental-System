<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\modules\admin\models\JobVacation $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Job Vacations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-vacation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'job_name',
            'job_description:ntext',
            'job_responsibility:ntext',
            'req_gender',
            'req_age',
            'req_marital_status',
            'req_last_education',
            'req_majoring',
            'req_min_experiance',
            'contact',
            'send_to',
            'valid_until',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
