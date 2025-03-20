<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerJsonFortune extends Model
{
    use HasFactory;

    protected $casts = [
        'fortune' => 'json',
    ];

    // 誕生数を計算する
    static function calcBirthNumber($year, $month, $day){
        // Step1. 誕生日の各桁を足す 例) 1970220 = 1 + 9 + 0 + 2 + 2 + 0 =  14
        $ymd = str_split($year . $month . $day);
        $ymd2 = 0;
        foreach($ymd as $number){
            $ymd2 += $number;
        }
        // Step2. 9 で割った余りが誕生数、ただし0の場合は9とする
        $birthNumber = $ymd2 % 9;
        if ($birthNumber === 0) {
            $birthNumber = 9;
        }
        return $birthNumber;
    }
}
