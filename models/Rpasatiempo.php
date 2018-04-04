<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rpasatiempo".
 *
 * @property int $id
 * @property int $rtipo
 * @property string $rnombre
 *
 * @property RtipoPasatiempo $rtipo
  * @property RhobbieColaborador $rhobbies
 */
class Rpasatiempo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rpasatiempo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rtipo'], 'integer'],
            [['rnombre'], 'string', 'max' => 200],
            [['rtipo'], 'exist', 'skipOnError' => true, 'targetClass' => RtipoPasatiempo::className(), 'targetAttribute' => ['rtipo' => 'idTipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Pasatiempo',
            'rtipo' => 'Tipo Pasatiempo',
            'rnombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRtipos() {
        return $this->hasOne(RtipoPasatiempo::className(), ['idTipo' => 'rtipo']);
    }
     /**
     * @return \yii\db\ActiveQuery
     */
    public function getRhobbies() {
        return $this->hasOne(RhobbieColaborador::className(), ['idpasatiempo' => 'id']);
    }
}
