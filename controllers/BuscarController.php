<?php

namespace app\controllers;
<<<<<<< HEAD
use Yii;
=======

>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ColaboradorSearch;
use app\models\Colaborador;
use app\models\Perfil;
use app\models\Area;
<<<<<<< HEAD
use app\models\Cargos;
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
use app\models\Empresas;
use app\models\Rpost;
use app\models\Rperfilredsocial;
use app\models\Restadisticas;
use app\models\Ramigos;
use app\models\RcomentarioContenidos;
use app\models\Rcontenido;
<<<<<<< HEAD
use app\models\Ractividad;
use app\models\Dependencia;
use app\models\bbeneficios;
use app\models\Wtarea;
use app\models\Wmision;
use app\models\rpublicidad;
use app\models\Rlikepost;
use app\models\Bpuntajecolaborador;
use app\models\Rpasatiempo;
use app\models\RhobbieColaborador;
use app\models\Bcolaboradorbeneficio;
use app\models\BeneficioConvenioFlesan;
use app\models\TipoBeneficioConvenioFlesan;

class BuscarController extends Controller {

    public static function findColaboradors($correo) {
        
        $model3 = Colaborador::find()
                ->where(['correo' => $correo])
                ->one();
                
        if($model3 != null){
            return $model3;
        }
        else{
            return false;
        }

    }

