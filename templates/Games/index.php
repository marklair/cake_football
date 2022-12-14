<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Game> $games
 */
?>
<div class="games index content">
    <?= $this->Html->link(__('New Game'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Games') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('home_team_id') ?></th>
                    <th><?= $this->Paginator->sort('away_team_id') ?></th>
                    <th><?= $this->Paginator->sort('week_id') ?></th>
                    <th><?= $this->Paginator->sort('is_playoff') ?></th>
                    <th><?= $this->Paginator->sort('is_championship') ?></th>
                    <th><?= $this->Paginator->sort('is_superbowl') ?></th>
                    <th><?= $this->Paginator->sort('home_points') ?></th>
                    <th><?= $this->Paginator->sort('away_points') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('game_time') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($games as $game): ?>
                <tr>
                    <td><?= $this->Number->format($game->id) ?></td>
                    <td><?= $this->Number->format($game->home_team_id) ?></td>
                    <td><?= $this->Number->format($game->away_team_id) ?></td>
                    <td><?= $game->has('week') ? $this->Html->link($game->week->id, ['controller' => 'Weeks', 'action' => 'view', $game->week->id]) : '' ?></td>
                    <td><?= h($game->is_playoff) ?></td>
                    <td><?= h($game->is_championship) ?></td>
                    <td><?= h($game->is_superbowl) ?></td>
                    <td><?= $game->home_points === null ? '' : $this->Number->format($game->home_points) ?></td>
                    <td><?= $game->away_points === null ? '' : $this->Number->format($game->away_points) ?></td>
                    <td><?= $game->value === null ? '' : $this->Number->format($game->value) ?></td>
                    <td><?= h($game->game_time) ?></td>
                    <td><?= h($game->created) ?></td>
                    <td><?= h($game->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $game->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $game->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?>
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
