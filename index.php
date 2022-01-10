<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exercise 1</title>
</head>
<body>
    <?php

    //1
    echo "<h1>1</h1>";
    //1 a
    $string1 = "zaid samamah";
    echo "<p>a.".strtoupper($string1)."</p>";
    //1 b
    echo "<p>b.".strtolower($string1)."</p>";
    //1 c
    echo "<p>c.".ucfirst($string1)."</p>";
    //1 d
    echo "<p>d.".ucwords($string1)."</p>";

    //2
    echo "<h1>2</h1>";
    $num = '085119';
    echo "<p>Before: ".$num."</p>";
    $array = str_split($num,2);
    for($i=0;$i<count($array)-1;$i++){
        $array[$i] = $array[$i].":";
    }
    $num = implode("",$array);
    echo "<p>After: ".$num."</p>";

    //3
    echo "<h1>3</h1>";
    $str3 = "i am a full stack developer at orange coding academy";
    $found = strpos($str3,'orange');
    if($found===0 || $found)
        echo "<p>Word found!</p>";
    else
        echo "<p>Word Not Found!</p>";

    //4
    echo "<h1>4</h1>";
    $str4 = "www.orange.com/index.php";
    $arr4 = explode('/',$str4);
    echo "<p>File Name: ".$arr4[count($arr4)-1]."</p>";

    //5
    echo "<h1>5</h1>";
    $str5 = "info@orange.com";
    $arr5 = explode('@',$str5);
    echo "<p>Username: ".$arr5[0]."</p>";

    //6
    echo "<h1>6</h1>";
    $arr6 = str_split($str5,strlen($str5)-3);
    echo "<p>Last 3 characters are: ".$arr6[count($arr6)-1]."</p>";

    //7
    echo "<h1>7</h1>";
    $str7 = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $generated = str_shuffle($str7);
    $generated = substr($generated,0,8);
    echo $generated;

    //8
    echo "<h1>8</h1>";
    $str8 = "That new trainee is so genius";
    echo "<p>Before: ".$str8."</p>";
    $arr8 = explode(" ",$str8);
    $arr8[0] = "Our";
    $str8 = implode(" ",$arr8);
    echo "<p>After: ".$str8."</p>";

    //9
    echo "<h1>9</h1>";
    $str9_1 = "dragonball";
    $str9_2 = "dragonboll";
    if(strlen($str9_1)>strlen($str9_2))
        $shortest = $str9_2;
    else
        $shortest = $str9_1;
    
    for($i=0;$i<strlen($shortest);$i++){
        if($str9_1[$i]!==$str9_2[$i]){
            echo "<p>First difference between two strings at index ".$i."  ".$str9_1[$i]." vs ".$str9_2[$i]."</p>";
            break;
        }
    }

    //10
    echo "<h1>10</h1>";
    $str10 = "Twinkle, twinkle, little star.";
    $arr10 = explode(' ',$str10,3);
    var_dump($arr10);

    //11
    echo "<h1>11</h1>";
    $srt11_1 = 'z';
    echo "<p>Letter ".$srt11_1." then ";
    if(++$srt11_1=="aa")
        $srt11_1 = 'a';

    echo $srt11_1."</p>";

    //12
    echo "<h1>12</h1>";
    $exp12 = explode(" ","The brown fox");
    $arr12 = ['The','brown','quick'];
    $find1 = array_search($arr12[0],$exp12);
    $find2 = array_search($arr12[1],$exp12);
    if($find1+1!==$find2)
        echo "<p>Can`t add between this words</p>";
    else{
        $first = array_slice($exp12,$find1,$find1+1);
        array_push($first,$arr12[2]);
        $second = array_slice($exp12,$find2);
        $exp12 = array_merge($first,$second);
        echo "<p>";
        foreach($exp12 as $val)
            echo $val." ";
        echo "</p>";        
    }

    //13
    echo "<h1>13</h1>";
    $str13 = '0000657022.24';
    $arr13 = str_split($str13);
    $length = count($arr13);
    for($i=0;$i<$length;$i++){
        if($arr13[$i]==="0")
            unset($arr13[$i]);
    }
    echo "<p>Before: ".$str13."</p>";
    $str13 = implode("",$arr13);
    echo "<p>After: ".$str13."</p>";

    //14
    echo "<h1>14</h1>";
    $str14 = 'the quick brown fox jumps over the lazy dog';
    echo "<p>Before: ".$str14."</p>";
    // $str14 = trim($str14,' fox ');
    echo "<p>After: ".str_replace('fox','',$str14)."</p>";

    //15
    echo "<h1>15</h1>";
    $str15 = 'The quick brown fox jumps over the lazy dog---';
    echo "<p>Before: ".$str15."</p>";
    echo "<p>After: ".trim($str15,'-')."</p>";

    //16
    echo "<h1>16</h1>";
    $str16 = '\"\1+2/3*2:2-3/4*3';
    // $str16 = str_replace('"\'\\*/:-','',$str16);
    $str16 = preg_replace('/[^a-zA-Z0-9\']/',"_",$str16);
    $str16 = str_replace("_",' ',$str16);
    echo $str16;

    //17
    echo "<h1>17</h1>";
    $str17 = 'The quick brown fox jumps over the lazy dog';
    echo "<p>Before: ".$str17."</p>";
    $arr17 = explode(" ",$str17);
    $arr17 = array_slice($arr17,0,5);
    $str17 = implode(" ",$arr17);
    echo "<p>After: ".$str17."</p>";

    //18 
    echo "<h1>18</h1>";
    $str18 = '2,543.12';
    echo "<p>Before: ".$str18."</p>";
    $str18 = str_replace(',','',$str18);
    echo "<p>After: ".$str18."</p>";

    //19
    echo "<h1>19</h1>";
    $str19 = 'a';
    echo "<p>";
    for($i=0;$str19!=='aa';$i++)
        echo $str19++;
    echo "</p>";

    ?>
</body>
</html>