<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rhobbieColaborador".
 *
 * @property int $id
 * @property int $idpasatiempo
 * @property int $ridperfil

 *
 * @property Rpasatiempo[] $rpasatiempos
  * @property Rperfilredsocial[] $rperfilredsocials
 */
class RhobbieColaborador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rhobbieColaborador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpasatiempo', 'ridperfil'], 'integer'],
            [['idpasatiempo'], 'exist', 'skipOnError' => true, 'targetClass' => Rpasatiempo::className(), 'targetAttribute' => ['id' => 'idpasatiempo']],
            [['ridperfil'], 'exist', 'skipOnError' => true, 'targetClass' => Rperfilredsocial::className(), 'targetAttribute' => ['idperfilRed' => 'ridperfil']],
     
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id hobbie colaborador',
            'idpasatiempo' => 'id pasatiempo',
            'ridperfil' => 'id perfil',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRpasatiempos()
    {
        return $this->hasMany(Rpasatiempo::className(), ['id' => 'idpasatiempo']);
    }
     /**
     * @return \yii\db\ActiveQuery
     */
    public function getRperfilredsocials()
    {
        return $this->hasMany(Rperfilredsocial::className(), ['idperfilRed' => 'ridperfil']);
    }

}
