<nav class="large-3 medium-4 columns" id="actions-sidebar">
<?php echo $this->Element('actions', array('type' => 'Category', 'typePlural' => 'Categories')); ?>
</nav>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Edit Category') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
