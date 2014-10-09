<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\modules\admin\models\JobVacationSearch;
use yii\helpers\Url;

$this->title = 'Apply Career as ' . $job->job_name;
$this->params ['breadcrumbs'] [] = [ 
		'label' => 'Career',
		'url' => [ 
				'index' 
		] 
];
$this->params ['breadcrumbs'] [] = $this->title;

?>

<div class="applicant-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<div class="applicant-form">

    <?php $form = ActiveForm::begin ( [ 
		'options' => [ 
				'class' => 'form-vertical' 
		],
// 		'fieldConfig' => [ 
// 				'template' => "{label}\n<div class=\"col-lg-8\">{input}{error}</div>",
// 				'labelOptions' => [ 
// 						'class' => 'col-lg-4 control-label' 
// 				] 
// 		] 
	] ); ?>
	 <?php 
     if(isset($model)){
    	echo $form->errorSummary($model);
     }
     ?>
	<br>
	<br>
	<div class="row">
		<div class="col-md-6">
			<?= $form->field($model, 'job_id')->dropDownList(JobVacationSearch::listJobActive(),['class'=>'form-control', 'onchange'=>'javascript: redirect(this)' /*,'prompt'=>'-Select', 'empty'=>'-Select'*/])?>		
		</div>
	</div>
				    
	<legend>Personal Information</legend>
		<div class="row">
			<div class="col-lg-6">			
			    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 70])?>
			
			    <?= $form->field($model, 'age')->textInput()?>
			
			    <?= $form->field($model, 'gender')->dropDownList(['M'=>'Male','F'=>'Female'], ['prompt'=>'-Select', 'empty'=>'-Select'])?>
			
			    <?= $form->field($model, 'born_date')->widget(yii\jui\DatePicker::className(),['language' => 'en', 'dateFormat' => 'yyyy-MM-dd','options'=>['class' => 'form-control']])?>
			    				
			    <?= $form->field($model, 'marital_status')->dropDownList(['S'=>'Single','M'=>'Maried'], ['prompt'=>'-Select', 'empty'=>'-Select'])?>
			    
			    <?= $form->field($model, 'photo')->fileInput()?>
			</div>
			<div class="col-lg-6">			
			    <?= $form->field($model, 'phone')->textInput(['maxlength' => 70])?>
			
			    <?= $form->field($model, 'mobile')->textInput()?>
			
			    <?= $form->field($model, 'home_address')->textarea(['rows' => 4])?>
			
			    <?= $form->field($model, 'email')->textInput()?>
			</div>
		</div>
		<!-- Table 1 -->

		<div class="row">
			<div class="col-lg-6">
				<legend>Formal Edications</legend>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'education_level1',['class'=>'control-label'])?></th>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'university_name1',['class'=>'control-label'])?></th>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'majoring1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'join_graduate_year1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'gpa1',['class'=>'control-label'])?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= $form->field($model, 'education_level1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'university_name1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'majoring1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'join_graduate_year1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'gpa1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'education_level2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'university_name2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'majoring2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'join_graduate_year2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'gpa2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'education_level3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'university_name3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'majoring3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'join_graduate_year3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'gpa3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-lg-6">
				<legend>Organization Experience</legend>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'organization_name1',['class'=>'control-label'])?></th>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'org_position1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'join_out_year1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'responsibility1',['class'=>'control-label'])?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= $form->field($model, 'organization_name1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'org_position1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'join_out_year1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'responsibility1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'organization_name2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'org_position2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'join_out_year2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'responsibility2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'organization_name3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'org_position3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'join_out_year3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'responsibility3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- Table 2 -->
		<div class="row">
			<div class="col-lg-6">
				<legend>Awards & Achievment</legend>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'award1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'year1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'description1',['class'=>'control-label'])?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= $form->field($model, 'award1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'year1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'description1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'award2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'year2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'description2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'award3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'year3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'description3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-lg-6">
				<legend>Work Experience</legend>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'work_experience1',['class'=>'control-label'])?></th>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'work_periode1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'work_position1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'work_description1',['class'=>'control-label'])?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= $form->field($model, 'work_experience1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_periode1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_position1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_description1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'work_experience2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_periode2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_position2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_description2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'work_experience3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_periode3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_position3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'work_description3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- Table 3 -->
		<div class="row">
			<div class="col-lg-12">
				<legend>Language Skill</legend>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="col-xs-2"><?= Html::activeLabel($model, 'language1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'listening1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'writing1',['class'=>'control-label'])?></th>
							<th class="col-xs-1"><?= Html::activeLabel($model, 'speaking1',['class'=>'control-label'])?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= $form->field($model, 'language1',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'listening1',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
							<td><?= $form->field($model, 'writing1',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
							<td><?= $form->field($model, 'speaking1',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'language2',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'listening2',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
							<td><?= $form->field($model, 'writing2',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
							<td><?= $form->field($model, 'speaking2',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
						</tr>
						<tr>
							<td><?= $form->field($model, 'language3',['template' => "{input}\n{error}"])->textInput(['maxlength' => 25])?></td>
							<td><?= $form->field($model, 'listening3',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
							<td><?= $form->field($model, 'writing3',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
							<td><?= $form->field($model, 'speaking3',['template' => "{input}\n{error}"])->dropDownList(['B'=>'Bad','F'=>'Fair','G'=>'Good'],['prompt'=>'-Select', 'empty'=>'select'])?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<?= $form->field($model, 'term_condition',['template' => "{input}\n{error}"])->checkBox()?>
				<p>Dengan ini saya menyatakan bahwa semua keterangan yang saya
					berikan di dalam formulir ini adalah benar, karena itu dapat
					dipergunakan sebagai pedoman dalam seleksi tenaga kerja. Jika
					keterangan yang saya berikan ternyata ada yang tidak benar, baik
					sebagian maupun seluruhnya, maka saya bersedia untuk menerima
					sanksi berupa pembatalan keikutsertaan saya dalam seleksi atau
					pemutusan hubungan kerja sesuai dengan peraturan perundang-undangan
					yang berlaku, apabila saya telah diterima sebagai karyawan. Saya
					memberikan wewenang kepada PT. Berlian Abadua Satu untuk
					memperoleh data yang lebih jelas tentang saya maupun tentang
					kebenaran keterangan di atas kepada pihak tertentu.</p>
					
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
			<?= $form->field($model, 'verificationCode')->widget(yii\captcha\Captcha::className(), ['options'=>['class'=>'form-control col-xs-2']])?>
			</div>
		</div>	
		<br>
		<div class="form-group">
        	<?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-red' : 'btn btn-primary'])?>
        	<?= Html::resetButton('Reset', ['class' =>'btn btn-primary'])?>
    	</div>

    <?php ActiveForm::end(); ?>
	</div>
</div>
<?php 
$url = Url::toRoute('/career/detail');
?>
<script>

function redirect(obj)
{
	var url = "<?= $url?>?id="+obj.value;
	document.location = url;
}
</script>