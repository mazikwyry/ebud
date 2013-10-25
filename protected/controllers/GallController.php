<?php

class GallController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		if (!empty($_FILES)) {
				$model=new Gall;

				$tempFile = $_FILES['file']['name'];
				$file = explode(".",$tempFile);
				$extName = $file[count($file)-1];
				if($extName=='jpeg')
	                $extName = 'jpg';
	            $fileName=md5(date('Y-m-d H:i:s')).".".$extName;
	            $srcFileBig = "images/images/big/".$fileName ;
	            $srcFileMedium = "images/images/medium/".$fileName ;
	            $srcFileSmall = "images/images/small/".$fileName ;
	            
	            $image = WideImage::loadFromFile($_FILES['file']['tmp_name']);
	            if($image->getWidth()>$image->getHeight())
	                $resized = $image->resize(800, null);
	            else
	                $resized = $image->resize(null, 800);
	            $resized->saveToFile($srcFileBig);  

	            $resized = $image->resize(200, null)->crop("center", "middle", 100, 100);
	            $resized->saveToFile($srcFileSmall);    
	            
	            $resized = $image->resize(250, null)->crop("center", "middle", 240, 240);
	            $resized->saveToFile($srcFileMedium);

	            $model->id_parent = $_POST['id_parent'];
	            $model->parent_type = $_POST['parent_type'];
	            $model->photo = $fileName;
	            if ($model->save()){
		            $status_header = 'HTTP/1.1 200 OK';
				    header($status_header);
				    header('Content-type:text/html');
				    echo "file ".$fileName." uploaded!";
				}else{
					$status_header = 'HTTP/1.1 400 Bad Request';
					header($status_header);
					header('Content-type:text/html');
				}
		}else{
			$status_header = 'HTTP/1.1 400 Bad Request';
			header($status_header);
			header('Content-type:text/html');
		}
		Yii::app()->end();
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Gall']))
		{
			$model->attributes=$_POST['Gall'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Gall');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Gall('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Gall']))
			$model->attributes=$_GET['Gall'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Gall::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gall-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
