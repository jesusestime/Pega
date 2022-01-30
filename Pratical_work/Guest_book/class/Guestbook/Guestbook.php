<?php
namespace Pegasus\Guestbook;
use DateTime;

class Guestbook
{
    private $file;

    
    public function __construct(string $file)
    {
        $directory=dirname($file);
        if(!is_dir($directory))
        {
            mkdir($directory,0777,true);
        }
        if(!file_exists($file)){
            touch($file);
        }
        $this->file=$file;
    }
    public function addmessage(Message $message)
    {
        file_put_contents($this->file,$message->toJSON().PHP_EOL,FILE_APPEND);
    }
    public function getmessages():array
    {
        $content=trim(file_get_contents($this->file));
        $line=explode(PHP_EOL,$content);
        $msg=[];
        foreach ($line as $l){
            $data=json_decode($l,true);
            $msg[]=new Message($data['username'],$data['message'],new DateTime("@".$data['date'])) ;
        }
        return array_reverse($msg);

    }
}