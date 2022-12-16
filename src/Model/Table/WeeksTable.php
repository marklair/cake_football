<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Weeks Model
 *
 * @property \App\Model\Table\SeasonsTable&\Cake\ORM\Association\BelongsTo $Seasons
 * @property \App\Model\Table\GamesTable&\Cake\ORM\Association\HasMany $Games
 *
 * @method \App\Model\Entity\Week newEmptyEntity()
 * @method \App\Model\Entity\Week newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Week[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Week get($primaryKey, $options = [])
 * @method \App\Model\Entity\Week findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Week patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Week[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Week|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Week saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Week[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Week[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Week[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Week[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class WeeksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('weeks');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Seasons', [
            'foreignKey' => 'season_id',
        ]);
        $this->hasMany('Games', [
            'foreignKey' => 'week_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('season_id')
            ->allowEmptyString('season_id');

        $validator
            ->integer('week_number')
            ->allowEmptyString('week_number');

        $validator
            ->integer('value')
            ->allowEmptyString('value');

        $validator
            ->boolean('is_post_season')
            ->allowEmptyString('is_post_season');

        $validator
            ->dateTime('week_start')
            ->allowEmptyDateTime('week_start');

        $validator
            ->dateTime('week_end')
            ->allowEmptyDateTime('week_end');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('season_id', 'Seasons'), ['errorField' => 'season_id']);

        return $rules;
    }
}
