<?php include("layout/header.php"); ?>

<div class="meeting_wrapper">
	<form method="post">
	<div class="meetingHeader">
		<div class="searchBox">
			<div class="searchTitle">
				Type your serach below
			</div>
			<div class="searchInput">
				<input type="text" id="inviteSearch" placeholder="type search" />
				<button class="room-btn-2 advancedSearch" id="advancedSearch" type="submit" class="room-btn-2">Search</button>
			</div>
		</div>
		<div class="searchFilter">
			<a href="">Add Search Filter</a>
		</div>
		<div class="meetingTabs">
			<div class="tab pending onSelect">BOTH</div><p id="pendingCount"></p><div class="tab upcoming">PEOPLE</div><div class="tab history">STARTUP</div>
			<div class="selectBorder"></div>
		</div>
		<!-- <hr> -->
	</div>

	<div class="searchContent">
		<div class="invitePerson">

			<div class="inviteTitle">People</div>

			<div class="peopleList">

				<div class="peopleSelection">
				<label for="person1">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic1.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person1"></input>
				</div>
				
				<div class="peopleSelection">
				<label for="person2">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic1.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person2"></input>
				</div>
					
				<div class="peopleSelection">
				<label for="person3">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic1.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person3"></input>
				</div>
			
				<div class="peopleSelection">
				<label for="person4">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic2.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person4"></input>
				</div>
				
				<div class="peopleSelection">
				<label for="person5">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic2.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person5"></input>
				</div>
			
				<div class="peopleSelection">
				<label for="person6">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic2.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person6"></input>
				</div>


				<div class="peopleSelection">
				<label for="person7">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic2.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person7"></input>
				</div>

				<div class="peopleSelection">
				<label for="person8">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic2.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person8"></input>
				</div>

				<div class="peopleSelection">
				<label for="person9">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic2.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person9"></input>
				</div>

				<div class="peopleSelection">
				<label for="person10">
				<div class="person">
					<div class="personPic">
						<img src="../img/profilePic2.svg">
					</div>
					<div class="personDetail">
						<div class="personName">Mark Dooliare</div>
						<div class="personTitle">CEO Company</div>
					</div>
				</div>
				</label>
				<input type="checkbox" name="personInvite" id="person10"></input>
				</div>

				<div class="seeMorePersons">
					show more results	
				</div>
			</div>
		</div>


		<div class="inviteStartUp">
			<div class="inviteTitle">Startups</div>

			<div class="startupsList">

				<div class="startupSelection">
				<label for="startup1">
				<div class="startup">
					<div class="startupTitle">
						<img class="startupPic" src="../img/profilePic1.svg"/>
						<div class="startupName">
							TraninerWorkout1
						</div>
					</div>
					<div class="startupMembers">
						<div class="person">
							<div class="personPic">
								<img src="../img/profilePic2.svg">
							</div>
							<div class="personDetail">
								<div class="personName">Mark Dooliare</div>
								<div class="personTitle">CEO Company</div>
							</div>
						</div>

						<div class="person">
							<div class="personPic">
								<img src="../img/profilePic2.svg">
							</div>
							<div class="personDetail">
								<div class="personName">Mark Dooliare</div>
								<div class="personTitle">CEO Company</div>
							</div>
						</div>
					</div>
				</div>
				<input type="checkbox" name="startupInvite" id="startup1"></input>
				</label>
				</div>

				<div class="startupSelection">
				<label for="startup2">
				<div class="startup">
					<div class="startupTitle">
						<img class="startupPic" src="../img/profilePic1.svg"/>
						<div class="startupName">
							TraninerWorkout2
						</div>
					</div>
					<div class="startupMembers">
						<div class="person">
							<div class="personPic">
								<img src="../img/profilePic2.svg">
							</div>
							<div class="personDetail">
								<div class="personName">Mark Dooliare</div>
								<div class="personTitle">CEO Company</div>
							</div>
						</div>

						<div class="person">
							<div class="personPic">
								<img src="../img/profilePic2.svg">
							</div>
							<div class="personDetail">
								<div class="personName">Mark Dooliare</div>
								<div class="personTitle">CEO Company</div>
							</div>
						</div>
					</div>
				</div>
				<input type="checkbox" name="startupInvite" id="startup2"></input>
				</label>
				</div>

				<div class="startupSelection">
				<label for="startup3">
				<div class="startup">
					<div class="startupTitle">
						<img class="startupPic" src="../img/profilePic1.svg"/>
						<div class="startupName">
							TraninerWorkout3
						</div>
					</div>
					<div class="startupMembers">
						<div class="person">
							<div class="personPic">
								<img src="../img/profilePic2.svg">
							</div>
							<div class="personDetail">
								<div class="personName">Mark Dooliare</div>
								<div class="personTitle">CEO Company</div>
							</div>
						</div>

						<div class="person">
							<div class="personPic">
								<img src="../img/profilePic2.svg">
							</div>
							<div class="personDetail">
								<div class="personName">Mark Dooliare</div>
								<div class="personTitle">CEO Company</div>
							</div>
						</div>
					</div>
				</div>
				<input type="checkbox" name="startupInvite" id="startup3"></input>
				</label>
				</div>

				<div class="startupSelection">
				<label for="startup4">
				<div class="startup">
					<div class="startupTitle">
						<img class="startupPic" src="../img/profilePic1.svg"/>
						<div class="startupName">
							TraninerWorkout4
						</div>
					</div>
					<div class="startupMembers">
						<div class="person">
							<div class="personPic">
								<img src="../img/profilePic2.svg">
							</div>
							<div class="personDetail">
								<div class="personName">Mark Dooliare</div>
								<div class="personTitle">CEO Company</div>
							</div>
						</div>

						<div class="person">
							<div class="personPic">
								<img src="../img/profilePic2.svg">
							</div>
							<div class="personDetail">
								<div class="personName">Mark Dooliare</div>
								<div class="personTitle">CEO Company</div>
							</div>
						</div>
					</div>
				</div>
				<input type="checkbox" name="startupInvite" id="startup4"></input>
				</label>
				</div>


				<div class="seeMoreStartups">
					show more results	
				</div>

			</div>

		</div>
	</div>

	</form>

