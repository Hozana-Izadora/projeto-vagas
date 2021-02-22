<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'button float-right','style' => 'background-color:#FF0052;']) ?>
    <h3><?= __('Usuários') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_user',['label'=>'ID']) ?></th>
                    <th><?= $this->Paginator->sort('name_user',['label'=>'Nome']) ?></th>
                    <th><?= $this->Paginator->sort('cpf_user',['label'=>'CPF']) ?></th>
                    <th><?= $this->Paginator->sort('email_user',['label'=>'Email']) ?></th>
                    <th><?= $this->Paginator->sort('created',['label'=>'Criado']) ?></th>
                    <th><?= $this->Paginator->sort('modified',['label'=>'Modificado']) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id_user) ?></td>
                    <td><?= h($user->name_user) ?></td>
                    <td><?= h($user->cpf_user) ?></td>
                    <td><?= h($user->email_user) ?></td>
                    <td><?= date_format($user->created,'d/m/Y H:i') ?></td>
                    <td><?= date_format($user->modified,'d/m/Y H:i') ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id_user]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id_user]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id_user], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $user->id_user)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
