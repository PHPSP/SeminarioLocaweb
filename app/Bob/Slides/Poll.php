<?php
namespace App\Bob\Slides;

/**
 * Classe para as enquetes presentes nos slides
 */
class Poll
{
    /**
     * Número da enquete
     * @var int
    */
    public $number;

    /**
     * Votos ['value' => quantity]
     * @var array
    */
    protected $votes = [];


    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Adiciona um voto na enquete
     *
     * @param $user
     * @param object $value
     */
    public function addVote($user, $value)
    {
        if($value == 'clean'){
            $this->votes = [];
        }else {
            $this->votes[$user] = $value;
        }
    }

    /**
     * Retorna as porcentagens de votos
     * @return array Porcentagens ['value' => percent]
     */
    public function getPercentages()
    {
        $percentages = array();
        $total = count($this->votes);
        $count = $this->getVotes();

        foreach ($count as $key => $quantity) {
            $percentages[$key] = ceil(($quantity / $total) * 100);
        }

        return $percentages;
    }

    /**
     * Retorna os votos
     * @return array Votos ['value' => quantity]
     */
    public function getVotes()
    {
        $count = array();

        foreach ($this->votes as $user => $value) {
            if (!array_key_exists($value, $count)) {
                $count[$value] = 0;
            }

            $count[$value]++;
        }

        return $count;
    }
}