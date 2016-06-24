
<?php

/*

  What is wrong with this code?

*/

require_once('TwitterAPIExchange.php'); $set=array(
        'oauth_access_token'=>"OAUTH ACCESS TOKEN",
        'oauth_access_token_secret'=>"OAUTH ACCESS TOKEN SECRET",
        'consumer_key'=>"CONSUMER KEY",
        'consumer_secret'=>"CONSUMER SECRET"
);
$t=new TwitterAPIExchange($set);




$data=$t->setGetfield('?screen_name=lewishamilton&count=40')->buildOauth("https://api.twitter.com/1.1/statuses/user_timeline.json", "GET")->performRequest(); $s=json_decode($data,$assoc=TRUE);
foreach($s as $ss){
      $a=strpos($ss["text"],"https://t.co");
      if($a!==FALSE){
            $b=strpos($ss["text"]," ",$a);
            echo substr($ss["text"],$a); echo("\n");
          } else {
            echo "NOT FOUND!!!\n";
          }
    }







?>
