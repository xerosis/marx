<h2><?php __('Settings'); ?></h2>
<?php echo $this->Form->create('Teacher');      
      echo $this->Form->input('email');
      echo $this->Form->input('new_password', array('type' => 'password'));
      echo $this->Form->input('new_password_repeat', array('type' => 'password'));
      echo $this->Html->para(__('Get notified via email when a student uploads some work'), null);
      echo $this->Form->input('email_notification');
      echo $this->Form->end(__('Submit', true));
?>
