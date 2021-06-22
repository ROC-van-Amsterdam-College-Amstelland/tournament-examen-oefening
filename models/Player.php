<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "players".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $date_of_birth
 * @property int $team_id
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'players';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'date_of_birth', 'team_id'], 'required'],
            [['date_of_birth'], 'safe'],
            [['team_id'], 'integer'],
            [['firstname', 'lastname'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'date_of_birth' => 'Date Of Birth',
            'team_id' => 'Team ID',
        ];
    }
}
