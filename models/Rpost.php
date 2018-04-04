<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rpost".
 *
 * @property int $ridPost
 * @property string $rdecripcionPost
 * @property string $rfoto
 * @property string $rfecha
 * @property int $rtipoPost
 * @property int $rut1
 * @property int $rut2
 * @property int $rlikes
 * @property int $rcomentarios
 * @property int $rrotador
 * @property string $rnombreArchivo
 *
 * @property Colaborador $rut10
 * @property Colaborador $rut20
 * @property RtipoPost $rtipoPost0
 */
class Rpost extends \yii\db\ActiveRecord {

    public $file;
    public $file1;
    public $file2;
    public $file3;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'rpost';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
<<<<<<< HEAD
            [['rfecha', 'rdescArchivo'], 'safe'],
=======
            [['rfecha'], 'safe'],
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            [['rtipoPost', 'rut1', 'rut2'], 'required'],
            [['rtipoPost', 'rut1', 'rut2', 'rlikes', 'rcomentarios', 'rrotador'], 'integer'],
            [['rdecripcionPost'], 'string', 'max' => 2000],
            [['rfoto'], 'string', 'max' => 100],
            [['rnombreArchivo'], 'string', 'max' => 200],
<<<<<<< HEAD
            [['file'], 'file',  'maxSize' => 8120000, 'tooBig' => 'excede el limite, 8 MB Aprox' , 'extensions' => 'png, jpg, jpeg, mp4, MP4, mov, xls, xlsx, pptx, docx, pdf, quicktime, 3gpp'],
=======
            [['file'], 'file',  'maxSize' => 81200000, 'tooBig' => 'excede el limite, 8 MB Aprox' , 'extensions' => 'png, jpg, mp4, MP4, mov, xls, xlsx, pptx, docx, pdf, quicktime, 3gpp'],
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            [['rut1'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rut1' => 'rutColaborador']],
            [['rut2'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rut2' => 'rutColaborador']],
            [['rtipoPost'], 'exist', 'skipOnError' => true, 'targetClass' => RtipoPost::className(), 'targetAttribute' => ['rtipoPost' => 'ridtipo_post']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'ridPost' => 'Rid Post',
            'rdecripcionPost' => 'Rdecripcion Post',
            'rfoto' => 'Foto',
            'rfecha' => 'Rfecha',
            'rtipoPost' => 'Rtipo Post',
            'rut1' => 'Rut1',
            'rut2' => 'Rut2',
            'rlikes' => 'Rlikes',
            'rcomentarios' => 'Rcomentarios',
            'rrotador' => 'Rrotador',
            'rnombreArchivo' => 'Rnombre Archivo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRut10() {
        return $this->hasOne(Colaborador::className(), ['rutColaborador' => 'rut1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRut20() {
        return $this->hasOne(Colaborador::className(), ['rutColaborador' => 'rut2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRtipoPost0() {
        return $this->hasOne(RtipoPost::className(), ['ridtipo_post' => 'rtipoPost']);
    }

}
