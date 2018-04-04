<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rperfilredsocial".
 *
 * @property int $idperfilRed
 * @property string $rfoto
 * @property string $rportada
 * @property string $rbio
 * @property int $rrotador
 * @property int $restado
<<<<<<< HEAD

 *
 * @property Colaborador[] $colaboradors

=======
 *
 * @property Colaborador[] $colaboradors
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
 */
class Rperfilredsocial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
        public $file;
    public static function tableName()
    {
        return 'rperfilredsocial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rrotador', 'restado'], 'integer'],
            [['rfoto', 'rportada'], 'string', 'max' => 200],
<<<<<<< HEAD
            [['file', 'rfoto'], 'file', 'maxSize' => 8120000, 'tooBig' => 'excede el limite, 8 MB Aprox', 'extensions' => 'png, jpg, jpeg'],
            [['rbio','rmusica', 'rhobbie'], 'string', 'max' => 500],
     
=======
            [['file'], 'file', 'maxSize' => 8120000, 'tooBig' => 'excede el limite, 8 MB Aprox', 'extensions' => 'png, jpg'],
            [['rbio'], 'string', 'max' => 500],
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idperfilRed' => 'Idperfil Red',
            'rfoto' => 'Foto de Perfil',
            'rportada' => 'Rportada',
            'rbio' => 'Biografía',
            'rrotador' => 'Rrotador',
            'restado' => 'Restado',
<<<<<<< HEAD
            'rmusica' => 'Música',
            'rhobbie' => 'Hobbie',
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColaboradors()
    {
        return $this->hasMany(Colaborador::className(), ['idperfilRed' => 'idperfilRed']);
    }
<<<<<<< HEAD

=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
}
