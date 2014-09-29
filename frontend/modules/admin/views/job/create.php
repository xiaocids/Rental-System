<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\modules\admin\models\JobVacation $model
 */

$this->title = 'Create Job Vacation';
$this->params['breadcrumbs'][] = ['label' => 'Job Vacations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-vacation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
