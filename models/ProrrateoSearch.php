<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prorrateo;

/**
 * ProrrateoSearch represents the model behind the search form of `app\models\Prorrateo`.
 */
class ProrrateoSearch extends Prorrateo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprorrateo', 'dependencia', 'codigoCCoriginal', 'empresa', 'distribucionA12'], 'integer'],
            [['codigo', 'rutcolaborador', 'nombre', 'cargo', 'descripcionCCoriginal', 'descripcionCCdistribuir', 'codigoManager', 'codigoPayroll'], 'safe'],
            [['porcentajeDistrubucion'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Prorrateo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idprorrateo' => $this->idprorrateo,
            'dependencia' => $this->dependencia,
            'codigoCCoriginal' => $this->codigoCCoriginal,
            'empresa' => $this->empresa,
            'distribucionA12' => $this->distribucionA12,
            'porcentajeDistrubucion' => $this->porcentajeDistrubucion,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'rutcolaborador', $this->rutcolaborador])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'cargo', $this->cargo])
            ->andFilterWhere(['like', 'descripcionCCoriginal', $this->descripcionCCoriginal])
            ->andFilterWhere(['like', 'descripcionCCdistribuir', $this->descripcionCCdistribuir])
            ->andFilterWhere(['like', 'codigoManager', $this->codigoManager])
            ->andFilterWhere(['like', 'codigoPayroll', $this->codigoPayroll]);

        return $dataProvider;
    }
}
