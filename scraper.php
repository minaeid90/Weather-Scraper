<?php 
$city = $_GET['city'];
$city = str_replace(" ", "", $city);

$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
$code = '3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">Mostly dry. Warm (max 21&deg;C on Wed afternoon, min 9&deg;C on Mon night). Winds increasing (light winds from the NNW on Tue morning, fresh winds from the NE by Wed afternoon).<\/span><\/span><\/span>';

preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);
print_r($matches[1]);

 ?> 