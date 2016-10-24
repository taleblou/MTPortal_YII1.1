<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'PortalID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PortalName',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'PortalURL',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'PortalDefaultLanguageID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PortalStyleID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PortalEnabled',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'PortalMessageInactivity',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'PortalAdminUserID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'PortalParentID',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
