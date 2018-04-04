<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rtipoPasatiempo".
 *
 * @property int $idTipo
 * @property string $nombre
 *
 * @property Rpasatiempo[] $rpasatiempos
 */
class RtipoPasatiempo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rtipoPasatiempo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipo' => 'Id tipo pasatiempo',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRpasatiempos()
    {
        return $this->hasMany(Rpasatiempos::className(), ['rtipo' => 'idTipo']);
    }
}
