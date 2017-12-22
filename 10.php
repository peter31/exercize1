#!/usr/bin/env php
<?php
function argv_count($argv) {
    if (count($argv) < 3) {
        die("Wrong arguments count!\n\n");
    }
}

argv_count($argv);