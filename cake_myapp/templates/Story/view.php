<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $story
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Story'), ['action' => 'edit', $story->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Story'), ['action' => 'delete', $story->id], ['confirm' => __('Are you sure you want to delete # {0}?', $story->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Story'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Story'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="story view content">
            <h3><?= h($story->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($story->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($story->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
