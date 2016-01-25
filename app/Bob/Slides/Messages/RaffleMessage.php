<?php
namespace App\Bob\Slides\Messages;

/**
 * Mensagem de votação de enquete
 */
class RaffleMessage extends Message
{
    public $type = 'poll';
    public $number;
    public $value;

    public function __construct($data, $connection)
    {
        parent::__construct($data, $connection);
    }
}