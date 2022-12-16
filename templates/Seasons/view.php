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
            <?= $this->Html->link(__('Edit Season'), ['action' => 'edit', $season->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Season'), ['action' => 'delete', $season->id], ['confirm' => __('Are you sure you want to delete # {0}?', $season->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Seasons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Season'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="seasons view content">
            <h3><?= h($season->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($season->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $season->year === null ? '' : $this->Number->format($season->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($season->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($season->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Weeks') ?></h4>
                <?php if (!empty($season->weeks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Season Id') ?></th>
                            <th><?= __('Week Number') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Is Post Season') ?></th>
                            <th><?= __('Week Start') ?></th>
                            <th><?= __('Week End') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($season->weeks as $weeks) : ?>
                        <tr>
                            <td><?= h($weeks->id) ?></td>
                            <td><?= h($weeks->season_id) ?></td>
                            <td><?= h($weeks->week_number) ?></td>
                            <td><?= h($weeks->value) ?></td>
                            <td><?= h($weeks->is_post_season) ?></td>
                            <td><?= h($weeks->week_start) ?></td>
                            <td><?= h($weeks->week_end) ?></td>
                            <td><?= h($weeks->created) ?></td>
                            <td><?= h($weeks->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Weeks', 'action' => 'view', $weeks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Weeks', 'action' => 'edit', $weeks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Weeks', 'action' => 'delete', $weeks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeks->id)]) ?>
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
