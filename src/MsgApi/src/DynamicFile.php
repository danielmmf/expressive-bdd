<?php

namespace MsgApi;

//use App\Entity\Journal;

class DynamicFile
{
	private $key;
    public function criar($key)
    {
        $this->key = $key ;
    }

    public function gerar()
    {
        return "abc".$this->key;
    }
}
