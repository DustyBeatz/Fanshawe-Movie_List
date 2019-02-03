<?php
function redirect_to($location){
    if($location != NULL){
        header('location: '.$location);
        exit();
    }
}