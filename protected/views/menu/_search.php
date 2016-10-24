<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'MenuID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'MenuParentID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'MenuTypeLink',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'MenuModuleID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'MenuApproved',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'MenuOrder',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'MenuUrl',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'MenuTitle',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'MenuAction',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'MenuShowAllPage',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
