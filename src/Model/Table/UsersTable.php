<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pgs
 * @property \Cake\ORM\Association\BelongsTo $BiblicalClasses
 * @property \Cake\ORM\Association\HasMany $Leaders
 * @property \Cake\ORM\Association\HasMany $Secretaries
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Pgs', [
            'foreignKey' => 'pg_id'
        ]);
        $this->belongsTo('BiblicalClasses', [
            'foreignKey' => 'biblical_class_id'
        ]);
        $this->hasMany('Leaders', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Secretaries', [
            'foreignKey' => 'user_id'
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
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');
            
        $validator
            ->add('birthday', 'valid', ['rule' => 'date'])
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');
            
        $validator
            ->allowEmpty('testimony');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['pg_id'], 'Pgs'));
        $rules->add($rules->existsIn(['biblical_class_id'], 'BiblicalClasses'));
        return $rules;
    }
}
