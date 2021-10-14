<?php
namespace App\Model\Entity;

use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

/**
 * Meeting Entity
 *
 * @property int $id
 * @property string $name
 * @property FrozenDate $date
 * @property FrozenTime $start
 * @property FrozenTime $end
 * @property int $cloned
 * @property FrozenTime $modified
 * @property FrozenTime $created
 * @property int $clan_id
 *
 * @property Clan $clan
 * @property Meetingparticipant[] $meetingparticipants
 * @property Meetingregistration[] $meetingregistration
 */
class Meeting extends Entity
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
        'name' => true,
        'date' => true,
        'start' => true,
        'end' => true,
        'cloned' => true,
        'modified' => true,
        'created' => true,
        'clan_id' => true,
        'clan' => true,
        'meetingparticipants' => true,
        'meetingregistration' => true,
    ];
}
