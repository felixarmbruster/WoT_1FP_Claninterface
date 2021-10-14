<?php
namespace App\Model\Entity;

use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

/**
 * Player Entity
 *
 * @property int $id
 * @property string $nick
 * @property int|null $clan_id
 * @property int|null $rank_id
 * @property FrozenTime $joined
 * @property FrozenTime $lastBattle
 * @property int $battle
 * @property double $wn8
 * @property FrozenTime $created
 * @property FrozenTime $modified
 *
 * @property Clan $clan
 * @property Rank $rank
 * @property Inactive[] $inactives
 * @property Statistic[] $statistics
 * @property Teamspeak[] $teamspeaks
 * @property Token[] $tokens
 * @property User[] $users
 * @property Meetingparticipant[] $meetingparticipants
 * @property Meetingregistration[] $meetingregistration
 */
class Player extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nick' => true,
        'clan_id' => true,
        'rank_id' => true,
        'joined' => true,
        'lastBattle' => true,
        'battle' => true,
        'wn8' => true,
        'created' => true,
        'modified' => true,
        'clan' => true,
        'rank' => true,
        'inactives' => true,
        'statistics' => true,
        'teamspeaks' => true,
        'tokens' => true,
        'users' => true,
        'meetingparticipants' => true,
        'meetingregistration' => true,
    ];
}
