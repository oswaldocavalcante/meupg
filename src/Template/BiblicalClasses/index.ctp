<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Biblical Class'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="biblicalClasses index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('pg_id') ?></th>
            <th><?= $this->Paginator->sort('teacher_id') ?></th>
            <th><?= $this->Paginator->sort('auxiliar_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($biblicalClasses as $biblicalClass): ?>
        <tr>
            <td><?= $this->Number->format($biblicalClass->id) ?></td>
            <td>
                <?= $biblicalClass->has('pg') ? $this->Html->link($biblicalClass->pg->name, ['controller' => 'Pgs', 'action' => 'view', $biblicalClass->pg->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($biblicalClass->teacher_id) ?></td>
            <td><?= $this->Number->format($biblicalClass->auxiliar_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $biblicalClass->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $biblicalClass->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $biblicalClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biblicalClass->id)]) ?>
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
