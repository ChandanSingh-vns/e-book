<?php 
require_once("config/connection.php");

$qur = "select * from book_records";
$rs = mysql_query($qur);

require_once("header.php");?>
<?php require_once("popup_login.php");?>	
	<!-- Responsive slider - START -->
	<div class="slider">
		<div class="">
			<div class="">
				<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
					<div class="slides" data-group="slides">						
						<ul>
							<li>
								<div class="slide-body" data-group="slide">
									<img src="img/3.jpg" alt="" class="img-responsive" >
								</div>					
							</li>
							<li>
								<div class="slide-body" data-group="slide">
									<img src="img/6.jpg" alt="" class="img-responsive" >
								</div>
							</li>
							<li>
								<div class="slide-body" data-group="slide">
									<img src="img/5.jpg" alt="" class="img-responsive" >									
								</div>
							</li>					
						</ul>
					</div>			   
					<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
					<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>		
				</div>
			</div>
		</div>
	</div>
    <!-- Responsive slider - END -->
 
	
		<div class="content">
			<h2><span>Read And Get Knowledge</span></h2>
			
		</div>
	<div class="breadcrumb">
		<h4>Latest Books</h4>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="boxs">
				<?php while($row = mysql_fetch_array($rs)){ ?>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.2s">
						<div class="align-center">
							<h4><?php echo $row['book_title'];?></h4>					
							<div>
							<img src="admin/books_images/<?php echo $row['book_image'];?>" height="300px">
							</div>
							<p>
							<button class="btn btn-primary read-book" book_cat= <?php echo $row['book_category']; ?> book-id=<?php echo $row['id']; ?> > Read Book</button>
							</p>
							<div class="ficon">
								<a href="#" alt=""><?php echo $row['author_name'];?></a> 
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
	<!--
	<div class="container">
		<div class="row">
			<div class="bg">				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<h4></h4>					
							<div>
								
							</div>
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="align-center">
							<h4>Hight Quality</h4>					
							<div class="icon">
								<i class="fa fa-laptop fa-3x"></i>
							</div>
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="align-center">
							<h4>Easy Customize</h4>					
							<div class="icon">
								<i class="fa fa-cloud fa-3x"></i>
							</div>
							<p>
							 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="breadcrumb">
		<h4>About Us</h4>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="">				
				<div class="col-md-7">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">						
						<img src="img/2.png" alt="" class="img-responsive">					
					</div>
				</div>
				<div class="col-md-5">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="list-group">
							<a href="#" class="list-group-item active">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
								</p>	
							</a>
							<div class="list-group-item">
								<h4 class="list-group-item-heading">Modern interface</h4>
								<p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
								</p>								
							</div>
							<div class="list-group-item">
								<h4 class="list-group-item-heading">Modern design</h4>
								<p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
								</p>								
							</div>
							<div class="list-group-item">
								<h4 class="list-group-item-heading">Easy customize</h4>
								<p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
								</p>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="">							
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="list-group">
							<a href="#" class="list-group-item active">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
								</p>
							</a>
							<div class="list-group-item">
								<h4 class="list-group-item-heading">Modern interface</h4>
								<p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
								</p>								
							</div>
							<div class="list-group-item">
								<h4 class="list-group-item-heading">Easy customize</h4>
								<p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
								</p>								
							</div>
							<div class="list-group-item">
								<h4 class="list-group-item-heading">Modern design</h4>
								<p class="list-group-item-text">praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
								</p>							
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="image">
						<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">						
							<img src="img/5.jpg" alt="" class="img-responsive">					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<hr>
	-->
	<!--start footer--> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$(".read-book").click(function(){
			var id = $(this).attr('book-id');
			var b_cat = $(this).attr('book_cat');
			var button = $(this);
			$.ajax({
				type : 'get',
				dataType : 'json',
				url : 'check_login.php?bookId='+id,
				success : function(data)
				{
					if(data.result == false)
					{
						$(".login-register-form").modal('show');
					}
					else
					{
						//alert("helooo");
						window.location = "readBook.php?bookId=" + b_cat;
					}
				}
				
			});
		});
	});
	</script>
	<?php require_once("footer.php"); ?>