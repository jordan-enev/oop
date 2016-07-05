<?php


class Airplane
{
    private $fly_engine;

    public function __construct( FlyEngineInterface $fly_engine )
    {
        $this->fly_engine = $fly_engine;
    }

    public function fly()
    {
        return $this->fly_engine->fly() . ' as ' . self::class;
    }

    public function depart()
    {
        return 'We are departing';
    }

    public function arrive()
    {
        return 'We are arriving';
    }
}