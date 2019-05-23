<?php


class Sample
{
    const money = 1000;
    public $test = 'This is a test';
    public function showInfo(){
        echo '<h2>C1: '.Sample::money.'</h2>';
        echo '<h2>C2: '.self::money.'</h2>';
        echo '<h2>C3: '.$this::money.'</h2>';
    }
}