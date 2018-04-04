<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependenciaProrrateo".
 *
 * @property int $iddependencia
 * @property int $rutColaborador1
 * @property string $codColaborador2
 *
 * @property Colaborador $rutColaborador10
 * @property ProrrateoColaborador $codColaborador20
 * @property Prorrateo[] $prorrateos
 */
class DependenciaProrrateo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependenciaProrrateo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iddependencia', 'rutColaborador1', 'codColaborador2'], 'required'],
            [['iddependencia', 'rutColaborador1'], 'integer'],
            [['codColaborador2'], 'string', 'max' => 50],
            [['iddependencia'], 'unique'],
            [['rutColaborador1'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::className(), 'targetAttribute' => ['rutColaborador1' => 'rutColaborador']],
            [['codColaborador2'], 'exist', 'skipOnError' => true, 'targetClass' => ProrrateoColaborador::className(), 'targetAttribute' => ['codColaborador2' => 'codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddependencia' => 'Iddependencia',
            'rutColaborador1' => 'Rut Colaborador1',
            'codColaborador2' => 'Cod Colaborador2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRutColaborador10()
    {
        return $this->hasOne(Colaborador::className(), ['rutColaborador' => 'rutColaborador1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodColaborador20()
    {
        return $this->hasOne(ProrrateoColaborador::className(), ['codigo' => 'codColaborador2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProrrateos()
    {
        return $this->hasMany(Prorrateo::className(), ['dependencia' => 'iddependencia']);
    }
}
