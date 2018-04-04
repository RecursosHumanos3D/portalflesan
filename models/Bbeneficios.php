<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bbeneficios".
 *
 * @property int $bId_Beneficio
 * @property string $bNombre
 * @property string $bDescripcion
<<<<<<< HEAD
 * @property string $bTipoBeneficio
 * @property string $bValorBeneficio
 * @property string $bvalorhora
 * @property string $bvezporanio
 * @property string $bvezpormes
 * @property string $bimagen
 *
 * @property Bcolaboradorbeneficio[] $bcolaboradorbeneficios
 * @property Bdetallebeneficio[] $bdetallebeneficios
=======
 * @property int $bIdPuntaje
 * @property string $bTipoBeneficio
 * @property string $bValorBeneficio
 * @property int $rutColaborador
 *
 * @property Colaborador $rutColaborador0
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
 */
class Bbeneficios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bbeneficios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['bValorBeneficio', 'bvalorhora', 'bvezporanio', 'bvezpormes'], 'number'],
            [['bNombre'], 'string', 'max' => 100],
            [['bDescripcion', 'bimagen'], 'string', 'max' => 200],
            [['bTipoBeneficio'], 'string', 'max' => 45],
=======
            [['bIdPuntaje', 'rutColaborador'], 'integer'],
            [['rutColaborador'], 'required'],
            [['bNombre'], 'string', 'max' => 100],
            [['bDescripcion'], 'string', 'max' => 200],
            [['bTipoBeneficio', 'bValorBeneficio'], 'string', 'max' => 45],
            [['rutColaborador'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rutColaborador' => 'rutColaborador']],
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bId_Beneficio' => 'B Id  Beneficio',
            'bNombre' => 'B Nombre',
            'bDescripcion' => 'B Descripcion',
<<<<<<< HEAD
            'bTipoBeneficio' => 'B Tipo Beneficio',
            'bValorBeneficio' => 'B Valor Beneficio',
            'bvalorhora' => 'Bvalorhora',
            'bvezporanio' => 'Bvezporanio',
            'bvezpormes' => 'Bvezpormes',
            'bimagen' => 'Bimagen',
=======
            'bIdPuntaje' => 'B Id Puntaje',
            'bTipoBeneficio' => 'B Tipo Beneficio',
            'bValorBeneficio' => 'B Valor Beneficio',
            'rutColaborador' => 'Rut Colaborador',
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getBcolaboradorbeneficios()
    {
        return $this->hasMany(Bcolaboradorbeneficio::className(), ['bId_Beneficio' => 'bId_Beneficio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBdetallebeneficios()
    {
        return $this->hasMany(Bdetallebeneficio::className(), ['bId_Beneficio' => 'bId_Beneficio']);
=======
    public function getRutColaborador0()
    {
        return $this->hasOne(Colaborador::className(), ['rutColaborador' => 'rutColaborador']);
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    }
}
