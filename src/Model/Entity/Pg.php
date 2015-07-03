<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pg Entity.
 */
class Pg extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'address' => true,
        'foundation' => true,
        'leader_id' => true,
        'secretary_id' => true,
        'leader' => true,
        'secretary' => true,
        'biblical_classes' => true,
        'users' => true,
    ];
}
