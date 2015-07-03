<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Biblical Study'), ['action' => 'edit', $biblicalStudy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Biblical Study'), ['action' => 'delete', $biblicalStudy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biblicalStudy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Biblical Studies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biblical Study'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="biblicalStudies view large-10 medium-9 columns">
    <h2><?= h($biblicalStudy->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($biblicalStudy->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($biblicalStudy->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($biblicalStudy->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($biblicalStudy->modified) ?></p>
        </div>
    </div>
</div>
