<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pick $pick
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $games
 * @var string[]|\Cake\Collection\CollectionInterface $teams
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pick->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pick->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Picks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="picks form content">
            <?= $this->Form->create($pick) ?>
            <fieldset>
                <legend><?= __('Edit Pick') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('game_id', ['options' => $games, 'empty' => true]);
                    echo $this->Form->control('team_id', ['options' => $teams, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
