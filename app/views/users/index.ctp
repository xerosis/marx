    <h2><?php __('Users');?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('forename');?></th>
            <th><?php echo $this->Paginator->sort('surname');?></th>
            <th><?php echo $this->Paginator->sort('year');?></th>
            <th><?php echo $this->Paginator->sort('form');?></th>
            <th class="actions"><?php __('Actions');?></th>
    </tr>
    <?php
    $i = 0;
    foreach ($users as $user):
        $class = null;
        if ($i++ % 2 == 0) {
            $class = ' class="altrow"';
        }
    ?>
    <tr<?php echo $class;?>>
        <td><?php echo $user['User']['forename']; ?>&nbsp;</td>
        <td><?php echo $user['User']['surname']; ?>&nbsp;</td>
        <td><?php echo $user['User']['year']; ?>&nbsp;</td>
        <td><?php echo $user['User']['form']; ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
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
