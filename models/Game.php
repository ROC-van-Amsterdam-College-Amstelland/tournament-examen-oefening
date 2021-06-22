<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "games".
 *
 * @property int $id
 * @property int $team_home
 * @property int $team_away
 * @property int $score_home
 * @property int $score_away
 * @property int $city_id
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'games';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_home', 'team_away', 'score_home', 'score_away', 'city_id'], 'required'],
            [['team_home', 'team_away', 'score_home', 'score_away', 'city_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'team_home' => 'Team Home',
            'team_away' => 'Team Away',
            'score_home' => 'Score Home',
            'score_away' => 'Score Away',
            'city_id' => 'City ID',
        ];
    }

    public function getHometeam()
    {
        return $this->hasOne(Team::class, ['id' => 'team_home']);
    }

    public function getAwayteam()
    {
        return $this->hasOne(Team::class, ['id' => 'team_away']);
    }
}
