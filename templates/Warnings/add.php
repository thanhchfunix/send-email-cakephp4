<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Warning $warning
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Warnings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="warnings form content">
            <?= $this->Form->create($warning) ?>
            <fieldset>
                <legend><?= __('Add Warning') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('source');
                    echo $this->Form->control('telegram');
                    echo $this->Form->control('email_list');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
