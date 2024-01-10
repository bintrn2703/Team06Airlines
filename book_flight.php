<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';                      
?> 	
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">
<style>
table {
  background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
    font-family :'product sans' !important;
	color:#424242 ;
	font-size:40px !important;
	margin-top:20px;
	text-align:center;
}
body {
  background: #faecd4;

}
th {
  font-size: 22px;
  /* font-family: 'Courier New', Courier, monospace; */
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: bold;
  /* color: #3931af; */
  color: #424242;
}

.footer-w3l {
		margin: 50px 0 15px 0;
	}

.footer-w3l p {
  font-size: 14px;
  text-align: center;
  color: #000;
  line-height: 27px;
}

.footer-w3l p a {
  color: #000;
}

.footer-w3l p a:hover {
  text-decoration: underline;
}

.footer {
  margin-top: 100px;
  background-color: #615c5c;
  width: 100vw;
  height: 200px;
  position: relative;
}

.footer .row {
  display: flex;  
  justify-content: space-between;
}

.footer .title {
  font-size: 3.6rem;
  font-weight: 600;
  color: #fff;
  margin-left: 50px;
  margin-top: 36px;
}

.footer .icon-group {
  display: flex;
  margin-right: 75px;
  margin-top: 50px;
  gap: 30px;
}

.footer .desc {
		color: #9d9fa3;
		font-size: 11px;
		margin-top: 16px;
		line-height: 1.2;
    text-align: center;
	}

</style>
    <main>
        <?php if(isset($_POST['search_but'])) { 
            $dep_date = $_POST['dep_date'];                        
            $ret_date = $_POST['ret_date'];  
            $dep_city = $_POST['dep_city'];  
            $arr_city = $_POST['arr_city'];     
            $type = $_POST['type'];
            $f_class = $_POST['f_class'];
            $passengers = $_POST['passengers'];
            if($dep_city === $arr_city){
              header('Location: index.php?error=sameval');
              exit();    
            }
            if($dep_city === '0') {
              header('Location: index.php?error=seldep');
              exit(); 
            }
            if($arr_city === '0') {
              header('Location: index.php?error=selarr');
              exit();              
            }
            ?>
          <div class="container-md mt-2">
            <h1 class="display-4 text-center text-dark"
              >FLIGHTS FROM: <br> <?php echo $dep_city; ?> 
                 to <?php echo $arr_city; ?> </h1>
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr class="text-center">
                  <th scope="col">Airline</th>
                  <th scope="col">Departure</th>
                  <th scope="col">Arrival</th>
                  <th scope="col">Status</th>
                  <th scope="col">Fare</th>
                  <th scope="col">Buy</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = 'SELECT * FROM flight WHERE source=? AND Destination =? AND DATE(departure)=? ORDER BY Price';
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);                
                mysqli_stmt_bind_param($stmt,'sss',$dep_city,$arr_city,$dep_date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                  $price = (int)$row['Price']*(int)$passengers;
                  if($type === 'round') {
                    $price = $price*2;
                  }
                  if($f_class == 'B') {
                      $price += 0.5*$price;
                  }
                  if($row['status'] === '') {
                      $status = "Not yet Departed";
                      $alert = 'alert-primary';
                  } else if($row['status'] === 'dep') {
                      $status = "Departed";
                      $alert = 'alert-info';
                  } else if($row['status'] === 'issue') {
                      $status = "Delayed";
                      $alert = 'alert-danger';
                  } else if($row['status'] === 'arr') {
                      $status = "Arrived";
                      $alert = 'alert-success';
                  }                   
                  echo "
                  <tr class='text-center'>                  
                    <td>".$row['airline']."</td>
                    <td>".$row['departure']."</td>
                    <td>".$row['arrivale']."</td>
                    <td>
                      <div>
                          <div class='alert ".$alert." text-center mb-0 pt-1 pb-1' 
                              role='alert'>
                              ".$status."
                          </div>
                      </div>  
                    </td>                   
                    <td>$ ".$price."</td>
                    ";
                  if(isset($_SESSION['userId']) && ($row['status'] === '')) {   
                    echo " <td>
                    <form action='pass_form.php' method='post'>
                    <input name='flight_id' type='hidden' value=".$row['flight_id'].">
                      <input name='type' type='hidden' value=".$type.">
                      <input name='passengers' type='hidden' value=".$passengers.">
                      <input name='price' type='hidden' value=".$price.">
                      <input name='ret_date' type='hidden' value=".$ret_date.">
                      <input name='class' type='hidden' value=".$f_class.">
                      <button name='book_but' type='submit' 
                      class='btn btn-success mt-0'>
                      <div style=''>
                      <i class='fa fa-lg fa-check'></i>  
                      </div>
                    </button>
                    </form>
                    </td>                                                       
                    "; 
                  } elseif (isset($_SESSION['userId']) && ($row['status'] === 'dep' || $row['status'] === 'arr' || $row['status'] === 'issue') ) {
					          echo "<td>Not Available</td>";
				          } else {
                    echo "<td>Login to continue</td>";
                  }
                  echo '</tr> ';                 
                }
                ?>

              </tbody>
            </table>

          </div>
        <?php } ?>

    </main>
<?php subview('footer.php'); ?> 
<footer class="footer">
	<div class="row">
		<h1 class="title">Team06 Airlines</h1>
		<div class="icon-group">
			<img src="./assets/images/visa-pay-logo.svg" alt="" class="icon" />
			<img src="./assets/images/american-express-logo.svg" alt="" class="icon" />
			<img src="./assets/images/master-card-logo.svg" alt="" class="icon" />
			<img src="./assets/images/paypal-logo.svg" alt="" class="icon" />
		</div>
	</div>
	<div class="end">
		<p class="desc">
			© 2023 - Developed by Team06<br /><br />Đại học Tôn Đức Thắng - Lập Trình
			Web và Ứng Dụng<br /><br />Giấy chứng nhận đăng ký doanh nghiệp, mã
			số doanh nghiệp: 0100107518, đăng ký lần đầu ngày 30/6/2010, đăng ký
			thay đổi lần thứ 9 ngày 12/01/2022, cấp bởi Sở KHĐT thành phố Hồ Chí
			Minh.
		</p>
	</div>
</footer>