<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Applicant */

$this->title = 'Update Applicant: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="applicant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('apply', [
        'model' => $model,
    	'job' => $job,
    ]) ?>

</div>
