<?php


namespace App\Logic\Helper;


use App\Model\Entity\User;
use Cake\ORM\TableRegistry;

class RightsHelper
{
    private $clan = false;
    private $PermissionLevel = 0;

    /**
     * @param int $user
     */
    public function __construct($user)
    {
       $this->PermissionLevel = $this->findPermissionLevel($user);
    }

    /**
     * Findet die Berechtigung eines Users
     * @param int $user ID des Nutzeraccounts
     * @return int Berechtigungslevel
     */
    public function findPermissionLevel($user){

        if($user == null){
            return -1;
        }

        $UsersTable = TableRegistry::getTableLocator()->get('Users');
        $users = $UsersTable->find("all")->where(['id'=> $user, 'admin >='=> 1]);
        if($users->count()){
            /**
             * @var User $acc
             */
            $acc = $users->first();
            if(filter_var($acc->email, FILTER_VALIDATE_EMAIL)) {
                return 10;
            }
        }

        $TokensTables = TableRegistry::getTableLocator()->get('Tokens');
        $token = $TokensTables->find("all")->contain(["players", "players.Clans"])->where(['user_id'=> $user, 'Players.rank_id <='=> 2]);
        if($token->count()){
            return 8;
        }

        $TokensTables = TableRegistry::getTableLocator()->get('Tokens');
        $token = $TokensTables->find("all")->contain(["players", "players.Clans"])->where(['user_id'=> $user, 'Players.rank_id ='=> 4]);
        if($token->count()){
            return 5;
        }

        $token = $TokensTables->find("all")->contain(["players", "players.Clans"])->where(['user_id'=> $user]);
        if($token->count()){
            return 3;
        }
        // By default deny access.
        return 0;
    }
    /**
     * @return bool
     */
    public function isClan(): bool
    {
        return $this->clan;
    }

    /**
     * @return int
     */
    public function getPermissionLevel(): int
    {
        return $this->PermissionLevel;
    }
}
