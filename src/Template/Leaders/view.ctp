<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Leader'), ['action' => 'edit', $leader->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Leader'), ['action' => 'delete', $leader->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leader->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leaders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leader'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leaders view large-10 medium-9 columns">
    <h2><?= h($leader->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $leader->has('user') ? $this->Html->link($leader->user->name, ['controller' => 'Users', 'action' => 'view', $leader->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($leader->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($leader->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($leader->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Pgs') ?></h4>
    <?php if (!empty($leader->pgs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Foundation') ?></th>
            <th><?= __('Leader Id') ?></th>
            <th><?= __('Secretary Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($leader->pgs as $pgs): ?>
        <tr>
            <td><?= h($pgs->id) ?></td>
            <td><?= h($pgs->name) ?></td>
            <td><?= h($pgs->address) ?></td>
            <td><?= h($pgs->foundation) ?></td>
            <td><?= h($pgs->leader_id) ?></td>
            <td><?= h($pgs->secretary_id) ?></td>
            <td><?= h($pgs->created) ?></td>
            <td><?= h($pgs->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Pgs', 'action' => 'view', $pgs->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Pgs', 'action' => 'edit', $pgs->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pgs', 'action' => 'delete', $pgs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pgs->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
