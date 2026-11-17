<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public array $array = [
        ['id' => 1, 'title' => 'Газява + кирики', 'price' => 55000, 'path' => 'pict1.jpg'],
        ['id' => 2, 'title' => 'Кирики', 'price' => 850, 'path' => 'pict2.jpg'],
        ['id' => 3, 'title' => 'Газява', 'price' => 4200, 'path' => 'pict3.jpg'],
    ];

    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = $this->array;
        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->array;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->array;
        usort($array, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = array_filter($this->array, function ($item) {
            return $item['price'] > 1000;
        });
        return view('array', compact('array'));
    }
}
