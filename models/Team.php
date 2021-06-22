<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property int $id
 * @property string $country_name
 * @property string $coach_name
 * @property string $flag
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_name', 'coach_name', 'flag'], 'required'],
            [['country_name', 'coach_name'], 'string', 'max' => 200],
            [['flag'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_name' => 'Country Name',
            'coach_name' => 'Coach Name',
            'flag' => 'Flag',
        ];
    }
}
