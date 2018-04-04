<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Bjornada".
 *
 * @property integer $idbjornada
 * @property string $nombre
 
 *
 * @property Basignacionesbeneficios[] $bjornada0
 */
class Bjornada extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bjornada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbjornada', 'nombre'], 'required'],
            [['idbjornada'], 'integer'],
            [['nombre'], 'string', 'max' => 200],
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idbjornada' => 'Id Jornada',
            'nombre' => 'Nombre',
         

        ];
    }

   

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBjornada0()
    {
        return $this->hasMany(Basignacionesbeneficios::className(), ['bjornada' => 'idbjornada']);
    }
}
