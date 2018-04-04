<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipoBeneficioConvenioFlesan".
 *
 * @property int $idtipo
 * @property string $nombre
 * @property string $descripcion
 *
 * @property BeneficioConvenioFlesan[] $beneficiosConvenioFlesans
 */
class TipoBeneficioConvenioFlesan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipoBeneficioConvenioFlesan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['nombre','descripcion'], 'string', 'max' => 500],
    
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtipo' => 'Id Tipo Beneficio',
            'nombre' => 'Nombre Tipo',
            'descripcion' => 'Descripcion Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBeneficiosConvenioFlesans()
    {
        return $this->hasMany(BeneficioConvenioFlesan::className(), ['idtipo' => 'idtipo']);
    }

    
}
