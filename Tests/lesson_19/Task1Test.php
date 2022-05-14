<?php

namespace App\Tests\lesson_19;
require_once 'lesson_19/Task1.php';

use App\lesson_19\Task1;
use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
     private Task1 $task1;
     protected function setUp(): void
     {
         $this->task1 = new Task1();
     }
     public function testSumNumbersRecursion()
     {
         $this->assertEquals(15,$this->task1->sumNumbersRecursion(12345));
     }
    public function testGetResultMultiplication()
    {
        $arr = [1,2,3,4,5];
        $this->assertEquals([2,4,6,8,10],$this->task1->getResultMultiplication($arr,2));
    }
    public function testSumAllElements()
    {
        $arr = [1,2,3,4,5];
        $this->assertEquals(15,$this->task1->sumAllElements($arr));
    }

    public function testGetMorNumber()
    {
        $arr = [1,2,3,4,5];
        $this->assertEquals([4,5],$this->task1->getMorNumber($arr,3));
    }

}