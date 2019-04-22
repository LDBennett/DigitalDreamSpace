<?php

/*
 * Code created by Lee Bennett
 * Uses Reddit Lucid Dreaming subreddit for data
 */

/*
 * This class extends the dream class and fetches data from the subreddit on Lucid Dreams.
 *
 * @author Lee D Bennett
 * @contact LDBennett@gmail.com
 */
class lucidDreams extends Dreams{

  //Fetches the JSON file from the Subreddit Lucid Dreaming (overwrites from Dreams class)
  public function fetchData(){
    $this->json = file_get_contents('https://www.reddit.com/r/LucidDreaming/new.json?limit=50');
  }
  
}
