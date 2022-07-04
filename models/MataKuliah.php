<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mata_kuliah".
 *
 * @property int $id_matkul
 * @property string $nama_matkul
 * @property string $jumlah_sks
 * @property string $semester
 * @property int $id_dosen
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_matkul', 'jumlah_sks', 'semester', 'id_dosen'], 'required'],
            [['id_dosen'], 'integer'],
            [['nama_matkul'], 'string', 'max' => 100],
            [['jumlah_sks', 'semester'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_matkul' => 'Id Matkul',
            'nama_matkul' => 'Nama Matkul',
            'jumlah_sks' => 'Jumlah Sks',
            'semester' => 'Semester',
            'id_dosen' => 'Id Dosen',
        ];
    }

    public function getDosen()
    {
        return $this->hasOne(Dosen::class, ['id_dosen' => 'id_dosen']);
    }
}
