<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li>Profesor  Pepito</li>
    </ul>
</nav>

<div class="teachers index large-9 medium-8 columns content">

<h2> Listado de asignaturas</h2>

    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('Code') ?></th>
            <th><?= $this->Paginator->sort('TeachersId') ?></th>
            <th><?= $this->Paginator->sort('Name') ?></th>
            <th><?= $this->Paginator->sort('ECTS') ?></th>
            <th><?= $this->Paginator->sort('Imparted') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($subjects as $subject): ?>
            <tr>
                <td><?= h($subject->Code) ?></td>
                <td><?= h($subject->TeachersId) ?></td>
                <td><?= h($subject->Name) ?></td>
                <td><?= $this->Number->format($subject->ECTS) ?></td>
                <td><?= h($subject->Imparted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subject->Code]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subject->Code]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subject->Code], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->Code)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>