<?php
session_start();
if(isset($_SESSION["cart"])){
    echo"<h1>ตะกร้าสินค้า</h1>";
    $total=0;
    echo "<table border=2px double><tr><th>ลำดับ</th><th>ID</th><th>Name</th><th>Price</th><th>Delete</th></tr>";
        for($i=0;$i<count($_SESSION["cart"]);$i++)
        {
          $item=$_SESSION["cart"][$i];
          echo "<tr><td>".($i+1)."</td>";
          echo "<td>".$item['ID']."</td>";
          echo "<td>".$item['Name']."</td>";
          echo "<td>".$item['Price']."</td>";
          echo "<td><a href='delcart.php?i=".$i."'>";
          echo "<font color='red'>X</font></a></td></tr>";
          $total+=$item['Price'];
        }
    echo "</table>";
    echo "<h1>ราคาสินค้า $total บาท</h1>";
?>
    <form action="order.php" method="post">
        <label for="FName">First name:</label><br>
        <input type="text" id="FName" name="FName" value=""><br>
        <label for="Lname">Last name:</label><br>
        <input type="text" id="Lname" name="Lname" value=""><br>
        <lable for="Address">Address:</label><br>
<textarea id="Address" name="Address"  rows="4" cols="50"></textarea><br>
        <lable for="Mobile">mobile no.:</label><br>
        <input type="text" id="Mobile" name="Mobile" value=""><br>
        <input type="submit" value="Submit">
        </form>
<?php
}
?>