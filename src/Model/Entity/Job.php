<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id_job
 * @property string $cargo
 * @property string $descrição
 * @property string $requisitos
 * @property string $diferenciais
 * @property string $salario
 * @property string $contato
 * @property \Cake\I18n\FrozenDate $validade
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Job extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cargo' => true,
        'descrição' => true,
        'requisitos' => true,
        'diferenciais' => true,
        'salario' => true,
        'contato' => true,
        'validade' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
