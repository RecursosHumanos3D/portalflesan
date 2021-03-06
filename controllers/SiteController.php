<<<<<<< HEAD
<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Colaborador;
use app\controllers\BuscarController;

class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];

        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }else{
            return $this->redirect(['colaborador/perfil']);
        }
    }


    /**
     * Login action.
     *
     * @return Response|string
     */


        public function actionPreguntas(){
        $session = Yii::$app->session;
        $rutColaborador = $session['rut'];
        //var_dump($rutColaborador);die();
        if ($rutColaborador == null) {
            $model = new Colaborador();
            return $this->redirect(['site/login', 'model' => $model]);
        }

        return $this->render('preguntas', []); 

    }
    public function actionLogin() {

        $session = Yii::$app->session;
         $session->remove('rut');
         
        if ($session['rut'] != null) {
            $session->remove('rut');
        }

        $model = new \app\models\Colaborador();
        if ($model->load(Yii::$app->request->post())) {

           
            $valid = BuscarController::findColaborador($model->correo, $model->pass);





            if ($valid != false) {

                $session = Yii::$app->session;
                $session['rut'] = $valid->rutColaborador;
                $session['nombreColaborador'] = $valid->nombreColaborador;
                $session->open();

                
               
                Yii::$app->response->redirect(array('colaborador/perfil', 'rutColaborador' => $valid->rutColaborador));
              

           

            } else {
                $model = new \app\models\Colaborador();


                if (Yii::$app->request->post()["Colaborador"]["correo"] == "" && Yii::$app->request->post()["Colaborador"]["pass"] == "") {
                    \Yii::$app->getSession()->setFlash('error', ' <div class="col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×</button>
                           <span class="glyphicon glyphicon-no"></span> <strong>Mensaje de error</strong>
                            <hr class="message-inner-separator">
                            <p>
                           Ingrese sus credenciales</p>
                        </div>
                    </div>');
                } else {
                    \Yii::$app->getSession()->setFlash('error', ' <div class="col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×</button>
                           <span class="glyphicon glyphicon-no"></span> <strong>Mensaje de error</strong>
                            <hr class="message-inner-separator">
                            <p>
                            Error en el ingreso de datos</p>
                        </div>
                    </div>');
                }



                $this->layout = 'loginLayout';
                return $this->render('login', [
                            'model' => $model,
                ]);
            }
        } else {
            $this->layout = 'loginLayout';
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public static function actionGmail($correo){

            $valids = BuscarController::findColaboradors($correo);

         if ($valids!=null) {

           
            $valid = BuscarController::findColaborador($valids->correo, $valids->pass);





            if ($valid != false) {

                $session = Yii::$app->session;
                $session['rut'] = $valid->rutColaborador;
                $session['nombreColaborador'] = $valid->nombreColaborador;
                $session->open();

                
               
                Yii::$app->response->redirect(array('colaborador/perfil', 'rutColaborador' => $valid->rutColaborador));
              

           

            } else {
                $model = new \app\models\Colaborador();


                if (Yii::$app->request->post()["Colaborador"]["correo"] == "" && Yii::$app->request->post()["Colaborador"]["pass"] == "") {
                    \Yii::$app->getSession()->setFlash('error', ' <div class="col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×</button>
                           <span class="glyphicon glyphicon-no"></span> <strong>Mensaje de error</strong>
                            <hr class="message-inner-separator">
                            <p>
                           Ingrese sus credenciales</p>
                        </div>
                    </div>');
                } else {
                    \Yii::$app->getSession()->setFlash('error', ' <div class="col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×</button>
                           <span class="glyphicon glyphicon-no"></span> <strong>Mensaje de error</strong>
                            <hr class="message-inner-separator">
                            <p>
                            Error en el ingreso de datos</p>
                        </div>
                    </div>');
                }



                 return Yii::$app->response->redirect(array('site/login'));

            }
        } else {
             return Yii::$app->response->redirect(array('site/login'));

        }
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionSalir() {
         Yii::$app->session->destroy();

         return Yii::$app->response->redirect(array('site/login'));
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }


     public function actionRecuperar(){
         $session = Yii::$app->session;

         if ($session['rut'] != null) {
            $session->remove('rut');
          }
         
        $model = new \app\models\Colaborador();
        if ($model->load(Yii::$app->request->post())) {
        // Yii::$app->session->inicia($model->rutColaborador);
            
            $valid = BuscarController::findColaboradors($model->correo);
               
              
            if($valid != false){

         
            Yii::$app->mailer->compose()
            ->setFrom('contacto@induccion.org')
            ->setTo($valid->correo)
            ->setSubject('Solicitud de recuperacion de contraseña:')
            ->setHtmlBody('<b>su contraseña es:</b>'." ".$valid->pass)
            ->send();

             $model = new \app\models\Colaborador();
            Yii::$app->response->redirect(array('site/login', 'model' => $model));


            }else{
                $model = new \app\models\Colaborador();

                if(Yii::$app->request->post()["Colaborador"]["correo"]=="")
                    {
                        \Yii::$app->getSession()->setFlash('error', ' <div class="col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×</button>
                           <span class="glyphicon glyphicon-no"></span> <strong>Mensaje de error</strong>
                            <hr class="message-inner-separator">
                            <p>
                           Ingrese sus credenciales</p>
                        </div>
                    </div>');
                    }else{
                        \Yii::$app->getSession()->setFlash('error', ' <div class="col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×</button>
                           <span class="glyphicon glyphicon-no"></span> <strong>Mensaje de error</strong>
                            <hr class="message-inner-separator">
                            <p>
                            Error en el ingreso de datos</p>
                        </div>
                    </div>');
                    }

                 $this->layout = 'loginLayout';
                 return $this->render('recuperar', [
                        'model' => $model,
            ]);

            }
           
        } else {
            $this->layout = 'loginLayout';
            return $this->render('recuperar', [
                        'model' => $model,
            ]);
        }

    }


    public function actionCompadre($rutColaborador){
        $model= BuscarController::findColaboradorRut($rutColaborador);
        $perfil = BuscarController::findPerfil($model->idperfilRed);
        $model2= BuscarController::encuentraAmigos($rutColaborador);

        $session['foto'] = $perfil[0]['rfoto'];
        $session['apellidosColaborador'] = $model[0]['apellidosColaborador'];

        return $this->render('perfilAmigo', [
                    'model' => $model,
                    'perfil' => $perfil,
                    'model2' => $model2,]);
    }


}
=======
<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\controllers\BuscarController;

class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {

        $session = Yii::$app->session;

        if ($session['rut'] != null) {
            $session->remove('rut');
        }

        $model = new \app\models\Colaborador();
        if ($model->load(Yii::$app->request->post())) {


            $valid = BuscarController::findColaborador($model->correo, $model->pass);





            if ($valid != false) {

                $session = Yii::$app->session;
                $session['rut'] = $valid->rutColaborador;
                $session['nombreColaborador'] = $valid->nombreColaborador;
                $session->open();

                
               
                Yii::$app->response->redirect(array('colaborador/perfil', 'rutColaborador' => $model->rutColaborador));
              

           

            } else {
                $model = new \app\models\Colaborador();


                if (Yii::$app->request->post()["Colaborador"]["correo"] == "" && Yii::$app->request->post()["Colaborador"]["pass"] == "") {
                    \Yii::$app->getSession()->setFlash('error', ' <div class="col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×</button>
                           <span class="glyphicon glyphicon-no"></span> <strong>Mensaje de error</strong>
                            <hr class="message-inner-separator">
                            <p>
                           Ingrese sus credenciales</p>
                        </div>
                    </div>');
                } else {
                    \Yii::$app->getSession()->setFlash('error', ' <div class="col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×</button>
                           <span class="glyphicon glyphicon-no"></span> <strong>Mensaje de error</strong>
                            <hr class="message-inner-separator">
                            <p>
                            Error en el ingreso de datos</p>
                        </div>
                    </div>');
                }



                $this->layout = 'loginLayout';
                return $this->render('login', [
                            'model' => $model,
                ]);
            }
        } else {
            $this->layout = 'loginLayout';
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

    public function actionCompadre($rutColaborador){
        $model= BuscarController::findColaboradorRut($rutColaborador);
        $perfil = BuscarController::findPerfil($model->idperfilRed);
        $model2= BuscarController::encuentraAmigos($rutColaborador);

        $session['foto'] = $perfil[0]['rfoto'];
        $session['apellidosColaborador'] = $model[0]['apellidosColaborador'];

        return $this->render('perfilAmigo', [
                    'model' => $model,
                    'perfil' => $perfil,
                    'model2' => $model2,]);
    }

}
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
