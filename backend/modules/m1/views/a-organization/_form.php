<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\aOrganization $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="a-organization-form">

    <?php $form = ActiveForm::begin([
    	'options' => [ 
			'class' => 'form-horizontal'
		],
		'fieldConfig' => [
			'template' => "{label}\n<div class=\"col-lg-8\">{input}{error}</div>",
			'labelOptions' => [ 
				'class' => 'col-lg-4 control-label' 
			]
		]
    ]); ?>

    <div class="row">
		<div class="col-xs-6">
		  	<?= $form->field($model, 'parent_id')->textInput()?>
		
		    <?= $form->field($model, 'kabupaten_id')->textInput()?>
		
		    <?= $form->field($model, 'propinsi_id')->textInput()?>
		
		    <?= $form->field($model, 'status_id')->textInput()?>
		
		    <?= $form->field($model, 'created_by')->textInput()?>
		
		    <?= $form->field($model, 'updated_by')->textInput()?>
		
		    <?= $form->field($model, 'branch_code')->textInput(['maxlength' => 50])?>
		
		    <?= $form->field($model, 'name')->textInput(['maxlength' => 200])?>
		
		    <?= $form->field($model, 'created_date')->textInput()?>
		
		    <?= $form->field($model, 'updated_date')->textInput()?>
		
		    <?= $form->field($model, 'branch_code_number')->textInput(['maxlength' => 50])?>
	  	</div>
		<div class="col-xs-6">
  			<?= $form->field($model, 'email')->textInput(['maxlength' => 200])?>

		    <?= $form->field($model, 'custom1')->textInput(['maxlength' => 200])?>
		
		    <?= $form->field($model, 'custom2')->textInput(['maxlength' => 200])?>
		
		    <?= $form->field($model, 'custom3')->textInput(['maxlength' => 200])?>
		
		    <?= $form->field($model, 'custom4')->textInput(['maxlength' => 200])?>
		
		    <?= $form->field($model, 'custom5')->textInput(['maxlength' => 200])?>
		
		    <?= $form->field($model, 'address')->textInput(['maxlength' => 255])?>
		
		    <?= $form->field($model, 'photo_path')->textInput(['maxlength' => 255])?>
		
		    <?= $form->field($model, 'pos_code')->textInput(['maxlength' => 8])?>
		
		    <?= $form->field($model, 'phone_code_area')->textInput(['maxlength' => 5])?>
		
		    <?= $form->field($model, 'telephone')->textInput(['maxlength' => 20])?>
		
		    <?= $form->field($model, 'fax')->textInput(['maxlength' => 25])?>
		
		    <?= $form->field($model, 'website')->textInput(['maxlength' => 100])?>
  		</div>
	</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
