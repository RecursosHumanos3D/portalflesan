<?php

namespace app\controllers;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ProrrateoSearch;
use app\models\Prorrateo;
use app\models\Ccprorateo;
use app\models\DependenciaProrrateo;
use app\models\ProrrateoColaborador;
use app\models\Perfil;

use app\models\Colaborador;

class BuscarProrrateoController extends Controller {

   public static function findPerfilRRHH($idperfil) {
        
        if (($model = Colaborador::find()->where(['idperfil' => $idperfil])->one()) !== null) {
            return $model;
        } else {
            throw new Exception("Error Processing Request", 1);
            
        }
    }

    public static function findDependencia($rutcolaborador){
        if (($model = DependenciaProrrateo::find()->where(['rutColaborador1' => $rutcolaborador])->all()) !== null){
            return $model;
        }else{
            throw new Exception("Error Processing Request", 1);
            
        }

    }

    public static function findProrrateo(){
        if(($model = Prorrateo::find()->all()) !==null){
            return $model;
        }else{
        throw new Exception("Error Processing Request", 1);
        }
    }
}