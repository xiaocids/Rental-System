<?php
//print_r($model);
use yii\helpers\Html;

$this->title = Yii::t('app', '#'.$model->prospect_card_number);
?>

<div style="">
	<table style="width: 1200px">
		<tr style="background-color: #e3e3e3;">
			<th colspan="3"><strong>PROSPECT CARD</strong></th>
		</tr>
	</table>

	<div style="width: 43%; float: left;">
		<table class="table">
			<tr>
				<td style="width: 100px;">Prospect Card No</td>
				<td style="width: 3px;">:</td>
				<td><?=$model->prospect_card_number?></td>
			</tr>
			<tr>
				<td>Salesman</td>
				<td>:</td>
				<td><?=$model->marketing_officer_name?></td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td>:</td>
				<td><?=$model->company_name?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><?=$model->company_address?></td>
			</tr>
			<tr>
				<td>Business Type</td>
				<td>:</td>
				<td><?=$model->business_type?></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td><?=$model->phone_code_area.'-'.$model->telephone?></td>
			</tr>
			<tr>
				<td>Fax</td>
				<td>:</td>
				<td><?=$model->fax?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?=$model->email?></td>
			</tr>
			<tr>
				<td>Contact Person</td>
				<td>:</td>
				<td>
					<ol>
						<li><?=$model->cp_name1.' - '.$model->cp_title1?></li>
						<li><?=$model->cp_name2.' - '.$model->cp_title2?></li>
						<li><?=$model->cp_name3.' - '.$model->cp_title3?></li>
					</ol>
				</td>
			</tr>
			<tr>
				<td>Other Information</td>
				<td>:</td>
				<td style="height: 60px;"><?=Html::encode($model->other_information)?></td>
			</tr>
		</table>
	</div>
	<div style="width: 55%; float: right;">
		<table class="" style="width: 100%;">
			<tr style="background-color: #e3e3e3;">
				<th colspan="4">Transportation Status : Lease</th>
			</tr>
			<tr style="background-color: #e3e3e3;">
				<td align="center">Brand/Type/Year</td>
				<td align="center">Unit</td>
				<td align="center">End of Contract</td>
				<td align="center">Rental Company</td>
			</tr>
			<?php 			
			foreach ($model->getBCurrentLeases()->all() as $lease) {
			?>
			<tr>
				<td><?= $lease->brand_type_year?></td>
				<td align="center"><?= $lease->unit?></td>	
				<td align="center"><?= $lease->end_of_contract?></td>				
				<td><?= $lease->rental_company?></td>
			</tr>
			<?php
				}
			?>		
		</table>
		<table class="" style="width: 100%;">
			<tr style="background-color: #e3e3e3;">
				<th colspan="3">Transportation Status : Asset</th>
			</tr>
			<tr style="background-color: #e3e3e3;">
				<td align="center">Brand/Type</td>
				<td align="center">Unit</td>
				<td align="center">Manufacture Year</td>
			</tr>
			<?php 			
			foreach ($model->getBCurrentAssets()->all() as $asset) {
			?>
			<tr>
				<td><?= $asset->brand_type?></td>
				<td align="center"><?= $asset->unit?></td>				
				<td align="center"><?= $asset->manufacture_year?></td>
			</tr>
			<?php
				}
			?>			
		</table>
	</div>
</div>


<div class="">
	<table style="width: 1200px; font-size: 13px;">
		<thead>
			<tr style="background-color: #e3e3e3;">
				<th rowspan="2" valign="middle" align="center" style="width: 10%;">Date</th>
				<th rowspan="2" valign="middle" align="center" style="width: 15%;">Meet/Call
					With</th>
				<th rowspan="2" valign="middle" align="center" style="width: 30%">Description</th>
				<th colspan="2" valign="middle" align="center">Prospecting Status</th>
				<th rowspan="2" valign="middle" align="center" style="width: 30%">Next
					Action</th>
				<th rowspan="2" valign="middle" align="center" style="width:25%">Comment</th>
			</tr>
			<tr style="background-color: #e3e3e3;">
				<th align="center" style="width: 8%">V/C</th>
				<th align="center" style="width: 8%">Class</th>
			</tr>
		</thead>
		<tbody>
		<?php 			
			foreach ($model->getBProspectHistories()->all() as $history) {
		?>
			<tr>
				<td><?= date('d/m/Y', strtotime($history->prospect_date))?></td>
				<td><?= $history->meet_call_with?></td>				
				<td><?= $history->description?></td>
				<td align="center"><?= $history->visit_call?></td>
				<td align="center"><?= $history->class_status?></td>
				<td><?= $history->next_action?></td>
				<td><?= $history->comment?></td>
			</tr>
		<?php
			}
		?>					
		</tbody>
	</table>
</div>