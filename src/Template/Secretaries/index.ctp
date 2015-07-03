<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Secretary'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="secretaries index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($secretaries as $secretary): ?>
        <tr>
            <td><?= $this->Number->format($secretary->id) ?></td>
            <td>
                <?= $secretary->has('user') ? $this->Html->link($secretary->user->name, ['controller' => 'Users', 'action' => 'view', $secretary->user->id]) : '' ?>
            </td>
            <td><?= h($secretary->created) ?></td>
            <td><?= h($secretary->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $secretary->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $secretary->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $secretary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secretary->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
