<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Game'), ['action' => 'edit', $game->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Game'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Games'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Game'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="games view content">
            <h3><?= h($game->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Week') ?></th>
                    <td><?= $game->has('week') ? $this->Html->link($game->week->id, ['controller' => 'Weeks', 'action' => 'view', $game->week->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($game->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Home Team Id') ?></th>
                    <td><?= $game->home_team_id === null ? '' : $this->Number->format($game->home_team_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Away Team Id') ?></th>
                    <td><?= $game->away_team_id === null ? '' : $this->Number->format($game->away_team_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Home Points') ?></th>
                    <td><?= $game->home_points === null ? '' : $this->Number->format($game->home_points) ?></td>
                </tr>
                <tr>
                    <th><?= __('Away Points') ?></th>
                    <td><?= $game->away_points === null ? '' : $this->Number->format($game->away_points) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= $game->value === null ? '' : $this->Number->format($game->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Game Time') ?></th>
                    <td><?= h($game->game_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($game->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($game->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Playoff') ?></th>
                    <td><?= $game->is_playoff ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Championship') ?></th>
                    <td><?= $game->is_championship ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Superbowl') ?></th>
                    <td><?= $game->is_superbowl ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Picks') ?></h4>
                <?php if (!empty($game->picks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Game Id') ?></th>
                            <th><?= __('Team Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($game->picks as $picks) : ?>
                        <tr>
                            <td><?= h($picks->id) ?></td>
                            <td><?= h($picks->user_id) ?></td>
                            <td><?= h($picks->game_id) ?></td>
                            <td><?= h($picks->team_id) ?></td>
                            <td><?= h($picks->created) ?></td>
                            <td><?= h($picks->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Picks', 'action' => 'view', $picks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Picks', 'action' => 'edit', $picks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Picks', 'action' => 'delete', $picks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $picks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
