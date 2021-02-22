<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $jobs
 */
?>
<div class="jobs index content">
    <?= $this->Html->link(__('Cadastrar Nova Vaga'), ['action' => 'add'], ['style' => 'background-color:#FF0052;', 'class' => 'button float-right']) ?>
    <h3><b><?= __('Vagas') ?></b></h3>
    <?php
    foreach ($jobs as $job) :
    ?>
        <div class="card">
            <div class="card-header">
                <?= $this->Html->link(__($job->cargo), ['action' => 'view', $job->id_job],['style'=>'color:#FF0052']); ?>
            </div>
            <div class="card-body">
                <?= '<h5 style= color:#606c76><b>' . ($job->descricao) . '</b></h5>' ?>
                <h5>Requisitos: </h5>
                <?= ($job->requisitos) ?>
                <h5>Diferenciais: </h5>
                <?= ($job->diferenciais) ?>
                <h5>Salário: </h5>
                <?= ($job->salario) ?>
                <h5>Contato: </h5>
                <?= ($job->contato) ?>
                <h5>Validade da Vaga: </h5>
                <?= date_format($job->validade, 'd/m/y') ?>
                <h5>Publicado em: </h5>
                <?= date_format($job->created, 'd/m/y  H:i:s') ?>

            </div>
        </div>
        <hr>
    <?php endforeach; ?>
</div>