<div class="units index">
    <h2><?php __('Units');?></h2>
    <div class='actions'>
    <ul><li>
    <?php echo $html->link(__('Add', true), array('action' => 'add')); ?>
    </li></ul>
    </div>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('code');?></th>
            <th><?php echo $this->Paginator->sort('subject_id');?></th>
            <th><?php echo $this->Paginator->sort('description');?></th>
            <th class="actions"><?php __('Actions');?></th>
    </tr>
    <?php
    $i = 0;
    foreach ($units as $unit):
        $class = null;
        if ($i++ % 2 == 0) {
            $class = ' class="altrow"';
        }
    ?>
    <tr<?php echo $class;?>>
        <td><?php echo $unit['Unit']['code']; ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($unit['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $unit['Subject']['id'])); ?>
        </td>
        <td><?php echo $unit['Unit']['description']; ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('View', true), array('action' => 'view', $unit['Unit']['id'])); ?>
            <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $unit['Unit']['id'])); ?>
            <?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $unit['Unit']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $unit['Unit']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
    ));
    ?>	</p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
    | 	<?php echo $this->Paginator->numbers();?>
|
        <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
    </div>
</div>