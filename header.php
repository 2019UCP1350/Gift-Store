<?php ini_set('display_errors', 1); ?>
<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left">
				  <ul>
					  <li>
                      <?php
					   if(isset($_SESSION["n"]))
			           {
						print"<li><i class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></i><a href='showcart.php'>Shopping Cart </a></li>";						   
					   
					   
						print"<li><a href='changepass.php'>Change Password</a></li>";
						
						print"<li><a href='orderhistory.php'>Order History </a></li>";	
						
						print "<li><i class='glyphicon glyphicon-log-out' aria-hidden='true'></i><a href='signout.php'>Logout</a></li>";
						
					   }
			          else
					   {
					   
					  
					     print "<li> <i class='glyphicon glyphicon-log-in' aria-hidden='true'></i><a href='login.php'>Login</a></li>";                      
					   print"<li><i class='glyphicon glyphicon-book' aria-hidden='true'></i><a href='signup.php'>Signup</a></li>";
					  }
					  ?>
					</ul>
				</div>
				<div class="header-grid-right"> 
				  <form id="form1" name="form1" method="post" action="">
				    <ul class="social-icons">
				      <table width="34%" border="0" align="right">
				        <tr>
				          <td width="42%"><label>
				            <input type="text" name="nm" id="nm" />
				            </label></td>
				          <td width="16%">&nbsp;</td>
				          &nbsp;&nbsp;&nbsp;
				          <td width="42%"><label>
				            <input type="submit" name="search" id="search" value="Search" class="btn1" />
				            </label>
                            <?php
                              if(isset($_POST["search"]))
							  {								  
								  $n=$_POST["nm"];
	                              
								  header("location:searchbyname.php?id=$n");
								 
							  }
							?></td>
			            </tr>
				        
			          </table>
			        </ul>
			      </form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left">
					<h1><a href="index.php">Gift Store <span>Shop anywhere</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									
										<div class="col-sm-6">
										  <?php
												   include_once("vars.php");
												   $conn=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($conn));
												   $qu="select * from addcat";
												   $res=mysqli_query($conn,$qu)or die(mysqli_error($conn));
												   while($ans=mysqli_fetch_array($res))
												   {
													   print"<li><a href='showsubcat.php?id=$ans[0]'>$ans[1]</a></li>";
												   }
										        ?>	
 									    </div>
										<div class="clearfix"></div>
							  </ul>
						  </li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-6">
											<ul class="multi-column-dropdown">
												
												<li><a href="searchbyprice.php">Search by Price</a></li>
												
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
                            <li><a href="aboutus.php">About us</a></li>
							<li><a href="contactus.php">Contact us</a></li>
							<li><a href="feedback.php">Feedback</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>