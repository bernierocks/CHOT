<?
require_once('includes/config.php');$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.viethconsulting.com/members/mem_xml/'.$org_id.'_business_cats.xml');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) ;
            $data = array('org_code' => $org_id,
            'username' => $username,
            'password' => $password
            );
        $data = curl_exec($ch);
        curl_close($ch);  
        //define class 
        $pxml = new ParseXML;
        //parse xml array data
        $xml_array = $pxml->GetXMLTree($data);
        //define variable for array data
        $array_new=$xml_array;
?>