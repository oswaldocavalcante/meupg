<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="groups view large-10 medium-9 columns">
    <h2><?= h($group->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Pg') ?></h6>
            <p><?= $group->has('pg') ? $this->Html->link($group->pg->name, ['controller' => 'Pgs', 'action' => 'view', $group->pg->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($group->id) ?></p>
            <h6 class="subheader"><?= __('Teacher Id') ?></h6>
            <p><?= $this->Number->format($group->teacher_id) ?></p>
            <h6 class="subheader"><?= __('Auxiliar Id') ?></h6>
            <p><?= $this->Number->format($group->auxiliar_id) ?></p>
        </div>
    </div>
</div>
