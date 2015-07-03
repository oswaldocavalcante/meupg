<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BiblicalClass Entity.
 */
class BiblicalClass extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'pg_id' => true,
        'teacher_id' => true,
        'auxiliar_id' => true,
        'pg' => true,
        'teacher' => true,
        'auxiliar' => true,
        'users' => true,
    ];
}
