<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="{{ url('page/contact') }}">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{ url('page/terms-conditions') }}">Terms & Conditions</a></li>
								<li><a href="{{ url('page/privacy-policy') }}">Privacy Policy</a></li>
								<li><a href="{{ url('page/refund-policy') }}">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{ url('page/about-us') }}">About Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="javascript:void(0);" class="searchform" type="post">{{ csrf_field() }}
								<input onfocus="enableSubscriber();" onfocusout="checkSubscriber();" name="subscriber_email" id="subscriber_email" type="email" placeholder="Your email address" required="" />
								<button onclick="checkSubscriber(); addSubscriber();" id="btnSubmit" type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<div id="statusSubscribe" style="display: none;"></div>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->

	<script>
		function checkSubscriber(){
			var subscriber_email = $("#subscriber_email").val();
			$.ajax({
				type:'post',
				url:'/check-subscriber-email',
				data:{subscriber_email:subscriber_email},
				success:function(resp){
					if(resp=="exists"){
						/*alert("Subscriber email already exists");*/
						$("#statusSubscribe").show();
						$("#btnSubmit").hide();
						$("#statusSubscribe").html("<div style='margin-top:-10px;'>&nbsp;</div><font color='red'>Error: Subscriber email already exists!</font>");
					}

				},error:function(){
					alert("Error");
				}
			});
		}

		function addSubscriber(){
			var subscriber_email = $("#subscriber_email").val();
			$.ajax({
				type:'post',
				url:'/add-subscriber-email',
				data:{subscriber_email:subscriber_email},
				success:function(resp){
					if(resp=="exists"){
						/*alert("Subscriber email already exists");*/
						$("#statusSubscribe").show();
						$("#btnSubmit").hide();
						$("#statusSubscribe").html("<div style='margin-top:-10px;'>&nbsp;</div><font color='red'>Error: Subscriber email already exists!</font>");
					}else if(resp=="saved"){
						$("#statusSubscribe").show();
						$("#statusSubscribe").html("<div style='margin-top:-10px;'>&nbsp;</div><font color='green'>Success: Thanks for Subscribing!</font>");	
					}

				},error:function(){
					alert("Error");
				}
			});
		}

		function enableSubscriber(){
			$("#btnSubmit").show();	
			$("#statusSubscribe").hide();
		}
	</script>