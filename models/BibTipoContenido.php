<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bibTipoContenido".
 *
 * @property int $bibIdTipo
 * @property string $bibNombreTipoContenido
 *
 * @property BibContenido[] $bibContenidos
 */
class BibTipoContenido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bibTipoContenido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bibNombreTipoContenido'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bibIdTipo' => 'Bib Id Tipo',
            'bibNombreTipoContenido' => 'Bib Nombre Tipo Contenido',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBibContenidos()
    {
        return $this->hasMany(BibContenido::className(), ['bibIdTipo' => 'bibIdTipo']);
    }
}
