<<<<<<< HEAD
<style class="cp-pen-styles">/* Form */
.form {
  position: relative;
  z-index: 1;
  background: #343434c2;
  max-width: 300px;
  margin: 0 auto 100px;
  padding: 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: center;
}
.form .thumbnail {
  background: #EF3B3A;
  width: 150px;
  height: 150px;
  margin: 0 auto 30px;
  padding: 50px 30px;
  border-top-left-radius: 100%;
  border-top-right-radius: 100%;
  border-bottom-left-radius: 100%;
  border-bottom-right-radius: 100%;
  box-sizing: border-box;
}
h4 {
    color: white;
}
.form .thumbnail img {
  display: block;
  width: 100%;
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  outline: 0;
  background: #EF3B3A;
  width: 100%;
  border: 0;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #EF3B3A;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

.container {
  position: relative;
  z-index: 5;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}

/* END Form */
/* Demo Purposes */
body {
  background: #ccc;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
   background-image: url(../web/bg_login.jpg) !important;
           background-size: cover;
        z-index: 0;
}
body:before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
}

#video {
  z-index: -99;
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
.container {
    margin-bottom: -5%;
}
p {
    color: white;
}

</style>
<style>.abcRioButton{-webkit-border-radius:1px;border-radius:1px;-webkit-box-shadow 0 2px 4px 0px rgba(0,0,0,.25);box-shadow:0 2px 4px 0 rgba(0,0,0,.25);-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-transition:background-color .218s,border-color .218s,box-shadow .218s;transition:background-color .218s,border-color .218s,box-shadow .218s;-webkit-user-select:none;-webkit-appearance:none;background-color:#fff;background-image:none;color:#262626;cursor:pointer;outline:none;overflow:hidden;position:relative;text-align:center;vertical-align:middle;white-space:nowrap;width:auto}.abcRioButton:hover{-webkit-box-shadow:0 0 3px 3px rgba(66,133,244,.3);box-shadow:0 0 3px 3px rgba(66,133,244,.3)}.abcRioButtonBlue{background-color:#4285f4;border:none;color:#fff}.abcRioButtonBlue:hover{background-color:#4285f4}.abcRioButtonBlue:active{background-color:#3367d6}.abcRioButtonLightBlue{background-color:#fff;color:#757575}.abcRioButtonLightBlue:active{background-color:#eee;color:#6d6d6d}.abcRioButtonIcon{float:left}.abcRioButtonBlue .abcRioButtonIcon{background-color:#fff;-webkit-border-radius:1px;border-radius:1px}.abcRioButtonSvg{display:block}.abcRioButtonContents{font-family:Roboto,arial,sans-serif;font-size:14px;font-weight:500;letter-spacing:.21px;margin-left:6px;margin-right:6px;vertical-align:top}.abcRioButtonContentWrapper{height:100%;width:100%}.abcRioButtonBlue .abcRioButtonContentWrapper{border:1px solid transparent}.abcRioButtonErrorWrapper,.abcRioButtonWorkingWrapper{display:none;height:100%;width:100%}.abcRioButtonErrorIcon,.abcRioButtonWorkingIcon{margin-left:auto;margin-right:auto}.abcRioButtonErrorState,.abcRioButtonWorkingState{border:1px solid #d5d5d5;border:1px solid rgba(0,0,0,.17);-webkit-box-shadow:0 1px 0 rgba(0,0,0,.05);box-shadow:0 1px 0 rgba(0,0,0,.05);color:#262626}.abcRioButtonErrorState:hover,.abcRioButtonWorkingState:hover{border:1px solid #aaa;border:1px solid rgba(0,0,0,.25);-webkit-box-shadow:0 1px 0 rgba(0,0,0,.1);box-shadow:0 1px 0 rgba(0,0,0,.1)}.abcRioButtonErrorState:active,.abcRioButtonWorkingState:active{border:1px solid #aaa;border:1px solid rgba(0,0,0,.25);-webkit-box-shadow:inset 0 1px 0 #ddd;box-shadow:inset 0 1px 0 #ddd;color:#262626}.abcRioButtonWorkingState,.abcRioButtonWorkingState:hover{background-color:#f5f5f5}.abcRioButtonWorkingState:active{background-color:#e5e5e5}.abcRioButtonErrorState,.abcRioButtonErrorState:hover{background-color:#fff}.abcRioButtonErrorState:active{background-color:#e5e5e5}.abcRioButtonWorkingState .abcRioButtonWorkingWrapper,.abcRioButtonErrorState .abcRioButtonErrorWrapper{display:block}.abcRioButtonErrorState .abcRioButtonContentWrapper,.abcRioButtonWorkingState .abcRioButtonContentWrapper,.abcRioButtonErrorState .abcRioButtonWorkingWrapper{display:none}.-webkit-keyframes abcRioButtonWorkingIconPathSpinKeyframes{0%{-webkit-transform:rotate(0)}} </style>


</head>
<body>

<div class="container">
  <div class="info">
    <img class="jp" src="/web/flesan.png" alt="">
  </div>
</div>
<div class="form">
  <br><br><br><br>
  <h4>Portal Flesan</h4>
  <br><br><br>
   <a href="http://portalflesan.cl/web/index.php?r=user%2Fsecurity%2Fauth&amp;authclient=google"><div id="my-signin2"><div style="height:50px;width:240px;" class="abcRioButton abcRioButtonBlue"><div class="abcRioButtonContentWrapper"><div class="abcRioButtonIcon" style="padding:15px"><div style="width:18px;height:18px;" class="abcRioButtonSvgImageWithFallback abcRioButtonIconImage abcRioButtonIconImage18"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg"><g><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path><path fill="none" d="M0 0h48v48H0z"></path></g></svg></div></div><span style="font-size:16px;line-height:48px;" class="abcRioButtonContents"><span id="not_signed_ingsr8fcaoedfq">Continuar con Google</span><span id="connectedgsr8fcaoedfq" style="display:none">Signed in with Google</span></span></div></div></div></a>
     <br><br><br>
<p>¿Necesitas ayuda?</p>
<p>Escribanos a <a style="color: white; font-weight: bolder;" href="mailto:rrhh@flesan.cl">rrhh@flesan.cl</a></p>
</div>

</body>
=======
<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>



<style>

    body {
    /* height: 100%; */
}

    body{
        background-color: rgba(255, 255, 255, 0)!important;
    }
    .btn-primary{
        background-color:#012776;
        border-color:#ffffff;
    }

    .btn-primary:hover,
    .btn-default:hover{
        background-color:#ce3050;
        color:#ffffff;
        border-color:#ffffff;
    }
    form#login-form {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    button.btn.btn-lg.btn-primary.btn-block {
        height: 40px;
    }
    
    html {
        background: url(bg.jpg) no-repeat bottom right;
        background-size: cover;
    }
    .col-sm-4.col-md-4 {
        height: 100vh;
        background-color: rgb(255, 255, 255);
        display: flex;
        justify-content: center;

    }
    .center{
        margin-top: 30%;
    }
    h4 {
        line-height: 0.35em;
    }
    img {
    max-width: 60%;
    margin-left: 20%;
}
     label.control-label {
    color: #193276;
}
</style>



<div  class="col-sm-4 col-md-4">
    <div class="center">
        <!-- <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>-->            
        <div class="account-wall">
            

            <?=
            Html::img('web/armas.png', $options = [
                'class' => 'jp',
            ]);
            ?></div>
      
              <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, 'correo')->textInput() ?>
                    </div>
                    
                </div>

                <?= $form->field($model, 'pass')->passwordInput(['autofocus' => true]) ?>
                <?= Yii::$app->session->getFlash('error'); ?>

         
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                    <br>
                    <?= Html::a('Recuperar contraseña', ['recuperar'], ['class' => '']) ?>   

                </div>

            <?php ActiveForm::end(); ?>     

       










        </b>
    </div>
</div>









>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
