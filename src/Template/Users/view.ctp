<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Biblical Classes'), ['controller' => 'BiblicalClasses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biblical Class'), ['controller' => 'BiblicalClasses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Leaders'), ['controller' => 'Leaders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leader'), ['controller' => 'Leaders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Secretaries'), ['controller' => 'Secretaries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secretary'), ['controller' => 'Secretaries', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Pg') ?></h6>
            <p><?= $user->has('pg') ? $this->Html->link($user->pg->name, ['controller' => 'Pgs', 'action' => 'view', $user->pg->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Biblical Class') ?></h6>
            <p><?= $user->has('biblical_class') ? $this->Html->link($user->biblical_class->id, ['controller' => 'BiblicalClasses', 'action' => 'view', $user->biblical_class->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Birthday') ?></h6>
            <p><?= h($user->birthday) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Testimony') ?></h6>
            <?= $this->Text->autoParagraph(h($user->testimony)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Leaders') ?></h4>
    <?php if (!empty($user->leaders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->leaders as $leaders): ?>
        <tr>
            <td><?= h($leaders->id) ?></td>
            <td><?= h($leaders->user_id) ?></td>
            <td><?= h($leaders->created) ?></td>
            <td><?= h($leaders->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Leaders', 'action' => 'view', $leaders->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Leaders', 'action' => 'edit', $leaders->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leaders', 'action' => 'delete', $leaders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaders->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Secretaries') ?></h4>
    <?php if (!empty($user->secretaries)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->secretaries as $secretaries): ?>
        <tr>
            <td><?= h($secretaries->id) ?></td>
            <td><?= h($secretaries->user_id) ?></td>
            <td><?= h($secretaries->created) ?></td>
            <td><?= h($secretaries->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Secretaries', 'action' => 'view', $secretaries->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Secretaries', 'action' => 'edit', $secretaries->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Secretaries', 'action' => 'delete', $secretaries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secretaries->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
