<?php

trait ChankatiFormulaTrait
{

// return 0-29
    public function get_bodithey($year) {
        $ahk = get_aharkun($year);
        $avml = floor((11 * $ahk + 25)  / 692);
        $m = $avml + $ahk + 29;
        return ($m % 30);
    }

// return 0-291
    public function get_avoman($year) {
        $ahk = get_aharkun($year);
        $avm = (11 * $ahk + 25)  % 692;
        return $avm;
    }

// return int
    public function get_aharkun($ad_year) {
        $beyear = get_be_year($ad_year);
        $t = $beyear * 292207 + 499;
        $ahk = floor($t / 800) + 4;
        return $ahk;
    }

// return 1-800
    public function kromthupul($be_year) {
        $akh = get_akhakun_mod($be_year);
        $krom = 800 - $akh;
        return $krom;
    }

    public function is_khmer_solar_leap($year) {
        $be_year = get_be_year($year);
        $krom = kromthupul($be_year);
        if ($krom <= 207) return 1;
        else return 0;
    }

    public function get_akhakun_mod($be_year) {
        $t = $be_year * 292207 + 499;
        $ahkmod = $t % 800;
        return $ahkmod;
    }

// return 0:regular, 1:leap month, 2:leap day, 3:leap day and month
    public function get_bodithey_leap($ad_year) {
        $result = 0;
        $a = get_avoman($ad_year);
        $b = get_bodithey($ad_year);

        // check bodithey leap month
        $bodithey_leap = 0;
        if ($b >= 25 || $b <= 5) {
            $bodithey_leap = 1;
        }
        // check for avoman leap-day based on gregorian leap
        $avoman_leap = 0;
        if (is_khmer_solar_leap($ad_year)) {
            if ($a <= 126) $avoman_leap = 1;
        } else {
            if ($a <=137) {
                // check for avoman case 137/0, 137 must be normal year (p.26)
                if (get_avoman($ad_year + 1) == 0) {
                    $avoman_leap = 0;
                } else $avoman_leap = 1;
            }
        }

        // case of 25/5 consecutively
        // only bodithey 5 can be leap-month, so set bodithey 25 to none
        if ($b == 25) {
            $next_b = get_bodithey($ad_year + 1);
            if ($next_b == 5) $bodithey_leap = 0;
        }

        // case of 24/6 consecutively, 24 must be leap-month
        if ($b == 24) {
            $next_b = get_bodithey($ad_year + 1);
            if ($next_b == 6) $bodithey_leap = 1;
        }

        // format leap result (0:regular, 1:month, 2:day, 3:both)
        if ($bodithey_leap == 1 && $avoman_leap == 1) {
            $result = 3;
        } else if ($bodithey_leap == 1) {
            $result = 1;
        } else if ($avoman_leap == 1) {
            $result = 2;
        } else $result = 0;

        return $result;
    }

// return 0:regular, 1:leap month, 2:leap day (no leap month and day together)
    public function get_protetin_leap($adyear) {
        $b = get_bodithey_leap($adyear);
        if ($b == 3) {
            return 1;
        }
        if ($b == 2 || $b == 1) {
            return $b;
        }
        // case of previous year is 3
        if (get_bodithey_leap($adyear - 1) == 3) {
            return 2;
        }
        // normal case
        return 0;
    }

}
