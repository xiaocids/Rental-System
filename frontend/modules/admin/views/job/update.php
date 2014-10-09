<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\modules\admin\models\JobVacation $model
 */

$this->title = 'Update Job Vacation: ' . $model->job_name;
$this->params['breadcrumbs'][] = ['label' => 'Job Vacations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-vacation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
