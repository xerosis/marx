<div class="teacherSubjects form">
<?php echo $this->Form->create('TeacherSubject');?>
	<fieldset>
 		<legend><?php __('Admin Edit Teacher Subject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('subject_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>