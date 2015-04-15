<?php

class TestModuleValidate
{

    public function titleIsEnthusastic($title)
    {
      if (strpos($title, '!')) {
        return TRUE;
      }
      else {
        return FALSE;
      }
    }
}
