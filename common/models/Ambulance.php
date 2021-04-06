<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ambulance".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $alamat
 * @property string|null $tanggal
 * @property float|null $jarak
 * @property float|null $harga
 */
class Ambulance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ambulance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['jarak', 'harga'], 'number'],
            [['nama', 'alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tanggal' => 'Tanggal',
            'jarak' => 'Jarak',
            'harga' => 'Harga',
        ];
    }
}
