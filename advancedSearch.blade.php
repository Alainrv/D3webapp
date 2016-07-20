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
				<button class="room-btn-2 advancedSearch" id="advancedSearch" type="submit">Search</button>
			</div>
			<div class="moreSearchInput searchInput">
				<!-- <div class="searchTitle hiddenTitle filterX" id="filterI">Stage</div>
				<svg class="filterX" id="icon-deleteExpertiseWhite" onclick="removeExperties(this)" width="16" height="16" viewBox="0 0 32 32" x="356" y="0"><path d="M11.054 2.56c.586-.588.58-1.532-.005-2.118A1.493 1.493 0 0 0 8.93.437L5.746 3.624 2.56.437A1.494 1.494 0 0 0 .44.442 1.493 1.493 0 0 0 .437 2.56l3.187 3.186L.437 8.932c-.586.587-.58 1.53.005 2.117.59.59 1.534.587 2.117.004l3.186-3.187 3.186 3.187c.587.586 1.53.58 2.117-.005.59-.59.587-1.534.004-2.118L7.867 5.746l3.187-3.187z" fill="white" fill-rule="evenodd"></path></svg>
				<input class="filterX" type="text" placeholder="Stage"> -->
			</div>
		</div>
		<div class="searchFilter">
			<a class="addFilter" id="addFilter">Add Search Filter</a>
		</div>
		<div class="hiddenSearchBtn">
			<button class="room-btn-2" id="hiddenSearchBtn" type="submit">Search</button>
		</div>
		<div class="tagFilters">
			<div class="tagFilter" id="filter1">
				<img src="img/svg/diploma.svg">
				<div>Job Title</div>
			</div>
			<div class="tagFilter" id="filter2">
				<img src="img/svg/diploma.svg">
				<div>Experience</div>
			</div>
			<div class="tagFilter" id="filter3">
				<img src="img/svg/diploma.svg">
				<div>Skill</div>
			</div>
			<div class="tagFilter" id="filter4">
				<img src="img/svg/diploma.svg">
				<div>Stage</div>
			</div>
			<div class="tagFilter" id="filter5">
				<img src="img/svg/diploma.svg">
				<div>Coached By</div>
			</div>
			<div class="tagFilter" id="filter6">
				<img src="img/svg/diploma.svg">
				<div>Industry</div>
			</div>
		</div>
		
		<div class="meetingTabs">
			<div class="tab pending onSelect">BOTH</div><p id="pendingCount"></p><div class="tab upcoming">PEOPLE</div><div class="tab history">STARTUP</div>
			<div class="selectBorder"></div>
		</div>
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
	    $(".tagFilters").hide();
	    $(".hiddenSearchBtn").hide();
	    $(".moreSearchInput").hide();
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
})

// if click on search filter, show serach tags
//Click again, tags will be hidden
$('.searchFilter').click(function(){
	$('.tagFilters').toggle(500);
	if ($.trim($(this).text()) === 'Add Search Filter') {
    	$(this).text('Hide Search Filter');
    	$(this).addClass('addFilter');

	} 
	else {
		$(this).text('Add Search Filter'); 
		$(this).addClass('addFilter');       
	}
})


var tagClicked = $(".tagFilters div[class='tagFilter']");
	tagClicked.click(function(){
		var i = 1;
		$(".tagFilters").hide();
		$('.searchFilter').text('Add Search Filter');
		$("#advancedSearch").hide();
		var filterName = $(this).attr('id');
		var txt = $(this).find('div').text();
		var newSearch = $(".moreSearchInput").append('<div class="searchTitle hiddenTitle ' + filterName + '" id="filter' + i +  '">' + txt + '</div><svg class="' + filterName + '" id="icon-deleteExpertiseWhite" onclick="removeExperties(this)" width="16" height="16" viewBox="0 0 32 32" x="356" y="0"><path d="M11.054 2.56c.586-.588.58-1.532-.005-2.118A1.493 1.493 0 0 0 8.93.437L5.746 3.624 2.56.437A1.494 1.494 0 0 0 .44.442 1.493 1.493 0 0 0 .437 2.56l3.187 3.186L.437 8.932c-.586.587-.58 1.53.005 2.117.59.59 1.534.587 2.117.004l3.186-3.187 3.186 3.187c.587.586 1.53.58 2.117-.005.59-.59.587-1.534.004-2.118L7.867 5.746l3.187-3.187z" fill="white" fill-rule="evenodd"/></svg><input class="' + filterName + '" type="text" placeholder="' + txt + '"/>');
		$('.moreSearchInput').css({"display": "block"});
		$('newSearch').toggle();
		$('newSearch').css({"height": "35px"});
		$('#tag' + i).text(txt);
		$(".hiddenSearchBtn").css({"margin-bottom": "25px"});
		$(".searchFilter").animate({'margin-top':'+=75px'});
		$(".hiddenSearchBtn").show();
		$(this).hide();
		i++;
	});

function removeExperties(object) {
    var className = $(object).attr("class");
    $(object).remove();
    $("."+className).remove();
    $("div#" + className).show();
    $(".searchFilter").animate({'margin-top':'-=75px'});  
}


</script>


</body>
</html>