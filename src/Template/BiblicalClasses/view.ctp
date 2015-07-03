<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Biblical Class'), ['action' => 'edit', $biblicalClass->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Biblical Class'), ['action' => 'delete', $biblicalClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biblicalClass->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Biblical Classes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biblical Class'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="biblicalClasses view large-10 medium-9 columns">
    <h2><?= h($biblicalClass->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Pg') ?></h6>
            <p><?= $biblicalClass->has('pg') ? $this->Html->link($biblicalClass->pg->name, ['controller' => 'Pgs', 'action' => 'view', $biblicalClass->pg->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($biblicalClass->id) ?></p>
            <h6 class="subheader"><?= __('Teacher Id') ?></h6>
            <p><?= $this->Number->format($biblicalClass->teacher_id) ?></p>
            <h6 class="subheader"><?= __('Auxiliar Id') ?></h6>
            <p><?= $this->Number->format($biblicalClass->auxiliar_id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($biblicalClass->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Pg Id') ?></th>
            <th><?= __('Biblical Class Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Birthday') ?></th>
            <th><?= __('Testimony') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($biblicalClass->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->pg_id) ?></td>
            <td><?= h($users->biblical_class_id) ?></td>
            <td><?= h($users->name) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->birthday) ?></td>
            <td><?= h($users->testimony) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
