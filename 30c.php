<?php
//cau 1: kiem tra so chan, le
echo 'Cau 1: ';
$numberCheck = 16;
function checkEven($numberCheck){
    if($numberCheck % 2 == 0){
        echo $numberCheck. ' la so chan';
    }else{
        echo $numberCheck. ' la so le';
    }
}
checkEven($numberCheck);
echo '<br>';

//cau 2: tinh tong tu 1->n
echo 'Cau 2: ';
function sum($n){
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
        $sum += $i;
    }return $sum;
}
echo 'Sum: '.sum(10). '<br>';

//cau 3: in bang cuu chuong tu 1->10
?>

<table border = "1px">
<tr>
<?php
echo 'Cau 3: Bang cuu chuong tu 1 den 10';
function printfTable(){
    for($i = 1; $i <= 10; $i++){
        echo '<td>';
        for($j = 1; $j <= 10; $j++){
            echo "$i x $j = " . ($i * $j). '<br>';
        }
    }
}printfTable();
?>
</tr>
</table>
<?php
//cau 4: kiem tra tu nam trong chuoi
echo 'Cau 4: ';
$string = 'Dinh Thi Mai';
$word = 'Mai';
function checkString($string,$word){
    if(strpos($string,$word) == true){
        echo 'Tu nam trong chuoi';
    }else{
        echo 'Tu khong nam trong chuoi';
    }
}
checkString($string,$word);
echo '<br>';
?>
<?php
// 5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
echo "Cau 5: ";
function timGiaTriLonNhat($arr)
{
    $max = $arr[0];
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

function timGiaTriNhoNhat($arr)
{
    $min = $arr[0];
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

$arr = array(2, 9, 5, 7, 3, 1, 6);

$giaTriLonNhat = timGiaTriLonNhat($arr);

$giaTriNhoNhat = timGiaTriNhoNhat($arr);

echo "Giá trị lớn nhất trong mảng là: $giaTriLonNhat<br>";
echo "Giá trị nhỏ nhất trong mảng là: $giaTriNhoNhat";
?>
<?php echo "<br>" ?>

<?php
//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "Cau 6: ";
function sortAscending($array) {
    sort($array);
    return $array;
}
$array = array(5,8,2,3,9);
$result = sortAscending($array);
echo "Mảng sắp xếp theo thứ tự tăng dần: ";
foreach ($result as $value) {
    echo "$value ";
}
?>
<?php echo "<br>" ?>
<?php
//cau 7: tinh giai thua cua mot so nguyen duong
echo 'Cau 7: ';
$n = 4;
function calculateFact($n){
    $factorial = 1;
    for($i=1; $i<=$n; $i++){
        $factorial *=$i;
    }
    return $factorial;
}
echo 'Giai thua cua ' . $n . ' la '. calculateFact($n);
echo '<br>';

//cau 8: tim so nguyen to trong khoang cho truoc
echo 'Cau 8: ';
function checkPrime($n){
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
     return true;
}
function showPrime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(checkPrime($i))
            echo $i. ' ';
     }
}
$a = 30;
$b = 90;
echo 'So nguyen to trong khoang '.$a. ' den '. $b. ' la: ';
showPrime($a, $b);
echo '<br>';

