<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pg->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pg->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pgs'), ['action' => 'index']) ?></li>
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
<div class="pgs form large-10 medium-9 columns">
    <?= $this->Form->create($pg) ?>
    <fieldset>
        <legend><?= __('Edit Pg') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('address');
            echo $this->Form->input('foundation');
            echo $this->Form->input('leader_id', ['options' => $leaders, 'empty' => true]);
            echo $this->Form->input('secretary_id', ['options' => $secretaries, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
