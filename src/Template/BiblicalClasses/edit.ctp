<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $biblicalClass->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $biblicalClass->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Biblical Classes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pgs'), ['controller' => 'Pgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pg'), ['controller' => 'Pgs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="biblicalClasses form large-10 medium-9 columns">
    <?= $this->Form->create($biblicalClass) ?>
    <fieldset>
        <legend><?= __('Edit Biblical Class') ?></legend>
        <?php
            echo $this->Form->input('pg_id', ['options' => $pgs]);
            echo $this->Form->input('teacher_id');
            echo $this->Form->input('auxiliar_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
