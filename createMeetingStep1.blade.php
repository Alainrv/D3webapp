<?php include("layout/header.php"); ?>

<div class="booking_wrapper">
	<div class="roomHeaderCreateMeeting">
			<div class="title">
				Meeting Details
			</div>
			<div class="signs">
				<div class="circle-active"></div>
				<div class="circle"></div>
				<div class="circle"></div>
			</div>
	</div>

	<form method="post">		
		<div class="createInput">
			<div class="input">
				<input type="text" placeholder="First name , Last name" name="">
				<div class="svg personCreate"></div>
			</div>
			<div class="input">
				<input type="text" placeholder="Purpose of meeting" name="">
				<div class="svg meetingPlace"></div>
			</div>
			<div class="input">
				<input type="text" placeholder="Location" name="">
				<div class="svg location"></div>
			</div>
			<div class="input">
				<input type="text" placeholder="Duration" name="">
				<div class="svg clock"></div>
			</div>
			<div class="input">
			<label class="notesLabel">Notes</label>	
				<textarea  cols="36" rows="7" name=""></textarea>
				<div class="svg notes"></div>
			</div>
			<div class="input">
				<label class="notesLabel">Invitation validity</label>	
				<select >
				  <option value="">1 day to respond</option>
				  <option value="">2 days to respond</option>
				  <option value="">3 days to respond</option>
				  <option value="">4 days to respond</option>
				  <option value="">5 days to respond</option>
				</select>		
				<div class="svg alarmClock"></div>			
			</div> 
<!-- 			<div class="invitationValidity">		 -->
<!-- 				<div class="centerTime" >			 -->
<!-- 					<ul> -->
<!-- 						<li><label for="time1">1 day to respond </label> <input type="radio" name="bookingTime" id="time1" value="7:00 AM"><div class="svg toggleSign"></div></li> -->
						
<!-- 						<li class="toggleLi"><label for="time2">2 day to respond</label> <input type="radio" name="bookingTime" id="time2" value="7:30 AM"></li> -->
<!-- 						<li class="toggleLi"><label for="time3">3 day to respond</label> <input type="radio" name="bookingTime" id="time3" value="8:00 AM"></li> -->
<!-- 						<li class="toggleLi"><label for="time4">4 day to respond</label> <input type="radio" name="bookingTime" id="time4" value="8:30 AM"></li> -->
<!-- 						<li class="toggleLi"><label for="time5">5 day to respond</label> <input type="radio" name="bookingTime" id="time5" value="9:00 AM"></li> -->
						
<!-- 					</ul>		 -->
<!-- 				</div>	 -->
			
<!-- 			</div> -->
			<div class="button_container">
				<button class="room-btn-2" style="margin-top:15vh;" type="submit">Create Account</button>			
			</div>	
			<br>		
		</div>
	</form>
</div>

<?php include("layout/footerUser.php"); ?>

</body>
</html>
