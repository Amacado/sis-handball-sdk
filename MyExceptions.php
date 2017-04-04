<?php

class myExceptions extends Exception{
    
    
    function __construct($message, $code = 0, Exception $previous = null) {

        parent::__construct($message, $code, $previous);
    }
    
    function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
    
    
    
    // Test Exception for index user and password.
    function checkUserPass($data){
        try { 
            if (!isset($data["user"]) || !isset($data["user"])) {
                throw new Exception('User or Password: Does not exist in the configuration file.');
            }
            
            if (empty($data["user"]) || empty($data["password"] )) {
                throw new Exception('User or Password: They are Empty.');
            }
        } catch (Exception $e) {
            $this->showError($e->getTrace(),$e->getMessage());
            exit();
        }        
    }
   
    
    
    // Test Exception for data.
    function checkData($data){
        try { 
            if (!isset($data)) {
                throw new Exception('['.$data.' ]: Does not exist.');
            } elseif (empty($data)) {
                throw new Exception('['.$data.' ]: Ist empty.');
            }
        } catch (Exception $e) {
            $this->showError($e->getTrace(),$e->getMessage());
            exit();
        }
        
    }
    
    // Test Exception for Files.
    function findFile($file){
        try { 
            if(!file_exists($file)){
                throw new Exception('File ['.$file.' ]: Not found.');
                }
        } catch (Exception $e) {
            $this->showError($e->getTrace(),$e->getMessage());
            exit();
        }
        
    }
    
    // Test Exception for URLs
    function findURL($url){
        
        try { 
            if(!$this->urlLiveOrDead($url)) {
                throw new Exception('URL Not found:<br> '.$url.' ');
            }
           
        } catch (Exception $e) {
                $this->showError($e->getTrace(),$e->getMessage());
                exit();
        }
              
        
    }
    
    // Show parametres exception and message.
    function showError($code, $text){
        echo "<hr><h3 style='color:red;'>ERROR!</h3><h2>".$text."</h2>";
        $this->parserCode($code);
        echo "<hr>";
    }
    

    // Show parametres Trace.
    function parserCode($code){
       
        foreach($code as $rescode){
            foreach($rescode as $key =>$rescode2){
                
                if(gettype($rescode2)!= "array"){
                    echo "<br>".$key.": <b>".$rescode2."</b>";
                         } 
            
            }
            echo "<br>"; 
        }
    }

    
    
    function urlLiveOrDead($url){
        
        $url = @parse_url($url);
        if (!$url) return false;

        $url = array_map('trim', $url);
        $url['port'] = (!isset($url['port'])) ? 80 : (int)$url['port'];

        $path = (isset($url['path'])) ? $url['path'] : '/';
        $path .= (isset($url['query'])) ? "?$url[query]" : '';

        if (isset($url['host']) && $url['host'] != gethostbyname($url['host'])) {

             $fp = fsockopen($url['host'], $url['port'], $errno, $errstr, 30);

              if (!$fp) return false; //socket not opened

                fputs($fp, "HEAD $path HTTP/1.1\r\nHost: $url[host]\r\n\r\n"); //socket opened
                $headers = fread($fp, 4096);
                fclose($fp);

             if(preg_match('#^HTTP/.*\s+[(200|301|302)]+\s#i', $headers)){//matching header
                   return true;
             }
             else return false;

            } // if parse url
        else { 
                    return false;}
    }
    
    
    
    
    
    
    
}

