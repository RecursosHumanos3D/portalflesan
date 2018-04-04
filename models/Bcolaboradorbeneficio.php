<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bcolaboradorbeneficio".
 *
 * @property int $idbcolBeneficio
 * @property string $bfechaCanje
 * @property int $bId_Beneficio
 * @property int $rutColaborador
 * @property string $bcomentarioBeneficio
 * @property int $bestadoBeneficio
<<<<<<< HEAD
 * @property int $bvalorCanje
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
 *
 * @property Bbeneficios $bIdBeneficio
 */
class Bcolaboradorbeneficio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bcolaboradorbeneficio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bfechaCanje'], 'safe'],
            [['bId_Beneficio', 'rutColaborador'], 'required'],
<<<<<<< HEAD
            [['bId_Beneficio', 'rutColaborador', 'bestadoBeneficio', 'bvalorCanje'], 'integer'],
=======
            [['bId_Beneficio', 'rutColaborador', 'bestadoBeneficio'], 'integer'],
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            [['bcomentarioBeneficio'], 'string', 'max' => 150],
            [['bId_Beneficio', 'rutColaborador'], 'exist', 'skipOnError' => true, 'targetClass' => Bbeneficios::className(), 'targetAttribute' => ['bId_Beneficio' => 'bId_Beneficio', 'rutColaborador' => 'rutColaborador']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idbcolBeneficio' => 'Idbcol Beneficio',
            'bfechaCanje' => 'Bfecha Canje',
            'bId_Beneficio' => 'B Id  Beneficio',
            'rutColaborador' => 'Rut Colaborador',
            'bcomentarioBeneficio' => 'Bcomentario Beneficio',
            'bestadoBeneficio' => 'Bestado Beneficio',
<<<<<<< HEAD
            'bvalorCanje' => 'Valor Canje',
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBIdBeneficio()
    {
        return $this->hasOne(Bbeneficios::className(), ['bId_Beneficio' => 'bId_Beneficio', 'rutColaborador' => 'rutColaborador']);
    }
}