//cau 9: tinh tong mang
echo 'Cau 9: ';
function sumArr($arr){
    $sum=0;
    foreach($arr as $arr){
        $sum += $arr;
    }return $sum;
}
$arr =[1,6,3,2];
echo 'Tong: '.sumArr($arr);
echo '<br>';
?>
<?php
//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. VD:0,1,1,2,3,5,8,13,...
echo "Cau 10: ";
function fibonacci($n) {
    if($n == 0) {
        return 0;
    } elseif($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

function print_fibonacci($start, $end) {
    for($i = $start; $i <= $end; $i++) {
        echo fibonacci($i) . " ";
    }
}

$start = 0;
$end = 10;
echo "Các số Fibonacci từ $start đến $end là: ";
print_fibonacci($start, $end);
?>
<?php echo "<br>" ?>

<?php
//11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. VD: 371 = (3 * 3 * 3) + (7 * 7 * 7) + (1 * 1 * 1)
echo "Cau 11: ";
function is_armstrong($num) {
    $sum = 0;
    $temp = (string)$num;
    $length = strlen($temp);

    for($i = 0; $i < $length; $i++) {
        $digit = $temp[$i];
        $sum += pow($digit, $length);
    }

    if($sum == $num) {
        return true;
    } else {
        return false;
    }
}
$num = 371;
if(is_armstrong($num)) {
    echo "$num là số Armstrong.";
} else {
    echo "$num không phải là số Armstrong.";
}
?>
<?php echo "<br>" ?>

<?php
//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "Cau 12: ";
function insert_element($arr, $elem, $pos) {
    if($pos < 0 || $pos > count($arr)) {
        return "Vị trí không hợp lệ.";
    } else {
        array_splice($arr, $pos, 0, $elem);
        return $arr;
    }
}
$Arr = array(1, 2, 3, 5);
$newArr = insert_element($Arr, 6, 3);
print_r($newArr);
?>
<?php echo "<br>" ?>

<?php
//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo "Cau 13: ";
function remove_duplicates($arr) {
    return array_unique($arr);
}
$Arr = array(1, 2, 3, 3, 6, 5, 5);
$newArr = remove_duplicates($Arr);
print_r($newArr);
?>
<?php echo "<br>" ?>

<?php
//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "Cau 14: ";
function find_location($arr, $elem){
    $location = array_search($elem, $arr);
    if ($location === false){
        return "Không tìm thấy phần tử trong mảng."; 

    }
    else{
        return "Phần tử " . $elem . " được tìm thấy ở vị trí " . $location . "."; 
    }
}
$arr = array (2,4,6,7,3);
$elem = 6;
echo find_location($arr, $elem);
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để đảo ngược một chuỗi.
echo "Cau 15: ";
function reverseString($string) {
    $reversedString = "";

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}
$string = "Hello World";
$reversedString = reverseString($string);
echo "Chuỗi đảo ngược là: " . $reversedString;
?>
<?php echo "<br>" ?>

<?php
    // Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "Cau 16: ";
function countElements($array) {
    $count = 0;
    foreach ($array as $element) {
        $count++;
    }
    return $count;
}
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$elementCount = countElements($array);
echo "Số lượng phần tử trong mảng là: " . $elementCount;
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. Chuỗi đối xứng VD: MADAM
echo "Cau 17: ";
function isPalindrome($string) {
    $characters = str_split($string);
    $length = count($characters);
    $start = 0;
    $end = $length - 1;
    while ($start < $end) {
        if ($characters[$start] !== $characters[$end]) {
            return false;
        }
        $start++;
        $end--;
    }

    return true;
}
$string = "madam";
if (isPalindrome($string)) {
    echo "Chuỗi là Palindrome";
} else {
    echo "Chuỗi không là Palindrome";
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "Cau 18: ";
function countOccurrences($array, $element) {
    $count = 0;
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }

    return $count;
}
$array = [1, 2, 3, 4, 1, 2, 1];
$element = 1;
$occurrenceCount = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử {$element} trong mảng là: " . $occurrenceCount;
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. Giảm dần dùng hàm rsort, tăng dần dùng hàm sort
echo " Cau 19: ";
function customSortDesc($arr)
{
    $length = count($arr);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($arr[$j] > $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    return $arr;
}
$array = [5, 2, 8, 1, 9];
$sortedArray = customSortDesc($array);
print_r($sortedArray);
?>
<?php echo "<br>" ?>
<?php
//cau 20: them vao dau chuoi
echo 'Cau 20: ';
function addElement($array, $element, $position) {
   if ($position == "end") {
       array_push($array, $element);
   } else if ($position == "begin") {
       array_unshift($array, $element);
   }return $array;
}
$array = array( "H", "U", "O", "N", "G");
$element = "T";
$position = "begin"; // "end"
$new_array = addElement($array, $element, $position);
print_r($new_array);
echo '<br>';

//cau 21: tim so lon thu hai trong mang
echo 'Cau 21: ';
function secondLargest($array) {
   $uniquearray = array_unique($array);
   rsort($uniquearray);
   return $uniquearray[1];
}
$array = [1,6,9,10,2,3];
$secondlargest = secondLargest($array);
echo "So lon thu hai trong mang la:  " . $secondlargest. '<br>';
//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "Cau 22: ";
function gcd($a, $b) {
  if ($b == 0) {
    return $a;
  } else {
    return gcd($b, $a % $b);
  }
}

function lcm($a, $b) {
  return ($a * $b) / gcd($a, $b);
}
$a = 9;
$b = 12;

//Tìm ước số chung lớn nhất
$gcd = gcd($a, $b);
echo "Ước số chung lớn nhất của " . $a . " và " . $b . " là: " . $gcd . "<br>";

// Tìm bội số chung nhỏ nhất
$lcm = lcm($a, $b);
echo "Bội số chung nhỏ nhất của " . $a . " và " . $b . " là: " . $lcm;
?>
<?php echo "<br>" ?>

<?php
// 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. Tổng các ước thực sự của a((trừ a)) bằng a thì a là số hoàn hảo
echo "Cau 23: ";
function isPerfect($num) {
    $sum = 0;
    
    for ($i = 1; $i < $num; $i++) {
      if ($num % $i == 0) {
        $sum += $i;
      }
    }
    
    if ($sum == $num) {
      return true;
    } else {
      return false;
    }
  }
  $num = 6;
if (isPerfect($num)) {
  echo $num . ' là số hoàn hảo';
} else {
  echo $num . ' không phải là số hoàn hảo';
}
?>
<?php echo "<br>" ?>

<?php
//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo "Cau 24: ";
function largest_odd_number($arr) {
    $largestOdd = -1;
    
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] % 2 == 1 && $arr[$i] > $largestOdd) {
        $largestOdd = $arr[$i];
      }
    }
    
    return $largestOdd;
  }
  $arr = array(3,5,7,2,8,4);
