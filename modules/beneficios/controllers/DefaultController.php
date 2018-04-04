<?php

namespace app\modules\beneficios\controllers;

use yii\web\Controller;
<<<<<<< HEAD
use app\models\Colaborador;
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

/**
 * Default controller for the `beneficios` module
 */
class DefaultController extends Controller
{
<<<<<<< HEAD
  

    public function actionPerfil() {

        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];

        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }



        $model3 = new Rpost();
        $model = BuscarController::findColaboradorRut($rutColaborador);
        $perfil = BuscarController::findPerfil($model->idperfilRed);
        $model4 = BuscarController::encuentraPost($rutColaborador);
        $actividad = BuscarController::findMuro($rutColaborador);
        $estadistica = BuscarController::findEstadistica($model->idestadisticas);

        //tareas
        $dependencia = BuscarController::findDependencia2($rutColaborador);
        $tarea = BuscarController::findTareasRecibidas($dependencia->idDependencias);
        //var_dump($tarea);die();
        
        //Misiones
        $mision = BuscarController::encuentraMisiones();

        //publicidad

       $publicidad = BuscarController::findPublicidad();


        $session['foto'] = $perfil->rfoto;
        $session['rutColaborador'] = $model->rutColaborador;
        $session['nombreColaborador'] = $model->nombreColaborador;
        $session['apellidosColaborador'] = $model->apellidosColaborador;
        // var_dump($actividad);die();

      
        return $this->render('perfil', [

                    'model' => $model,
                    'model3' => $model3,
                    'model4' => $model4,
                    'perfil' => $perfil,
                    'actividad' => $actividad,
                    'estadistica' => $estadistica,
                    'dependencia' => $dependencia,
                    'tarea' => $tarea,
                    'mision' => $mision,
                    'publicidad' => $publicidad,
        ]);

    }
=======
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
