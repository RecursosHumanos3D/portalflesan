<?php

namespace app\controllers;

use Yii;
use app\models\Colaborador;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProntoController
 */
class ProntoController extends Controller
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

   public function actionGrupos(){
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];
        //var_dump($rutColaborador);die();
        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }

        return $this->render('grupos', []); 
      

    }
    
    public function actionBiblioteca(){
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];
        //var_dump($rutColaborador);die();
        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }

        return $this->render('biblioteca', []); 

    }

    public function actionDesempenio(){
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];
        //var_dump($rutColaborador);die();
        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }

        return $this->render('desempenio', []); 

    }

    public function actionCapacitacion(){
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];
        //var_dump($rutColaborador);die();
        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }

        return $this->render('capacitacion', []); 
      
    }

    public function actionInduccion(){
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];
        //var_dump($rutColaborador);die();
        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }

        return $this->render('induccion', []); 

    }

    public function actionMovilidad(){
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];
        //var_dump($rutColaborador);die();
        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }

        return $this->render('movilidad', []); 
      

    }
}
