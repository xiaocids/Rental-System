<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\m1\models\CurrentAsset;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var app\modules\m1\models\ProspectCard $model
 */

$this->title = 'View Prospect Card #'.$model->prospect_card_number;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Prospect Cards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prospect-card-view">
	
	<div class="row">
		<div class="col-lg-6">
			<legend>Prospect Card</legend>
    		<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            'id',
		            'prospect_card_number',
		            'marketing_officer_name',
		            'company_name',
		            'company_title',
		            'company_address:ntext',
		            'business_type',
		            'phone_code_area',
		            //'telephone',
		            //'fax',
		            //'email:email',
		            //'other_information:ntext',
		            //'customer_type',
		            //'cp_name1',
		            //'cp_title1',
		            //'cp_name2',
		            //'cp_title2',
		            //'cp_name3',
		            //'cp_title3',
		            //'created_date',
		            //'created_by',
		            //'updated_date',
		            //'updated_by',
		        ],
		    ]) ?>
    	</div>
		<div class="col-lg-6">
			<legend>Contact Person</legend>
    		<?= DetailView::widget([
		        'model' => $model,
		        'attributes' => [
		            //'id',
		            //'prospect_card_number',
		            //'marketing_officer_name',
		            //'company_name',
		            //'company_title',
		            //'company_address:ntext',
		            //'business_type',
		            //'phone_code_area',
		            //'telephone',
		            //'fax',
		            //'email:email',
		            //'other_information:ntext',
		            //'customer_type',
		            'cp_name1',
		            'cp_title1',
		            'cp_name2',
		            'cp_title2',
		            'cp_name3',
		            'cp_title3',
		            //'created_date',
		            //'created_by',
		            //'updated_date',
		            //'updated_by',
		        ],
		    ]) ?>
    	</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<legend>Transportation Status: Rental</legend>
			<?php 
				$dataLease = new yii\data\ActiveDataProvider([
				    'query' => $model->getBCurrentLeases(),
				    'pagination' => [
				        'pageSize' => 5,
				    ],
				]);
			?>
			<?= GridView::widget([
		        'dataProvider' => $dataLease,
		        //'filterModel' => $searchModel,
		        'columns' => [
            		['class' => 'yii\grid\SerialColumn'],
            		//'id',
		            'brand_type_year',
		            'unit',
		            'end_of_contract',
		            'rental_company',
		           
		        ],
		    ]) ?>
		</div>
		<div class="col-lg-6">
			<legend>Transportation Status: Asset</legend>
			<?php 
				$dataAsset = new yii\data\ActiveDataProvider([
				    'query' => $model->getBCurrentAssets(),
				    'pagination' => [
				        'pageSize' => 5,
				    ],
				]);
			?>
			<?= GridView::widget([
		        'dataProvider' => $dataAsset,
		        //'filterModel' => $searchModel,
		        'columns' => [
            		['class' => 'yii\grid\SerialColumn'],
            		//'id',
		            'brand_type',
		            'unit',
		            'manufacture_year',		           
		        ],
		    ]) ?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<legend>Prospect Activity</legend>
			<?php 
				$dataAsset = new yii\data\ActiveDataProvider([
				    'query' => $model->getBProspectHistories(),
				    'pagination' => [
				        'pageSize' => 5,
				    ],
				]);
			?>
			<?= GridView::widget([
		        'dataProvider' => $dataAsset,
		        //'filterModel' => $searchModel,
		        'columns' => [
            		['class' => 'yii\grid\SerialColumn'],
            		//'id',
		            'prospect_date',
		            'meet_call_with',
		            'description',
		            'visit_call',
		            'class_status',
		            'next_action',	           
		        ],
		    ]) ?>
		</div>
	</div>
</div>

<?php 

?>