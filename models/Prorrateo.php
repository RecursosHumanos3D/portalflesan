<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prorrateo".
 *
 * @property int $idprorrateo
 * @property string $codigo
 * @property string $rutcolaborador
 * @property string $nombre
 * @property string $cargo
 * @property int $dependencia
 * @property int $codigoCCoriginal
 * @property string $descripcionCCoriginal
 * @property int $empresa
 * @property string $descripcionCCdistribuir
 * @property string $codigoManager
 * @property int $distribucionA12
 * @property string $codigoPayroll
 * @property double $porcentajeDistrubucion
 *
 * @property ProrrateoColaborador $codigo0
 * @property Ccprorrateo $distribucionA120
 * @property Ccprorrateo $codigoCCoriginal0
 * @property DependenciaProrrateo $dependencia0
 * @property Empresas $empresa0
 */
class Prorrateo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prorrateo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprorrateo'], 'required'],
            [['idprorrateo', 'dependencia', 'codigoCCoriginal', 'empresa', 'distribucionA12'], 'integer'],
            [['porcentajeDistrubucion'], 'number'],
            [['codigo'], 'string', 'max' => 50],
            [['rutcolaborador'], 'string', 'max' => 20],
            [['nombre', 'descripcionCCoriginal', 'descripcionCCdistribuir', 'codigoManager', 'codigoPayroll'], 'string', 'max' => 45],
            [['cargo'], 'string', 'max' => 100],
            [['idprorrateo'], 'unique'],
            [['codigo'], 'exist', 'skipOnError' => true, 'targetClass' => ProrrateoColaborador::className(), 'targetAttribute' => ['codigo' => 'codigo']],
            [['distribucionA12'], 'exist', 'skipOnError' => true, 'targetClass' => Ccprorrateo::className(), 'targetAttribute' => ['distribucionA12' => 'codigoCC']],
            [['codigoCCoriginal'], 'exist', 'skipOnError' => true, 'targetClass' => Ccprorrateo::className(), 'targetAttribute' => ['codigoCCoriginal' => 'codigoCC']],
            [['dependencia'], 'exist', 'skipOnError' => true, 'targetClass' => DependenciaProrrateo::className(), 'targetAttribute' => ['dependencia' => 'iddependencia']],
            [['empresa'], 'exist', 'skipOnError' => true, 'targetClass' => Empresas::className(), 'targetAttribute' => ['empresa' => 'rutEmpresa']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprorrateo' => 'Idprorrateo',
            'codigo' => 'Codigo',
            'rutcolaborador' => 'Rutcolaborador',
            'nombre' => 'Nombre',
            'cargo' => 'Cargo',
            'dependencia' => 'Dependencia',
            'codigoCCoriginal' => 'Codigo Ccoriginal',
            'descripcionCCoriginal' => 'Descripcion Ccoriginal',
            'empresa' => 'Empresa',
            'descripcionCCdistribuir' => 'Descripcion Ccdistribuir',
            'codigoManager' => 'Codigo Manager',
            'distribucionA12' => 'Distribucion A12',
            'codigoPayroll' => 'Codigo Payroll',
            'porcentajeDistrubucion' => 'Porcentaje Distrubucion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigo0()
    {
        return $this->hasOne(ProrrateoColaborador::className(), ['codigo' => 'codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistribucionA120()
    {
        return $this->hasOne(Ccprorrateo::className(), ['codigoCC' => 'distribucionA12']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoCCoriginal0()
    {
        return $this->hasOne(Ccprorrateo::className(), ['codigoCC' => 'codigoCCoriginal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencia0()
    {
        return $this->hasOne(DependenciaProrrateo::className(), ['iddependencia' => 'dependencia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa0()
    {
        return $this->hasOne(Empresas::className(), ['rutEmpresa' => 'empresa']);
    }
}
