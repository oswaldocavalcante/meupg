<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Pg'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leaders'), ['controller' => 'Leaders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Leader'), ['controller' => 'Leaders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Secretaries'), ['controller' => 'Secretaries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Secretary'), ['controller' => 'Secretaries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Biblical Classes'), ['controller' => 'BiblicalClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biblical Class'), ['controller' => 'BiblicalClasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pgs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('foundation') ?></th>
            <th><?= $this->Paginator->sort('leader_id') ?></th>
            <th><?= $this->Paginator->sort('secretary_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pgs as $pg): ?>
        <tr>
            <td><?= $this->Number->format($pg->id) ?></td>
            <td><?= h($pg->name) ?></td>
            <td><?= h($pg->foundation) ?></td>
            <td>
                <?= $pg->has('leader') ? $this->Html->link($pg->leader->id, ['controller' => 'Leaders', 'action' => 'view', $pg->leader->id]) : '' ?>
            </td>
            <td>
                <?= $pg->has('secretary') ? $this->Html->link($pg->secretary->id, ['controller' => 'Secretaries', 'action' => 'view', $pg->secretary->id]) : '' ?>
            </td>
            <td><?= h($pg->created) ?></td>
            <td><?= h($pg->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $pg->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pg->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pg->id)]) ?>
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
