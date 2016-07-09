
<?php include('layout/header.php') ?>

	<div class="invitation_wrapper">
		<form method="post">
			<div class="invitationDetails">
				<div class="invProfilePic">
					<img class="profilePic1" src="../img/profilePic1.svg"></img>
					<img class="profilePic2" src="../img/profilePic2.svg"></img>
				</div>
				<div class="invDescription">
					<div class="invTopic">
						Meet with <b>Alain Readman Valiquette</b> about website design and sketches
					</div>
					<div class="invTime">
						<div class="svg bookingClock"></div>
						<div>30 minutes</div>
					</div>
				</div>
				<div class="invSchedule">
					<div class="pick_time">Pick a time that works for you</div>
					<div class="scheduleDetails">
						<div class="invMark"></div>
						<div class="scheduleDate">Friday, April 15 2016</div>
						<div>AFTERNOON</div>
						<div class="scheduleSelection">
							<input type="radio"name="selectionTime"  id="selection1" />
							<label for="selection1"><div>3 pm EDT</div></label>
							<input type="radio" name="selectionTime" id="selection2"/>
							<label for="selection2"><div>3:30 pm EDT</div></label>
							<input type="radio" name="selectionTime" id="selection3" />
							<label for="selection3"><div>4 pm EDT</div></label>
							<input type="radio" name="selectionTime" id="selection4"/>
							<label for="selection4"><div>4:30 pm EDT</div></label>
							
						</div>
					</div>
				</div>

				<div class="respondMessage">
					<div class="svg respondTime"></div>

					<div class="messageText">Real time availabilities for Alain Readman Valiquette You have 3 days to respond</div>
				</div>

				<div class="next">
					<button id="nextButton" type="submit" class="room-btn-2">Confirm</button>
				</div>	
			</div>
		</form>


	</div>
	
<?php include('layout/footerUser.php') ?>



<script>
$('label div').click(function(){
	$('.invActive').removeClass('invActive');
	$(this).addClass('invActive');
})
</script>


</body>
</html>