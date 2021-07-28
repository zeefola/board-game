<?php

namespace AbstractClass;

abstract class Board{

   protected $dice1;
   protected $dice2;
   protected $player1Movement = ''; //calculated based on throw
   protected $player2Movement = '';
//    protected $throw = ''; //dice 1 + dice 2
//    protected $currentPosition = ''; 
   protected $startPosition = 0; 
   protected $lastPosition = ''; 
   protected $player1Throw;
   protected $player2Throw;

public function __construct(){
        $this->dice1 = rand(1,6);
        $this->dice2 = rand(1,6);
    }

   public function gameBoard(){
       for($row = 1; $row <= 50; $row++){
           for($col = 1; $col <=50; $col++){
          
           }
       }
      //  $this->startPosition = 0;
      //  $this->lastPosition = 250;
   }

   public function playerMovement(){
     $this->player1Throw = $this->dice1 + $this->dice2;
      $this->player1Movement = $this->player1Throw;

       echo $this->player1Movement ."\n";
       
      $this->player2Throw = $this->dice1 + $this->dice2;
      $this->player2Movement = $this->player2Throw;
      echo $this->player2Movement;
   }
}

