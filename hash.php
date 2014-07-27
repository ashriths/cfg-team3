<?php

/**
        A brief but simple closed hash table class.
        Jorge Niedbalski R. <jnr@niedbalski.org>
**/

class   HashTable       {

        public  $HashTable = array();
        public  $HashTableSize;

        public  function __construct($tablesize) 
        {
                if($tablesize) {
                        $this->HashTableSize = $tablesize;
                } else {
                        print "Unknown file size\n";
                        return -1;
                }
        }

        public  function __destruct() 
        {
                unset($this->HashTable);
        }

        public  function  generate_bucket($string) 
        {
                for($i=0; $i <= strlen($string); $i++) {
                        $hash = ord($string[$i]) + ($hash << 5) - $hash;
                }
                print "".$this->HashTableSize."\n";
                return($hash%$this->HashTableSize);
        }
    public  function  add($string, $associated_array)
        {
                  $bucket = $this->generate_bucket($string);

                  $tmp_array = array();
                  $tmp_array['string'] = $string;
                  $tmp_array['assoc_array'] = $associated_array;                

                  if(!isset($this->HashTable[$bucket])) {
                                $this->HashTable[$bucket] = $tmp_array;
                  } else {
                        if(is_array($this->HashTable[$bucket])) {
                                array_push($this->HashTable[$bucket], $tmp_array);
                        } else {
                                $tmp = $this->HashTable[$bucket];
                                $this->HashTable[$bucket] = array();
                                array_push($this->HashTable[$bucket], $tmp);
                                array_push($this->HashTable[$bucket], $tmp_array);
                        }
                }

        }

        public  function  delete($string, $attrname, $attrvalue) 
        {       
                $bucket = $this->generate_bucket($string);

                if(is_null($this->HashTable[$bucket])) {
                                return -1;
                } else {
                        if(is_array($this->HashTable[$bucket])) {
                                for($x = 0; $x <= sizeof($this->HashTable[$bucket]); $x++) {
                                        if(($this->HashTable[$bucket][$x]['string'] == $string) && ($this->HashTable[$bucket][$x]['.$attrname.'] == $attrvalue)) {
                                                unset($this->HashTable[$bucket][$x]);   
                                        }
                                }
    } else {
                                unset($this->HashTable[$bucket][$x]);
                        }
                }       
                /** everything is OK **/                        
                return 0;
        }


        public  function  search($string) 
        {
                $resultArray = array();

                $bucket = $this->generate_bucket($string);

                if(is_null($this->HashTable[$bucket])) {
                        return -1;
                } else {
                        if(is_array($this->HashTable[$bucket])) {
                                for($x = 0; $x <= sizeof($this->HashTable[$bucket]); $x++) {
                                        if(strcmp($this->HashTable[$bucket][$x]['string'], $string) == 0) {
                                                array_push($resultArray,$this->HashTable[$bucket][$x]);
                                        }
                                 }
                        } else {
                                array_push($resultArray,$this->HashTable[$bucket]);
                        }
                }

                return($resultArray);
        }
}

        $hash = new HashTable(16);

        $arr = array('nombre' => "jorge niedbalski");

        $hash->add("astroza", $arr);
        $hash->add("astrozas", $arr);

        print_r($hash->search("astroza"));

?>