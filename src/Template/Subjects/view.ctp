<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->Code]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->Code], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->Code)]) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subjects view large-9 medium-8 columns content">
    <h3><?= h($subject->Code) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($subject->Code) ?></td>
        </tr>
        <tr>
            <th><?= __('TeachersId') ?></th>
            <td><?= h($subject->TeachersId) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($subject->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('ECTS') ?></th>
            <td><?= $this->Number->format($subject->ECTS) ?></td>
        </tr>
        <tr>
            <th><?= __('Imparted') ?></th>
            <td><?= $subject->Imparted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
