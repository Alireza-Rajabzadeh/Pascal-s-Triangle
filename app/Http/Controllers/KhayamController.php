<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhayamController extends Controller
{
    public function SumMethod(Request $request)
    {
        $Target = $request->Line;
        $Pascal = array();
        for ($Line = 0; $Line <= $Target; $Line++) {
            for ($N = 0; $N <= $Line; $N++) {
                if ($N == 0 || $N == $Line) {
                    $Pascal[$Line][$N] = 1;
                } else {
                    $Pascal[$Line][$N] = ($Pascal[$Line - 1][$N - 1]) + ($Pascal[$Line - 1][$N]);
                }
            }
        }
        $title="SumMethod";
        return(view("Show-Triangle",compact(['Pascal','title'])));
    }

    public function FactorialModel(Request $request)
    {
        $Pascal = array();
        $Target = $request->Line;
        for ($Line = 0; $Line <= $Target; $Line++) {
            for ($index = 0; $index <= $Line; $index++) {
                $Pascal[$Line][$index] = (gmp_fact($Line)) / (gmp_fact($index) * (gmp_fact(($Line - $index))));
            }
        }
        $title="FactorialModel";
        return(view("Show-Triangle",compact(['Pascal','title'])));
    }
}
