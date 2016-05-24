<?php

namespace backend\modules\sikayet\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\sikayet\models\Firma;

/**
 * FirmaSearch represents the model behind the search form about `backend\modules\sikayet\models\Firma`.
 */
class FirmaSearch extends Firma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firmaID'], 'integer'],
            [['FirmaAdi', 'Adres', 'Telefon'], 'safe'],
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
        $query = Firma::find();

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
            'firmaID' => $this->firmaID,
        ]);

        $query->andFilterWhere(['like', 'FirmaAdi', $this->FirmaAdi])
            ->andFilterWhere(['like', 'Adres', $this->Adres])
            ->andFilterWhere(['like', 'Telefon', $this->Telefon]);

        return $dataProvider;
    }
}
