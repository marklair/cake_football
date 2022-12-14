<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Week $week
 * @var string[]|\Cake\Collection\CollectionInterface $seasons
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $week->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $week->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Weeks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="weeks form content">
            <?= $this->Form->create($week) ?>
            <fieldset>
                <legend><?= __('Edit Week') ?></legend>
                <?php
                    echo $this->Form->control('season_id', ['options' => $seasons]);
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
