<?php
session_start();
include "db.php";
if (isset($_POST["category"])) {
    $category_query = "select * from categories";
    $run_query = mysqli_query($con, $category_query);
    echo "<div class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Categories</h4></a></li>";
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $cid = $row['cat_id'];
            $cat_name = $row["cat_title"];
            echo "<li><a href='#' class='category' cid='$cid'>$cat_name</a> </li>";
        }
        echo "</div>";
    }
}

if (isset($_POST["brand"])) {
    $brand_query = "select * from brands";
    $run_query = mysqli_query($con, $brand_query);
    echo "<div class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Brands</h4></a></li>";
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $brand_id = $row['brand_id'];
            $brand_name = $row["brand_title"];
            echo "<li><a href='#' bid='$brand_id' class='selectBrand'>$brand_name</a> </li>";
        }
        echo "</div>";
    }
}

if (isset($_POST["page"])){
    $sql="select * from products";
    $run_query=mysqli_query($con,$sql);
    $count=mysqli_num_rows($run_query);
    $pageno=ceil($count/9);
    for ($i=1;$i<=$pageno;$i++){
        echo "<li><a href='#' page='$i' id='page'>$i</a> </li>";
    }
}

if (isset($_POST["getProduct"])){
    $limit=9;
    if (isset($_POST["setPage"])){
       $pageno= $_POST["pageNumber"];
       $start=($pageno * $limit)-$limit;
    }else{
        $start=0;
    }
    $product_query="select * from products LIMIT $start,$limit";
    $run_query=mysqli_query($con,$product_query);
    if (mysqli_num_rows($run_query)>0){
        while ($row=mysqli_fetch_array($run_query)){
            $pro_id=$row['product_id'];
            $pro_cat=$row['cat_id'];
            $pro_brand=$row['brand_id'];
            $pro_title=$row['product_title'];
            $pro_price=$row['product_price'];
            $pro_image=$row['product_image'];
            echo "      <a href='product.php'> <div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'>$pro_title</div>
                            <div class='panel-body'>
                                <img src='admin/img/$pro_image' height='150px' width='150px' align='center'>
                            </div>
                            <div class='panel-heading'>
                               Rs.$pro_price.00
                                <button pid='$pro_id' style='float:right;'  id='product' class='btn btn-danger btn-xs'>Add To Cart</button>
                            </div>
                        </div>
                    </div></a>";
        }
    }
}

if (isset($_POST['get_selected_Category']) || isset($_POST['selectBrand']) ||  isset($_POST['search'])){
    if(isset($_POST['get_selected_Category'])){
        $id=$_POST['cat_id'];
        $sql="select * from products where cat_id='$id'";
    }else if(isset($_POST['selectBrand'])){
        $id=$_POST['brand_id'];
        $sql="select * from products where brand_id='$id'";
    }else{
        $keyword=$_POST['keyword'];
        $sql="select * from products where product_keywords like '%$keyword%'";
    }
$run_query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run_query)){
    $pro_id=$row['product_id'];
    $pro_cat=$row['cat_id'];
    $pro_brand=$row['brand_id'];
    $pro_title=$row['product_title'];
    $pro_price=$row['product_price'];
    $pro_image=$row['product_image'];
    echo "      <div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'>$pro_title</div>
                            <div class='panel-body'>
                                <img src='img/$pro_image' width='220px' height='250px;'>
                            </div>
                            <div class='panel-heading'>
                               Rs.$pro_price.00
                                <button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>Add To Cart</button>
                            </div>
                        </div>
                    </div>";
}
}

if (isset($_POST['addToProduct'])){
    if (isset($_SESSION["uid"])){
        $p_id=$_POST["proId"];
        $user_id=$_SESSION["uid"];
        $sql="select * from cart where p_id='$p_id' AND user_id='$user_id'";
        $run_query=mysqli_query($con,$sql);
        $count=mysqli_num_rows($run_query);
        if ($count>0){
            echo "<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Product is already added into the cart Continue Shopping..!</b>
</div>";
        }else{
            $sql="select * from products WHERE product_id='$p_id'";
            $run_query=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($run_query);
            $id=$row["product_id"];
            $pro_name=$row["product_title"];
            $pro_image=$row["product_image"];
            $pro_price=$row["product_price"];
            $sql="INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";
            if(mysqli_query($con,$sql)){
                echo "<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Product is Added..!</b>
</div>";
            }
        }
    }else{
        echo "<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Sorry..! go and Sign Up First then you can add a product to your cart..!</b>
</div>";
    }
}

