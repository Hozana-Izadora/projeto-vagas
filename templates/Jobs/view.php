<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<div class="row">
<div class="column-responsive column-20">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Vaga'), ['action' => 'edit', $job->id_job], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Vaga'), ['action' => 'delete', $job->id_job], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id_job), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Vagas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Vaga'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
</div>
    <div class="column-responsive column-80">
        <div class="jobs view content">
            <h3><?= h($job->id_job) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cargo') ?></th>
                    <td><?= h($job->cargo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descrição') ?></th>
                    <td><?= h($job->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Requisitos') ?></th>
                    <td><?= h($job->requisitos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diferenciais') ?></th>
                    <td><?= h($job->diferenciais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salário') ?></th>
                    <td><?= h($job->salario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contato') ?></th>
                    <td><?= h($job->contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Publicado por:') ?></th>
                    <td><?= $job->has('user') ? $this->Html->link($job->user->name_user, ['controller' => 'Users', 'action' => 'view', $job->user->id_user]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Vaga') ?></th>
                    <td><?= $this->Number->format($job->id_job) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validade da Vaga') ?></th>
                    <td><?= h($job->validade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Publicado') ?></th>
                    <td><?= date_format($job->created,'d/m/y h:i'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Modificado') ?></th>
                    <td><?= date_format($job->modified,'d/m/y h:i') ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