    public static function findColaborador($correo, $pass) {
=======
use app\models\RActividad;
use app\models\Dependencia;
use app\models\WTarea;
use app\models\WMision;
use app\models\rpublicidad;
class BuscarController extends Controller {

    public function findColaborador($correo, $pass) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        $model = Colaborador::find()
                ->where(['correo' => $correo, 'pass' => $pass])
                ->one();

        if ($model != null) {
            return $model;
        } else {
            return false;
        }
    }
<<<<<<< HEAD
    

    public static function findColaboradorRut($rutColaborador) {
        if (($model = Colaborador::findOne(['rutColaborador' => $rutColaborador])) !== null) {
=======

    public function findColaboradorRut($rut) {
        if (($model = Colaborador::findOne($rut)) !== null) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            return $model;
        }
        var_dump("no lo encontro");
        die();
    }

<<<<<<< HEAD
    public static function findColaborador1($rutColaborador) {
        
        if (($model = \app\models\Colaborador::findOne(['rutColaborador' => $rutColaborador])) !== null) {
            return $model;
        } else {
            //return $model;
        }
    }



    public static function findDependencias($rut) {
=======
    public function findDependencias($rut) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = Dependencia::findOne($rut)) !== null) {
            return $model;
        }
        var_dump("no lo encontro");
        die();
    }

<<<<<<< HEAD
    public static function findBeneficios(){

        $query = new \yii\db\Query;
        $query->select([
                    '*',
        ])
        ->from('bbeneficios')
        ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();
        return $model;
    }


    
    public static function encuentraMisiones(){
=======
    
    public function encuentraMisiones(){
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        $query = new \yii\db\Query;
        $query->select([
                    '*',
        ])
        ->from('wmision')
        ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();
        return $model;
    }

<<<<<<< HEAD
    public static function findPerfil($id) {
=======
    public function findPerfil($id) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = Rperfilredsocial::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

<<<<<<< HEAD
    public static function findEstadistica($id) {
=======
    public function findEstadistica($id) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = Restadisticas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

<<<<<<< HEAD
    public static function findDependencia2($rutColaborador2)
=======
    public function findDependencia2($rutColaborador2)
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    {
        if (($model = Dependencia::findOne(['rutColaborador2' => $rutColaborador2 ])) !== null) {
            return $model;
        }
    
        throw new NotFoundHttpException('The requested page does not exist.');
    }



<<<<<<< HEAD
    public static function findEmpresa($id) {
=======
    public function findEmpresa($id) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = Empresas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

<<<<<<< HEAD
    public static function findArea($id) {
=======
    public function findArea($id) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = Area::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

<<<<<<< HEAD
    public static function findCargo($id) {
        if (($model = Cargos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public static function encuentraPost($rutColaborador) {
=======
    public function encuentraPost($rutColaborador) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = Rpost::find()->where(['rut1' => $rutColaborador])->orWhere(['rut2' => $rutColaborador])->orderBy(['ridPost' => SORT_ASC])->all()) !== null) {

            return $model;
        }
    }

    

    

<<<<<<< HEAD
    public static function encuentraColaborador($rutColaborador) {
=======
    public function encuentraColaborador($rutColaborador) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = \app\models\Colaborador::find()->where(['rutColaborador' => $rutColaborador])->all()) !== null) {

            return $model;
        } else {

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

<<<<<<< HEAD
    public static function encuentraAmigos($rutColaborador) {
=======
    public function encuentraAmigos($rutColaborador) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = \app\models\Ramigos::find()->where(['rut1' => $rutColaborador])->all()) !== null) {

            return $model;
        }
    }

<<<<<<< HEAD
    public static function findPost($idPost)

    {
        if (($model = Rpost::findOne(['ridPost' => $idPost])) !== null){
=======
    public function findPost($idPost)

    {
        if (($model = Rpost::findOne(['RidPost' => $idPost])) !== null){
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            return $model;
        } else
        {
            throw new NotFoundHttpException("The requested page does not exists");
            
        }
    }

<<<<<<< HEAD
    public static function findActividad($idPost)

    {
        if (($model = Ractividad::findOne(['ridpost' => $idPost])) !== null){
=======
    public function findActividad($idPost)

    {
        if (($model = RActividad::findOne(['ridpost' => $idPost])) !== null){
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            return $model;
        } else
        {
            throw new NotFoundHttpException("The requested page does not exists");
            
        }
    }

<<<<<<< HEAD
    public static function findCanje($rut){


         $query = new \yii\db\Query;
        $query->select([
                    '*',
        ])
        ->from('bcolaboradorbeneficio')
        ->where("bcolaboradorbeneficio.rutColaborador={$rut}")
        ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();
        return $model;
    }

      public static function findHobb($idperfil){
        if (($model = \app\models\RhobbieColaborador::find()->where(['ridperfil' => $idperfil])->one()) !== null) {

            return $model;
        }else{
         
        }
    }

    public static function findHobbies($idperfil){
        if (($model = \app\models\RhobbieColaborador::find()->where(['ridperfil' => $idperfil])->all()) !== null) {

           


            return \yii\helpers\ArrayHelper::toArray($model);
        }else{
            $model = new rhobbiecolaborador();
        }
    }

     public static function findHobbiesTipo($idperfil){
        if (($model = \app\models\RhobbieColaborador::find()->where(['ridperfil' => $idperfil])->all()) !== null) {

            return $model;
        }else{
            $model = new Rhobbiecolaborador();
        }
    }

    public static function findNombreHobbie($id){
        if (($model = \app\models\Rpasatiempo::find()->where(['id' => $id])->one()) !== null) {

            return $model;
        }else{
              throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
         public static function findPasa(){
         if (($model = \app\models\Rpasatiempo::find()->where(['rtipo' => '2'])->all()) !== null) {

            return $model;
        }else{
            $model = new Rpasatiempo();
        }
    }

    

     public static function findPasatiempos(){
         if (($model = \app\models\Rpasatiempo::find()->all()) !== null) {

            return $model;
        }else{
            $model = new Rpasatiempo();
        }
    }

    public static function canjeMes($rut, $idbeneficio){

       
        $connection = Yii::$app->db;

        $count = Yii::$app->db->createCommand('select count(*) from bcolaboradorbeneficio where MONTH(bfechaCanje) = MONTH(now()) and rutColaborador = "'.$rut.'" and bId_Beneficio="'.$idbeneficio.'"')
             ->queryScalar();

        return $count;

    }

    public static function canjeA($rut, $idbeneficio){

       
        $connection = Yii::$app->db;

        $count = Yii::$app->db->createCommand('select count(*) from bcolaboradorbeneficio where YEAR(bfechaCanje) = YEAR(now()) and rutColaborador = "'.$rut.'" and bId_Beneficio="'.$idbeneficio.'"')
             ->queryScalar();

        return $count;

    }

    public static function findAntiguedad($rut){
        $connection = Yii::$app->db;
        $count = Yii::$app->db->createCommand('select TIMESTAMPDIFF(MONTH,fechaingreso,CURDATE()) FROM colaborador where rutColaborador="'.$rut.'"')
        ->queryScalar();
        // var_dump($count);die();
        return $count;

    }

    public static function encuentraColaboradores(){
=======
    public function encuentraColaboradores(){
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        $query = new \yii\db\Query;
        $query->select([
                    '*',
        ])
        ->from('colaborador')
        ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();
        return $model;
    }

<<<<<<< HEAD
    public static function findPostAmigos($idPost, $idAmigos){
=======
    public function findPostAmigos($idPost, $idAmigos){
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if(($model = Post::findOne(['ridpost' => $idPost, 'rIdAmigos' => $idAmigos])) !== null){
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

<<<<<<< HEAD
   

    public static function encuentraColaboradorPost($idpost) {
=======
    public function findTareaRecibida($idDependencias){
        if(($model = WTarea::findOne(['idDependencias' => $idDependencias])) !== null){
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function encuentraColaboradorPost($idpost) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = \app\models\Colaborador::find()->where(['ridpost' => $idPost])->all()) !== null) {

            return $model;
        } else {

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

<<<<<<< HEAD
    public static function findPerfiles($idperfil) {
=======
    public function findPerfiles($idperfil) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = Rperfilredsocial::find()->where(['idperfilRed' => $idperfil])->all()) !== null) {

            return $model;
        } else {

            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

<<<<<<< HEAD
    public static function findTareasRecibidas($idDependencias) {
        if (($model = Wtarea::find()->where(['idDependencias' => $idDependencias])->all()) !== null) {
=======
    public function findTareasRecibidas($idDependencias) {
        if (($model = WTarea::find()->where(['idDependencias' => $idDependencias])->all()) !== null) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

            return $model;
        } else {

            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function findtarea($widtarea) {
        if (($model = WTarea::findOne(['widtarea' => $widtarea])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

<<<<<<< HEAD
    public static function findContenido($idContenido) {
=======
    public function findContenido($idContenido) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        if (($model = Rcontenido::findOne(['idcontenido' => $idContenido])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

<<<<<<< HEAD





    public static function findMuro($rutColaborador) {
=======
    public function findMuro($rutColaborador) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        $query = new \yii\db\Query;
        $query->select([
                    'ractividad.idactividad',
                    'ractividad.rutColaborador1',
                    'ractividad.rutColaborador2',
                    'ractividad.ridpost',
                    'ractividad.ridtipo_post',
                    'rpost.ridPost',
                    'rpost.rdescripcionPost',
                    'rpost.rfoto',
                    'rpost.rtipoPost',
                    'rpost.rlikes',
                    'rpost.rrotador',
<<<<<<< HEAD
                    'rpost.rfecha',
                    'rpost.rdescArchivo'
=======
                    'rpost.rfecha'
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                        ]
                )
                ->from('rpost')
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->limit(8)
                ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();

        return $model;
    }

<<<<<<< HEAD
    public static function findOthers($rutColaborador){        

        $query = new \yii\db\Query;
        $query->select([
                    'ractividad.idactividad',
                     'ractividad.ridpost',
                    'rpost.ridPost',
                    'rpost.rfoto',
                    'rpost.rtipoPost',
                    'rpost.rrotador',
                    'rpost.rdescArchivo'
                        ]
                )
                ->from('rpost')
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->where("rpost.rut1={$rutColaborador}")
                ->andWhere("rpost.rtipoPost=2")
                ->orWhere("rpost.rut2={$rutColaborador}")
                ->limit('3')
                ->offset('3')
                ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();

        return $model;
    
    }

     public static function findLast($rutColaborador){        

        $query = new \yii\db\Query;
        $query->select([
                    'ractividad.idactividad',
                     'ractividad.ridpost',
                    'rpost.ridPost',
                    'rpost.rfoto',
                    'rpost.rtipoPost',
                    'rpost.rrotador',
                    'rpost.rdescArchivo'
                        ]
                )
                ->from('rpost')
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->where("rpost.rut1={$rutColaborador}")
                ->andWhere("rpost.rtipoPost=2")
                ->orWhere("rpost.rut2={$rutColaborador}")
                ->limit('3')
                ->offset('6')
                ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();

        return $model;
    
    }


    public static function findTopFotos($rutColaborador) {
         

        $query = new \yii\db\Query;
        $query->select([
                      'ractividad.idactividad',
                     'ractividad.ridpost',
                    'rpost.ridPost',
                    'rpost.rfoto',
                    'rpost.rtipoPost',
                    'rpost.rrotador',
                    'rpost.rdescArchivo'
                        ]
                )
                ->from('rpost') 
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->where("rpost.rut1={$rutColaborador}")
                ->andWhere("rpost.rtipoPost=2")
                ->orWhere("rpost.rut2={$rutColaborador}")
                ->limit('3')
                ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();

        return $model;
    }

    public static function findFotos($rutColaborador) {

        $query = new \yii\db\Query;
        $query->select([
                     'ractividad.idactividad',
                     'ractividad.ridpost',
                    'rpost.ridPost',
                    'rpost.rfoto',
                    'rpost.rtipoPost',
                    'rpost.rrotador',
                    'rpost.rdescArchivo'
                        ]
                )
                ->from('rpost')
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->where("rpost.rut1={$rutColaborador}")
                ->andWhere("rpost.rtipoPost=2")
                ->orWhere("rpost.rut2={$rutColaborador}")
                ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();

        return $model;
    }

    public static function findMuror($rutColaborador, $posisi, $perpage) {
=======
    public function findMuror($rutColaborador, $posisi, $perpage) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        $query = new \yii\db\Query;
        $query->select([
                    'ractividad.idactividad',
                    'ractividad.rutColaborador1',
                    'ractividad.rutColaborador2',
                    'ractividad.ridpost',
                    'ractividad.ridtipo_post',
                    'rpost.ridPost',
                    'rpost.rdescripcionPost',
                    'rpost.rfoto',
                    'rpost.rfecha',
                    'rpost.rtipoPost',
                    'rpost.rlikes',
                    'rpost.rnombreArchivo',
<<<<<<< HEAD
                    'rpost.rrotador',
                    'rpost.rdescArchivo'
=======
                    'rpost.rrotador'
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

                        ]
                )
                ->from('rpost')
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->limit($perpage)
                ->offset($posisi)
                ->all();
                //var_dump($query);die();
        $command = $query->createCommand();
        $model = $command->queryAll();

        return $model;
    }

<<<<<<< HEAD
    public static function encuentraColaboradorEstado($rutColaborador) {
=======
    public function encuentraColaboradorEstado($rutColaborador) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    if (($model = Colaborador::find()->where(['rutColaborador' => $rutColaborador])->all()) !== null) {

        return $model;
    } else {

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }


<<<<<<< HEAD
    public static function findComentarios($idPost) {
=======
    public function findComentarios($idPost) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    $query = new \yii\db\Query;
    $query->select([

                'colaborador.nombreColaborador',
                'colaborador.apellidosColaborador',
                'rperfilredsocial.rfoto',
                'rperfilredsocial.rrotador',
                'rcomentarios.rcontenido',
                'rcomentarios.fecha'
                    ]
            )
            ->from('colaborador')
            ->join('INNER JOIN', 'rcomentarios', 'rcomentarios.rut =colaborador.rutColaborador')
            ->join('INNER JOIN', 'rperfilredsocial', 'rperfilredsocial.idperfilRed =colaborador.idperfilRed')
            ->where("rcomentarios.ridpost={$idPost}")
            ->all();

    $command = $query->createCommand();
    $model = $command->queryAll();
    //var_dump($model);die();
    return $model;
}

<<<<<<< HEAD
    public static function findMisbeneficios($rutColaborador) {
    $query = new \yii\db\Query;
    $query->select([

                'bbeneficios.bNombre',
                'bbeneficios.bValorBeneficio',
                'bcolaboradorbeneficio.bfechaCanje',
                'bcolaboradorbeneficio.bvalorCanje'                    ]
            )
            ->from('bbeneficios')
            ->join('INNER JOIN', 'bcolaboradorbeneficio', 'bbeneficios.bId_Beneficio =bcolaboradorbeneficio.bId_Beneficio')
            ->where("bcolaboradorbeneficio.rutColaborador={$rutColaborador}")
            ->all();

    $command = $query->createCommand();
    $model = $command->queryAll();
    //var_dump($model);die();
    return $model;
}

public static function findComentariosContenidos($idContenido) {
=======
public function findComentariosContenidos($idContenido) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    $query = new \yii\db\Query;
    $query->select([
                'colaborador.nombreColaborador',
                'colaborador.apellidosColaborador',
                'rperfilredsocial.rfoto',
                'rcomentariocontenidos.rcontenido',
                'rperfilredsocial.rrotador'
                    ]
            )
            ->from('colaborador')
            ->join('INNER JOIN', 'rcomentariocontenidos', 'rcomentariocontenidos.rut =colaborador.rutColaborador')
            ->join('INNER JOIN', 'rperfilredsocial', 'rperfilredsocial.idperfilRed =colaborador.idperfilRed')
            ->where("rcomentariocontenidos.ridContenido={$idContenido}")
            ->all();

    $command = $query->createCommand();
    $model = $command->queryAll();
    //var_dump($model);die();
    return $model;
}

<<<<<<< HEAD
public static function encuentraComentarios($idPost) {
=======
public function encuentraComentarios($idPost) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    $query = new \yii\db\Query;
    $query->select([

                'colaborador.nombreColaborador',
                'colaborador.apellidosColaborador',
                'rperfilredsocial.rfoto',
                'rcomentarios.rcontenido',
                    ]
            )
            ->from('colaborador')
            ->join('INNER JOIN', 'rcomentarios', 'rcomentarios.rut =colaborador.rutColaborador')
            ->join('INNER JOIN', 'rperfilredsocial', 'rperfilredsocial.idperfilRed =colaborador.idperfilRed')
            ->where("rcomentarios.ridpostst={$idPost}")
            ->all();

    $command = $query->createCommand();
    $model = $command->queryAll();
    //var_dump($model);die();
    return $model;
}

<<<<<<< HEAD
   

    public static function findMurora($rutColaborador, $posisi, $perpage, $rutAmigo) {
=======
    public function actionReload($page, $rutColaborador){
        $numpage =$page;
        $perpage = 3;
        $posisi = (($numpage-1) * $perpage);
        $actividad = $this->findMuror($rutColaborador, $posisi, $perpage);
        $model = $this->encuentraColaborador($rutColaborador);
        $total = "";

        foreach($actividad as $rpost){

            
             if ($rpost["rtipoPost"] == 1) {


               $posteador = $this->encuentraColaboradorEstado($rpost["rut"]);
               $posteador2 = $this->encuentraColaboradorEstado($rpost["rut2"]);
               $comentarios = $this->findComentarios($rpost["ridPost"]);                                      
               $modelo = $this->renderAjax('estado', [
                              'model' => $model,
                              'rpost' => $rpost,
                              'rcomentarios' => $comentarios,
                              'posteador' => $posteador,
                              'posteador2' => $posteador2,
                              'rutColaborador' => $rutColaborador,
                                        ]);
               $total =$total.$modelo;
            }

            if ($rpost["rtipoPost"] == 2) {


               $posteador = $this->encuentraColaboradorEstado($rpost["rut1"]);
               $posteador2 = $this->encuentraColaboradorEstado($rpost["rut2"]);
               $comentarios = $this->findComentarios($rpost["ridPost"]);                                      
               $modelo = $this->renderAjax('imagen', [
                              'model' => $model,
                              'rpost' => $rpost,
                              'rcomentarios' => $comentarios,
                              'posteador' => $posteador,
                              'posteador2' => $posteador2,
                              'rutColaborador' => $rutColaborador,

                                        ]);
               $total =$total.$modelo;
            }


            if ($rpost["rtipoPost"] == 3) {


               $posteador = $this->encuentraColaboradorEstado($rpost["rut1"]);
               $posteador2 = $this->encuentraColaboradorEstado($rpost["rut2"]);
               $comentarios = $this->findComentarios($rpost["ridPost"]);
               $modelo = $this->renderAjax('video', [
                              'model' => $model,
                              'rpost' => $rpost,
                              'rcomentarios' => $comentarios,
                              'posteador' => $posteador,
                              'posteador2' => $posteador2,
                              'rutColaborador' => $rutColaborador,

                                        ]);
               $total =$total.$modelo;
            }
           
            if ($rpost["rtipoPost"] == 5) {


               $posteador = $this->encuentraColaboradorEstado($rpost["rut1"]);
               $posteador2 = $this->encuentraColaboradorEstado($rpost["rut2"]);
               $comentarios = $this->findComentarios($rpost["idPost"]);                                      
               $modelo = $this->renderAjax('youtube', [
                              'model' => $model,
                              'rpost' => $rpost,
                              'rcomentarios' => $comentarios,
                              'posteador' => $posteador,
                              'posteador2' => $posteador2,
                              'rutColaborador' => $rutColaborador,

                                        ]);
               $total =$total.$modelo;
            }

              if ($rpost["rtipoPost"] == 6) {


               $posteador = $this->encuentraColaboradorEstado($rpost["rut1"]);
               $posteador2 = $this->encuentraColaboradorEstado($rpost["rut2"]);
               $comentarios = $this->findComentarios($rpost["ridPost"]);                                      
               $megusta = $this->megusta($rutColaborador,$rpost["ridPost"]);
               $modelo = $this->renderAjax('archivo', [
                              'model' => $model,
                              'rpost' => $rpost,
                              'rcomentarios' => $comentarios,
                              'posteador' => $posteador,
                              'posteador2' => $posteador2,
                              'rutColaborador' => $rutColaborador,

                                        ]);
               $total =$total.$modelo;
            }

             if ($rpost["rtipoPost"] == 12321) {


               $posteador = $this->encuentraColaboradorEstado($rpost["rut1"]);
               $posteador2 = $this->encuentraColaboradorEstado($rpost["rut2"]);
               $comentarios = $this->findComentarios($rpost["ridPost"]);                                      
               $modelo = $this->renderAjax('facebook', [
                              'model' => $model,
                              'rpost' => $rpost,
                              'rcomentarios' => $comentarios,
                              'posteador' => $posteador,
                              'posteador2' => $posteador2,
                              'rutColaborador' => $rutColaborador,

                                        ]);
               $total =$total.$modelo;
            }



        }

        
         return $total;



    }

    public function findMurora($rutColaborador, $posisi, $perpage) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        $query = new \yii\db\Query;
        $query->select([
                    'ractividad.idactividad',
                    'ractividad.rutColaborador1',
                    'ractividad.rutColaborador2',
                    'ractividad.ridpost',
                    'ractividad.ridtipo_post',
                    'rpost.ridPost',
                    'rpost.rdescripcionPost',
                    'rpost.rfoto',
                    'rpost.rtipoPost',
                    'rpost.rlikes',
                    'rpost.rnombreArchivo',
                    'rpost.rrotador',
<<<<<<< HEAD
                    'rpost.rfecha',
                    'rpost.rdescArchivo'
=======
                    'rpost.rfecha'
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                        ]
                )
                ->from('rpost')
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->where("rpost.rut1={$rutColaborador}")
<<<<<<< HEAD
                ->orWhere("rpost.rut1={$rutAmigo}")
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                ->orWhere("rpost.rut2={$rutColaborador}")
                ->limit($perpage)
                ->offset($posisi)
                ->all();
                //var_dump($query);die();
        $command = $query->createCommand();
        $model = $command->queryAll();

        return $model;
    }


<<<<<<< HEAD
       public static function findMuroa($rutColaborador) {
=======
       public function findMuroa($rutColaborador) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        $query = new \yii\db\Query;
        $query->select([
                    'ractividad.idactividad',
                    'ractividad.rutColaborador1',
                    'ractividad.rutColaborador2',
                    'ractividad.ridpost',
                    'ractividad.ridtipo_post',
                    'rpost.ridPost',
                    'rpost.rdescripcionPost',
                    'rpost.rfoto',
                    'rpost.rtipoPost',
                    'rpost.rlikes',
                    'rpost.rrotador',
<<<<<<< HEAD
                    'rpost.rfecha',
                    'rpost.rdescArchivo'
=======
                    'rpost.rfecha'
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                        ]
                )
                ->from('rpost')
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                ->where("rpost.rut1={$rutColaborador}")
                ->orWhere("rpost.rut2={$rutColaborador}")
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->limit(8)
                ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();
<<<<<<< HEAD
        return $model;

    }

           public static function findComunicaciones() {

        $query = new \yii\db\Query;
        $query->select([
                    'ractividad.idactividad',
                    'ractividad.rutColaborador1',
                    'ractividad.rutColaborador2',
                    'ractividad.ridpost',
                    'ractividad.ridtipo_post',
                    'rpost.ridPost',
                    'rpost.rdescripcionPost',
                    'rpost.rfoto',
                    'rpost.rtipoPost',
                    'rpost.rlikes',
                    'rpost.rrotador',
                    'rpost.rfecha',
                    'rpost.rdescArchivo'
                        ]
                )
                ->from('rpost')
                ->join('INNER JOIN', 'ractividad', 'rpost.ridPost=ractividad.ridpost')
                ->where("rpost.rut1=101010")
                ->orderBy(['ractividad.idactividad' => SORT_DESC])
                ->limit(8)
                ->all();

        $command = $query->createCommand();
        return  $command->queryAll();

    }

    public static function findNotificacion($rutColaborador) {
        if (($model = RNotificacion::find()->where(['rrrutNotificado' => $rutColaborador, 'rrleido' => 1])->all()) !== null) {
=======

        return $model;
    }

    public function findNotificacion($rutColaborador) {
        if (($model = RNotificacion::find()->where(['rrutNotificado' => $rutColaborador, 'rleido' => 1])->all()) !== null) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

            return $model;
        }
       
    }
<<<<<<< HEAD

    public static function findLikePost($idPost){
     if (($model = Rlikepost::find()->where(['ridPost' => $idPost])->one()) !== null) {

            return $model;
        }
        
    }

    public static function findLikePost2($idPost){
     if (($model = Rlikepost::find()->where(['ridPost' => $idPost])->one()) !== null) {

           return true;
        }
        else{
          return false;
        }
        
    }

    public static function megusta($rutColaborador, $idPost) {
        if (($model = Rlikepost::find()->where(['rut' => $rutColaborador, 'ridPost' => $idPost])->one()) !== null) {
=======
    public function megusta($rutColaborador, $idPost) {
        if (($model = Rpost::find()->where(['rut1' => $rutColaborador, 'ridPost' => $idPost])->one()) !== null) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

            return true;
        }
        else{
          return false;
        }
    }

<<<<<<< HEAD
   


    public static function findPublicidad() {
=======
    public function findPublicidad() {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        $query = new \yii\db\Query;
        $query->select([
                    '*',
        ])
        ->from('rpublicidad')
        ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();
        return $model;
    }

<<<<<<< HEAD
    public static function findPuntaje($rutColaborador) {
        
        if (($model = \app\models\Bpuntajecolaborador::findOne(['rutColaborador' => $rutColaborador])) !== null) {
            return $model;
        } else {
            //return $model;
        }
    }

    public static function findPuntosUsados($rutColaborador){
        if (($model = \app\models\Bcolaboradorbeneficio::find()->where(['rutColaborador' => $rutColaborador])->all()) !== null) {
            return $model;
        } else {
            //return $model;
        }

    }

    public static function buscarBeneficio($bId_Beneficio) {
        
        if (($model = \app\models\Bbeneficios::findOne(['bId_Beneficio' => $bId_Beneficio])) !== null) {
            return $model;
        } else {
            //return $model;
        }
    }

    public static function findTipoConv($idtipo){
        if (($model = TipoBeneficioConvenioFlesan::find(['idtipo' => $idtipo])->all()) !==null){
            return $model;
        }
    }

    public static function actionConvenios($idtipo){
        if (($model = BeneficioConvenioFlesan::find()->where(['idtipo' => $idtipo])->all()) !==null){


            $tipo = TipoBeneficioConvenioFlesan::findOne($idtipo);
            
        $titulo = "<h4>".$tipo->iconografia." ".$tipo->nombre."</h4><hr>";
        foreach($model as $m){
            $out = '<div class="col-md-12" style="color: #676767;background-color: white;margin-bottom:2%;">
            <div class="col-md-4">
            <img src="http://via.placeholder.com/150x90" style="width:100%;padding: 7px;">
            </div>
            <div class="col-md-8">
            <h3 style="font-weight:bolder;font-size:14px;">'.$m["titulo"].'</h3>
            <p style="padding: 7px;">'.$m["descripcion"].'</p>
            </div>
            
            </div><br><br>';
            $titulo=$titulo.$out;

        }


        return $titulo;

        }
    }


// metodos de busqueda de persona en vista listado


    public static function actionNombrep($nombreColaborador) {

    if (($model = Colaborador::find()->orWhere(['like', 'nombreColaborador', $nombreColaborador])->orWhere(['like', 'apellidosColaborador', $nombreColaborador])->all()) !== null) {


            $titulo = "";
        foreach($model as $m){
            $out = '<tbody>
                                                <tr>
                                                        <td><a href="index.php?r=colaborador/compadre&rutAmigo='.$m["rutColaborador"].'">'.$m["nombreColaborador"].'</a></td>
                                                        <td>'.$m["apellidosColaborador"].'</td>
                                                        <td>'.$m["correo"].'</td>
                                                    </tr>
                                             </tbody>';
            $titulo=$titulo.$out;

        }


        return $titulo;


    } else {

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }


  public static function actionFiltro($nombreColaborador, $apellidosColaborador, $empresa, $area, $cargo) {

    if (($model = Colaborador::find()->orWhere(['like', 'nombreColaborador', $nombreColaborador])
                                     ->orWhere(['like', 'apellidosColaborador', $apellidosColaborador])
                                     ->orWhere(['idArea' => $area])
                                     ->orWhere(['idCargo' => $cargo])->all()) !== null) {


            $titulo = "";
        foreach($model as $m){
            $out = '<tbody>
                                                <tr>
                                                        <td><a href="index.php?r=colaborador/compadre&rutAmigo='.$m["rutColaborador"].'">'.$m["nombreColaborador"].'</a></td>
                                                        <td>'.$m["apellidosColaborador"].'</td>
                                                        <td>'.$m["correo"].'</td>
                                                    </tr>
                                             </tbody>';
            $titulo=$titulo.$out;

        }


        return $titulo;


    } else {

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }



    public static function actionCargop($idCargo) {
    if (($model = Colaborador::find()->where(['idCargo' => $idCargo])->all()) !== null) {

       
           $titulo = "";
        foreach($model as $m){
            $out = '<tbody>
                                                <tr>
                                                        <td><a href="index.php?r=colaborador/compadre&rutAmigo='.$m["rutColaborador"].'">'.$m["nombreColaborador"].'</a></td>
                                                        <td>'.$m["apellidosColaborador"].'</td>
                                                        <td>'.$m["correo"].'</td>
                                                    </tr>
                                             </tbody>';
            $titulo=$titulo.$out;

        }


        return $titulo;





    } else {

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }


    public static function actionAreap($idArea) {
      if (($model = Colaborador::find()->where(['idArea' => $idArea])->all()) !== null) {

       
           $titulo = "";
        foreach($model as $m){
            $out = '<tbody>
                                                <tr>
                                                        <td><a href="index.php?r=colaborador/compadre&rutAmigo='.$m["rutColaborador"].'">'.$m["nombreColaborador"].'</a></td>
                                                        <td>'.$m["apellidosColaborador"].'</td>
                                                        <td>'.$m["correo"].'</td>
                                                    </tr>
                                             </tbody>';
            $titulo=$titulo.$out;

        }


        return $titulo;





    } else {

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public static function actionEmpresap($rutEmpresa) {


            $query = new \yii\db\Query;
    $query->select([

                'colaborador.nombreColaborador',
                'colaborador.apellidosColaborador',
                'colaborador.correo',
                'colaborador.rutColaborador'
                    ]
            )
            ->from('colaborador')
            ->join('INNER JOIN', 'sucursal', 'sucursal.idSucursal =colaborador.idSucursal')
            ->where("sucursal.rutEmpresa={$rutEmpresa}")
            ->all();

    $command = $query->createCommand();
    $model = $command->queryAll();


          if ($model) {

       
           $titulo = "";
        foreach($model as $m){
            $out = '<tbody>
                                                <tr>
                                                        <td><a href="index.php?r=colaborador/compadre&rutAmigo='.$m["rutColaborador"].'">'.$m["nombreColaborador"].'</a></td>
                                                        <td>'.$m["apellidosColaborador"].'</td>
                                                        <td>'.$m["correo"].'</td>
                                                    </tr>
                                             </tbody>';
            $titulo=$titulo.$out;

        }


        return $titulo;





    } else {

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

// FIN metodos de busqueda de persona en vista listado

     public static function findListado() {
    if (($model = Colaborador::find()->limit(50)->all()) !== null) {

        return $model;
    }


    }

         public  function actionTodoc() {
    if (($model = Colaborador::find()->all()) !== null) {

            $titulo = "";
        foreach($model as $m){
            $out = '<tbody>
                                                <tr>
                                                        <td><a href="index.php?r=colaborador/compadre&rutAmigo='.$m["rutColaborador"].'">'.$m["nombreColaborador"].'</a></td>
                                                        <td>'.$m["apellidosColaborador"].'</td>
                                                        <td>'.$m["correo"].'</td>
                                                    </tr>
                                             </tbody>';
            $titulo=$titulo.$out;

        }


        return $titulo;
    }


    }

    public static function encuentraConvenios() {
        $query = new \yii\db\Query;
        $query->select([
                    '*',
        ])
        ->from('tipoBeneficioConvenioFlesan')
        ->all();

        $command = $query->createCommand();
        $model = $command->queryAll();
        return $model;
    }

    

    public static function encuentraBeneficio($id){
        if (($model = Bbeneficios::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
            
        }
    }

    public static function encuentraBeneficios($idbeneficio) {
        if (($model = \app\models\Bbeneficios::find()->where(['bId_Beneficio' => $idbeneficio])->all()) !== null) {

            return $model;
        }
    }

     public static function encuentraTodobib() {
        $query = new \yii\db\Query;
        $query->select([
                'bibContenido.bibIdContenido',
                'bibContenido.bibNombreContenido',
                'bibContenido.bibDescripcionContenido',
                'bibCategoria.bibNombreCategoria',
                'bibTipoContenido.bibNombreTipoContenido',
                'bibContenido.bibFecha',
                'bibContenido.bibVisita',
                'bibContenido.bibFoto',


                    ]
            )
            ->from('bibContenido')
            ->join('INNER JOIN', 'bibTipoContenido', 'bibTipoContenido.bibIdTipo =bibContenido.bibIdTipo')
            ->join('INNER JOIN', 'bibCategoria', 'bibCategoria.bibIdCategoria =bibContenido.bibIdCategoria')
            ->all();

    $command = $query->createCommand();
    return  $command->queryAll();
        
    }

      public  function actionEncuentrab($nombreContenido) {
        $query = new \yii\db\Query;
        $query->select([
                'bibContenido.bibIdContenido',
                'bibContenido.bibNombreContenido',
                'bibContenido.bibDescripcionContenido',
                'bibCategoria.bibNombreCategoria',
                'bibTipoContenido.bibNombreTipoContenido',
                'bibContenido.bibFecha',
                'bibContenido.bibVisita',
                'bibContenido.bibFoto'
                    ]
            )
            ->from('bibContenido')
            ->join('INNER JOIN', 'bibTipoContenido', 'bibTipoContenido.bibIdTipo =bibContenido.bibIdTipo')
            ->join('INNER JOIN', 'bibCategoria', 'bibCategoria.bibIdCategoria =bibContenido.bibIdCategoria')
            ->where(['like', 'bibContenido.bibNombreContenido', $nombreContenido])
            ->orWhere(['like', 'bibContenido.bibDescripcionContenido', $nombreContenido])
            ->orWhere(['like', 'bibCategoria.bibNombreCategoria', $nombreContenido])
            ->all();

    $command = $query->createCommand();
    $model =  $command->queryAll();

    $titulo = "";
        foreach($model as $contenido){
            $out = ' <div class="col-md-3">     
                <div class="social-share-wrap">
                <a href="/web/index.php?r=colaborador/contenidos&bibIdContenido='.$contenido["bibIdContenido"].'">
                  <div class="cover">
                    <img class="image" src="../web/img/biblioteca/miniatura/'.$contenido["bibFoto"].'">
                  </div>
                  <div class="content">
                    <div class="title"><b>'.$contenido["bibNombreContenido"].'</b></div>
                    <div style="float: left;" class="price">'.$contenido["bibVisita"].' visitas</div><div style="float: right;" class="price">'.$contenido["bibFecha"].'</div>
                  </div>
                  </a>
                </div>
              </div>';
            $titulo=$titulo.$out;

        }


        return $titulo;
        
    }

         public static function encuentraContenido($bibIdContenido) {
        $query = new \yii\db\Query;
        $query->select([
                'bibContenido.bibIdContenido',
                'bibContenido.bibNombreArchivo',
                'bibContenido.bibNombreContenido',
                'bibContenido.bibDescripcionContenido',
                'bibCategoria.bibNombreCategoria',
                'bibTipoContenido.bibIdTipo',
                'bibContenido.bibFecha',
                'bibContenido.bibVisita',
                'bibContenido.bibFoto',


                    ]
            )
            ->from('bibContenido')
            ->join('INNER JOIN', 'bibTipoContenido', 'bibTipoContenido.bibIdTipo =bibContenido.bibIdTipo')
            ->join('INNER JOIN', 'bibCategoria', 'bibCategoria.bibIdCategoria =bibContenido.bibIdCategoria')
            ->where("bibContenido.bibIdContenido={$bibIdContenido}")
            ->all();

    $command = $query->createCommand();
    return  $command->queryAll();
        
    }


    public function notificacionb($rutColaborador,$idbeneficio){

       
  
 
          $beneficio = $this->encuentraBeneficio($idbeneficio);
          $modelo = $this->encuentraColaboradores();
          $posteador = $this->encuentraColaborador($rutColaborador2);
          

             
          $model = new Rnotificacion();
          $model->rrutNotificado = $m["rutColaborador"];
          $model->rcontenido = $rutColaborador." ha canjeado un beneficio";
          $model->rleido = 1;
          $model->rurl = 1;
          $model->save(false);

          $model->rcontenido = $posteador->nombreColaborador." ha canjeado un nuevo beneficio: ".$beneficio->bNombre."  http://flesan.gt3d.cl";


            Yii::$app->mailer->compose()
            ->setFrom('contacto@induccion.org')
            ->setTo('cgarrido@rrhh3d.cl')
            ->setSubject('De:Notificaciones FLESAN')
            ->setHtmlBody('<p>Lo canjieeeeeee</p>')
            ->send();
}
}
=======

}
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
