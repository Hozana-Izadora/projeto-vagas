<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<div class="row">
    <div class="column-responsive column-100">
        <div class="jobs form content">
            <?= $this->Form->create($job) ?>
            <fieldset>
                <h2><?= __('Cadastre a Vaga') ?></h2>
                <?php
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('descricao',['type'=>'textarea']);
                    echo $this->Form->control('requisitos',['type'=>'textarea']);
                    echo $this->Form->control('diferenciais',['type'=>'textarea']);
                    echo $this->Form->control('salario');
                    echo $this->Form->control('contato');
                    echo $this->Form->control('validade');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cadastrar'), ['style' => 'background-color:#FF0052;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

