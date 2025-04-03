<?php
$servername = "localhost";
$username = "root";      // Default XAMPP username
$password = "";          // Default XAMPP password (empty)
$dbname = "project";     // Your database name

// Create connection (Object-Oriented style)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully (OO style)<br>";

// Example query
$sql = "SELECT * FROM news";
$result = $conn->query($sql);

$news = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

           

    	 $id =  $row['id'];
    	 $brandName =  $row['brand'];
    	 $ad_type =  $row['ad_type'];
    	 $img =  $row['img'];
    	 $size =  $row['size'];
    	 $position =  $row['position'];
    	 $appearence =  $row['appearence'];
    	 $price =  $row['price'];
    	 $ad_unit =  $row['ad_unit'];
    	 $cashType =  $row['cashType'];
    	 $category =  $row['category'];
    	 $placement_type =  $row['placement_type'];
        

        $news  .= 	"<div class=\"col-md-3 col-6 col-sm-2\" style = 'margin-bottom:5%;'>

    				<div class=\"card\">

    					<div class=\"image-container\">

    						<div class=\"first\">
    							
    							<div class=\"d-flex justify-content-between align-items-center\">

    							<span class=\"discount\" style = 'font-size:0.8rem;'>$brandName</span>
    							<span class=\"wishlist\"><i class=\"fa fa-heart-o\"></i></span>
    							

    						    </div>
    						</div>

    						<img src=\"https://thetownofcicero.com/wp-content/uploads/2020/11/600x600.png\" class=\"img-fluid rounded thumbnail-image\">
    						

    					</div>


    					<div class=\"product-detail-container p-2\">

    							<div class=\"d-flex justify-content-between align-items-center\">

    								<h5 class=\"dress-name\">$category</h5>
                                  

    								<div class=\"d-flex flex-column mb-2\">

    									<span class=\"new-price\">$price</span>
    									<small class=\"old-price text-right\">$cashType</small>
    								</div>

    							</div>


    							<div class=\"d-flex justify-content-between align-items-center pt-1\">

    								<div class=\" d-flex \" style = \"font-size:12px\">
                                          Adv Size: $size, $position, $category
    									

    								</div>

    								
 
    							</div>


    							<div class=\"d-flex justify-content-between align-items-center pt-1\">
    								<div>
    									<i class=\"fa fa-star-o rating-star\"></i>
    									<span class=\"rating-number\">4.8</span>
    								</div>

    								<span class=\"buy\">Booking +</span>
    								
    							</div>

    						

    					</div>
    					
    				</div>


    				<div class=\"mt-3\">
    					<div class=\"card voutchers\">

    						<div class=\"voutcher-divider\">

    							<div class=\"voutcher-left text-center\">
    								<span class=\"voutcher-name\">Color</span>
    								<h5 class=\"voutcher-code\"># $appearence</h5>
    								
    							</div>
    							<div class=\"voutcher-right text-center border-left\" type=\"button\" onClick = bookNow('$id')	>
    								<h5 class=\"discount-percent\">20%</h5>
    								<span class=\"off\">Booking</span>
    								
    							</div>
    								
    						</div>
    						
    					</div>
    					
    				</div>

    		</div>


           <input type=\"text\" id=\"brandName\" placeholder=\"Name\" value = \"$brandName\" hidden>
        

    		";

    }
} 
// End Query


// Booking count
$sql_badge = "SELECT COUNT(*) as c FROM booking";
$result_badge = $conn->query($sql_badge);

$result_badge_count = '';
if ($result_badge->num_rows > 0) {
    while($row = $result_badge->fetch_assoc()) {

     $result_badge_count .=  $row['c'];

    }
} 



// Example query
$sql_book = "SELECT * FROM booking LEFT JOIN news ON booking.ads_id = news.id";
$result_book = $conn->query($sql_book);


$book = '';
$total = 0;
if ($result_book->num_rows > 0) {
    while($row = $result_book->fetch_assoc()) {

    	 $id =  $row['id'];
    	 $brandName =  $row['brand'];
    	 $ads_id =  $row['ads_id'];
    	 $ad_type =  $row['ad_type'];
    	 $img =  $row['img'];
    	 $size =  $row['size'];
    	 $position =  $row['position'];
    	 $appearence =  $row['appearence'];
    	 $price =  $row['price'];
    	 $ad_unit =  $row['ad_unit'];
    	 $cashType =  $row['cashType'];
    	 $category =  $row['category'];
    	 $placement_type =  $row['placement_type'];


    	
         
         
         if ((int)$price !== 0) {
         	# code...

         	$numeric_value = (float) str_replace(',', '', $price);
         	  $total += $numeric_value;
         }
   
        $book  .= 	"<li class=\"cart_item clearfix\">

                                  
                               
                                 <div class=\"cart_item_image\"><img  src=\"https://thetownofcicero.com/wp-content/uploads/2020/11/600x600.png\" style = \"width:150px\" ></div>


                                 <div class=\"cart_item_info d-flex flex-md-row flex-column justify-content-between\">
                                     <div class=\"cart_item_name cart_info_col\">
                                         <div class=\"cart_item_title\">Name</div>
                                         <div class=\"cart_item_text\">$brandName</div>
                                     </div>
                                     <div class=\"cart_item_color cart_info_col\">
                                         <div class=\"cart_item_title\">Color</div>
                                         <div class=\"cart_item_text\"><span style=\"background-color:#999999;\"></span> $appearence</div>
                                     </div>
                                     <div class=\"cart_item_quantity cart_info_col\">
                                         <div class=\"cart_item_title\">Size</div>
                                         <div class=\"cart_item_text\">$size</div>
                                     </div>
                                     
                                     <div class=\"cart_item_total cart_info_col\">
                                         <div class=\"cart_item_title\">Total</div>
                                         <div class=\"cart_item_text\">$price</div>
                                     </div>
                                 </div>
                            </li>

    		";

    }
} 



// Example query
$sql_book = "SELECT * FROM booking LEFT JOIN news ON booking.ads_id = news.id";
$result_invoice = $conn->query($sql_book);


$invoice = '';
$total = 0;
if ($result_invoice->num_rows > 0) {
    while($row = $result_invoice->fetch_assoc()) {

    	 $id =  $row['id'];
    	 $brandName =  $row['brand'];
    	 $ads_id =  $row['ads_id'];
    	 $ad_type =  $row['ad_type'];
    	 $img =  $row['img'];
    	 $size =  $row['size'];
    	 $position =  $row['position'];
    	 $appearence =  $row['appearence'];
    	 $price =  $row['price'];
    	 $ad_unit =  $row['ad_unit'];
    	 $cashType =  $row['cashType'];
    	 $category =  $row['category'];
    	 $placement_type =  $row['placement_type'];


    	
         
         
         if ((int)$price !== 0) {
         	# code...

         	$numeric_value = (float) str_replace(',', '', $price);
         	  $total += $numeric_value;
         }
   
        $invoice  .= 	" <tr>
                    <td>$brandName</td>
                    <td>$appearence</td>
                    <td>$size</td>
                    <td>$position</td>
                    <td>$price Tsh</td>
                </tr>

    		";

    }
} 

?>