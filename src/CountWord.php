<?php
    Class RepeatCounter
    {

        function countRepeats ($key_word, $input_string) {

            $output="";

            $exploded_input_string = explode(" ", $input_string);

            
            foreach ($exploded_input_string as $key)
            {
                if ($key == $key_word)
                {
                    $output = $output +1;

                }
            }

            return $output;

    }}
?>
