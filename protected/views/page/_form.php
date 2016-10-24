<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'page-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'PageName',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'PageOrder',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PageParentID',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'PageUrl',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'PagePortalID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PageLanguageID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PageKeywords',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'PageTitle',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'PageStyleID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PageTypeLink',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'HomePage',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'PageDiscription',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'PageLayouts',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'PageStatus',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
