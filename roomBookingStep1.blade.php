<?php include("layout/header.php"); ?>


<div class="booking_wrapper">
	<div class="roomHeader">
			<div class="title">
				Select a room
			</div>
			<div class="signs">
				<div class="circle-active"></div>
				<div class="circle"></div>
			</div>
	</div>


	<form method="post">
		<div class="box_wrapper">

			<div class="roomSelecting">
				<div class="bookingTitle">
					<p>Maker Space Room</p>
				</div>
				<div class="bookingInfor">
					<div class="roomTab">
						<label for="room1">
							<div id="nextButton" class="room-btn">Book</div>
						</label>
						<div class="svg toggleSign"></div>
					</div>
					<div class="toggleContent">
						<p>Room can fit up to 8 people sitting and can accomodate around 15 people standing.</p>
						<p class="equipment">This room is accomodated with</p>
						<ul>
							<li>projector with HDMI cable</li>
							<li>1 white board</li>
							<li>1 podium</li>
							<li>a sound system</li>
						</ul>
					</div>
					<input type="radio" name="room" id="room1" value="MakeSpaceRoom"></input>
				</div>
			</div>


	    	<div class="roomSelecting">
				<div class="bookingTitle">
					<p>Classrooom</p>
				</div>
				<div class="bookingInfor">
					<div class="roomTab">
						<label for="room2">
							<div id="nextButton" class="room-btn">Book</div>
						</label>
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
					<input type="radio" name="room" id="room2" value="ClassRooom"></input>
				</div>
			</div>


	    	<div class="roomSelecting">
				<div class="bookingTitle">
					<p>Window room</p>
				</div>
				<div class="bookingInfor">
					<div class="roomTab">
						<label for="room3">
							<div id="nextButton" class="room-btn">Book</div>
						</label>
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
					<input type="radio" name="room" id="room3" value="WindowRoom"></input>
				</div>
			</div>

		</div>
	</form>
</div>


<script>

<?php include("layout/footerUser.php"); ?>


// add highlight background to selected radio input, and change the label content
$(document).ready(function(){

	// toggle the room content
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

	// submite the form when the radio is selected
	$('input[name=room]').click(function(){
		$('form').submit();
		location.href='roomBookingStep2.html';
	});

	// test if the correct room name was submitted
	$("form :input").change(function() {
	    console.log($(this).closest('form').serialize());
	});

});

</script>


</body>
</html>
