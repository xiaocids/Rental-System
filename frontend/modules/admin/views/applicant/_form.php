<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\modules\admin\models\JobVacationSearch;

/* @var $this yii\web\View */
/* @var $model frontend\modules\admin\models\Applicant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'applicant_id')->textInput(['maxlength' => 50]) ?>

   	<?= $form->field($model, 'job_id')->dropDownList(JobVacationSearch::listJobActive(),['class'=>'form-control','prompt'=>'-Select', 'empty'=>'-Select'])?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 70]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'born_date')->textInput() ?>

    <?= $form->field($model, 'marital_status')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'home_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'education_level1')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'university_name1')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'majoring1')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'join_graduate_year1')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'gpa1')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'education_level2')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'university_name2')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'majoring2')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'join_graduate_year2')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'gpa2')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'education_level3')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'university_name3')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'majoring3')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'join_graduate_year3')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'gpa3')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'organization_name1')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'org_position1')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'join_out_year1')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'responsibility1')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'organization_name2')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'org_position2')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'join_out_year2')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'responsibility2')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'organization_name3')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'org_position3')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'join_out_year3')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'responsibility3')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'award1')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'year1')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'description1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'award2')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'year2')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'description2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'award3')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'year3')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'description3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'work_experience1')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'work_periode1')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'work_position1')->textInput(['maxlength' => 35]) ?>

    <?= $form->field($model, 'work_description1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'work_experience2')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'work_periode2')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'work_position2')->textInput(['maxlength' => 35]) ?>

    <?= $form->field($model, 'work_description2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'work_experience3')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'work_periode3')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'work_position3')->textInput(['maxlength' => 35]) ?>

    <?= $form->field($model, 'work_description3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'language1')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'listening1')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'writing1')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'speaking1')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'language2')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'listening2')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'writing2')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'speaking2')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'language3')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'listening3')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'writing3')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'speaking3')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'other_skill')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'term_condition')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
