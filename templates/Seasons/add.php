<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Season $season
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Seasons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="seasons form content">
            <?= $this->Form->create($season) ?>
            <fieldset>
                <legend><?= __('Add Season') ?></legend>
                <?php
                    echo $this->Form->control('year');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
