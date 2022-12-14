<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pick $pick
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pick'), ['action' => 'edit', $pick->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pick'), ['action' => 'delete', $pick->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pick->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Picks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pick'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="picks view content">
            <h3><?= h($pick->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $pick->has('user') ? $this->Html->link($pick->user->id, ['controller' => 'Users', 'action' => 'view', $pick->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Game') ?></th>
                    <td><?= $pick->has('game') ? $this->Html->link($pick->game->id, ['controller' => 'Games', 'action' => 'view', $pick->game->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Team') ?></th>
                    <td><?= $pick->has('team') ? $this->Html->link($pick->team->name, ['controller' => 'Teams', 'action' => 'view', $pick->team->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pick->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pick->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pick->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
