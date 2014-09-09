<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\ActiveForm;
use kartik\builder\TabularForm;
use kartik\grid\GridView;
use app\modules\m1\models\CurrentAsset;
use app\models\Parameter;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\ProspectCard $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="prospect-card-form">

    <?php $form = ActiveForm::begin ( [ 
						'type' => ActiveForm::TYPE_HORIZONTAL,
						'formConfig' => [ 
								'labelSpan' => 2,
								'deviceSize' => ActiveForm::SIZE_SMALL 
						],
						'fieldConfig' => [ 
								'template' => "{label}\n<div class=\"\">{input}{error}</div>" 
						]
						,
						'formConfig' => [ 
								'labelSpan' => 4,
								'deviceSize' => ActiveForm::SIZE_SMALL 
						] 
				] );
    
    	   		$query = CurrentAsset::find();
				// add your conditions
				$query->andWhere ('b_propect_id = '.$model->id);
				$dataProvider = new \yii\data\ActiveDataProvider ( [ 
						'query' => $query,
						'pagination' => [ 
								'pagesize' => 10 
						] 
				] );
    	$modelAsset = new CurrentAsset();
    	$attribs = $modelAsset->formAttribs;
		$attribs ['attributes'] ['status'] = [ 
			'type' => TabularForm::INPUT_WIDGET,
			'widgetClass' => \kartik\widgets\SwitchInput::classname () 
		];
	?>
	
	<legend>Information Customer Prospect</legend>
	<div class="row">
		<div class="col-lg-6">
			
		    <?= $form->field($model, 'prospect_card_number')->textInput(['maxlength' => 25, 'readonly'=>true])?>
		    
		    <?= $form->field($model, 'marketing_officer_name')->textInput(['maxlength' => 100, 'readonly'=>true])?>
		
		    <?= $form->field($model, 'customer_type')->dropDownList(Parameter::getCustomerType(), ['prompt'=>'-Select']);?>	    
		    
			<?= $form->field($model, 'business_type')->dropDownList(Parameter::getBusinessType(), ['prompt'=>'-Select']);?>
		
			<div class="form-group">
				<?= Html::activeLabel($model, 'company_name', ['class'=>'col-sm-4 control-label']); ?>
				
					<div class="col-xs-6">
						<?= Html::activeTextInput($model, 'company_name', ['class'=>'form-control col-sm-4']); ?>
					</div>
				<div class="col-xs-2">
						<?= Html::activeDropDownList($model, 'company_title', Parameter::getCompanyTitle() ,['class'=>'form-control col-sm-4', 'prompt'=>'-Select']); ?>
					</div>

				<div class="col-sm-offset-4 col-sm-8">
					<?= Html::error($model, 'company_name',['class'=>''])?>
				</div>
			</div>
		    <?php //$form->field($model, 'company_name')->textInput(['maxlength' => 150])?>
		    <?php // $form->field($model, 'company_title')->textInput(['maxlength' => 10]) ?>
		
		    <?= $form->field($model, 'company_address')->textarea(['rows' => 3])?>	
		</div>

		<div class="col-lg-6">
			<div class="form-group">
				<?= Html::activeLabel($model, 'telephone', ['class'=>'col-sm-4 control-label']); ?>
				
					<div class="col-xs-2">
						<?= Html::activeTextInput($model, 'phone_code_area', ['class'=>'form-control col-sm-2']); ?>
					</div>
				<div class="col-xs-6">
						<?= Html::activeTextInput($model, 'telephone', ['class'=>'form-control col-sm-4']); ?>
					</div>

				<div class="col-sm-offset-4 col-sm-8">
					<?= Html::error($model, 'company_name',['class'=>''])?>
				</div>
			</div>
						
			<?= $form->field($model, 'fax')->textInput(['maxlength' => 25]) ?>
			
			<?= $form->field($model, 'email')->textInput(['maxlength' => 200]) ?>
			
		    <?= $form->field($model, 'other_information')->textarea(['rows' => 6]) ?>
		</div>
	</div>

	<legend>Contact Persons</legend>
	<div class="row">
		<div class="col-lg-6">
			<?= $form->field($model, 'cp_name1')->textInput(['maxlength' => 60]) ?>
		
		    <?= $form->field($model, 'cp_name2')->textInput(['maxlength' => 60]) ?>
		
		    <?= $form->field($model, 'cp_name3')->textInput(['maxlength' => 60]) ?>
		</div>
		<div class="col-lg-6">
			<?= $form->field($model, 'cp_title1')->textInput(['maxlength' => 45]) ?>
		
		    <?= $form->field($model, 'cp_title2')->textInput(['maxlength' => 45]) ?>
		
		    <?= $form->field($model, 'cp_title3')->textInput(['maxlength' => 45]) ?>
		</div>
	</div>

	<legend>Current Asset</legend>
	<div class="row"></div>

	<div class="form-group">
		   	<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
	</div>
	<div class="row">
	<?php //echo TabularForm::widget ( [ 
// 			'dataProvider' => $dataProvider,
// 			'form' => $form,
// 			'attributes' => $attribs,
			
// 	] ); ?>
	</div>
    <?php ActiveForm::end(); ?>
</div>
