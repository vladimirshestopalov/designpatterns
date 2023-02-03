<?php

namespace App\Lab\Links;

class linksTest
{
    public function run()
    {
        $a=3;
        $b=&$a;

        $b=10;

        var_dump($a,$b);

        print "<hr>";





        $arr=[1,2,3,4,5,6,7];

        foreach($arr as &$a) {
//      в каждой итерации $a указывает на то же значение, что и текущий в цикле элемент массива
        }
//      продолжает указывать на последний элемент массива и выдает значение последнего элемента массива
        var_dump($a);
        print "<br>";


        foreach($arr as $a){
//      поскольку $a здесь каждый раз меняте свое значение, то продолжая ссылаться на последний эдемент массива, оно перезаписывает его в каждой итерации
            var_dump( $arr);
            print "<br>";
        }

    }
}