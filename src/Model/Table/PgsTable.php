<?php
namespace App\Model\Table;

use App\Model\Entity\Pg;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pgs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Leaders
 * @property \Cake\ORM\Association\BelongsTo $Secretaries
 * @property \Cake\ORM\Association\HasMany $BiblicalClasses
 * @property \Cake\ORM\Association\HasMany $Users
 */
class PgsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('pgs');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Leaders', [
            'foreignKey' => 'leader_id'
        ]);
        $this->belongsTo('Secretaries', [
            'foreignKey' => 'secretary_id'
        ]);
        $this->hasMany('BiblicalClasses', [
            'foreignKey' => 'pg_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'pg_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');
            
        $validator
            ->add('foundation', 'valid', ['rule' => 'date'])
            ->requirePresence('foundation', 'create')
            ->notEmpty('foundation');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['leader_id'], 'Leaders'));
        $rules->add($rules->existsIn(['secretary_id'], 'Secretaries'));
        return $rules;
    }
}
