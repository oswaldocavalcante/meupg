<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Pg'), ['action' => 'edit', $pg->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pg'), ['action' => 'delete', $pg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pg->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pgs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pg'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leaders'), ['controller' => 'Leaders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leader'), ['controller' => 'Leaders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Secretaries'), ['controller' => 'Secretaries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secretary'), ['controller' => 'Secretaries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Biblical Classes'), ['controller' => 'BiblicalClasses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biblical Class'), ['controller' => 'BiblicalClasses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pgs view large-10 medium-9 columns">
    <h2><?= h($pg->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($pg->name) ?></p>
            <h6 class="subheader"><?= __('Leader') ?></h6>
            <p><?= $pg->has('leader') ? $this->Html->link($pg->leader->id, ['controller' => 'Leaders', 'action' => 'view', $pg->leader->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Secretary') ?></h6>
            <p><?= $pg->has('secretary') ? $this->Html->link($pg->secretary->id, ['controller' => 'Secretaries', 'action' => 'view', $pg->secretary->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pg->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Foundation') ?></h6>
            <p><?= h($pg->foundation) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($pg->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($pg->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Address') ?></h6>
            <?= $this->Text->autoParagraph(h($pg->address)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related BiblicalClasses') ?></h4>
    <?php if (!empty($pg->biblical_classes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Pg Id') ?></th>
            <th><?= __('Teacher Id') ?></th>
            <th><?= __('Auxiliar Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($pg->biblical_classes as $biblicalClasses): ?>
        <tr>
            <td><?= h($biblicalClasses->id) ?></td>
            <td><?= h($biblicalClasses->pg_id) ?></td>
            <td><?= h($biblicalClasses->teacher_id) ?></td>
            <td><?= h($biblicalClasses->auxiliar_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'BiblicalClasses', 'action' => 'view', $biblicalClasses->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'BiblicalClasses', 'action' => 'edit', $biblicalClasses->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BiblicalClasses', 'action' => 'delete', $biblicalClasses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biblicalClasses->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($pg->users)): ?>
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
        <?php foreach ($pg->users as $users): ?>
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
