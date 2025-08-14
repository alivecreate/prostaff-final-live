<?php
use Carbon\Carbon;


function dateFormat($date, $format= 'd-M-Y'){
    if($date){
        $formattedDate = Carbon::parse($date)->format($format);
        return $formattedDate;
    }
    return null;
}

function dateTimeFormat(){

    $formattedDate = Carbon::parse(date('Y-m-d h:i:s A'))->format('d-m-Y,  h:i:s A');
    return $formattedDate;
}
