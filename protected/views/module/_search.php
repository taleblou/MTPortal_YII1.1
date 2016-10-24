<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'ModuleID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleDefID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleOrder',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleShowinAllPage',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleTitle',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'ModuleSkin',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'ModulePortalID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleZone',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'ModulePageID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleLanguageID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleStyleID',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleStatus',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ModuleCopyID',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
