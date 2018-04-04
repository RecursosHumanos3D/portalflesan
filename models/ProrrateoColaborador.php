<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prorrateoColaborador".
 *
 * @property string $codigo
 * @property int $rutColaborador
 * @property string $dv
 * @property string $nombre
 * @property string $cargo
 *
 * @property DependenciaProrrateo[] $dependenciaProrrateos
 * @property Prorrateo[] $prorrateos
 */
class ProrrateoColaborador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prorrateoColaborador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo'], 'required'],
            [['rutColaborador'], 'integer'],
            [['codigo'], 'string', 'max' => 50],
            [['dv'], 'string', 'max' => 1],
            [['nombre'], 'string', 'max' => 200],
            [['cargo'], 'string', 'max' => 100],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'rutColaborador' => 'Rut Colaborador',
            'dv' => 'Dv',
            'nombre' => 'Nombre',
            'cargo' => 'Cargo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependenciaProrrateos()
    {
        return $this->hasMany(DependenciaProrrateo::className(), ['codColaborador2' => 'codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProrrateos()
    {
        return $this->hasMany(Prorrateo::className(), ['codigo' => 'codigo']);
    }
}
