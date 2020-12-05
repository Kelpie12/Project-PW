<?php
include("./public/connection.php");

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM items WHERE status = '1'
 ";
 if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
 {
  $query .= "
   AND price_item BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
  ";
 }
 if(isset($_POST["category"]))
 {
    $cat = array();
    $cat = $_POST["category"];
  $category_filter = implode("','", $_POST["category"]);
  $query .= "
   AND category_id_item IN('".$category_filter."')
  ";
 }

 $result = $con->query($query)->fetch_all(MYSQLI_ASSOC);
 foreach ($result as $element) {
    if ($element['status'] == 1) {

        echo'<div class="column"><div class="card ui fluid">';
        echo'<div class="blurring dimmable image" id="'.$element['id_item'].'">';
        echo'<div class="ui inverted dimmer">';
        echo'<div class="content">';
        echo'<div class="center">';
        echo'<div class="ui primary button">Check Details</div>';
        echo'</div></div></div>';
        echo'<img src="./assets/items/'.$element["image"].'.jpg">';
        echo'</div>';
        echo'<div class="content">';
        echo'<a class="header">'.$element["name_item"].'</a>';
        echo'<div class="meta">';
        echo'<span class="date" style="color:green;">Available</span></div></div>';
        echo'<div class="extra content"><a><i class="money icon"></i>';
        $priceres = number_format($element["price_item"],0,",",".");
        echo'Rp '.$priceres;
        echo'</a></div></div></div>';

        //     $card = ` <div class="card ui fluid">
        //     <div class="blurring dimmable image" id='`.$element['id_item'].`'>
        //         <div class="ui inverted dimmer">
        //             <div class="content">
        //                 <div class="center">
        //                     <div class="ui primary button">Check Details</div>
        //                 </div>
        //             </div>
        //         </div>
        //         <img src="./assets/items/`.$element['image'].`.jpg">
        //     </div>
        //     <div class="content">
        //         <a class="header">`.$element['name_item'].`</a>
        //         <div class="meta">
        //             <span class="date" style='color: green;'>Available</span>
        //         </div>
        //     </div>
        //     <div class="extra content">
        //         <a>
        //             <i class="money icon"></i>
        //             Rp `.$element['price_item'].`
        //         </a>
        //     </div>
        // </div>`;

        //     $cc = `<div class='column'>`.$card.`</div>`;
        // }
        // echo $cc;
 }
}
}
?>