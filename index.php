<?php

/*
$numbers = [1, 2, 3];
$squared = array_map(function($n) { return $n * $n; }, $numbers);
echo "<pre>";
print_r($squared);
echo "</pre>";

echo "<br>";


function get_arguments(...$args) {
    $all = implode(" ", $args); // جمع العناصر بمسافة بينهم
    return $all;
}

echo get_arguments("Hello", "Elzero", "Web", "School", "HASSAN") . "<br>";
echo get_arguments("I", "Love", "PHP");
echo "<br>";

function sum_all(...$nums) {
    $sum = 0;

    foreach ($nums as $num) {
        if ($num == 5) {
            continue; // تجاهل الرقم 5
        }
        if ($num == 10) {
            $num = 20; // غيّر 10 إلى 20
        }
        $sum += $num;
    }

    return $sum;
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10) . "<br>"; // 64
echo sum_all(5, 10, 5, 10); // 40

echo "******** <br>" ;

function multiply(...$nums) {
    $result = 1;

    foreach ($nums as $num) {
        // إذا كانت القيمة نصية (string) تجاهلها
        if (is_string($num)) {
            continue;
        }

        // إذا كانت القيمة float نحولها إلى int
        if (is_float($num)) {
            $num = (int)$num;
        }

        // عملية الضرب
        $result *= $num;
    }

    return $result;
}

// Needed Output
echo multiply(10, 20) . "<br>";        // 200
echo multiply("A", 10, 30) . "<br>";   // 300
echo multiply(100.5, 10, "B");         // 1000

echo "******** <br>" ;

function check_status($a, $b, $c) {
  $name = "";
  $age = 0;
  $available = false;

  // نحدد نوع كل قيمة حسب نوعها
  foreach ([$a, $b, $c] as $value) {
    if (is_string($value)) {
      $name = $value;
    } elseif (is_int($value)) {
      $age = $value;
    } elseif (is_bool($value)) {
      $available = $value;
    }
  }

  // نص الرسالة بناءً على الحالة
  $status = $available ? "You Are Available For Hire" : "You Are Not Available For Hire";

  return "Hello $name, Your Age Is $age, $status";
}

// Needed Output
echo check_status("Osama", 38, true) . "<br>";
echo check_status(38, "Osama", true) . "<br>";
echo check_status(true, 38, "Osama") . "<br>";
echo check_status(false, "Osama", 38); 

// ######### الفوك اساينمت


$str = "Hassan";

echo "First leatter is $str[0] <br> ";
echo "4th leatter is $str[3] <br> ";
echo "Number of leatter " . strlen($str) . "<br>";
echo "Last leatter is $str[-1] <br> ";
echo "Last leatter is {$str[strlen($str) -4]} <br> ";

echo $str . "<br>";
$str[6]= "r";
echo $str . "<br>";

echo lcfirst("Hassan Shaker ") . "<br>";
echo ucfirst("hassan shaker ") . "<br>";
echo strtolower("HASSAN SHAKER KHASHEN") . "<br>";
echo strtoupper("hassan shaker khashen") . "<br>";
echo ucwords("hassan shaker") . "<br>";
echo ucwords("hassan shaker|khashen", "|") . "<br>";
echo str_repeat("hassan", 4) . "<br>";

$friends =["Hassan", "Hussen","Montazer", "Mahdey"];

echo implode(" ", $friends) . "<br>";
echo implode("|", $friends) . "<br>";
echo implode("@@", $friends) . "<br>";
echo implode($friends) . "<br>";

$str = "Elzero web school is cool";

echo "<pre>";
print_r(explode(" ", $str,0));
echo "</pre>";

echo str_shuffle("Hassan shaker get a cup") . "<br>";
$code = substr(str_shuffle("0123456789"), 0, 6);
echo $code;
echo "<br>" ;
echo strrev("Hassan") . "<br>";

echo strlen("   Elzero   ") . "<br>";
echo strlen(trim("   Elzero   ")) . "<br>";

echo trim("##@@Elzero@@##", "#@"). "<br>";
echo rtrim("##@@Elzero@@##", "#@"). "<br>";
echo ltrim("##@@Elzero@@##", "#@"). "<br>";

echo chunk_split ("Hassan shaker khashen", 2, "!") . "<br>";

echo "<pre>";
print_r(str_split("Hassan", 1));
echo "</pre>";

echo strip_tags("<h3>hello <b>php</b></h3>", "<b>");

echo "<h3>Hello <b>php</b></h3>";

echo nl2br("Hassan\n shaker\n khashen", true); 

var_dump(strpos("Hello Hello", "e"));
echo "<br>";
var_dump(strpos("Hello Hello", "e", 3));
echo "<br>";
var_dump(strpos("Hello Hello", "e",-4));
echo "<br>";
var_dump(strrpos("Hello Hello", "H"));
echo "<br>";
var_dump(strpos("Hello Hello", "h"));
echo "<br>";
var_dump(stripos("Hello Hello", "h"));
echo "<br>";
var_dump(strripos("Hello Hello", "h"));
echo "<br>";
var_dump(substr_count("Hello Hello", "l", 0, 9));
echo "<br>";
 parse_str("name= hassan& email=o@nm.sa& os= windows", $qurey);

echo "<pre>";
print_r($qurey) ;
echo "</pre>";
echo "Hello [] () * + . <br>";
echo quotemeta("Hello [] () * + . <br>");
echo "<br>";
echo str_pad("13$", 6, 0 , STR_PAD_LEFT) . "<br>";
echo str_pad("123$", 6, 0 , STR_PAD_LEFT) . "<br>";
echo str_pad("4567$", 6, 0 , STR_PAD_LEFT) . "<br>";
echo str_pad("34567$", 6, 0 , STR_PAD_LEFT) . "<br>";
echo "<br>";
$translate= ["@"=> "X", "#" => "T"];
echo strtr("E@T MARK#ING",$translate);

echo str_replace("@", "o", "Elzer@ web Sch@@l",$r) . "<br>";
echo "Replaces cont is $r";
echo "<br>";
echo str_replace(["@", "#"],["o", "l"], "E#zer@ web Sch@@#") . "<br>";

echo "<pre>";
print_r(str_replace("One", 1, ["One", "Tow", "Three", "One", "One"])) ;
echo "</pre>";

echo "<pre>";
print_r(str_replace(["One","Tow", "Three"],[1 , 2], ["One", "Tow", "Three", "One", "One"])) ;
echo "</pre>";
echo "<pre>";
print_r(str_ireplace(["one","tow", "Three"],[1 , 2], ["One", "Tow", "Three", "One", "One"])) ;
echo "</pre>";
$text = "PHP    is   awesome";
$clean = str_replace("  ", " ", $text);
$clean = str_replace("  ", " ", $clean); // تتكرر حتى تختفي المسافات

echo $clean;

$clean = preg_replace('/\s+/', ' ', $text); // احسن طريقة لاخفاء المسافات والترتيب

echo substr_replace("onetwo", 1, 0);
echo "<br>";
echo substr_replace("onetwo", 1, 3);
echo "<br>";
echo substr_replace("onetwo", 1, -1);
echo "<br>";
echo substr_replace("onetwo", 2, 2, 2);
echo "<br>";
echo substr_replace("onetwo", 2, 2, 4);
echo "<br>";
echo substr_replace("Elzero_web_school", "Q", 7, 3);
echo "<br>";
echo substr_replace("Elzero_web_school", "Q", 7, -3);
echo "<br>";
echo substr_replace("Elzero_web_school", "Q", 7, -9);
echo "<br>";
echo substr_replace("Elzero_web_school", "Q", 7, -10);
echo "<br>";
echo substr_replace("Elzero_web_school", "#", 1, 0);
echo "<br>";
$str = "Welcome To Elzero web school website";

echo wordwrap($str, 8, "<br>", TRUE);
echo "<br>";
echo ord("a");
echo "<br>";
echo ord("8");
echo "<br>";
echo chr("56");
echo "<br>";
echo similar_text("mark_et","market", $perc);
echo "<br>";
echo $perc ;
echo "<br>";
echo strstr("EK MARKET", "M") . "<br>";
echo strstr("EK MARKET", "K") . "<br>";
echo strstr("EK MARKET", "M", TRUE) . "<br>";
echo strlen(strstr("EK MARKET", "M", TRUE)) . "<br>";

echo strstr("EK MARKET", "m") . "<br>";
var_dump(strstr("EK MARKET", "m"));
echo "<br>";
echo stristr("EK MARKET", "m") . "<br>";
var_dump(stristr("EK MARKET", "m"));
echo "<br>";

echo 10_000_000;
echo "<br>";
echo number_format(10000000.156122445 );
echo "<br>";
echo number_format(10000000.156122445 , 3 );
echo "<br>";
echo number_format(10000000.156122445 , 3, "/");
echo "<br>";
echo number_format(10000000.156122445 ,3, "/", "^" ); 
// اساينمت
$str = 'aAa';
$num = 3;
$char = "_";

echo chunk_split(str_repeat(strtolower($str),3), $num, $char);// aaa_aaa_aaa_ 


$str = "Orezle";
echo strtr(ucfirst(strrev($str)) , "O", "o");
// Elzero

$str = "<div><b>Elzero</b></div>";

echo strip_tags($str, "<b>");
// <b>Elzero</b>
echo strlen(strip_tags($str, "<b>"));

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str , $e , $four) . "<br>" ; // 1
echo substr_count ($str , strtolower($o) , -4 , $four) ; // 2 

$chars = ["E", "l", "z", "e", "r", "o"];

echo implode($chars);

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo str_replace([1, 2], "" , ucfirst(strtolower(implode($chars))));

/* implement function 
function my_array_count_values($array) {
    $result = [];

    foreach ($array as $value) {
        if (isset($result[$value])) {
            $result[$value]++;   // زيد العدد
        } else {
            $result[$value] = 1; // أول مرة نشوفه
        }
    }

    return $result;
}
$data = ["apple", "banana", "apple", "orange", "banana", "apple"];
echo "<pre>";
print_r(my_array_count_values($data));
echo "</pre>"; 
$friends =["Hassan","Hassun", "MO", "Ali"];
echo "<pre>";
print_r(array_chunk ($friends, 2));
echo "</pre>"; 

$countries =["EG" => "Egypt", "KSA" => "Saudi Arabia", "SY" => "Syria", "USA" => "United states"];
echo "<pre>";
print_r(array_chunk ($countries, 2 , True));
echo "</pre>"; 
echo "<pre>";
print_r(array_change_key_case ($countries, True));
echo "</pre>"; 

$Keys =["A", "O", "K"];
$values =["Ahmed", "Osama", "Kamal"];

echo "<pre>";
print_r(array_combine($Keys, $values));
echo "</pre>"; 

$counting =["A", "A", "a", "B", "B", "B", "C"];

echo "<pre>";
print_r(array_count_values($counting));
echo "</pre>"; 

$family =["Hassan","Hassun", "MO", "Ali", ["Eman", "Noha"]];

$countries =["EG" => "Egypt", "KSA" => "Saudi Arabia", "SY" => "Syria", "USA" => "United states"];
echo "<pre>";
print_r($family);
print_r(array_reverse($family, TRUE));
echo "</pre>";


echo "<pre>";
print_r(array_flip($countries));
echo "</pre>";
$counting =["A", "A", "a", "B", ["B", "B", "C"]];

echo count($counting, 1);
echo "<br>";

 $serach =["1", 2, 3, 4];
   if (in_array(1 , $serach, True)) {
   echo "is found";
 }

$discounts =[
     "EG" => 100, 
     "KSA" => 50,
     "SY" => 70, 
     "USA" => 67
    ];

    if (array_key_exists("EG", $discounts)) {

        echo "The discount is: " . $discounts["EG"];
    };

$data = ["apple", "banana", "orange", "banana"];

echo current($data) . "<br>";
echo next($data) . "<br>";
echo current($data) . "<br>";
echo next($data) . "<br>";
echo prev($data) . "<br>";
echo reset($data) . "<br>";
echo end($data) . "<br>";


$merge1 = ["one" => "PHP", "tow" => "CSS", "Three" => "JavaScript"];
$merge2 = ["one" => "Html", "Four" => "Python"];

echo "<pre>";
print_r(array_merge($merge1 , $merge2));
echo "</pre>";

$merge3 = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
$merge4 = [40 => "Html", "10" => "Python"];

echo "<pre>";
print_r(array_merge($merge3 , $merge4));
echo "</pre>";

echo "<pre>";
print_r(array_replace($merge1 , $merge2));
echo "</pre>";

echo "<pre>";
print_r(array_replace($merge3 , $merge4));
echo "</pre>";

$numbers = ["hi" , 2, 3, 4, 5];

echo $numbers[array_rand($numbers)] . "<br>";
echo array_rand($numbers) , "<br>";

echo "<pre>";
print_r(array_rand($numbers, 3));
echo "</pre>";

function my_shuffle(&$array) {
    $length = count($array);

    // نبدأ من آخر عنصر وننزل للـ index 1
    for ($i = $length - 1; $i > 0; $i--) {
        // نجيب رقم عشوائي بين 0 و i
        $j = rand(0, $i);

        // نبدّل العناصر
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
    }
}

$numbers = [1 , 2, 3, 4, 5];

my_shuffle($numbers);

print_r($numbers);

echo "<br>"; 

$chars = ["A", "B", "C", "D"];   

echo array_shift($chars); // delet the first char.
echo "<pre>";
print_r($chars);
echo "</pre>";

array_pop($chars);// delet the last char.
echo "<pre>";
print_r($chars);
echo "</pre>";

array_push($chars, "Y", "I");
echo "<pre>";
print_r($chars);
echo "</pre>";

array_unshift($chars, "H", "O");
$chars[] = "1";

echo "<pre>";
print_r($chars);
echo "</pre>";

$chars = ["A", "B", "C", "D", "E", "F", "G"]; 
$chars_s_k = ["A" => 1, "B" => 2, "C" => 3]; 
$chars_n_K = [10 => 1, 20 => 2, 30 => 3]; 

echo "<pre>";
print_r(array_slice($chars, 2, -2));
print_r(array_slice($chars, 2, 4));
print_r(array_slice($chars_n_K, 0, 2, true));
print_r(array_slice($chars_s_k, 0, 3));
print_r($chars);// it remains the same without deletion(slice)
echo "</pre>";

$nums = [10, 20, 30, 40, 50, 60, 70];

echo "<pre>";
print_r(array_splice($nums, 2,3));
print_r($nums); // it dosen't stay the same(splice)
print_r(array_splice($nums, 0,-3, ["one"]));
print_r($nums);
echo "</pre>";

$numes = ["Osama", "Ahmed", "Sayed", "Mahmood", "Sameh", "Gamal"];

sort($numes);// ترتيب تصاعدي حسب الابجدية
echo "<pre>";
print_r($numes);
echo "</pre>";

rsort($numes); //       تنازلي
echo "<pre>";
print_r($numes);
echo "</pre>";

$countries =["SY" => "Syria","KSA" => "Saudi Arabia","EG" => "Egypt",  "USA" => "United states"];

asort($countries);// تصاعدي على الفاليو 

echo "<pre>";
print_r($countries);
echo "</pre>";

arsort($countries);

echo "<pre>";
print_r($countries);
echo "</pre>";


$chars = ["c" => 1, "a" => 3, "b" => 2]; 

ksort($chars);// على الكي

echo "<pre>";
print_r($chars);
echo "</pre>";

krsort($chars);
echo "<pre>";
print_r($chars);
echo "</pre>";

$files = ["Photo1.png", "Photo20.png","Photo3.png"];

sort($files);

echo "<pre>";
print_r($files);
echo "</pre>";

natsort($files);

echo "<pre>";
print_r($files);
echo "</pre>";
*/