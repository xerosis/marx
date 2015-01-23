<h2><?php __('Recent Submissions');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
        <th><?php echo $this->Paginator->sort('filename');?></th>
        <th><?php echo $this->Paginator->sort('unit_id');?></th>
        <th><?php echo $this->Paginator->sort('task_id');?></th>
        <th><?php echo $this->Paginator->sort('status_id');?></th>
        <th><?php echo $this->Paginator->sort('mark_id');?></th>
        <th><?php echo $this->Paginator->sort('group');?></th>
        <th><?php echo $this->Paginator->sort('size');?></th>
        <th><?php echo $this->Paginator->sort('created');?></th>
        <th><?php echo $this->Paginator->sort('viewed');?></th>
        <th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($submissions as $submission):
    $class = null;
    if ($i++ % 2 == 0) {
        $class = ' class="altrow"';
    }   
?>
<tr<?php echo $class;?>>
    <td><?php echo '<span class="hover" title="'.$submission['Submission']['type'].'">'.$submission['Submission']['filename']; ?></p>&nbsp;</td>
    <td>
        <?php echo $submission['Unit']['code']; ?>
    </td>
    <td>
        <?php echo $submission['Task']['code']; ?>
    </td>
    <td><?php echo $submission['Status']['status']; ?>&nbsp;</td>
    <td><?php echo $submission['Mark']['status']; ?>&nbsp;</td>
    <td>
        <?php echo $submission['Group']['code']; ?>
    </td>
    <td><?php echo $this->Number->toReadableSize($submission['Submission']['size']); ?>&nbsp;</td>
    <td><?php echo $submission['Submission']['created']; ?>&nbsp;</td>
    <td><?php echo ($submission['Submission']['viewed']) ? $html->image('tick.png') : null; ?>&nbsp;</td>
    <td class="actions">
        <?php echo $this->Html->link(__('View', true), array('action' => 'view', $submission['Submission']['id'])); ?>
        <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $submission['Submission']['id'])); ?>
        <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $submission['Submission']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $submission['Submission']['id'])); ?>
    </td>
</tr>
<?php endforeach; ?>
</table>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?>  </p>

<div class="paging">
    <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
    |  <?php echo $this->Paginator->numbers();?>
|
    <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</div>
