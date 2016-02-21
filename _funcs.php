<?php


function load_scripts($scripts, $defer='') {

    foreach ($scripts as $index => $script) {
        echo "<script src=\"${script}\" $defer></script>\n";
    }

}
