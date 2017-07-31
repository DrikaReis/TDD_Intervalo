<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\Intervalo;

class ExampleTest extends TestCase
{
  // case 1 - lista > 0 (true)
  public function testCase1()
  {
      $lista = [10, 11, 12, 20, 21, 22];
      $result = Intervalo::intervalo($lista);
      $this->assertTrue($result);
  }

}
