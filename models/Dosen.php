<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id_dosen
 * @property string $nama
 * @property string $nip
 * @property string $alamat
 * @property int $id_status
 * @property int $id_golongan
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nip', 'alamat', 'id_status', 'id_golongan'], 'required'],
            [['id_status', 'id_golongan'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['nip'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dosen' => 'Id Dosen',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'alamat' => 'Alamat',
            'id_status' => 'Id Status',
            'id_golongan' => 'Id Golongan',
        ];
    }

    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id_status' => 'id_status']);
    }

    public function getGolongan()
    {
        return $this->hasOne(Golongan::class, ['id_golongan' => 'id_golongan']);
    }
}
