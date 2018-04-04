<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargaProrrateo".
 *
 * @property string $codigoPayroll
 * @property string $periodo
 * @property int $codigoccdistribuir
 * @property double $porcentajeDistribubcion
 * @property int $id
 */
class CargaProrrateo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cargaProrrateo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigoPayroll', 'id'], 'required'],
            [['codigoccdistribuir', 'id'], 'integer'],
            [['porcentajeDistribubcion'], 'number'],
            [['codigoPayroll'], 'string', 'max' => 50],
            [['periodo'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigoPayroll' => 'Codigo Payroll',
            'periodo' => 'Periodo',
            'codigoccdistribuir' => 'Codigoccdistribuir',
            'porcentajeDistribubcion' => 'Porcentaje Distribubcion',
            'id' => 'ID',
        ];
    }
}
