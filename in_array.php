<?php

#$INTERVAL = 1_000_000_000;
$INTERVAL = 100_000_000;
#$INTERVAL = 1_000_000;
#$INTERVAL = 100_000;

$search = "timeouted";
#$search = "update_core";


echo "in_array ";
$stop = $INTERVAL;
$start = microtime(true);


$array = array( 'update_core', 'update_plugins', 'update_themes' );
while(--$stop)
{
  if( ! in_array( $search, $array, true ) ){
    /*
     * Put Code Here
    */
  }
}

echo number_format(microtime(true) - $start, 5)."\n\n";

echo "if && ";
$stop = $INTERVAL;
$start = microtime(true);

while(--$stop)
{
  if ( $search !== 'update_plugins' && $search !== 'update_themes' && $search !== 'update_core' ) {
    /*
     * Put Code Here
    */
  }
}

echo number_format(microtime(true) - $start, 5)."\n\n";

echo "if else ";
$stop = $INTERVAL;
$start = microtime(true);

while(--$stop)
{
  if ( $search !== 'update_plugins' || $search !== 'update_themes' || $search !== 'update_core' ) {
    /*
     * Nothing Here
    */
  }else{
    /*
     * Put Code Here
    */
  }
}

echo number_format(microtime(true) - $start, 5)."\n\n";


//OUTPUT
//in_array 2.32199

//if && 2.66951

//if else 1.28673
