<nav class="large-3 medium-4 columns" id="actions-sidebar">
<?php echo $this->Element('actions', array('type' => 'Project', 'typePlural' => 'Projects')); ?>

</nav>
<div class="projects form large-9 medium-8 columns content">
    <?= $this->Form->create($project) ?>
    <fieldset>
        <legend><?= __('Add Project') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('client_id', ['options' => $clients]);
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('url');
            echo $this->Form->input('launch');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
