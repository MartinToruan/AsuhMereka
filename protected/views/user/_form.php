<div class="well">
    <center>
        <h1><b>Register</b></h1>

        <hR>
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'user-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>

            <p class="note">Bagian dengan tanda <span class="required">*</span> dibutuhkan.</p>

            <div class="row">
                <FONT SIZE="3"><b>Username </b></FONT><br>
                <?php echo $form->textField($model, 'username'); ?>
                <?php echo $form->error($model, 'username', array('class' => "alert alert-error")); ?>
            </div>

            <div class="row">
                <FONT SIZE="3"><b>Password </b></FONT><br>
                <?php echo $form->passwordField($model, 'password_hash'); ?>
                <?php echo $form->error($model, 'password_hash', array('class' => "alert alert-error")); ?>

            </div>

            <div class="row rememberMe">
                <FONT SIZE="3"><b>Email </b></FONT><br>
        	<?php echo $form->textField($model,'email'); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>

            <HR>
            <div class="row buttons">
                <?php
                $this->widget('booster.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'context' => 'primary',
                    'label' => 'Daftar',
                ));
                ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->

    </center>
</div>

