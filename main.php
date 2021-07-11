<?php

// one step
// $key = base64_decode( "ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw%3D");

// $defaultdata = array( "showpassword"=>"no", "bgcolor"=>"#ffffff");

// $text=json_encode($defaultdata);
// $outText="";
// for($i=0;$i<strlen($text);$i++){
// $outText .= $text[$i] ^ $key[$i % strlen($key)];}
// echo $outText;


// two step

function xor_encrypt($in) {
    $key = 'qw8J';
    $text = $in;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;
}
$data = array( "showpassword"=>"yes", "bgcolor"=>"#ffffff");
echo base64_encode(xor_encrypt(json_encode($data)))
?>


