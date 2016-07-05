<?php


class Bird
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
}