<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<a class="btn btn-success pull-right" href="<?= Url::to(['site/logout'])?>" data-method="post">Logout</a>
<div class="registration-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        
            ['class' => 'kartik\grid\SerialColumn'],
            
            ['attribute'=>'id'],
            
            [
                'attribute'=>'name',
                'value'=>function ($model, $key, $index, $widget) {
                    return Html::a($model->name, Url::toRoute(['/registration/view','id'=>$model->primaryKey]), [
                        'title'=>'View Registration detail',
                    ]);
                },
                'format'=>'raw'
            ],
            
            [
                'attribute'=>'rollno',
                'value'=>function ($model, $key, $index, $widget) {
                    return $model->rollno;
                }
            ],

            [
                'attribute'=>'department',
                'value'=>function ($model, $key, $index, $widget) {
                    return $model->department;
                },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>[
                        "" => "",
                        "IT"=>"Information Technology",
                        "CSE"=>"Computer Science",
                        "MCA"=>"Master in computer Application",
                        "ECE"=>"Electronics and Communication",
                        "EEE"=>"Electrical and Electronics",
                        "Civil"=>"Civil Engineering",
                        "MECH"=>"Mechanical Engineering",
                        "Mechatronics"=>"Mechatronics",
                        "Other"=>"Other"
                    ],
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Any Department'],
                'format'=>'raw'
            ],
            
            [
                'attribute'=>'year',
                'value'=>function ($model, $key, $index, $widget) {
                    return $model->year;
                },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>[
                        "IV-Year"=>"IV-Year",
                        "III-Year"=>"III-Year",
                        "II-Year"=>"II-Year",
                        "I-Year"=>"I-Year",
                    ],
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Any Year'],
                'format'=>'raw'
            ],
                    
            [
                'attribute'=>'phone_num',
                'value'=>function ($model, $key, $index, $widget) {
                    return $model->phone_num;
                }
            ],

            [
                'attribute'=>'email_id',
                'value'=>function ($model, $key, $index, $widget) {
                    return $model->email_id;
                }
            ],
            
            [
                'class' => 'kartik\grid\ActionColumn',
                'template'=>'{delete}',
            ],
            
            ['class' => 'kartik\grid\CheckboxColumn']
            
        ],
        
        'pjax' => true,  // pjax is set to always true
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'floatHeader' => true,
        'floatHeaderOptions' => ['scrollingTop' => '50'],
        'showPageSummary' => false,
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> '. Html::encode($this->title).'</h3>',
            'type'=>'primary',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>New Registration', ['create'], ['class' => 'btn btn-primary']),
            'showFooter'=>false
        ],
        'exportConfig' => [
            GridView::EXCEL => []
        ],
    ]);?>
</div>
