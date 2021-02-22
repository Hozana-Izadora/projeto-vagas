<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="column-responsive column-50">
        <img src="../webroot/img/jobs.png" >
    </div>
    <div class="column-responsive column-50 ">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <h2><?= __('Cadastre-se') ?></h2>
                <?php
                echo $this->Form->control('name_user', ['class' => 'form-control', 'label' => 'Nome do Usuário']);
                echo $this->Form->control('cpf_user', ['class' => 'form-control', 'label' => 'CPF']);
                echo $this->Form->control('email_user', ['class' => 'form-control', 'label' => 'Email', 'type' => 'email', 'autocomplete' => 'off']);
                echo $this->Form->control('senha', ['class' => 'form-control', 'type' => 'password']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cadastrar'), ['style' => 'background-color:#FF0052;']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
    $(document).ready(function() {
        $('#cpf-user').mask('000.000.000-00');
    });
</script>