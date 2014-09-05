<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\aOrganizationSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="a-organization-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'parent_id') ?>

    <?= $form->field($model, 'branch_code') ?>

    <?= $form->field($model, 'branch_code_number') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'kabupaten_id') ?>

    <?php // echo $form->field($model, 'propinsi_id') ?>

    <?php // echo $form->field($model, 'pos_code') ?>

    <?php // echo $form->field($model, 'phone_code_area') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'photo_path') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'custom1') ?>

    <?php // echo $form->field($model, 'custom2') ?>

    <?php // echo $form->field($model, 'custom3') ?>

    <?php // echo $form->field($model, 'custom4') ?>

    <?php // echo $form->field($model, 'custom5') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