if (isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])){
    $uid=$_SESSION["uid"];
    $sql="select * from cart WHERE user_id='$uid'";
    $run_query=mysqli_query($con,$sql);
    $count=mysqli_num_rows($run_query);
    if ($count>0){
        $no=1;
        $total_amt=0;
        while ($row=mysqli_fetch_array($run_query)){
            $id=$row["id"];
            $pro_id=$row['p_id'];
            $pro_name=$row['product_title'];
            $pro_image=$row['product_image'];
            $qty=$row["qty"];
            $pro_price=$row['price'];
            $total=$row["total_amount"];
            $price_array=array($total);
            $total_sum=array_sum($price_array);
            $total_amt=$total_amt+$total_sum;
            setcookie("ta",$total_amt,strtotime("+1 day"),"/","","",true);
            if (isset($_POST["get_cart_product"])){
                echo "<div class='row'>
                                <div class='col-md-3'>$no</div>
                                <div class='col-md-3'><img src='img/$pro_image' width='60px' height='50px'> </div>
                                <div class='col-md-3'>$pro_name</div>
                                <div class='col-md-3'>Rs.$pro_price.00</div>
                            </div>";
                $no=$no+1;
            }
            else{
                echo "<div class='row'>
                        <div class='col-md-2'>
                            <div class='btn-group'>
                                <a href='#' remove_id='$pro_id' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
                                <a href='#' update_id='$pro_id'class='btn btn-primary update'><span class='glyphicon glyphicon-ok-sign'></span></a>
                            </div>
                        </div>
                        <div class='col-md-2'><img src='img/$pro_image' width='60px' height='50px'></div>
                        <div class='col-md-2'>$pro_name</div>
                        <div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty'></div>
                        <div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$pro_price' disabled></div>
                        <div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total' disabled></div>
                    </div>";
            }
        }
        if (isset($_POST["cart_checkout"])){
            echo "<div class='row'>
                        <div class='col-md-8'></div>
                        <div class='col-md-4'>
                            <h3>Total Price : $total_amt</h3>
                        </div>";
        }
        echo '
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="shoppingcart@48gautam.com">
  <input type="hidden" name="upload" value="1">';

        $x=0;
        $uid=$_SESSION["uid"];
        $sql="select * from cart where user_id='$uid'";
        $run_query=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($run_query)) {
            $x++;

            echo '<input type="hidden" name="item_name_'.$x.'" value="'.$row["product_title"].'">
  <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
  <input type="hidden" name="amount_'.$x.'" value="'.$row["price"].'">
        <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';
        }
  echo '
  
<input style="float: right;margin-right: 100px;width: 150px" type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
</form>';

    }
}

if (isset($_POST["cart_count"]) AND isset($_SESSION["uid"])){
    $uid=$_SESSION["uid"];
    $sql="select * from cart WHERE user_id='$uid'";
    $run_query=mysqli_query($con,$sql);
    echo mysqli_num_rows($run_query);
}
if (isset($_POST["removedFromCart"])){
    $pid=$_POST["removeId"];
    $uid=$_SESSION["uid"];
    $sql="delete from cart where user_id='$uid' AND p_id='$pid'";
    $run_query=mysqli_query($con,$sql);
    if ($run_query){
        echo "<div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Product is removed from Cart..!</b>
</div>";
    }
}

if (isset($_POST["updateProduct"])){
    $uid=$_SESSION["uid"];
    $pid=$_POST["updateId"];
    $qty=$_POST["qty"];
    $price=$_POST["price"];
    $total=$_POST["total"];
    mysqli_query($con,"update products set quantity=GREATEST(0,quantity-$qty) WHERE product_id='$pid'");
    $sql="update cart set qty='$qty',price='$price',total_amount='$total' WHERE user_id='$uid' AND p_id='$pid'";
    $run_query=mysqli_query($con,$sql);
     if ($run_query) {
        echo "<div class='alert alert-success'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&ti</a><b> Product is updated..!</b>
</div>";
    }
    if ($qty>2){
        echo "<div class='alert alert-warning'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Product out of Stock..!</b>
</div>";
    }
}

?>
