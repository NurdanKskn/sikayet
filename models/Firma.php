<?php

namespace backend\modules\sikayet\models;

use Yii;

/**
 * This is the model class for table "firma".
 *
 * @property integer $firmaID
 * @property string $FirmaAdi
 * @property string $Adres
 * @property string $Telefon
 *
 * @property Sikayet[] $sikayets
 */
class Firma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FirmaAdi', 'Adres', 'Telefon'], 'required'],
            [['Adres'], 'string'],
            [['FirmaAdi'], 'string', 'max' => 50],
            [['Telefon'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firmaID' => 'Firma ID',
            'FirmaAdi' => 'Firma Adi',
            'Adres' => 'Adres',
            'Telefon' => 'Telefon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSikayets()
    {
        return $this->hasMany(Sikayet::className(), ['firmaID' => 'firmaID']);
    }
}
