<?php 
class Meteo {
    private $apikey;

    public function __construct(string $apikey){
        $this->apikey=$apikey;
    }    
    /**
     * function to get forecast daily
     *
     * @param  string $city 
     * @return array
     */
    public function gettodayforecast(string $city):array{
        
        $dat=$this->callAPI("weather/?q={$city}");
        return
            [
                'temp'=> $dat['main']['temp'],
                'description' => $dat ['weather'][0]["description"],
                'date'=> new DateTime()
            ];
    
    }    
    /**
     * function  to get forecast 5 days
     *
     * @param  string $city ville(Bujumbura,bi)
     * @return array
     */
    public function getforecast(string $city):array{
        
            $dat=$this->callAPI("forecast/?q={$city}");
            $res=[];
            foreach ($dat['list'] as $day){
                $res[]=[
                    'temp'=> $day['main']['temp'],
                    'description' => $day ['weather'][0]["description"],
                    'date'=> new DateTime('@'.$day['dt'])
                ];
            }
            return $res;
        
    }    
    /**
     * callAPI  with $parm
     *
     * @param  string $param linkApi(e.g : daily/forecast)
     * @return array
     */
    private function callAPI(string $param ):?array{
        $curl=curl_init("https://api.openweathermap.org/data/2.5/{$param},bi&appid={$this->apikey}&units=metric&lang=fr");
        curl_setopt_array($curl,[
            //CURLOPT_CAINFO          => __DIR__.DIRECTORY_SEPARATOR."cert.cer",
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_TIMEOUT         => 10
        ]);
        $data=curl_exec($curl);
        if($data === false || curl_getinfo($curl,CURLINFO_HTTP_CODE)!==200){
            return null;
        }

            $res=[];
            $data=json_decode($data,true);
            return $data;
    }
    }

?>