<?php

namespace Dmigrishin\Testproject;

class App
{
   public function run()
   {
        $content = file_get_contents('http://loripsum.net/api');
       return $content;
   }
}