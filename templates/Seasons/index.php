<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Season> $seasons
 */
?>
<div class="seasons index content">
    <?= $this->Html->link(__('New Season'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Seasons') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($seasons as $season): ?>
                <tr>
                    <td><?= $this->Number->format($season->id) ?></td>
                    <td><?= $season->year === null ? '' : $this->Number->format($season->year) ?></td>
                    <td><?= h($season->created) ?></td>
                    <td><?= h($season->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $season->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $season->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $season->id], ['confirm' => __('Are you sure you want to delete # {0}?', $season->id)]) ?>
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
