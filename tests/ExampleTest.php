<?php
namespace Tests;

use Excla\Example;

class ExampleTest extends TestCase {

  public function test_should_say_hello()
  {
    $example = new Example;

    $this->assertEquals('Hello world', $example->hello());
  }

}