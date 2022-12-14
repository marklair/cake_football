<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Week Entity
 *
 * @property int $id
 * @property int $season_id
 * @property int $week_number
 * @property int|null $value
 * @property bool|null $is_post_season
 * @property \Cake\I18n\FrozenTime|null $week_start
 * @property \Cake\I18n\FrozenTime|null $week_end
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Season $season
 * @property \App\Model\Entity\Game[] $games
 */
class Week extends Entity
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
        'season_id' => true,
        'week_number' => true,
        'value' => true,
        'is_post_season' => true,
        'week_start' => true,
        'week_end' => true,
        'created' => true,
        'modified' => true,
        'season' => true,
        'games' => true,
    ];
}
