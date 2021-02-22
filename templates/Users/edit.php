<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $user->id_user],
                ['confirm' => __('Tem certeza que deseja deletar # {0}?', $user->id_user), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </div>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                echo $this->Form->control('name_user');
                echo $this->Form->control('cpf_user');
                echo $this->Form->control('email_user');
                echo $this->Form->control('senha',['type'=>'password']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar'),['style' => 'background-color:#FF0052;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>