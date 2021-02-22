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
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $job->id_job],
                ['confirm' => __('Tem certeza que deseja deletar # {0}?', $job->id_job), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Vagas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
</div>
    <div class="column-responsive column-80">
        <div class="jobs form content">
            <?= $this->Form->create($job) ?>
            <fieldset>
                <legend><?= __('Editar Job') ?></legend>
                <?php
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('requisitos');
                    echo $this->Form->control('diferenciais');
                    echo $this->Form->control('salario');
                    echo $this->Form->control('contato');
                    echo $this->Form->control('validade');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Editar'), ['style' => 'background-color:#FF0052;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
