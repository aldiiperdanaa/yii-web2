<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $id_status
 * @property string $status_ikatan_kerja
 * @property string $kode_status
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_ikatan_kerja', 'kode_status'], 'required'],
            [['status_ikatan_kerja', 'kode_status'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_status' => 'Id Status',
            'status_ikatan_kerja' => 'Status Ikatan Kerja',
            'kode_status' => 'Kode Status',
        ];
    }
}
