<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Games';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Game', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'team_home',
                'label'     => 'Home team',
                'value'     => 'hometeam.country_name'
            ],
            [
                'attribute' => 'team_away',
                'label'     => 'Away team',
                'value'     => 'awayteam.country_name'
            ],

            'score_home',
            'score_away',
            //'city_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>