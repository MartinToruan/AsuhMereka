<?php

class DataDiriAnakController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'rights', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new DataDiriAnak;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['DataDiriAnak'])) {
            $model->attributes = $_POST['DataDiriAnak'];
            $imageUploadFile = CUploadedFile::getInstance($model, 'foto_profil');
            $imageName = mktime().$imageUploadFile->name;
            $model->foto_profil = $imageName;

            if ($model->save())
                {
                    //Save Foto
                    $imageUploadFile->saveAs(Yii::app()->basePath.'/../images/anak/'.$imageName);

                    $idUsr=Yii::app()->User->ID;
                    $temp=Yii::app()->db->createCommand("select id_data_diri_perantara from data_diri_perantara where user_id='$idUsr'")->queryAll();
                    $tamp=$temp [0]["id_data_diri_perantara"];
                    $sql = "insert into perantara_anak (id_perantara, id_anak) values (:id1,:id2 )";
                    $parameters = array(":id1"=>$tamp, ':id2' =>$model->id_data_diri_anak);
                    Yii::app()->db->createCommand($sql)->execute($parameters);

                    $this->redirect(array('DataAkademikAnak/Create', 'id' => $model->id_data_diri_anak));
                }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['DataDiriAnak'])) {
            $model->attributes = $_POST['DataDiriAnak'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_data_diri_anak));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
// we only allow deletion via POST request
            $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('DataDiriAnak');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new DataDiriAnak('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['DataDiriAnak']))
            $model->attributes = $_GET['DataDiriAnak'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = DataDiriAnak::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'data-diri-anak-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
