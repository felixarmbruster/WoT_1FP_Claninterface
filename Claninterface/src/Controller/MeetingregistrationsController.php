<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Meetingregistrations Controller
 *
 * @property \App\Model\Table\MeetingregistrationsTable $Meetingregistrations
 *
 * @method \App\Model\Entity\Meetingregistration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeetingregistrationsController extends AppController
{
    public function setRegistrations($player, $meeting, $status){
       $registrations =  $this->Meetingregistrations->find()->where(["player_id"=> $player, "meeting_id" => $meeting]);
        $registration = null;
       if($registrations->count()){
           $registration = $registrations->first();
       }else{
           $registration = $this->Meetingregistrations->newEntity();
           $registration->player_id = $player;
           $registration->meeting_id = $meeting;
       }
       $registration->status = $status;
       $this->Meetingregistrations->save($registration);
       return $this->redirect($this->referer());
    }


    public function isAuthorized($user)
    {
        $player = $this->request->getParam('pass.0');
        $x =$this->Meetingregistrations->Players->Tokens
            ->find("all")
            ->where(["player_id" => $player, "user_id" => $user["id"], "expires >=" => date("Y-m-d H:i:s")]);

        if($x->count()){
            return true;
        }
        return false;
    }
}
