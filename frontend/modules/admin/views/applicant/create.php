<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Applicant */

$this->title = 'Create Applicant';
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('apply', [
        'model' => $model,
    	'job' => $job,
    ]) ?>

</div>
