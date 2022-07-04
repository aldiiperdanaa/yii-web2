<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $id_ruangan
 * @property string $nama_ruangan
 * @property string $jam_mengajar
 * @property int $id_matkul
 * @property int $id_dosen
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_ruangan', 'jam_mengajar', 'id_matkul', 'id_dosen'], 'required'],
            [['id_matkul', 'id_dosen'], 'integer'],
            [['nama_ruangan', 'jam_mengajar'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ruangan' => 'Id Ruangan',
            'nama_ruangan' => 'Nama Ruangan',
            'jam_mengajar' => 'Jam Mengajar',
            'id_matkul' => 'Id Matkul',
            'id_dosen' => 'Id Dosen',
        ];
    }

    public function getMatkul()
    {
        return $this->hasOne(MataKuliah::class, ['id_matkul' => 'id_matkul']);
    }

    public function getDosen()
    {
        return $this->hasOne(Dosen::class, ['id_dosen' => 'id_dosen']);
    }
}
