<div class="modal fade modal-sign-in" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-content">
          <div class="modal-body"> 

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'action'=>Yii::app()->createUrl('site/login'),
	'enableAjaxValidation'=>true,
	/*'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),*/
	'htmlOptions'=> array('class'=>'reg-form')
)); ?>

	<h3 class="form-title">SIGN IN WITH YOUR PASSWORD</h3>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email', array('class'=>'control-label visible-ie8 visible-ie9')); ?>
		<div class="input-icon"> <i class="icon-user"></i>
		<?php echo $form->textField($model,'email', array('class'=>'form-control placeholder-no-fix', 'placeholder'=>'Email')); ?>
		</div>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password',  array('class'=>'control-label visible-ie8 visible-ie9')); ?>
		<div class="input-icon"> <i class="icon-key"></i>
		<?php echo $form->passwordField($model,'password',  array('class'=>'form-control placeholder-no-fix', 'placeholder'=>'Password')); ?>
		</div>
		<?php echo $form->error($model,'password'); ?>

	</div>

	<div class="form-group endform">
	<div class="checkbox-list">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
		<span class="text-right"> <a href="#">Forgot Password</a></span>
		</div>
	</div>
	
	   <div class="modal-div">
          <div class="divider"></div>
          </div>
          <div class="modal-footer">
            <label> Need an account? <a  data-toggle="modal" href="#sign-up"> Sign Up</a> </label>
            <?php 
      echo CHtml::ajaxSubmitButton('Sign In', $this->createUrl("/site/login"),
       			 array(
                 'dataType'=>'json',
                 'type'=>'post',
                 'success'=>'function(data) {
                     if(data.status=="success"){
                     window.location=data.returnUrl;
                    }
                     else{
                    $.each(data, function(key, val) {
                    $("#login-form #"+key+"_em_").text(val);                                                    
                    $("#login-form #"+key+"_em_").show();
                    });
                    }       
                }'), array('class'=>'btn blue', 'data-dismiss'=>'model')); 
                ?>
          </div>
        </div>


<?php $this->endWidget(); ?>
</div></div><!-- form -->
