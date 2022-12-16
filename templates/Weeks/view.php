<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Week $week
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Week'), ['action' => 'edit', $week->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Week'), ['action' => 'delete', $week->id], ['confirm' => __('Are you sure you want to delete # {0}?', $week->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Weeks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Week'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="weeks view content">
            <h3><?= h($week->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Season') ?></th>
                    <td><?= $week->has('season') ? $this->Html->link($week->season->id, ['controller' => 'Seasons', 'action' => 'view', $week->season->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($week->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Week Number') ?></th>
                    <td><?= $week->week_number === null ? '' : $this->Number->format($week->week_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= $week->value === null ? '' : $this->Number->format($week->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Week Start') ?></th>
                    <td><?= h($week->week_start) ?></td>
                </tr>
                <tr>
                    <th><?= __('Week End') ?></th>
                    <td><?= h($week->week_end) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($week->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($week->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Post Season') ?></th>
                    <td><?= $week->is_post_season ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Games') ?></h4>
                <?php if (!empty($week->games)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Home Team Id') ?></th>
                            <th><?= __('Away Team Id') ?></th>
                            <th><?= __('Week Id') ?></th>
                            <th><?= __('Is Playoff') ?></th>
                            <th><?= __('Is Championship') ?></th>
                            <th><?= __('Is Superbowl') ?></th>
                            <th><?= __('Home Points') ?></th>
                            <th><?= __('Away Points') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Game Time') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($week->games as $games) : ?>
                        <tr>
                            <td><?= h($games->id) ?></td>
                            <td><?= h($games->home_team_id) ?></td>
                            <td><?= h($games->away_team_id) ?></td>
                            <td><?= h($games->week_id) ?></td>
                            <td><?= h($games->is_playoff) ?></td>
                            <td><?= h($games->is_championship) ?></td>
                            <td><?= h($games->is_superbowl) ?></td>
                            <td><?= h($games->home_points) ?></td>
                            <td><?= h($games->away_points) ?></td>
                            <td><?= h($games->value) ?></td>
                            <td><?= h($games->game_time) ?></td>
                            <td><?= h($games->created) ?></td>
                            <td><?= h($games->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Games', 'action' => 'view', $games->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Games', 'action' => 'edit', $games->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Games', 'action' => 'delete', $games->id], ['confirm' => __('Are you sure you want to delete # {0}?', $games->id)]) ?>
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
