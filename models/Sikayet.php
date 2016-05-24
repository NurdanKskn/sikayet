<?php

namespace backend\modules\sikayet\models;

use Yii;

/**
 * This is the model class for table "sikayet".
 *
 * @property integer $yeniID
 * @property integer $id
 * @property integer $firmaID
 * @property integer $kategoriID
 * @property integer $UrunSeriNo
 * @property string $SikayetBaslik
 * @property string $SikayetMetni
 * @property string $SikayetTekrar
 *
 * @property Firma $firma
 * @property Kategori $kategori
 * @property User $id0
 */
class Sikayet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sikayet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'firmaID', 'kategoriID', 'UrunSeriNo', 'SikayetBaslik', 'SikayetMetni', 'SikayetTekrar'], 'required'],
            [['id', 'firmaID', 'kategoriID', 'UrunSeriNo'], 'integer'],
            [['SikayetMetni'], 'string'],
            [['SikayetBaslik'], 'string', 'max' => 250],
            [['SikayetTekrar'], 'string', 'max' => 6],
            [['firmaID'], 'exist', 'skipOnError' => true, 'targetClass' => Firma::className(), 'targetAttribute' => ['firmaID' => 'firmaID']],
            [['kategoriID'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kategoriID' => 'kategoriID']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'yeniID' => 'Yeni ID',
            'id' => 'ID',
            'firmaID' => 'Firma ID',
            'kategoriID' => 'Kategori ID',
            'UrunSeriNo' => 'Urun Seri No',
            'SikayetBaslik' => 'Sikayet Baslik',
            'SikayetMetni' => 'Sikayet Metni',
            'SikayetTekrar' => 'Sikayet Tekrar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirma()
    {
        return $this->hasOne(Firma::className(), ['firmaID' => 'firmaID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['kategoriID' => 'kategoriID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
