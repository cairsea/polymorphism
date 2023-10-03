<?php

/**
 * ポリモーフィズム
 * 
 * 呼び出される側
 */

class TextFileReader extends TextReader
{
    private $fileNum;

    public function __construct(String $pathName)
    {
        $this->fileNum = $pathName;
    }

    public function open()
    {
        // 
    }

    public function close()
    {
        // 
    }

    public function read()
    {
        echo 'read Text<br>';
    }
}

/**
 * ポリモーフィズム
 * 
 * 呼び出される側
 */

class NetworkReader extends TextReader
{
    public function open()
    {
        // 
    }

    public function close()
    {
        // 
    }

    public function read()
    {
        echo 'read Network<br>';
    }
}

/**
 * ポリモーフィズム
 * 
 * 呼び出す側　共通メインルーチン
 */

abstract class TextReader
{
    abstract public function open();

    abstract public function close();

    abstract public function read();
}

// 共通メインルーチン
function getCount(TextReader $reader)
{
    $charCount = 0;

    $reader->read();
}


$reader = new TextFileReader('abc.text');

getCount($reader);

$reader = new NetworkReader();

getCount($reader);
