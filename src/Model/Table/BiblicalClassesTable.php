<?php
namespace App\Model\Table;

use App\Model\Entity\BiblicalClass;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BiblicalClasses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pgs
 * @property \Cake\ORM\Association\BelongsTo $Teachers
 * @property \Cake\ORM\Association\BelongsTo $Auxiliars
 * @property \Cake\ORM\Association\HasMany $Users
 */
class BiblicalClassesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('biblical_classes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Pgs', [
            'foreignKey' => 'pg_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Teachers', [
            'foreignKey' => 'teacher_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Auxiliars', [
            'foreignKey' => 'auxiliar_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'biblical_class_id'
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
        $rules->add($rules->existsIn(['pg_id'], 'Pgs'));
        $rules->add($rules->existsIn(['teacher_id'], 'Teachers'));
        $rules->add($rules->existsIn(['auxiliar_id'], 'Auxiliars'));
        return $rules;
    }
}
