<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Colaborador;

/**
 * ColaboradorSearch represents the model behind the search form of `app\models\Colaborador`.
 */
class ColaboradorSearch extends Colaborador
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['rutColaborador',   'idRol', 'idGerencia', 'westadoJefe', 'idperfil', 'idperfilRed', 'idestadisticas', 'idestado', 'idCC'], 'integer'],
            [['dvColaborador', 'pass','idArea','idCargo',  'idSucursal', 'nombreColaborador', 'apellidosColaborador'], 'safe'],
=======
            [['rutColaborador', 'idSucursal', 'idArea', 'idCargo', 'idRol', 'idGerencia', 'westadoJefe', 'idperfil', 'idperfilRed', 'idestadisticas', 'idestado', 'idCC'], 'integer'],
            [['dvColaborador', 'pass', 'nombreColaborador', 'apellidosColaborador'], 'safe'],
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
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
        $query = Colaborador::find();

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

<<<<<<< HEAD
        $query->joinWith('idArea0');
        $query->joinWith('idCargo0');
        $query->joinWith('idSucursal0.rutEmpresa0');
        $query->joinWith('idperfilRed0');

        // grid filtering conditions
        $query->andFilterWhere([
            'rutColaborador' => $this->rutColaborador,
=======
        // grid filtering conditions
        $query->andFilterWhere([
            'rutColaborador' => $this->rutColaborador,
            'idSucursal' => $this->idSucursal,
            'idArea' => $this->idArea,
            'idCargo' => $this->idCargo,
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            'idRol' => $this->idRol,
            'idGerencia' => $this->idGerencia,
            'westadoJefe' => $this->westadoJefe,
            'idperfil' => $this->idperfil,
            'idperfilRed' => $this->idperfilRed,
            'idestadisticas' => $this->idestadisticas,
            'idestado' => $this->idestado,
            'idCC' => $this->idCC,
        ]);

        $query->andFilterWhere(['like', 'dvColaborador', $this->dvColaborador])
            ->andFilterWhere(['like', 'pass', $this->pass])
            ->andFilterWhere(['like', 'nombreColaborador', $this->nombreColaborador])
<<<<<<< HEAD
            ->andFilterWhere(['like', 'area.nombreArea', $this->idArea])
            ->andFilterWhere(['like', 'cargos.nombreCargo', $this->idCargo])
            ->andFilterWhere(['like', 'empresas.nombreEmpresa', $this->idSucursal])
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            ->andFilterWhere(['like', 'apellidosColaborador', $this->apellidosColaborador]);

        return $dataProvider;
    }
}
