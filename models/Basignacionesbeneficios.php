<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "basignacionesbeneficios".
 *
 * @property int $bidAsignaciones
 * @property string $bFecha
 * @property int $bMonto
 * @property int $rutColaboradorRecibido
 * @property int $rutColaboradorJefe
 *
 * @property Colaborador $rutColaboradorRecibido0
 * @property Colaborador $rutColaboradorJefe0
<<<<<<< HEAD
  * @property Bjornada $bjornada0
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
 */
class Basignacionesbeneficios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basignacionesbeneficios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['bFecha', 'bfechatoma'], 'safe'],
            [['bMonto', 'rutColaboradorRecibido', 'rutColaboradorJefe','bjornada'], 'integer'],
            [['rutColaboradorRecibido', 'rutColaboradorJefe', 'bjornada'], 'required'],
            [['rutColaboradorRecibido'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rutColaboradorRecibido' => 'rutColaborador']],
            [['rutColaboradorJefe'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rutColaboradorJefe' => 'rutColaborador']],
             [['bjornada'], 'exist', 'skipOnError' => true, 'targetClass' => Bjornada::className(), 'targetAttribute' => ['bjornada' => 'idbjornada']],

=======
            [['bFecha'], 'safe'],
            [['bMonto', 'rutColaboradorRecibido', 'rutColaboradorJefe'], 'integer'],
            [['rutColaboradorRecibido', 'rutColaboradorJefe'], 'required'],
            [['rutColaboradorRecibido'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rutColaboradorRecibido' => 'rutColaborador']],
            [['rutColaboradorJefe'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rutColaboradorJefe' => 'rutColaborador']],
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bidAsignaciones' => 'Bid Asignaciones',
            'bFecha' => 'B Fecha',
            'bMonto' => 'B Monto',
            'rutColaboradorRecibido' => 'Rut Colaborador Recibido',
            'rutColaboradorJefe' => 'Rut Colaborador Jefe',
<<<<<<< HEAD
            'bjornada' => 'Jornada'
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRutColaboradorRecibido0()
    {
        return $this->hasOne(Colaborador::className(), ['rutColaborador' => 'rutColaboradorRecibido']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRutColaboradorJefe0()
    {
        return $this->hasOne(Colaborador::className(), ['rutColaborador' => 'rutColaboradorJefe']);
    }
<<<<<<< HEAD

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBjornadaO()
    {
        return $this->hasOne(Bjornada::className(), ['idbjornada' => 'bjornada']);
    }
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
}
