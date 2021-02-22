<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
<div class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $user->id_user], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Usuário'), ['action' => 'delete', $user->id_user], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $user->id_user), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Usuários'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
</div>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id_user) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name User') ?></th>
                    <td><?= h($user->name_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email User') ?></th>
                    <td><?= h($user->email_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($user->senha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($user->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf User') ?></th>
                    <td><?= $this->Number->format($user->cpf_user) ?></td>
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
        </div>
    </div>
</div>
