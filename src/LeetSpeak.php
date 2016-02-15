<?php
  class LeetSpeak
  {
    function makeLeetSpeak($input)
    {
        $phrase_array = explode(" ", $input);
        $phrase_output_array = array();
        foreach ($phrase_array as $word) {

            $output_array = array();
            for($i = 0; $i < strlen($word); $i++) {
                if($word[$i] == 'e' || $word[$i] == 'E') {
                    $output_array[$i] = '3';
                } elseif($word[$i] == 'o' || $word[$i] == 'O') {
                    $output_array[$i] = '0';
                } elseif($word[$i] == 'I') {
                    $output_array[$i] = '1';
                } elseif($i != 0 && ($word[$i] == 's' || $word[$i] == 'S')) {
                    $output_array[$i] = 'z';
                } else {
                    array_push($output_array, $word[$i]);
                }
            }
            $phrase_output = implode("", $output_array);
            array_push($phrase_output_array, $phrase_output);
        }

        return implode(" ", $phrase_output_array);
    }
  }
?>
