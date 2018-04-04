<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bibContenido".
 *
 * @property int $bibIdContenido
 * @property string $bibNombreContenido
 * @property string $bibDescripcionContenido
 * @property string $bibNombreArchivo
 * @property int $bibIdCategoria
 * @property string $bibFecha
 * @property string $bibFoto
 * @property string $bibPortada
 * @property int $bibIdTipo
 *
 * @property BibCategoria $bibIdCategoria0
 * @property BibTipoContenido $bibIdTipo0
 */
class BibContenido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bibContenido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bibIdCategoria', 'bibIdTipo'], 'integer'],
            [['bibFecha', 'bibVisita'], 'safe'],
            [['bibNombreContenido', 'bibDescripcionContenido', 'bibNombreArchivo', 'bibFoto', 'bibPortada'], 'string', 'max' => 300],
            [['bibIdCategoria'], 'exist', 'skipOnError' => true, 'targetClass' => BibCategoria::className(), 'targetAttribute' => ['bibIdCategoria' => 'bibIdCategoria']],
            [['bibIdTipo'], 'exist', 'skipOnError' => true, 'targetClass' => BibTipoContenido::className(), 'targetAttribute' => ['bibIdTipo' => 'bibIdTipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bibIdContenido' => 'Bib Id Contenido',
            'bibNombreContenido' => 'Bib Nombre Contenido',
            'bibDescripcionContenido' => 'Bib Descripcion Contenido',
            'bibNombreArchivo' => 'Bib Nombre Archivo',
            'bibIdCategoria' => 'Bib Id Categoria',
            'bibFecha' => 'Bib Fecha',
            'bibFoto' => 'Bib Foto',
            'bibPortada' => 'Bib Portada',
            'bibIdTipo' => 'Bib Id Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBibIdCategoria0()
    {
        return $this->hasOne(BibCategoria::className(), ['bibIdCategoria' => 'bibIdCategoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBibIdTipo0()
    {
        return $this->hasOne(BibTipoContenido::className(), ['bibIdTipo' => 'bibIdTipo']);
    }
}
