<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pick Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $game_id
 * @property int $team_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Game $game
 * @property \App\Model\Entity\Team $team
 */
class Pick extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'game_id' => true,
        'team_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'game' => true,
        'team' => true,
    ];
}
