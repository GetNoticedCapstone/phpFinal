<?php
/*
 * Purpose: this static function can be called in a controller to get json 
 *          data from www.fantasyfootballnerd.com.
 * API Documentation: http://www.fantasyfootballnerd.com/fantasy-football-api
 * 
 * Method: add php statement to top of controller require '../model/FFwebService.php';
 *         with in the case statment for action set a var's value to the
 *         call WebService::getFootballInfo(). Pass in required params which 
 *         are strings. see player_info_manager/index.php and player_info_manager/league_news
 *         for example.  
 * There is no need to modify this class to use any of the API calls to fantasyfootballnerd.com
 */
class WebService{
    public static function getFootballInfo($action, $service_name, $user_input){
        $api_key = 'jgn5qahzsh8q';
        $format = 'json/';
        $service = $service_name . '/';
        $query = $user_input . '/';
        $base_url = 'http://www.fantasyfootballnerd.com/service/';
        $url = $base_url . $service . $query . $format. $api_key;
        
         // Use cURL to get data in JSON format
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json_data = curl_exec($curl);
        curl_close($curl);
        
        //if($action == 'league_news'){
        // Get an array of movies from the JSON data and return it
        $data = json_decode($json_data, true);
        if (null != $data['Schedule']){
            $football_Info = $data['Schedule'];
        }
        else if (null != $data['Players']){
            $football_Info= $data['Players'];
        }
        return $football_Info;
        //}
    }
    
}
