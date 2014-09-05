<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\ProspectCardSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="prospect-card-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'prospect_card_number') ?>

    <?= $form->field($model, 'marketing_officer_name') ?>

    <?= $form->field($model, 'company_name') ?>

    <?= $form->field($model, 'company_title') ?>

    <?php // echo $form->field($model, 'company_address') ?>

    <?php // echo $form->field($model, 'business_type') ?>

    <?php // echo $form->field($model, 'phone_code_area') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'other_information') ?>

    <?php // echo $form->field($model, 'customer_type') ?>

    <?php // echo $form->field($model, 'cp_name1') ?>

    <?php // echo $form->field($model, 'cp_title1') ?>

    <?php // echo $form->field($model, 'cp_name2') ?>

    <?php // echo $form->field($model, 'cp_title2') ?>

    <?php // echo $form->field($model, 'cp_name3') ?>

    <?php // echo $form->field($model, 'cp_title3') ?>

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
