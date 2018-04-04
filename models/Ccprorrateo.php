<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ccprorrateo".
 *
 * @property int $codigoCC
 * @property string $descripcionCC
 *
 * @property Prorrateo[] $prorrateos
 * @property Prorrateo[] $prorrateos0
 */
class Ccprorrateo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ccprorrateo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigoCC'], 'required'],
            [['codigoCC'], 'integer'],
            [['descripcionCC'], 'string', 'max' => 200],
            [['codigoCC'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigoCC' => 'Codigo Cc',
            'descripcionCC' => 'Descripcion Cc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProrrateos()
    {
        return $this->hasMany(Prorrateo::className(), ['distribucionA12' => 'codigoCC']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProrrateos0()
    {
        return $this->hasMany(Prorrateo::className(), ['codigoCCoriginal' => 'codigoCC']);
    }
}
