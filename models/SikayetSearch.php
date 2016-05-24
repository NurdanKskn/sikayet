<?php

namespace backend\modules\sikayet\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\sikayet\models\Sikayet;

/**
 * SikayetSearch represents the model behind the search form about `backend\modules\sikayet\models\Sikayet`.
 */
class SikayetSearch extends Sikayet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yeniID', 'id', 'firmaID', 'kategoriID', 'UrunSeriNo'], 'integer'],
            [['SikayetBaslik', 'SikayetMetni', 'SikayetTekrar'], 'safe'],
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
        $query = Sikayet::find();

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
            'yeniID' => $this->yeniID,
            'id' => $this->id,
            'firmaID' => $this->firmaID,
            'kategoriID' => $this->kategoriID,
            'UrunSeriNo' => $this->UrunSeriNo,
        ]);

        $query->andFilterWhere(['like', 'SikayetBaslik', $this->SikayetBaslik])
            ->andFilterWhere(['like', 'SikayetMetni', $this->SikayetMetni])
            ->andFilterWhere(['like', 'SikayetTekrar', $this->SikayetTekrar]);

        return $dataProvider;
    }
}
