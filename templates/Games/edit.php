<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 * @var string[]|\Cake\Collection\CollectionInterface $weeks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $game->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $game->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Games'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="games form content">
            <?= $this->Form->create($game) ?>
            <fieldset>
                <legend><?= __('Edit Game') ?></legend>
                <?php
                    echo $this->Form->control('home_team_id');
                    echo $this->Form->control('away_team_id');
                    echo $this->Form->control('week_id', ['options' => $weeks, 'empty' => true]);
                    echo $this->Form->control('is_playoff');
                    echo $this->Form->control('is_championship');
                    echo $this->Form->control('is_superbowl');
                    echo $this->Form->control('home_points');
                    echo $this->Form->control('away_points');
                    echo $this->Form->control('value');
                    echo $this->Form->control('game_time', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
