<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>tugas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
    <script src="https://kit.fontawesome.com/1f4332e1b8.js" crossorigin="anonymous"></script>
</head>

<body>
  
<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Feedback</h3>
    <hr>
    <form name="frm" method="post" action="save.php">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="submit" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  
</div>

<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-15">

				<div class="card">
					<div class="card-header">

<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-15">

				<div class="card">
					<div class="card-header">
						<h4>Recent Question</h4>
					</div>


					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Question</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
              <?php 
								$con = mysqli_connect("localhost","root","","tugas");

								$query = "SELECT * FROM discussion";
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $row)
                                    {
                                    ?>
                                    <tr>
										<td><?= $row['student']; ?></td>
										<td><?= $row['post']; ?></td>
										<td><?= $row['date']; ?></td>
								    </tr>
                                    <?php
									}
								        } 
								        else {
									            echo "No Record Found";
								             } 
							        ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
        </div>

<br>
<br>
<br>
<br>


    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">


<!-- footer class="footer"> -->
                    <!-- <div class="footer-box">
                        <div class="f-row">
                            <div class="footer-col">
                                <h4>company</h4>
                                <ul>
                                    <li><a href="#">about us</a></li>
                                    <li><a href="#">our services</a></li>
                                    <li><a href="#">privacy policy</a></li>
                                    <li><a href="#">affiliate program</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>get help</h4>
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">shipping</a></li>
                                    <li><a href="#">returns</a></li>
                                    <li><a href="#">order status</a></li>
                                    <li><a href="#">payment options</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>More</h4>
                                <ul>
                                    <li><a href="#">Portofolio</a></li>
                                    <li><a href="#">About Me</a></li>
                                    <li><a href="#">Gallery</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>follow us</h4>
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </footer> -->

<!-- <div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>          
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record"> 
    
    //   include 'conn.php';

    //   $select ="SELECT parent_comment, student, post, date from discussion";
    //   $result = $conn-> query($select);
    //   while ($row = $result->fetch_assoc()) {
    //   }
    // if($result-> num_rows > 0){
    //   while ($row = $result->fetch_assoc()){
    //     echo "<tr><td>". "</td><td>". "<tr><td>". $row['parent_comment'] ."</td><td>". "<tr><td>". $row['post']."</td><td>". "<tr><td>".$row['date'] ."</td><td>";
    //   }
    //   echo "</table>";
    // }
    // else {
    //   echo "0 result";
    // }

    // $conn-> close();
  
		
	  </tbody>
	</table>
  </div>
</div> -->
          <!-- </div>
</div> -->


                        
</body>

</html>
        
