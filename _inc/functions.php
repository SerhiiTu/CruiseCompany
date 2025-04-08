<?php

function print_form_data() {
    foreach($_POST as $field => $value){
        echo '<h5 class="text-left">' . $field . ': ' . $value . '</h5>';
    }
}

?>