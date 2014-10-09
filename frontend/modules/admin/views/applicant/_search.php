<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\ApplicantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'applicant_id') ?>

    <?= $form->field($model, 'job_id') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'born_date') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'home_address') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'education_level1') ?>

    <?php // echo $form->field($model, 'university_name1') ?>

    <?php // echo $form->field($model, 'majoring1') ?>

    <?php // echo $form->field($model, 'join_graduate_year1') ?>

    <?php // echo $form->field($model, 'gpa1') ?>

    <?php // echo $form->field($model, 'education_level2') ?>

    <?php // echo $form->field($model, 'university_name2') ?>

    <?php // echo $form->field($model, 'majoring2') ?>

    <?php // echo $form->field($model, 'join_graduate_year2') ?>

    <?php // echo $form->field($model, 'gpa2') ?>

    <?php // echo $form->field($model, 'education_level3') ?>

    <?php // echo $form->field($model, 'university_name3') ?>

    <?php // echo $form->field($model, 'majoring3') ?>

    <?php // echo $form->field($model, 'join_graduate_year3') ?>

    <?php // echo $form->field($model, 'gpa3') ?>

    <?php // echo $form->field($model, 'organization_name1') ?>

    <?php // echo $form->field($model, 'org_position1') ?>

    <?php // echo $form->field($model, 'join_out_year1') ?>

    <?php // echo $form->field($model, 'responsibility1') ?>

    <?php // echo $form->field($model, 'organization_name2') ?>

    <?php // echo $form->field($model, 'org_position2') ?>

    <?php // echo $form->field($model, 'join_out_year2') ?>

    <?php // echo $form->field($model, 'responsibility2') ?>

    <?php // echo $form->field($model, 'organization_name3') ?>

    <?php // echo $form->field($model, 'org_position3') ?>

    <?php // echo $form->field($model, 'join_out_year3') ?>

    <?php // echo $form->field($model, 'responsibility3') ?>

    <?php // echo $form->field($model, 'award1') ?>

    <?php // echo $form->field($model, 'year1') ?>

    <?php // echo $form->field($model, 'description1') ?>

    <?php // echo $form->field($model, 'award2') ?>

    <?php // echo $form->field($model, 'year2') ?>

    <?php // echo $form->field($model, 'description2') ?>

    <?php // echo $form->field($model, 'award3') ?>

    <?php // echo $form->field($model, 'year3') ?>

    <?php // echo $form->field($model, 'description3') ?>

    <?php // echo $form->field($model, 'work_experience1') ?>

    <?php // echo $form->field($model, 'work_periode1') ?>

    <?php // echo $form->field($model, 'work_position1') ?>

    <?php // echo $form->field($model, 'work_description1') ?>

    <?php // echo $form->field($model, 'work_experience2') ?>

    <?php // echo $form->field($model, 'work_periode2') ?>

    <?php // echo $form->field($model, 'work_position2') ?>

    <?php // echo $form->field($model, 'work_description2') ?>

    <?php // echo $form->field($model, 'work_experience3') ?>

    <?php // echo $form->field($model, 'work_periode3') ?>

    <?php // echo $form->field($model, 'work_position3') ?>

    <?php // echo $form->field($model, 'work_description3') ?>

    <?php // echo $form->field($model, 'language1') ?>

    <?php // echo $form->field($model, 'listening1') ?>

    <?php // echo $form->field($model, 'writing1') ?>

    <?php // echo $form->field($model, 'speaking1') ?>

    <?php // echo $form->field($model, 'language2') ?>

    <?php // echo $form->field($model, 'listening2') ?>

    <?php // echo $form->field($model, 'writing2') ?>

    <?php // echo $form->field($model, 'speaking2') ?>

    <?php // echo $form->field($model, 'language3') ?>

    <?php // echo $form->field($model, 'listening3') ?>

    <?php // echo $form->field($model, 'writing3') ?>

    <?php // echo $form->field($model, 'speaking3') ?>

    <?php // echo $form->field($model, 'other_skill') ?>

    <?php // echo $form->field($model, 'term_condition') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
