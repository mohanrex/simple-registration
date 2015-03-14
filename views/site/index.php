<?php
    use yii\helpers\Html;
    use kartik\widgets\ActiveForm;
    use kartik\widgets\Select2;
    $this->title = 'Google Adwords Workshop Registration';
?>
<div class="site-index row">
    <div class="col-lg-12">
        <img class="logo-img" src="images/adwords.png">
        <h3>GOOGLE ADWORDS</h3>
        <h3>WORKSHOP</h3>
        <div class="clearfix"></div>
    </div>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="registration-form-wrap">

            <?php $form = ActiveForm::begin([
                        'id' => 'registration-form',
                        'action' => ['registration/create'],
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                        'type' => ActiveForm::TYPE_HORIZONTAL,
                        'formConfig' => [
                            'labelSpan' => 4,
                            'deviceSize' => ActiveForm::SIZE_SMALL,
                            'showLabels'=>false,
                        ],
                    ]);
            ?>

            <?= $form->field($model, 'name',['addon' => ['prepend' => ['content'=>'<i class="glyphicon glyphicon-user"></i>']]])->input('text', ['placeholder'=>'Your Full Name']) ?>

            <?= $form->field($model, 'rollno',['addon' => ['prepend' => ['content'=>'<i class="glyphicon glyphicon-pencil"></i>']]])->input('text', ['placeholder'=>'Your roll no']) ?>

            <?= $form->field($model, 'department',['addon' => ['prepend' => ['content'=>'<i class="glyphicon glyphicon-briefcase"></i>']]])->widget(Select2::classname(), [
                'data' => [
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
                'options' => ['placeholder' => 'Department you belong'],
                'pluginOptions' => [
                    'allowClear' => false
                ],
            ]); ?>

            <?= $form->field($model, 'year',['addon' => ['prepend' => ['content'=>'<i class="glyphicon glyphicon-calendar"></i>']]])->widget(Select2::classname(), [
                'data' => [
                        "IV-Year"=>"IV-Year",
                        "III-Year"=>"III-Year",
                        "II-Year"=>"II-Year",
                        "I-Year"=>"I-Year",
                    ],
                'options'=>['placeholder'=>'Which year you are studying'],
                'pluginOptions' => [
                    'allowClear' => false,
                ],
            ]) ?>

            <?= $form->field($model, 'phone_num',['addon' => ['prepend' => ['content'=>'<i class="glyphicon glyphicon-phone"></i>']]])->input('text', ['placeholder'=>'Your contact number to reach you']) ?>

            <?= $form->field($model, 'email_id',['addon' => ['prepend' => ['content'=>'<i class="glyphicon glyphicon-envelope"></i>']]])->input('email', ['placeholder'=>'Enter a valid email...']) ?>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <?= Html::submitButton('&nbsp;Register', ['class' => 'btn btn-lg btn-success glyphicon glyphicon-send']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
    <div class="col-sm-6">
        <h3 class="caption">===============</h3>
        <h3 class="caption">18-03-2015</h3>
        <h3 class="caption">===============</h3>
        <h3 class="caption">GOOGLE ADWORDS WORKSHOP CONDUCTED BY GOOGLE STUDENT CLUB</h3>
    </div>
    <div class="col-sm-10 col-sm-offset-1 status-bar">
        <div class="col-xs-4 status"><h3><i class="glyphicon glyphicon-time"></i> 2:30 Pm</h3></div>
        <div class="col-xs-4 status"><h3><i class="glyphicon glyphicon-calendar"></i> 18/03/2015</h3></div>
        <div class="col-xs-4 status-last"><h3><i class="glyphicon glyphicon-map-marker"></i> ECE Seminar Hall</h3></div>
    </div>
</div>