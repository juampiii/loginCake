<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teachers index large-9 medium-8 columns content">
    <h3><?= __('Teachers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Nickname') ?></th>
                <th><?= $this->Paginator->sort('Password') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('Surname') ?></th>
                <th><?= $this->Paginator->sort('Phone') ?></th>
                <th><?= $this->Paginator->sort('Adress') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teachers as $teacher): ?>
            <tr>
                <td><?= h($teacher->Id) ?></td>
                <td><?= h($teacher->Nickname) ?></td>
                <td><?= h($teacher->Password) ?></td>
                <td><?= h($teacher->Name) ?></td>
                <td><?= h($teacher->Surname) ?></td>
                <td><?= h($teacher->Phone) ?></td>
                <td><?= h($teacher->Adress) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teacher->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teacher->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teacher->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