$largestOddNumber = largest_odd_number($arr);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;
?>
<?php echo "<br>" ?>

<?php
//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "Cau 25: ";
function is_prime($number) {
    if ($number <= 1)
        return false;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0)
            return false;
    }

    return true;
}
$number = 23;

if (is_prime($number))
    echo "$number là số nguyên tố";
else
    echo "$number không phải là số nguyên tố";
?>
<?php echo "<br>" ?>

<?php
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo "Cau 26: ";
function largest_positive_number($arr) {
    $largestPositive = -1;
    
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] > $largestPositive && $arr[$i] > 0) {
        $largestPositive = $arr[$i];
      }
    }
    return $largestPositive;
}
$arr = array(-5,6,2,-4,9);
$largestPositiveNumber = largest_positive_number($arr);
if($largestPositiveNumber == -1) {
    echo "Không tìm thấy số dương nào trong mảng";
} else {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositiveNumber;
} 
?>
<?php echo "<br>" ?>

<?php
//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo "Cau 27: ";
function largest_negative_number($arr) {
    $largestNegative = NULL;
    
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < 0 && ($largestNegative == NULL || $arr[$i] > $largestNegative)) {
            $largestNegative = $arr[$i];
        }
    }
    
    return $largestNegative;
}
$arr = array(5,-6,3,7,-3);
$largestNegativeNumber = largest_negative_number($arr);
// In số âm lớn nhất ra màn hình
if ($largestNegativeNumber != NULL) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegativeNumber;
} else {
    echo "Không có số âm nào trong mảng.";
}
?>
<?php echo "<br>" ?>

<?php
//28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
echo " Cau 28: ";
function sum_odd_numbers($n) {
	$sum = 0;
	for ($i = 1; $i <= $n; $i++) {
		if ($i % 2 != 0) {
			$sum += $i;
		}
	}
	return $sum;
}
$n = 10;
$sum = sum_odd_numbers($n);
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;
?>
<?php echo "<br>" ?>

<?php
//29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo "Cau 29: ";
function find_perfect_squares($start, $end){
    $perfect_squares = array(); 
    for($i = $start; $i <= $end; $i++){
        if(floor(sqrt($i)) == sqrt($i)){ // kiểm tra nếu $i là số chính phương
            array_push($perfect_squares, $i); // thêm $i vào mảng số chính phương
        }
    }
    return $perfect_squares;
}
$start = 1;
$end = 20;
print_r(find_perfect_squares($start, $end)); 
?>
<?php echo "<br>" ?>

<?php
//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo "Cau 30: ";
function isSubstring($string, $substring) {
  	if (strpos($string, $substring) !== false) {
    	return true;
  	} else {
    	return false;
  	}
}
$string = "Hello World";
$substring = "World";
if (isSubstring($string, $substring)) {
    echo "Chuỗi '$substring' là chuỗi con của chuỗi '$string'";
} else {
    echo "Chuỗi '$substring' không phải là chuỗi con của chuỗi '$string'";
}
?>