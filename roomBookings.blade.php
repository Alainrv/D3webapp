<?php include("layout/header.php"); ?>

<div class="booking_wrapper">
	<div class="bookingHeader_wrapper">

		<div class="bookingHeader">
			<div class="headerText">
				Room Bookings
			</div>
			<a href="roomBookingStep1.html">
			<button class="booking-btn">
				<div class="horizontalLine"></div>
				<div class="verticalLine"></div>
			</button>
			</a>
		</div>
		<div class="bookingTabs">
			<div class="tab upcoming onSelect">UPCOMING</div><div class="tab history">HISTORY</div>
			<div class="selectBorder"></div>
		</div>
	</div>

	<div class="upcomingBox">
		<!-- new room booking 1 -->
		<div class="roomBooking">
			<div class="bookingTitle">
				<p>Maker Space Room</p>
			</div>
			<div class="bookingInfor">
				<div class="bookingDate">Monday April 18 2016</div>
	
				<div class="bookingTime">7pm</div>
				<div class="svg bookingClock"></div>
				<div class="bookingDuration">45 min</div>
				
		
				<div class="bookingEdit">
					<a class="edit" href="">Edit</a>
					<a class="cancel" href="">Cancel</a>
					<div class="svg toggleSign"></div>
				</div>
				<div class="toggleContent">
					<p>Room can fit up to 8 people sitting and can accomodate around 15 people standing.</p>
					<p class="equipment">This room is accomdated with</p>
					<ul>
						<li>projector with HDMI cable</li>
						<li>1 white board</li>
						<li>1 podium</li>
						<li>a sound system</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- new room booking 2 -->
		<div class="roomBooking">
			<div class="bookingTitle">
				<p>Maker Space Room</p>
			</div>
			<div class="bookingInfor">
				<div class="bookingDate">Monday April 18 2016</div>
	
				<div class="bookingTime">7pm</div>
				<div class="svg bookingClock"></div>
				<div class="bookingDuration">45 min</div>
				
		
				<div class="bookingEdit">
					<a class="edit" href="">Edit</a>
					<a class="cancel" href="">Cancel</a>
					<div class="svg toggleSign"></div>
				</div>
				<div class="toggleContent">
					<p>Room can fit up to 8 people sitting and can accomodate around 15 people standing.</p>
					<p class="equipment">This room is accomdated with</p>
					<ul>
						<li>projector with HDMI cable</li>
						<li>1 white board</li>
						<li>1 podium</li>
						<li>a sound system</li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- new room booking 2 -->
		<div class="roomBooking">
			<div class="bookingTitle">
				<p>Maker Space Room</p>
			</div>
			<div class="bookingInfor">
				<div class="bookingDate">Monday April 18 2016</div>
	
				<div class="bookingTime">7pm</div>
				<div class="svg bookingClock"></div>
				<div class="bookingDuration">45 min</div>
				
		
				<div class="bookingEdit">
					<a class="edit" href="">Edit</a>
					<a class="cancel" href="">Cancel</a>
					<div class="svg toggleSign"></div>
				</div>
				<div class="toggleContent">
					<p>Room can fit up to 8 people sitting and can accomodate around 15 people standing.</p>
					<p class="equipment">This room is accomdated with</p>
					<ul>
						<li>projector with HDMI cable</li>
						<li>1 white board</li>
						<li>1 podium</li>
						<li>a sound system</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="historyBox hideBox">

		<!-- old room booking 1 -->
		<div class="roomBooking">
			<div class="bookingTitle">
				<p>Class room</p>
			</div>
			<div class="bookingInfor">
				<div class="bookingDate">Monday April 18 2016</div>
	
				<div class="bookingTime">7pm</div>
				<div class="svg bookingClock"></div>
				<div class="bookingDuration">45 min</div>
				
		
				<div class="bookingEdit">
					<a class="edit" href="">Edit</a>
					<a class="cancel" href="">Cancel</a>
					<div class="svg toggleSign"></div>
				</div>
				<div class="toggleContent">
					<p>Room can fit up to 8 people sitting and can accomodate around 15 people standing.</p>
					<p class="equipment">This room is accomdated with</p>
					<ul>
						<li>projector with HDMI cable</li>
						<li>1 white board</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- old room booking 2 -->
		<div class="roomBooking">
			<div class="bookingTitle">
				<p>Class room</p>
			</div>
			<div class="bookingInfor">
				<div class="bookingDate">Monday April 18 2016</div>
	
				<div class="bookingTime">7pm</div>
				<div class="svg bookingClock"></div>
				<div class="bookingDuration">45 min</div>
				
		
				<div class="bookingEdit">
					<a class="edit" href="">Edit</a>
					<a class="cancel" href="">Cancel</a>
					<div class="svg toggleSign"></div>
				</div>
				<div class="toggleContent">
					<p>Room can fit up to 8 people sitting and can accomodate around 15 people standing.</p>
					<p class="equipment">This room is accomdated with</p>
					<ul>
						<li>projector with HDMI cable</li>
						<li>1 white board</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("layout/footerUser.php"); ?>

<script type="text/javascript">
	// hide history when laoding the page
	$(document).ready(function(){
		$(".historyBox").removeClass('hideBox');
	    $(".historyBox").hide();
	});
	// function to change the booking tabs and booking displays 
	// when click on tabs
	$(".tab").click(function(){
		// remove onSelect class from another tab
		$('.onSelect').removeClass("onSelect");
		// add onSelect class to the clicked tab
    	$(this).addClass('onSelect');
    	// change the bottom border position
    	// assign bot border to a variable botBor
    	var $botBor = $(this).closest('.bookingTabs').find('.selectBorder');

    	// assign each booking box to a variable
    	var $upcoming = $('.upcomingBox');
    	var $history = $('.historyBox');
    	
    	// if the clicked tab is at left, move the botBor to left, 
    	// and show upcoming box
    	// if not move to right, and show history box
    	if($(this).hasClass("upcoming")){
    		$botBor.css("left",'0%');
    		$history.hide();
    		$upcoming.show();
    		$upcoming.css('display','');

    	} else {
    		$botBor.css("left", "50%");
    		$upcoming.hide();
    		$history.show();
    		$history.css('display','');
    	};
	});


	$(".toggleSign").click(function (){
		// assign booking content to a variable
		$content = $(this).closest(".bookingInfor").find('.toggleContent');
		// if content is hiddent, show up arrow. If not show down arrwo
	    if($content.css("display")=="none"){
			$(this).css("transform","rotateX(180deg)");	
		} 
	    else{
    		$(this).css("transform","rotateX(0deg)");
	    }
	    // toggle the content on click
	    $content.slideToggle(500)
	});
</script>



</body>

</html>