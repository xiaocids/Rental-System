<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\QuotationSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="quotation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'qutation_no') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'quotation_date') ?>

    <?= $form->field($model, 'valid_date') ?>

    <?php // echo $form->field($model, 'destination_company') ?>

    <?php // echo $form->field($model, 'company_address') ?>

    <?php // echo $form->field($model, 'letter') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'approved_date') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'prospect_card_id') ?>

    <?php // echo $form->field($model, 'attn') ?>

    <?php // echo $form->field($model, 're') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
