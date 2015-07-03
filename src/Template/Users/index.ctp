<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Biblical Classes'), ['controller' => 'BiblicalClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biblical Class'), ['controller' => 'BiblicalClasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Leaders'), ['controller' => 'Leaders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Leader'), ['controller' => 'Leaders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Secretaries'), ['controller' => 'Secretaries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Secretary'), ['controller' => 'Secretaries', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="users index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('pg_id') ?></th>
            <th><?= $this->Paginator->sort('biblical_class_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('birthday') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->id) ?></td>
            <td>
                <?= $user->has('pg') ? $this->Html->link($user->pg->name, ['controller' => 'Pgs', 'action' => 'view', $user->pg->id]) : '' ?>
            </td>
            <td>
                <?= $user->has('biblical_class') ? $this->Html->link($user->biblical_class->id, ['controller' => 'BiblicalClasses', 'action' => 'view', $user->biblical_class->id]) : '' ?>
            </td>
            <td><?= h($user->name) ?></td>
            <td><?= h($user->email) ?></td>
            <td><?= h($user->birthday) ?></td>
            <td><?= h($user->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
