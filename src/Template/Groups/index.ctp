<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="groups index large-10 medium-9 columns">
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
    <?php foreach ($groups as $group): ?>
        <tr>
            <td><?= $this->Number->format($group->id) ?></td>
            <td>
                <?= $group->has('pg') ? $this->Html->link($group->pg->name, ['controller' => 'Pgs', 'action' => 'view', $group->pg->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($group->teacher_id) ?></td>
            <td><?= $this->Number->format($group->auxiliar_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $group->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $group->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?>
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
