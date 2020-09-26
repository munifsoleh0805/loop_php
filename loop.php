<?php


//jika diatas tiga dibawah 7
//======nomor 4========
function forEmpat()
{
    for($x=1;$x<=7;$x++)
{
    if($x>3 && $x<7){
        echo "A  ";
    }else{ 

        echo $x. "  ";
    }
}
}
forEmpat();


//========Menggunakan do while
//======nomor 4========
// function doWhile()
// {
// $number=0;
// do{
//     $number++;
//     if($number>3 && $number<7)
//     {
//         echo "A  ";
//         continue;
//     }else{
//         echo $number."  ";
//     }
// }while($number<=6);
// }
// doWhile();


//========Menggunakan while
//=====nomor 4========
// function while1()
// {
// $number=0;
// while($number<=6){
//     $number++;
//     if($number>3 && $number<7)
//     {
//         echo "A  ";
//         continue;
//     }else{
//         echo $number."  ";
//     }
// }
// }
// while1();


echo PHP_EOL;
//=======NOMOR 1======= 1 2 3 8 9 10
//=========Menggunakan for
function forNo1()
{
for($x=1;$x<=10;$x++){
    if($x>3 && $x<8){
        echo "";
        continue;
    }else{
        echo $x."  ";
    }
}
}
forNo1();

//======nomor 1========
//========Menggunakan do while
// function doWhile1()
// {
// $number=0;
// do{
//     $number++;
//     if($number>3 && $number<7)
//     {
//         echo "";
//         continue;
//     }else{
//         echo $number."  ";
//     }
// }while($number<=9);
// }
// doWhile1();

//=======NOMOR 1=======
//=========Menggunakan while
// function whileNo1()
// {
// $number=0;
// while($number<=9){
//     $number++;
//     if($number>3 && $number<7)
//     {
//         echo "";
//         continue;
//     }else{
//         echo $number."  ";
//     }
// }
// }
// whileNo1();


echo PHP_EOL;
//========NOMOR 2======= 5 4 3 * *
//=========Menggunakan for
function forNo2()
{
for($x=5;$x>=1;$x--){
    if($x>=1 && $x<=2){
        echo "*  ";
        continue;
    }else{
    echo $x."  ";
    }
}
}
forNo2();


echo PHP_EOL;
// //=====NOMOR 3===== (1a 2b 3a 4b)
// //=========Menggunakan for
function forNo3()
{
for($x=1;$x<=4;$x++){
    if($x %2 ==0){
        echo $x."b  ";
    }else{
        echo $x."a  ";
    }
}
}
forNo3();


echo PHP_EOL;
//=======NOMOR 5==-=== (4 3 A 1 A)
//=========Menggunakan for
function forNo5()
{
for($x=4;$x>=0;$x--){
    if($x==0 || $x==2){
        echo "A  ";
        continue;
    }else{
     echo $x."  ";
    }
}
}
forNo5();


echo PHP_EOL;
//=====NOMOR 6===== (A A 2 3 4)
//=========Menggunakan for
function forNo6()
{
for($x=0;$x<=4;$x++){
    if($x>=0 && $x<=1){
        echo "A  ";
        continue;
    }else{
        echo $x."  ";
    }
}
}
forNo6();

?>