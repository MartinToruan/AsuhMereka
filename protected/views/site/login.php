<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>
<div class="well">
    <center>
        <h1><b>Login</b></h1>

        <hR>
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            /* $model2 = Pegawai::model()->findAll();
              $pw = 'pidel123';
              foreach($model2 as $data)
              {
              Yii::app()->db->createCommand('insert into account values("'.null.'","'.$data['USER_NAME'].'" , "'.Yii::app()->digester->md5($pw).'")')->query();
              } */
            ?>

            <p class="note">Bagian dengan tanda <span class="required">*</span> dibutuhkan.</p>

            <div class="row">
                <FONT SIZE="3"><b>Username </b></FONT><br>
                <?php echo $form->textField($model, 'username'); ?>
                <?php echo $form->error($model, 'username', array('class' => "alert alert-error")); ?>
            </div>

            <div class="row">
                <FONT SIZE="3"><b>Password </b></FONT><br>
                <?php echo $form->passwordField($model, 'password'); ?>
                <?php echo $form->error($model, 'password', array('class' => "alert alert-error")); ?>

            </div>

            <div class="row rememberMe">
                <?php echo $form->checkBox($model, 'rememberMe'); ?>
                <b><?php echo $form->label($model, 'rememberMe'); ?></b>
                <?php echo $form->error($model, 'rememberMe'); ?>
            </div>

            <HR>
            <div class="row buttons">
                <?php
                $this->widget('booster.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'context' => 'primary',
                    'label' => 'Masuk',
                ));
                ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->

    </center>
</div>
