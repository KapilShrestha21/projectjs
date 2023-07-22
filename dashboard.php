<?php
@include 'dbcon.php';
if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_img']['name'];
   $product_image_tmp_name = $_FILES['product_img']['tmp_name'];
   $product_image_folder = 'upload_image/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO product(product_name, product_price, product_img) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
         header("location:user.php");
      }else{
         $message[] = 'could not add the product';
      }
   }

};
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM product WHERE id = $id");
  header('location:dashboard.php');
};

?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./img/logo.png" alt="logo" />
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Customer</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Orders</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Messages</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Products</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">report_gmailerrorred</span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Product</h3>
                </a>
            </div>
        </aside>
        <!-------------- End of aside -------------->
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date" />
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$25,300</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="50" cy="50" r="40"></circle>
                            </svg>
                            <div class="number">
                                <p>80%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>

                <!-------------- End of sales -------------->

                <div class="expenses">
                    <span class="material-icons-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses</h3>
                            <h1>$20,300</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="50" cy="50" r="40"></circle>
                            </svg>
                            <div class="number">
                                <p>60%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-------------- End of expenses -------------->

                <div class="incomes">
                    <span class="material-icons-sharp">paid</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Income</h3>
                            <h1>$5,300</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="50" cy="50" r="40"></circle>
                            </svg>
                            <div class="number">
                                <p>30%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div>
            <!-------------- End of income -------------->

            <!-------------- End of insights ------------>
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!--     <td>Two Dog</td>
                            <td>8848</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td> -->
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!----------------- End of Main ------------------>
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="logout">
                    <a href="logout.php">Logout</a>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Kapil</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./img/people4.jpg" alt="photo" />
                    </div>
                </div>

            </div>
            <!------------------- End of Top ------------------->
            <div class="recents-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./img/people2.jpg" alt="photo2" />
                        </div>
                        <div class="message">
                            <p><b>Anjali Magar</b> receive her order of tree painting.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./img/people3.jpg" alt="photo2" />
                        </div>
                        <div class="message">
                            <p><b>Sagar Shrestha</b> receive his order of face painting.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./img/people1.jpg" alt="photo2" />
                        </div>
                        <div class="message">
                            <p>
                                <b>Sushmita Shrestha</b> receive her order of dog painting.
                            </p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!---------------------------- End of recent updates ------------------------>
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <div class="success">+42%</div>
                        <h3>3891</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-icons-sharp">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>OFFLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <div class="danger">-21%</div>
                        <h3>1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-icons-sharp">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>NEW COSTOMERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <div class="success">+32%</div>
                        <h3>891</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Add Product</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./orders.js"></script>
    <script src="./script.js"></script>
</body>

</html>