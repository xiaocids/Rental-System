<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\modules\admin\models\JobVacationSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="job-vacation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'job_name') ?>

    <?= $form->field($model, 'job_description') ?>

    <?= $form->field($model, 'job_responsibility') ?>

    <?= $form->field($model, 'req_gender') ?>

    <?php // echo $form->field($model, 'req_age') ?>

    <?php // echo $form->field($model, 'req_marital_status') ?>

    <?php // echo $form->field($model, 'req_last_education') ?>

    <?php // echo $form->field($model, 'req_majoring') ?>

    <?php // echo $form->field($model, 'req_min_experiance') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'send_to') ?>

    <?php // echo $form->field($model, 'valid_until') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
