<?php
class Message{

    const LIMIT_CARACTER_USERNAME=3;
    const LIMIT_CARACTER_MESSAGE=10;

    private $username;
    private $message;
    private $date;

    public function __construct(string $username,string $message,?DateTime $date =null)
    {
        $this ->username=$username;
        $this ->message=$message;
        $this ->date=$date ?: new DateTime();

    }
    public function isvalid():bool
    {
        return empty($this->geterror()) ;
    }
    public function geterror():array
    {
        $error=[];
        if( strlen($this ->username)< self::LIMIT_CARACTER_USERNAME){
            $error['username'] = "Your username is too short";
        }
        if(strlen($this ->message)< self::LIMIT_CARACTER_MESSAGE){
            $error['message'] ="Your message is too short";
        }
        return $error;
    }
    public function toHTML():string{
        $username=htmlentities($this->username);
        $this->date->setTimezone(new DateTimeZone('Africa/Bujumbura'));
        $date=$this->date->format('d/m/Y à H:i');
        $message=nl2br(htmlentities($this->message));
        return <<<HTML
        <p>
            <strong>{$username}</strong><em class="">  le {$date}</em><br>
            {$message}
        </p>
HTML;

    }
    public function toJSON ():string
    {
        return json_encode([
            'username' => $this->username,
            'message' =>$this->message,
            'date'=>$this->date->getTimestamp()
        ]);
    }
}