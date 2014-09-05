<?php

namespace app\modules\m1\controllers;

use Yii;
use app\modules\m1\models\ProspectCard;
use app\modules\m1\models\ProspectCardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use mPDF;

/**
 * ProspectCardController implements the CRUD actions for ProspectCard model.
 */
class ProspectCardController extends Controller {
	public function behaviors() {
		return [ 
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'delete' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	
	/**
	 * Lists all ProspectCard models.
	 *
	 * @return mixed
	 */
	public function actionIndex() {
		$searchModel = new ProspectCardSearch ();
		$dataProvider = $searchModel->search ( Yii::$app->request->getQueryParams () );
		
		return $this->render ( 'index', [ 
				'dataProvider' => $dataProvider,
				'searchModel' => $searchModel 
		] );
	}
	
	/**
	 * Displays a single ProspectCard model.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionView($id) {		
		return $this->render ( 'view', [ 
				'model' => $this->findModel ( $id ) 
		] );
	}
	
	/**
	 * Displays a single ProspectCard model partial.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionView2($id) {
		return $this->render ( 'view2', [ 
				'model' => $this->findModel ( $id ) 
		] );
	}
	
	/**
	 * Creates a new ProspectCard model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 *
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new ProspectCard ();
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->id 
			] );
		} else {
			return $this->render ( 'create', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Updates an existing ProspectCard model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel ( $id );
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->id 
			] );
		} else {
			return $this->render ( 'update', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Deletes an existing ProspectCard model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel ( $id )->delete ();
		
		return $this->redirect ( [ 
				'index' 
		] );
	}
	
	/**
	 * Finds the ProspectCard model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param string $id        	
	 * @return ProspectCard the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = ProspectCard::findOne ( $id )) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException ( 'The requested page does not exist.' );
		}
	}
	public function actionBeginProspecting() {
		$model = new ProspectCard ();
		return $this->render ( 'beginProspecting', [ 
				'model' => $model 
		] );
	}
	public function actionCheckCompany() {
		if (Yii::$app->request->get ()) {
			$company_name = $_GET ['company_name'];
			if ($company_name != "") {
				$model = ProspectCard::findOne ( [ 
						'LOWER(company_name)' => strtolower ( $company_name ) 
				] );
				if ($model == false) {
					// return $this->renderPartial('resultCompany', ['model'=>$model]);
					return $this->renderPartial ( '_searchCompanyResult', [ 
							'model' => $model,
							'company_name' => $company_name 
					] );
				} else {
					return $this->renderPartial ( '_searchCompanyResult', [ 
							'model' => $model,
							'company_name' => $company_name 
					] );
				}
			} else {
				return '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Please input Company Name!</div>';
			}
		} else {
			throw new NotFoundHttpException ( 'The requested page does not exist.' );
		}
	}
	public function actionGenerateCard() {
		if (Yii::$app->request->get ()) {
			$company_name = $_GET ['id'];
			$model = new ProspectCard ();
			//$model->prospect_card_number = $this->generateNumber ();
			$model->company_name = $company_name;
			$model->marketing_officer_name = ' ';
			$model->company_address = " ";
			$model->business_type = ' ';
			$model->customer_type = ' ';
			$model->created_date = date ( 'Y-m-d' );
			$model->created_by = 1;
			if ($model->save ( false )) {
				return $this->redirect ( [ 
						'view',
						'id' => $model->id 
				] );
			} else {
				return 'Ouch';
			}
		} else {
			throw new NotFoundHttpException ( 'The requested page does not exist.' );
		}
	}
	
	public function actionViewPartial($id) {
		return $this->renderPartial ( 'view2', [ 
				'model' => $this->findModel ( $id )
		] );
	}
	
	public function actionPrint($id){
		$this->layout = '//reports/noHeader';
		$mpdf = new mPDF('utf-8', 'A4');
		//$mpdf->setHeader($header,'O');
		$mpdf->SetAutoFont(AUTOFONT_ALL);
		$mpdf->SetTitle("Acme Trading Co. - Invoice");
		$mpdf->SetHTMLFooter('<p style="font-size:xx-small;"><strong>Class = Classification</strong>: <strong>(I)</strong> Intoduce Letter, <strong>(QA)</strong> Qualification-Approach, <strong>(CON)</strong> Conviction, <strong>(QUO)</strong> Quotation, <strong>(D)</strong> Demonstration, <strong>(CL)</strong> Closing.</p>
				<p style="font-size:xx-small;"><strong>V=Visit, C=Call</strong></p>');
		$mpdf->WriteHTML($this->render( 'print', [
				'model' => $this->findModel ( $id )
		]));
		
		//$mpdf->WriteHTML('Hello<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>world!');
		$mpdf->Output('#'.$this->findModel ( $id )->prospect_card_number.'.pdf', 'I');
		
// 		return $this->renderPartial ( 'print', [
// 				'model' => $this->findModel ( $id )
// 		] );
	}
	
	public function actionCompanyList($q = null) {
		$query = new Query;
		$query->select('company_name')
		->from('b_prospect_card')
		->where('company_name LIKE "%' . $q .'%"')
		->orderBy('company_name');
		$command = $query->createCommand();
		$data = $command->queryAll();
		$out = [];
		foreach ($data as $d) {
			$out[] = $d['company_name'];
		}
		echo Json::encode($out);
	}
}
