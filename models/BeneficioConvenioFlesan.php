<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "beneficioConvenioFlesan".
 *
 * @property int $idbc
 * @property int $idtipo
 * @property string $titulo
 * @property string $descripcion
 *
 * @property TipoBeneficioConvenioFlesan $tipoBeneficioConvenioFlesan0
 */
class BeneficioConvenioFlesan extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'beneficioConvenioFlesan';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['idtipo'], 'required'],
            [['idtipo'], 'integer'],
            [['titulo','descripcion'], 'string', 'max' => 500],
            [['idtipo'], 'exist', 'skipOnError' => true, 'targetClass' => TipoBeneficioConvenioFlesan::className(), 'targetAttribute' => ['idtipo' => 'idtipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'idbc' => 'Id Convenio',
            'idtipo' => 'Id tipo Beneficio',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoBeneficioConvenioFlesan0() {
        return $this->hasOne(TipoBeneficioConvenioFlesan::className(), ['idtipo' => 'idtipo']);
    }

}
