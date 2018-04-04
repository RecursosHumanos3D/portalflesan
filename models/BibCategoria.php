<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bibCategoria".
 *
 * @property int $bibIdCategoria
 * @property string $bibNombreCategoria
 *
 * @property BibContenido[] $bibContenidos
 */
class BibCategoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bibCategoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bibNombreCategoria'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bibIdCategoria' => 'Bib Id Categoria',
            'bibNombreCategoria' => 'Bib Nombre Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBibContenidos()
    {
        return $this->hasMany(BibContenido::className(), ['bibIdCategoria' => 'bibIdCategoria']);
    }
}
