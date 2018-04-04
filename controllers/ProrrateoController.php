<?php

namespace app\controllers;

use Yii;
use app\models\Prorrateo;
use app\models\Colaborador;
use app\models\ProrrateoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\controllers\BuscarProrrateoController;
use app\controllers\BuscarController;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * ProrrateoController implements the CRUD actions for Prorrateo model.
 */
class ProrrateoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * 
     * @return mixed
     */
    public function actionIndex()
    {
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];

        if ($rutColaborador == null) {
             $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }

        $model = BuscarController::findColaboradorRut($rutColaborador);
        $rrhh = BuscarProrrateoController::findPerfilRRHH($model->idperfil);

        //var_dump($rrhh);die();
        $session['foto'] = $perfil->rfoto;
        $session['rutColaborador'] = $model->rutColaborador;
        $session['nombreColaborador'] = $model->nombreColaborador;
        $session['apellidosColaborador'] = $model->apellidosColaborador;
        
        //Redirecciona a la vista de Recursos Humanos (2)
        if ($rrhh["idperfil"]==2){



        return $this->render('prorrateorrhh', [
           
        ]);


        }else if($rrhh["idperfil"]==4){  //Redirecciona a la vista de Jefe(4)
        $dependencia = BuscarProrrateoController::findDependencia($rutColaborador);
         $prorrateo = BuscarProrrateoController::findProrrateo();
          var_dump($prorrateo);die();
 
        return $this->render('prorrateojefe', [
           'dependencia' => $dependencia,
        ]);
        }
        else{  //No permite entrar a otro tipos de perfil deusuaro
         throw new NotFoundHttpException('The requested page does not exist.');
        }

    }


    public function actionImportExcel(){
        $inputFile = $ruta;

        try {
            $inputFiletype = \PHPExcel_IOFactory::identify($inputFile);
            $objReader = \PHPExcel_IOFactory::CreateReader($inputFiletype);
            $objPHPExcel = $objReader->load($inputFile);
        } catch (Exception $ex) {
            die('Error');
        }

        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        for ($row = 2; $row <= $highestRow; ++$row) {

          $rowData = $sheet ->rangeToArray('A'.$row. ':' .$highestColumn.$row, NULL, TRUE, FALSE);

          $prorrateo = BuscarProrrateoController::findProrrateo();
          var_dump($prorrateo);die();
          //save to branch table.
          $modelHeader = new FakturOut();
          $modelDetail = new FakturOutDetail();

          $modelHeader ->name = $rowData[0][0];
          $modelHeader ->age = $rowData[0][1];
          $modelHeader ->address = $rowData[0][2];
          $modelHeader ->academic_id = $rowData[0][3];
          $modelHeader ->mother_name = $rowData[0][4];
          $modelHeader ->father_Name = $rowData[0][5];
          $modelHeader ->gender = $rowData[0][6];
          $modelHeader ->height = $rowData[0][7];
          $modelHeader ->weight= $rowData[0][8];
          $modelHeader ->save();
        }

    }



    /**
     * Displays a single Prorrateo model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Prorrateo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Prorrateo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idprorrateo]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Prorrateo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idprorrateo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Prorrateo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Prorrateo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Prorrateo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Prorrateo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionRRHH(){
      
         

        if ($rrhh == '2' ){
             return $this->render('index', [ 
                        'model' =>$model,
                ]);
        }else{
            throw new NotFoundHttpException('The requested page does not exist.');
            
        }

    }

    public function actionProrrateoJefe(){

    }
}
