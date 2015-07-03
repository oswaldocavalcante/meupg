<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BiblicalStudy Entity.
 */
class BiblicalStudy extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
    ];
}
