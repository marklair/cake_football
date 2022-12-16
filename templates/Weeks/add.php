<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Week $week
 * @var \Cake\Collection\CollectionInterface|string[] $seasons
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Weeks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="weeks form content">
            <?= $this->Form->create($week) ?>
            <fieldset>
                <legend><?= __('Add Week') ?></legend>
                <?php
                    echo $this->Form->control('season_id', ['options' => $seasons, 'empty' => true]);
                    echo $this->Form->control('week_number');
                    echo $this->Form->control('value');
                    echo $this->Form->control('is_post_season');
                    echo $this->Form->control('week_start', ['empty' => true]);
                    echo $this->Form->control('week_end', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
