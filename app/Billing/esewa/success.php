<?php
require_once 'config.php';

//create array of data to be posted
$post_data['amt'] = 20;
$post_data['scd'] = $merchant_id;
$post_data['pid'] = 'PRD-01';
$post_data['rid'] = $_REQUEST['refId'];

//traverse array and prepare data for posting (key1=value1)
foreach ($post_data as $key => $value) {
    $post_items[] = $key . '=' . $value;
}

//create the final string to be posted using implode()
$post_string = implode('&', $post_items);

//create cURL connection
$curl_connection =
        curl_init($esewa_verfication_url);

//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);

//set data to be posted
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);

//perform our request
$result = curl_exec($curl_connection);
//close the connection
curl_close($curl_connection);


$verification_response  = strtoupper( trim( strip_tags( $result ) ) ) ;

if('SUCCESS' == $verification_response){
    echo '<h2><strong>SUCCESS:</strong> Transaction is successful !!!</h2>';
}
else{
    echo '<h2><strong>ERROR:</strong> Transaction could not be verified</h2>';
}
?>
<br/>
<a href="<?php echo $site_url; ?>">Go to homepage</a>
