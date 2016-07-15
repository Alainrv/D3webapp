<<?php include("layout/header.php"); ?>

<form method="post">
<div class="booking_wrapper">
	<div class="roomHeader">
			<div class="title">
				Select your time preference
			</div>
			<div class="signs">
				<a href='roomBookingStep1.html'><div class="circle-active"></div></a>
				<a href='roomBookingStep2.html'><div class="circle-active"></div></a>
			</div>
	</div>
		
	<div class="input_form_create_meeting">
		<div class="calender_create_meeting">	
			<div class="svg chevronLeft"></div>	
			<input type="text" name="date" id="input_date" />	
			<div class="svg chevronRight"></div>
		</div>									
		<div class="centerTime">				
			<ul>
				<li><label for="time1">7:00 AM</label> <input type="radio" name="bookingTime" id="time1" value="7:00 AM"></li>
				<li><label for="time2">7:30 AM</label> <input type="radio" name="bookingTime" id="time2" value="7:30 AM"></li>
				<li><label for="time3">8:00 AM</label> <input type="radio" name="bookingTime" id="time3" value="8:00 AM"></li>
				<li><label for="time4">8:30 AM</label> <input type="radio" name="bookingTime" id="time4" value="8:30 AM"></li>
				<li><label for="time5">9:00 AM</label> <input type="radio" name="bookingTime" id="time5" value="9:00 AM"></li>
				<li><label for="time6">9:30 AM</label> <input type="radio" name="bookingTime" id="time6" value="9:30 AM"></li>
				<li><label for="time7">10:00 AM</label> <input type="radio" name="bookingTime" id="time7" value="10:00 AM"></li>
				<li><label for="time8">10:30 AM</label> <input type="radio" name="bookingTime" id="time8" value="10:30 AM"></li>
				<li><label for="time9">11:00 AM</label> <input type="radio" name="bookingTime" id="time9" value="11:00 AM"></li>
				<li><label for="time10">11:30 AM</label> <input type="radio" name="bookingTime" id="time10" value="11:30 AM"></li>
				<li><label for="time11">12:00 PM</label> <input type="radio" name="bookingTime" id="time11" value="12:00 PM"></li>
				<li><label for="time12">12:30 PM</label> <input type="radio" name="bookingTime" id="time12" value="12:30 PM"></li>
				<li><label for="time13">1:00 PM</label> <input type="radio" name="bookingTime" id="time13" value="1:00 PM"></li>
				<li><label for="time14">1:30 PM</label> <input type="radio" name="bookingTime" id="time14" value="1:30 PM"></li>
				<li><label for="time15">2:00 PM</label> <input type="radio" name="bookingTime" id="time15" value="2:00 PM"></li>
				<li><label for="time16">2:30 PM</label> <input type="radio" name="bookingTime" id="time16" value="2:30 PM"></li>
				<li><label for="time17">3:00 PM</label> <input type="radio" name="bookingTime" id="time17" value="3:00 PM"></li>
				<li><label for="time18">3:30 PM</label> <input type="radio" name="bookingTime" id="time18" value="3:30 PM"></li>
				<li><label for="time19">4:00 PM</label> <input type="radio" name="bookingTime" id="time19" value="4:00 PM"></li>
				<li><label for="time20">4:30 PM</label> <input type="radio" name="bookingTime" id="time20" value="4:30 PM"></li>
				<li><label for="time21">5:00 PM</label> <input type="radio" name="bookingTime" id="time21" value="5:00 PM"></li>
				<li><label for="time22">5:30 PM</label> <input type="radio" name="bookingTime" id="time22" value="5:30 PM"></li>
				<li><label for="time23">6:00 PM</label> <input type="radio" name="bookingTime" id="time23" value="6:00 PM"></li>
				<li><label for="time24">6:30 PM</label> <input type="radio" name="bookingTime" id="time24" value="6:30 PM"></li>
				<li><label for="time25">7:00 PM</label> <input type="radio" name="bookingTime" id="time25" value="7:00 PM"></li>
				<li><label for="time26">7:30 PM</label> <input type="radio" name="bookingTime" id="time26" value="7:30 PM"></li>	  
			</ul>		
		</div>	
	</div>

	<div class="next">
		<button id="nextButton" type="button" class="room-btn-2">Next</button>
	</div>			
</div>


<div class="confirm_overlayer">
	<div class="confirmation_wrapper">
		<div class="confirmation_header">
			Please select a duration<br> for your room reservation
		</div>
		<div class="setDuration">
			<p>Duration</p>
			<input type="text" placeholder="60 min" name="duration">
			<div class="durationBorder" ></div>
		</div>
		<div class="confirmInfor">
			<p class="confirmTitle">By Maker Space</p>
			<p class="confirmDate">Thursday, July 18, 2016</p>
			<p class="confirmTime">at 8:00am</p>
		</div>

		<div class="next">
			<button id="confirmButton" type="submit" class="room-btn-2">Confirm</button>
		</div>	
	</div>
</div>
</form> 

<?php include("layout/footerUser.php"); ?>

<script>
// change time input background color when selected
$("li").click(function () {
    $(this).addClass("activeForCalender");
    $(this).siblings().removeClass("activeForCalender");
});

// assign confirm content as a overlayer
var $overlay = $('.confirm_overlayer');

// when next button is pressed, show the overlayer,
// and make background page unscrollable,
// and hide the top navbar
$('#nextButton').click(function(e){
	$('body').css('overflow','hidden');
	$overlay.css("display","block");
	$(".o-header-nav").hide();
})

// when the user clicks anywhere outside of the overlayer, close it
window.onclick = function(e) {
    if (e.target == $overlay[0]) {
    	$('body').css('overflow','auto')
        $overlay.css('display', "none");
    }
}

// $("form :input").change(function() {
//     console.log($(this).closest('form').serialize());
// });

// $('#confirmButton').click(function(e){
// 	e.preventDefault();
// })

</script>
</body>
</html>