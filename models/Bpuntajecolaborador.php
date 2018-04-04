<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpuntajecolaborador".
 *
<<<<<<< HEAD
 * @property int $rutColaborador
 * @property string $puntaje

=======
 * @property int $idDependencias
 * @property string $puntajeBeneficiario
 * @property string $puntajeOtorgado
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
 *
 * @property Dependencia $dependencias
 */
class Bpuntajecolaborador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bpuntajecolaborador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['rutColaborador'], 'required'],
            [['rutColaborador'], 'integer'],
            [['puntaje'], 'number'],
            [['rutColaborador'], 'unique'],
            [['rutColaborador'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rutColaborador' => 'rutColaborador']],
=======
            [['idDependencias'], 'required'],
            [['idDependencias'], 'integer'],
            [['puntajeBeneficiario', 'puntajeOtorgado'], 'number'],
            [['idDependencias'], 'unique'],
            [['idDependencias'], 'exist', 'skipOnError' => true, 'targetClass' => Dependencia::className(), 'targetAttribute' => ['idDependencias' => 'idDependencias']],
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @inheritdoc
     */
<<<<<<< HEAD
     public function attributeLabels()
    {
        return [
            'rutColaborador' => 'Rut',
            'puntaje' => 'Puntaje',
            
=======
    public function attributeLabels()
    {
        return [
            'idDependencias' => 'Id Dependencias',
            'puntajeBeneficiario' => 'Puntaje Beneficiario',
            'puntajeOtorgado' => 'Puntaje Otorgado',
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getColaborador()
    {
        return $this->hasOne(Colaborador::className(), ['rutColaborador' => 'rutColaborador']);
=======
    public function getDependencias()
    {
        return $this->hasOne(Dependencia::className(), ['idDependencias' => 'idDependencias']);
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    }
}
