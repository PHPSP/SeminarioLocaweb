<?php
namespace App\Bob\Slides\Messages;

/**
 * Mensagem de coordenadas (desenho interativo)
 */
class CoordsMessage extends Message
{
    public $type = 'coords';
    public $x;
    public $y;

    public function __construct($data, $connection)
    {
        parent::__construct($data, $connection);

        $cache = \Cache::get($connection->session);

        $this->x = $this->data->x;
        $this->y = $this->data->y;
    }
}