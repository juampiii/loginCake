<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="teachers form large-9 medium-8 columns content">
    <?= $this->Form->create($teacher) ?>
    <fieldset>
        <legend><?= __('Add Teacher') ?></legend>
        <?php
            echo $this->Form->input('Nickname');
            echo $this->Form->input('Id');
            echo $this->Form->input('Password');
            echo $this->Form->input('Name');
            echo $this->Form->input('Surname');
            echo $this->Form->input('Phone');
            echo $this->Form->input('Adress');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
