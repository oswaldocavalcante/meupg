<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'pg_id' => true,
        'biblical_class_id' => true,
        'name' => true,
        'email' => true,
        'birthday' => true,
        'testimony' => true,
        'pg' => true,
        'biblical_class' => true,
        'leaders' => true,
        'secretaries' => true,
    ];
}
