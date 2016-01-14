<nav class="large-3 medium-4 columns" id="actions-sidebar">
<?php echo $this->Element('actions', array('type' => 'Project', 'typePlural' => 'Projects')); ?>
</nav>
<div class="projects index large-9 medium-8 columns content">
    <h3>Projects by tag: <?php echo $this->Text->toList($tags); ?></h3>
    	  <?php echo $this->Element('searchtagform'); ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('client_id') ?></th>
                <th><?= $this->Paginator->sort('category_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('launch') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= $this->Number->format($project->id) ?></td>
                <td><?= $project->has('user') ? $this->Html->link($project->user->first_name, ['controller' => 'Users', 'action' => 'view', $project->user->id]) : '' ?></td>
                <td><?= $project->has('client') ? $this->Html->link($project->client->company, ['controller' => 'Clients', 'action' => 'view', $project->client->id]) : '' ?></td>
                <td><?= $project->has('category') ? $this->Html->link($project->category->name, ['controller' => 'Categories', 'action' => 'view', $project->category->id]) : '' ?></td>
                <td><?= h($project->title) ?></td>
                <td><?= h($project->launch) ?></td>
                <td><?= h($project->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
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
