<?php
namespace App\Bob\Slides\Messages;

/**
 * Mensagem de resultado de enquete
 */
class RaffleResultMessage extends Message
{
    public $type = 'raffle-result';
    public $nickname;
    public $winner = false;

    public function __construct($winnerNickname)
    {
        $this->nickname = $winnerNickname;
    }
}