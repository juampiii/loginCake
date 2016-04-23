<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Teacher'), ['action' => 'edit', $teacher->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Teacher'), ['action' => 'delete', $teacher->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teachers view large-9 medium-8 columns content">
    <h3><?= h($teacher->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($teacher->Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nickname') ?></th>
            <td><?= h($teacher->Nickname) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($teacher->Password) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($teacher->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Surname') ?></th>
            <td><?= h($teacher->Surname) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($teacher->Phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Adress') ?></th>
            <td><?= h($teacher->Adress) ?></td>
        </tr>
    </table>
</div>
