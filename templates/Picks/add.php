<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pick $pick
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $games
 * @var \Cake\Collection\CollectionInterface|string[] $teams
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Picks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="picks form content">
            <?= $this->Form->create($pick) ?>
            <fieldset>
                <legend><?= __('Add Pick') ?></legend>
                <?php
                echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                echo $this->Form->control('game_id', ['options' => $games, 'empty' => true]);
                //echo $this->Form->control('team_id', ['options' => $teams, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>