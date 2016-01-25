<?php
namespace App\Bob\Slides\Messages;

/**
 * Mensagem de coordenadas (desenho interativo)
 */
class CoordsMessage extends Message
{
    public $type = 'coords';

    public $coords;

    public function __construct($data, $connection)
    {
        $this->connection = $connection;
        // parent::__construct($data, $connection);
        $this->coords = $data->coords;

        $cache = \Cache::get($connection->session);
    }
}