</div>

<?php include("layout/footerUser.php"); ?>


<script>
$(document).ready(function(){
		$(".historyBox").removeClass('hideBox');
		$(".upcomingBox").removeClass('hideBox');
		$(".upcomingBox").hide();
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
    	var $botBor = $(this).closest('.meetingTabs').find('.selectBorder');

    	// assign each meeting box to a variable
    	var $pending = $('.pendingBox');
    	var $upcoming = $('.upcomingBox');
    	var $history = $('.historyBox');
    	
    	// click pending, move the botBor to left
    	// and show upcoming box
    	// click upcoming, move botBor to middle 
    	// and show upcoming box
    	// click history, move botBor to right
    	// and show history box
    	if($(this).hasClass("pending")){
    		$botBor.css("left",'0%');
    		$pending.css('display','');
    		$(".invitePerson").show();
    		$(".inviteStartUp").show();

    	} else if($(this).hasClass("upcoming")) {
    		$botBor.css("left", "calc(100% / 3)");
    		$upcoming.css('display','');
    		$(".invitePerson").show();
    		$(".inviteStartUp").hide();

    	} else{
    		$botBor.css("left", "calc(100% / 3 * 2)");
    		$history.css('display','');
    		$(".invitePerson").hide();
    		$(".inviteStartUp").show();
    		$(".inviteStartUp .inviteTitle").css({"padding-top": "10px"});
    	}
	});

	// if click on see more persons, show more results
$('.seeMorePersons').click(function(){
	$('.peopleSelection').slideDown(500);
	$('.peopleSelection').css('display','block');
})
// if click on the see more startups, show more results
$('.seeMoreStartups').click(function(){
	$('.startupSelection').slideDown(500);
	$('.startupSelection').css('display','block');
})
// when a person being selected, change the background color
// and count the selected items
$(".peopleList input[type='checkbox']").click(function(){
	if ($(this).is(":checked")){
		$(this).closest('.peopleSelection').addClass('selectedPerson');
	} else {
		$(this).closest('.peopleSelection').removeClass('selectedPerson');
	}
	/*selectCount();*/
})
// when a startup being selected, change the border stytle 
// and count the selected items
$(".startupsList input[type='checkbox']").click(function(){
	
	if ($(this).is(":checked")){
		$(this).closest('.startupSelection').addClass('selectedStartup');
	} else {
		$(this).closest('.startupSelection').removeClass('selectedStartup');
	}
	/*selectCount();*/
})
</script>


</body>
</html>