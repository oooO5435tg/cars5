<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $id
 * @property string $mark
 * @property string $engine_size
 * @property string $date_release
 * @property string $quantity
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mark', 'engine_size', 'date_release', 'quantity'], 'required'],
            [['date_release'], 'safe'],
            [['mark', 'engine_size', 'quantity'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mark' => 'Mark',
            'engine_size' => 'Engine Size',
            'date_release' => 'Date Release',
            'quantity' => 'Quantity',
        ];
    }
}
