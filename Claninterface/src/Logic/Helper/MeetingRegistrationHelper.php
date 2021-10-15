<?php

namespace App\Logic\Helper;

class MeetingRegistrationHelper
{
    public static $status = [
        -1 => [
            'display' => '',
            'button' => '',
            'icon' => '',
            'class' => '',
            'isButton' => false,
        ],
        1 => [
            'display' => 'teilnehmen',
            'button' => 'Ja',
            'icon' => '<i class="fas fa-check"></i>',
            'class' => 'success',
            'isButton' => true,
        ],
        2 => [
            'display' => 'Vielleicht',
            'button' => 'Vielleicht',
            'icon' => '<i class="fas fa-question"></i>',
            'class' => 'info',
            'isButton' => true,
        ],
        3 => [
            'display' => 'abgesagt',
            'button' => 'Nein',
            'icon' => '<i class="fas fa-times"></i>',
            'class' => 'danger',
            'isButton' => true,
        ],

    ];
}
