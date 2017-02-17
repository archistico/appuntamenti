<?php
function orarioattivo($id) {
    if($id%2==0 && isset($id)) {
        echo "checked";
    } else {
        echo "";
    }
}