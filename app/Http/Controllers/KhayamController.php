<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhayamController extends Controller
{
    public function SumMethod(Request $request)
    {
        /*
        First Method is calculating triangle by summing the top two cells
        */
        $MaxLine = $request->Line; // Number of the lines that user want
        $Pascal = array(); // Define Array for Save the triangale values
        /*
        $Line is the Line of the Triangle
        $N is index of the cell in line
         */
        for ($Line = 0; $Line <= $MaxLine; $Line++) {
            for ($N = 0; $N <= $Line; $N++) {
                if ($N == 0 || $N == $Line) {
                    $Pascal[$Line][$N] = 1;
                } else {
                    $Pascal[$Line][$N] = ($Pascal[$Line - 1][$N - 1]) + ($Pascal[$Line - 1][$N]);
                }
            }
        }
        $title = "SumMethod"; // define title for view
        return (view("Show-Triangle", compact(['Pascal', 'title'])));
    }

    public function FactorialModel(Request $request)
    {
        /*
        secound Method is calculating triangle by factorials formula L
        */
        $Pascal = array(); // Define Array for Save the triangale values
        $MaxLine = $request->Line; // Number of the lines that user want
        /*
        $Line is the Line of the Triangle
        $N is index of the cell in line
         */
        for ($Line = 0; $Line <= $MaxLine; $Line++) {
            for ($N = 0; $N <= $Line; $N++) {
                $Pascal[$Line][$N] = (gmp_fact($Line)) / (gmp_fact($N) * (gmp_fact(($Line - $N))));
            }
        }
        $title = "FactorialModel"; // define title for view
        return (view("Show-Triangle", compact(['Pascal', 'title'])));
    }
}
