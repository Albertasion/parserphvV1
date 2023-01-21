<?php
include_once 'functions.php';
require 'phpQuery.php';
// require 'config.php';

?>

<form action="deltable.php" method="POST">
  <input name="droptable" type = "submit" value= "Очістити базу"/>
</form> 
<?php


// $query_create_table = "CREATE TABLE detali.detalimenu (id INT NOT NULL AUTO_INCREMENT , menulinks TEXT NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB";
// $result3 = mysqli_query($conn, $query_create_table);

$request = requests('https://detali.org.ua/uk/');
$output = phpQuery::newDocument($request);
$menu = $output->find('.cbp-vertical-on-top li a');
foreach ($menu as $key => $value){
  $pq = pq($value);
  $src_menu[] = $pq->attr("href");
}
//перевіряемо уникальність посилань
$src_menu_formated = array_diff($src_menu, array('', NULL, false));




// foreach ($src_menu as $value) {
//   if ($value == 'https://detali.org.ua/uk/260-schponki-i-stopornye-kolca') {
//     break;   
//   }  
// // echo 'ETO menu_link---'.$value.'</br>';    
// $request_menus = requests($value);
// $output = phpQuery::newDocument($request_menus);
// $submenu = $output->find('.subcategory-image a');
// foreach ($submenu as $key =>$value){
//   $pq = pq($value);
//   $src_submenu[] = $pq->attr("href");
// }
// }
// format($src_submenu);


//Заносимо в базу основни посилання
// foreach ($src_menu_formated as $link) { 
//   echo $link;
//     $query = "INSERT INTO detalimenu (id, menulinks) VALUES (NULL, '$link')";
//     $result = mysqli_query($conn, $query);
// }





// mysqli_close($conn);


//  foreach ($menu as $link) {
//      $pqlink = pq($link);
//      $src_menu[] = $pqlink->attr("href");
//      }
 




//  $menu = $pq->find(".cbp-hrmenu-tab");
//  $menu_a = $menu->find("a");
//  foreach ($menu_a as $link) {
//    $pqlink = pq($link);
//    $src_menu[] = $pqlink->attr("href");
//    }
// format($src_menu);
//cоздаем массив cсилок главного меню
// die();
// foreach ($src_menu as $link) {
//   $start=0;
//   $end=3;
//   if ($start<$end){
//     $ch1 = curl_init($link);
//  curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
//  $output1 = curl_exec($ch1);
//  $doc1= phpQuery::newDocument($output1);
//     echo $doc1;
    
// }
// $start++;
// }

  
// foreach ($links as $link) {

//   $pqLink = pq($link); //pq делает объект phpQuery

//   $text[] = $pqLink->html();
//   $href[] = $pqLink->attr("href");
// }

// format($text);
// format($href);