<?php

namespace app\controllers;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ColaboradorSearch;
use app\models\Colaborador;
use app\models\Perfil;
use app\models\Area;
use app\models\Cargos;
use app\models\Empresas;
use app\models\Rpost;
use app\models\Rperfilredsocial;
use app\models\Restadisticas;
use app\models\Ramigos;
use app\models\RcomentarioContenidos;
use app\models\Rcontenido;
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

class BuscarBeneficiosController extends Controller {

   

    public static function buscarCategoriaBeneficio() {
        
        $query = new \yii\db\Query;
        $query->select([
                    '*',
        ])
        ->from('tipoBeneficioConvenioFlesan')
        ->all();

        $command = $query->createCommand();
        return $command->queryAll();
        
    }

    public static function findTipoConv($idtipo){
        if (($model = TipoBeneficioConvenioFlesan::find(['idtipo' => $idtipo])->all()) !==null){
            return $model;
        }
    }

    public static function actionConvenios($idtipo){
        if (($model = BeneficioConvenioFlesan::find()->where(['idtipo' => $idtipo])->all()) !==null){
        

        $titulo = "";
        foreach($model as $m){
            $out = '<div class="col-md-12" style="color: #676767;"><strong style="color: #bd1301;">'.$m["titulo"].': </strong>'.$m["descripcion"].'<br><br></div><br><br><br>';
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