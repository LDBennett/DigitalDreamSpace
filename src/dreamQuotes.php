<?php

/*
 * Created by Lee Bennett (LDBennett@gmail.com | LDBennett.com)
 * Anyone can use this code.
 */

/**
 * Randomly gets quotes about dreams and displays them onto a website. It first
 * gathers all the quotes into an array and randomly picks one and displays it.
 *
 * @author Lee David Bennett
 */
class dreamQuotes {
  public $dreamQuotes = Array();
  public $choice = 0;

  function __construct() {
    array_push($this->dreamQuotes, "The trick is to combine your waking rational abilities with the infinite possibilities of your dreams...");
  }
  
  function displayToSite(){
    echo "<h2 class='text-center hidden'>".$this->dreamQuotes[0]."</h2>";
  }
}
