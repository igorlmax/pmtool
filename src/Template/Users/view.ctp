<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Bio') ?></h4>
        <?= $this->Text->autoParagraph(h($user->bio)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Notes') ?></h4>
        <?php if (!empty($user->notes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Project Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Body') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->notes as $notes): ?>
            <tr>
                <td><?= h($notes->id) ?></td>
                <td><?= h($notes->project_id) ?></td>
                <td><?= h($notes->user_id) ?></td>
                <td><?= h($notes->title) ?></td>
                <td><?= h($notes->body) ?></td>
                <td><?= h($notes->created) ?></td>
                <td><?= h($notes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notes', 'action' => 'view', $notes->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notes', 'action' => 'edit', $notes->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notes', 'action' => 'delete', $notes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notes->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projects') ?></h4>
        <?php if (!empty($user->projects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Client Id') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Url') ?></th>
                <th><?= __('Launch') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->projects as $projects): ?>
            <tr>
                <td><?= h($projects->id) ?></td>
                <td><?= h($projects->user_id) ?></td>
                <td><?= h($projects->client_id) ?></td>
                <td><?= h($projects->category_id) ?></td>
                <td><?= h($projects->title) ?></td>
                <td><?= h($projects->description) ?></td>
                <td><?= h($projects->url) ?></td>
                <td><?= h($projects->launch) ?></td>
                <td><?= h($projects->created) ?></td>
                <td><?= h($projects->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
