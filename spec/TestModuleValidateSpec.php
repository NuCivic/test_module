<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TestModuleValidateSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TestModuleValidate');
    }

    function it_is_true_if_exclamation() {
      $title = 'yeah!';
      $this->titleIsEnthusastic($title)->shouldBe(TRUE);
      $title = 'yeah';
      $this->titleIsEnthusastic($title)->shouldBe(FALSE);
    }
}
