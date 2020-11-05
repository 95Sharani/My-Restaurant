<?php  
 $connect = mysqli_connect("localhost", "root", "", "restaurent"); 
 session_start(); 
 $output = '';  
 $sql = "SELECT * FROM food ORDER BY id DESC where food.shop_name='".$_SESSION['shop_name']."'";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="80px">Id</th>  
                     <th width="150px">Item Name</th>  
                     <th width="150px">Price</th>  
                     <th width="150px">Image</th>  
                     <th width="150px">Delete</th>  
                </tr>';  
 //$rows = mysqli_num_rows($result);
 if($rows = mysqli_num_rows($result)>0)  
 { 
 $shop_name=$_SESSION['shop_name'];
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM food LIMIT $delete_records where food.shop_name='".$_SESSION['shop_name']."'";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  

                     <td class="item_name" data-id1="'.$row["id"].'" contenteditable>'.$row["item_name"].'</td>  
                     <td class="price" data-id2="'.$row["id"].'" contenteditable>'.$row["price"].'</td>  
                     <td class="image" data-id2="'.$row["id"].'" contenteditable>'.$row["image"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="item_name" contenteditable></td>  
                <td id="price" contenteditable></td>  
                <td id="image" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="item_name" contenteditable></td>  
					<td id="price" contenteditable></td>  
          <td id="image" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>