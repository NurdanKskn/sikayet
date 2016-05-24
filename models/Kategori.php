<?php

namespace backend\modules\sikayet\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $kategoriID
 * @property string $KategoriAdi
 *
 * @property Sikayet[] $sikayets
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['KategoriAdi'], 'required'],
            [['KategoriAdi'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kategoriID' => 'Kategori ID',
            'KategoriAdi' => 'Kategori Adi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSikayets()
    {
        return $this->hasMany(Sikayet::className(), ['kategoriID' => 'kategoriID']);
    }
}
