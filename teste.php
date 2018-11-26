<?php
/**
 * Simple function to replicate PHP 5 behaviour
 */
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$time_start = microtime_float();

// Sleep for a while
//sleep(3.8); // atrasa o tempo de carregamento em segundos
//usleep(1000000 * ); //milionesimos de segundos
usleep(1234567 *  12); //milionesimos de segundos

$time_end = microtime_float();
$time = $time_end - $time_start;
echo "Tempo de carregamento ".gmdate('H:i:s', $time)." segundos\n";




// Instantiate a DateTime with microseconds.
$d = new DateTime('2011-01-01T15:03:01.012345Z');

// Output the microseconds.
echo $d->format('u'); // 012345

echo "<br>";

// Output the date with microseconds.
echo $d->format('Y-m-d\TH:i:s.u'); // 2011-01-01T15:03:01.012345
?>