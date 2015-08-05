<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tests view large-10 medium-9 columns">
    <h2><?= h($test->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Image') ?></h6>
            <p><?= h($test->image) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($test->id) ?></p>
        </div>
    </div>
</div>
