<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=Yii::$app->request->BaseUrl;?>/css/style.css">
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </div>
<?php $this->endBody() ?>
    <script>
        $(document).ready(function(){
            $('#registration-form').on('beforeSubmit', function(event, jqXHR, settings) {
                //event.preventDefult();
                var form = $(this);
                if(form.find('.has-error').length) {
                        return false;
                }
                
                $.ajax({
                        url: form.attr('action'),
                        type: 'post',
                        data: form.serialize(),
                        dataType: 'JSON',
                        success: function(data) {
                            if(data.status == 'success'){
                                $('#registration-form').trigger("reset");
                                $('.select2-container').select2('val', '');
                                $('.registration-form-wrap').html("<div class='alert alert-success success-alert' ><p>Thank you for registering the workshop. Please dont forget to make your presence in ECE Seminar hall sharply at 2.30 pm.</p></div>");
                            }
                            return false;
                        }
                });
                
                return false;
            });
        });
    </script>
</body>
</html>
<?php $this->endPage() ?>
