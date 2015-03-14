<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Registration;

/**
 * RegistrationSearch represents the model behind the search form about `app\models\Registration`.
 */
class RegistrationSearch extends Registration
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'phone_num', 'registered_at'], 'integer'],
            [['name', 'rollno', 'department', 'year', 'email_id'], 'safe'],
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
        $query = Registration::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'phone_num' => $this->phone_num,
            'registered_at' => $this->registered_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'rollno', $this->rollno])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'year', $this->year])
            ->andFilterWhere(['like', 'email_id', $this->email_id]);

        return $dataProvider;
    }
}
