<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pick> $picks
 */
?>
<div class="picks index content">
    <?= $this->Html->link(__('New Pick'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Picks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('game_id') ?></th>
                    <th><?= $this->Paginator->sort('team_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($picks as $pick) : ?>
                    <tr>
                        <td><?= $this->Number->format($pick->id) ?></td>
                        <td><?= $pick->has('user') ? $this->Html->link($pick->user->username, ['controller' => 'Users', 'action' => 'view', $pick->user->id]) : '' ?></td>
                        <td><?= $pick->has('game') ? $this->Html->link($pick->game->id, ['controller' => 'Games', 'action' => 'view', $pick->game->id]) : '' ?></td>
                        <td><?= $pick->has('team') ? $this->Html->link($pick->team->name, ['controller' => 'Teams', 'action' => 'view', $pick->team->id]) : '' ?></td>
                        <td><?= h($pick->created) ?></td>
                        <td><?= h($pick->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $pick->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pick->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pick->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pick->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>