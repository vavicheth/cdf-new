<?php

namespace App\Traits;

trait UsableTrait {
    public function CodeIn($number,$digit='4') {
        $code_in=sprintf("%0".$digit."d",$number)."/". now()->year;
        return $code_in;
    }
}
