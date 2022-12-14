<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Game Entity
 *
 * @property int $id
 * @property int $home_team_id
 * @property int $away_team_id
 * @property int $week_id
 * @property bool|null $is_playoff
 * @property bool|null $is_championship
 * @property bool|null $is_superbowl
 * @property int|null $home_points
 * @property int|null $away_points
 * @property int|null $value
 * @property \Cake\I18n\FrozenTime|null $game_time
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Week $week
 * @property \App\Model\Entity\Pick[] $picks
 */
class Game extends Entity
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
        'home_team_id' => true,
        'away_team_id' => true,
        'week_id' => true,
        'is_playoff' => true,
        'is_championship' => true,
        'is_superbowl' => true,
        'home_points' => true,
        'away_points' => true,
        'value' => true,
        'game_time' => true,
        'created' => true,
        'modified' => true,
        'week' => true,
        'picks' => true,
    ];
}
