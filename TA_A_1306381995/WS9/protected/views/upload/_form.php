<?php
/* @var $this UploadController */
/* @var $model Upload */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'upload-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
	<div class="shout-text">
        <div class="well">
		<p>Join us and further your career in some of the world’s most dynamic markets
		We are always looking for talented people. If you think you have what it takes, please send us.your CV</p>
      <ul class="list-icon">
        <li>2 Network engineers</li>
        <li>1 Secretaries</li>
        <li>1 Sales executive</li>
        <li>3 Accountants </li>
        <li>3 System engineers</li>
        <li>1 Systems administrator</li>
        <li>1 Public relations</li>
       </ul>
	   <p>* Click the button below to upload your CV </p>
      
     </div>
    
        </div>
	<p class="note">Please upload file in types : .jpg / .png / .zip / .pdf</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Upload File'); ?>
		<?php echo $form->fileField($model,'item',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'item'); ?>
	</div>
	<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->