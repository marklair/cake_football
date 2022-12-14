<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Week> $weeks
 */
?>
<div class="weeks index content">
    <?= $this->Html->link(__('New Week'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Weeks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('season_id') ?></th>
                    <th><?= $this->Paginator->sort('week_number') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('is_post_season') ?></th>
                    <th><?= $this->Paginator->sort('week_start') ?></th>
                    <th><?= $this->Paginator->sort('week_end') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($weeks as $week): ?>
                <tr>
                    <td><?= $this->Number->format($week->id) ?></td>
                    <td><?= $week->has('season') ? $this->Html->link($week->season->id, ['controller' => 'Seasons', 'action' => 'view', $week->season->id]) : '' ?></td>
                    <td><?= $this->Number->format($week->week_number) ?></td>
                    <td><?= $week->value === null ? '' : $this->Number->format($week->value) ?></td>
                    <td><?= h($week->is_post_season) ?></td>
                    <td><?= h($week->week_start) ?></td>
                    <td><?= h($week->week_end) ?></td>
                    <td><?= h($week->created) ?></td>
                    <td><?= h($week->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $week->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $week->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $week->id], ['confirm' => __('Are you sure you want to delete # {0}?', $week->id)]) ?>
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
