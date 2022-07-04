<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golongan".
 *
 * @property int $id_golongan
 * @property string $golongan
 * @property string $gaji
 */
class Golongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['golongan', 'gaji'], 'required'],
            [['golongan'], 'string', 'max' => 10],
            [['gaji'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_golongan' => 'Id Golongan',
            'golongan' => 'Golongan',
            'gaji' => 'Gaji',
        ];
    }
}
