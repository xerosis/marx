<div class="teacherSubjects form">
<?php echo $this->Form->create('TeacherSubject');?>
	<fieldset>
 		<legend><?php __('Edit Teacher Subject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('subject_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TeacherSubject.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TeacherSubject.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Teacher Subjects', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>