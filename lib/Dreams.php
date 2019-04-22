<?php

/*
 * Code created by Lee Bennett
 * Uses Reddit Dreams subreddit for data
 * If you use this code, please attribute the work to myself (Lee Bennett).
 */

/*
 * This class fetches data from the Dreams subbreddit. It contains various classes
 * that help pick out random posts from the data. It then randomizes the words
 * and displays it to the user.
 *
 * @author Lee D Bennett
 * @contact LDBennett@gmail.com
 */
class Dreams {
  public $json;
  public $dreamInfo = Array();
  public $bodyLimit = 800;

  //Fetches the JSON file from the Subreddit Dreams
  public function fetchData(){
    set_time_limit(60);
    $this->json = file_get_contents('https://www.reddit.com/r/dreams/new.json?limit=100');
  }
  
  //After fetching the data, this function gets the random numbers needed to pick
  //the posts. After, the dream data is then decoded into an array. The choices
  //are also put into an array. The foreach loop gets the title and body information
  //from the specified random post and puts it into a temporary variable only
  //in the scope of the loop. By using the array_push_assoc, the title becomes
  //the key and the body becomes the data within the array.
  public function dataToDisplay(){
    //Initializes $info variable
    $info = $this->dreamInfo;
    
    //Gets the random picks
    $picks = json_encode($this->randomNumbers(0,99,2));
    //Get data and uses json_decode to make into an array
    $data = json_decode($this->json,true);
    //Choices are made into an array
    $choices = json_decode($picks,true);
    
    //Loop that takes choices in order to pick a particular post
    foreach($choices as $value){
      //gets title from choice
      $title = $data['data']['children'][$value]['data']['title'];
      //gets the body from choice
      $body = $data['data']['children'][$value]['data']['selftext'];
      //pushes into an associative array
      $info = $this->array_push_assoc($info,$title, $body);
    }
    $this->dreamInfo = $info;
  }
  
  //Displays in a bootstrap format (including row) to website in HTML with
  //the specified classes for each element
  public function displayToSite(){
    $this->dataToDisplay();
    $dreams = $this->dreamInfo;
    echo "<div class='row'>";
    foreach($dreams as $title => $body){
      if (strlen($body)==0){$body = $title;}
      echo "
        <div class='col-md-6'>
          <div class='dream-container text-center'>
            <h3 class='shake' onclick='explodeText(this)'>".$title."</h3>
            <p class='transparent-text'>".$this->limitPost($body,0,$this->bodyLimit)."</p>";
      if(strlen($body) > $this->bodyLimit){
       echo "<form method='POST' action='dream_single.php' target='_blank'>
              <input type='hidden' name='title' value='".$title."'/>
              <textarea name='dreamBody' class='hidden'>".$body."</textarea>
              <input type='submit' class='btn btn-sm hidden' value=''/>
            </form>"; 
      }
        echo "</div></div>";
    }
    echo "</div>";
  }
  
  //Limits the post to a particular number set by the user
  function limitPost($body, $start, $end){
    if (strlen($body) <= $end){
      return $body;
    }
    else{
      $parsed = substr($body,$start,$end);
      return $parsed;
    }
  }
  
  //Picks a number of random and unique numbers from the ranges
  function randomNumbers($min,$max,$count){
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
  }
  
  //Pushes title and body into an associative array
  function array_push_assoc($array, $key, $value){
    $array[$key] = $value;
    return $array;
  }
  
  //Converts the variable json to a string to display raw data (Testing use only)
  public function __toString(){
    return $this->json;
  }
}
