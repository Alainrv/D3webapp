

	<main class="o-content">
	    <div class="o-container">
      		<div class="profile_wrapper">
      		<!-- Diego!! if this is a user -->
      			<div class="compHeader">
      				<img src="../img/temp/D3Logo.png">
      			</div>
      			<div class="indHeader">
  			<!-- Diego!! Image of the profile picture of the user goes here -->
      				<img src="../img/temp/profile.jpg">
			<!-- Diego!!  First and last name of hte user goes here below -->
      				<h2>Firstname Lastname</h2>
      			</div>
  			<!-- Diego!! end if this is a user -->
  			<!-- Diego!! if this is a start up -->
  				<!-- <div class="compHeader">
  					<img src="../img/temp/D3Logo.png">
  				</div>
  				<div class="startupHeader">
  					<h2>startupName</h2>
  					<a href="#" target="_blank">www.website.com</a>
  				</div> -->
  			<!-- Diego!! end if this is a startup -->

  			    <div class="profile_tabs">
			        <div class="tabs">
			        <!-- Diego!! If this is a person -->
			            <div class="top_tab active"><a href="#info">Info</a></div>
			            <div class="top_tab"><a href="#experience">Experience</a></div>
			            <div class="top_tab"><a href="#social">Media</a></div>
			        <!-- Diego!! End if this is a person -->
			        <!-- Diego!! If this is a startup -->
			            <!-- <div class="top_tab active"><a href="#startup_info">Info</a></div> -->
			            <!-- <div class="top_tab"><a href="#startup_data">Data</a></div> -->
			            <!-- <div class="top_tab"><a href="#startup_media">Media</a></div> -->
			            <!-- <div class="top_tab"><a href="#startup_staff">Team</a></div> -->
			        <!-- Diego !! End if this is a startup -->
			        </div>
			        <div class="tabInner">




			            <div class="tab" id="info">
			        <!-- DIEGO If this is a Mentor users -->
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Biography</h3>
				                <p>This is my biography and this can be really exciting or it can be really really boring since poeple have different level of experience. Take Elon Musk for exmaple could be exciting. Take a dude who didn't do anything of their life, that coudl be very boring.</p>
				               	<div class="editMode">
				               		<form action="" method="post">
				               			<textarea name="mentor_bio"></textarea>
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>
			        <!-- Diego!! End if this is a mentor fo D3 -->
			        <!-- Diego!! if this is a Staff of District 3 type of user -->
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">What I do</h3>
				                <p>I can help you at D3 by being there to support you and your team through rought time. I have a degree in being boring and can definetly help you become more boring like me</p>
				               	<div class="editMode">
				               		<form action="" method="post">
				               			<textarea name="staff_do"></textarea>
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">A word from me</h3>
				                <p>I am passionate about startup just like everybody else at D3, there is nothing spceial about me so don't you fucking come and bug me you sons of bitches.</p>
				               	<div class="editMode">
				               		<form action="" method="post">
				               			<textarea name="staff_do"></textarea>
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>
			            	<!-- Diego!! End if this is a staff of District 3 -->
			            	<!-- Diego!! If this is a mentor of D3 -->
			            	<div class="p-info startup_coached">
				                <h3 onclick="editStartupCoach()">Startups Coached</h3>
				                <div class="list_saved_container">
				                	<a class="logo_container" href="#">
		            					<img class="content" src="../img/temp/companyLogo.png">
		            				</a>
		            				<a class="logo_container" href="#">
		            					<img class="content" src="../img/temp/companyLogo2.png">
		            				</a>
			            		</div>
				                <div class="editMode">
				                	<form action="" method="post">
			            				<div class="editInput search">
				            				<input type="search" placeholder="Type Startup Name" name="startup_search">
				            				<img src="../img/svg/loup.svg">
			            				</div>
			            				<div class="search_results">
			            					<div class="search_result_startup">
			            						<div class="logo_container">
			            							<img class="content" src="../img/temp/companyLogo.png">
			            						</div>
			            						<h4>TrainerWorkout</h4>
			            					</div>
			            					<div class="search_result_startup">
			            						<div class="logo_container">
			            							<img class="content" src="../img/temp/companyLogo.png">
			            						</div>
			            						<h4>TrainerWorkout</h4>
			            					</div>
			            				</div>
			            			</form>
				                </div>
			            	</div>
			            <!-- Diego!! End if this is a mentor user -->

			            <!-- DIEGO If the person who is looking at this profile is a staff they see all of the below info if they are not staff then the visibility depends on the settings of the user -->

						<!-- Diego!! Show depending on settings			            			            	 -->
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Gender</h3>
			            		<p>male / female</p>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="editInput">
			            					<input id="male" type="radio" name="user_gender"><label for="male">male</label>
					            			<input id="female" type="radio" name="user_gender"><label for="female">female</label>
			            				</div>
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				            		</form>
			            		</div>
			            	</div>
		            	<!-- Diego!! End show depending on settings -->

		            	<!-- Diego!! Show depending on settings -->
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Birthday</h3>
			            		<p>1985 / 05 / 08</p>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="editInput">
				            				<input type="date" name="user_bday">
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>
		            	<!-- Diego!! End show depending on settings -->

		            	<!-- Diego!! Show depending on settings -->
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Email</h3>
			            		<p>alain@d3center.ca</p>
			            		<div class="editMode">
			            			<form action="" method="post">
				            			<input type="email" name="user_email">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				            		</form>	
			            		</div>
			            	</div>
		            	<!-- Diego!! End show depending on settings -->

		            	<!-- Diego!! Show depending on settings -->			            	
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Phone Number</h3>
			            		<p>514 690-4850</p>
			            		<div class="editMode">
			            			<form action="" method="post">
				            			<input type="phone" name="user_phone">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
			               			</form>
			            		</div>
			            	</div>
		            	<!-- Diego!! End show depending on settings -->

		            	<!-- Show to everyone -->
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Slack username</h3>
			            		<p>alainrv</p>
			            		<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_slack">
				            			<div class="btnOptions">
				            				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				            			</div>
			            			</form>
			            		</div>
			            	</div>
			            </div>

					<!-- Diego!! Show if Startup -->
			            <div class="tab" id="experience">	
			            	<div class="p-info degree">
			            		<h3 onclick="editList()">Degrees</h3>
			            		<div class="list_saved_container">
			            			<ul>
			            				<li>Engineering in Computer Science, McGill University</li>
			            				<li>MBA, Concordia Univeristy</li>
			            			</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">
			            				</div>
			            				<div class="adding_list">
				            				<input onclick="addToList(event)" class="val_to_list" type="text" name="degree">
				            				<button class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>
			            	<div class="p-info">
			            		<h3 onclick="editList()">Currently learning</h3>
			            		<div class="list_saved_container">
			            			<ul>
			            				<li>Rubby on rails</li>
			            				<li>Python</li>
			            			</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">
			            				</div>
			            				<div class="adding_list">
				            				<input class="val_to_list" type="text" name="learning">
				            				<button onclick="addToList(event)" class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>
			            	<div class="p-info">
			            		<h3 onclick="editList()">Fields of expertise</h3>
			            		<div class="list_saved_container">
			            			<ul>
			            				<li>HTML</li>
			            				<li>Css</li>
			            				<li>JavaScript</li>
			            				<li>Jquery</li>
			            				<li>Sass</li>
			            				<li>Financing</li>
			            			</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">
			            				</div>
			            				<div class="adding_list">
				            				<input class="val_to_list" type="text" name="experiences">
				            				<button onclick="addToList(event)" class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>
			            </div>

			            <div class="tab" id="social">
			                <div class="p-info facebook">
			                	<h3 onclick="editParagrahAnchors()">Facebook</h3>
			                	<a href="#" target="_blank">www.facebook.com/alainrvaliquette</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_facebook">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
					               		</div>
			            			</form>
			            		</div>
		                	</div>
		                	<div class="p-info twitter">
			                	<h3 onclick="editParagrahAnchors()">Twitter</h3>
			                	<a href="#" target="_blank">@alainrv</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_twitter">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
					               		</div>
			            			</form>
			            		</div>
		                	</div>
		                	<div class="p-info instagram">
			                	<h3 onclick="editParagrahAnchors()">Instagram</h3>
			                	<a href="#" target="_blank">@nolykids</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name=user_instagram>
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
			            			</form>
			            		</div>
		                	</div>
		                	<div class="p-info angel">
			                	<h3 onclick="editParagrahAnchors()">Angel List</h3>
			                	<a href="#" target="_blank">@alainrv</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_angel">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
			            			</form>
			            		</div>
		                	</div>
		                	<div class="p-info linkedin">
			                	<h3 onclick="editParagrahAnchors()">Linked In</h3>
			                	<a href="#" target="_blank">www.linkedin.com/in/alainrv</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_linkedin">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
			            			</form>
			            		</div>
			                </div>
			            </div>
			            <div class="tab" id="startup_info">

				            <div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Our Mission</h3>
				                <p>No longer produce any polution aside from smokers.</p>
				               	<div class="editMode">
				               		<form action="" method="post">
				               			<textarea name="startup_Mission"></textarea>
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>

			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Product Description</h3>
				                <p>Web-based software and IOS app that allows students to better succeed in life with their idiotique ideas that they are more then they really are. </p>
				               	<div class="editMode">
				               		<form action="" method="post">
				               			<textarea name="startup_productDescription"></textarea>
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>

			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Current D3 Program</h3>
				                <p>Enrolled in the Product Market Fit Program cohort spring 2016</p>
				               	<div class="editMode">
				               		<form action="" method="post">
				               			<textarea name="startup_productDescription"></textarea>
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>

			            	<div class="p-info">
			            		<h3 onclick="editStage()">Stage</h3>
				                
			            		<div class="startup_stage">
			            			<div class="stage bmv completed"><p>BMV</p></div>
			            			<div class="stage mvp"><p>MVP</p></div>
			            			<div class="stage pmf"><p>PMF</p></div>
			            			<div class="stage growth"><p>Growth</p></div>
			            		</div>

				               	<div class="editMode">
				               		<form class="edit_stage" action="" method="post">
				               			<div>
				               				<input type="checkbox" name="startup_stageBMV" id="BMV">
				               				<label for="BMV">Business Model Validation</label>
				               			</div>
				               			<div>
					               			<input type="checkbox" name="startup_stageMVP" id="MVP">
					               			<label for="MVP">Minimum Viable Product</label>
				               			</div>
				               			<div>
					               			<input type="checkbox" name="startup_stagePMF" id="PMF">
					               			<label for="PMF">Product Market Fit</label>
				               			</div>
				               			<div>
					               			<input type="checkbox" name="startup_stageGrowth" id="growth">
					               			<label for="growth">Growth phase</label>
				               			</div>
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="editStage()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>

			            	<div class="p-info">
			            		<h3 onclick="editList()">Revenue Model</h3>
			            		<div class="list_saved_container">
			            			<ul>
			            				<li>20% comission on the sales offerd by the clients of dude</li>
			            				<li>Advertising</li>
			            			</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">

			            				</div>
			            				<div class="adding_list">
				            				<input class="val_to_list" type="text" name="startup_revenueModel">
				            				<button onclick="addToList(event)" class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>

			            	<div class="p-info">
			            		<h3 onclick="editList()">Growth Strategies</h3>
			            		<div class="list_saved_container">
			            			<ul>
			            				<li>Continuous development of our partnership program with larger and larger organizations</li>
			            				<li>B2B automated marketing</li>
			            				<li>Content marketing for the customers</li>
			            			</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">
			            				</div>
			            				<div class="adding_list">
				            				<input class="val_to_list" type="text" name="startup_revenueModel">
				            				<button onclick="addToList(event)" class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>

				            <div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Address</h3>
				                <p>453 Bob Stree, Montreal, Qc, H3w 1e3</p>
				               	<div class="editMode">
				               		<form action="" method="post">
				               			<input type="text" name="startup_city">
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>
				            <div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Phone Number</h3>
				                <p>+1 (514) 690-4850</p>
				               	<div class="editMode">
				               		<form action="" method="post">
				               			<input type="phone" name="startup_phone">
				               			<div class="btnOptions">
				               				<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
				               		</form>	               		
				               	</div>
			            	</div>
			            	

			            	<div class="p-info">
			            		<h3 onclick="editList()">Value Propositions</h3>
			            		<div class="list_saved_container">
				            		<ul>
				            			<li>Save time</li>
				            			<li>Cure Boredom</li>
				            		</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">
			            				</div>
			            				<div class="adding_list">
				            				<input class="val_to_list" type="text" name="startup_valueProposition">
				            				<button onclick="addToList(event)" class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>

			            	<div class="p-info">
			            		<h3 onclick="editList()">Customer Segments</h3>
			            		<div class="list_saved_container">
			            			<ul>
			            				<li>Teacher with less then 3 years experience</li>
			            				<li>Students</li>
			            			</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">
			            				</div>
			            				<div class="adding_list">
				            				<input class="val_to_list" type="text" name="startup_customerSegments">
				            				<button onclick="addToList(event)" class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>

			       


			            </div>

			            <div class="tab" id="startup_data">
			            	<div class="p-info">
			            		<h3 onclick="editParagrahAnchors()">Monthly Revenue Range</h3>
			            		<p>$15,000 - $20,000</p>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="startup_revenue">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
					               		</div>
			            			</form>
			            		</div>
			            	</div>
			            	<div class="investment">
			            		<h3 onclick="editRounds()">Investment rounds</h3>
			            		<div class="p-info">
				            		<div class="inves__round seed closed">
				            			<h4 onclick="editRound()" class="round__name">
				            				<span onclick="removeRound()" class="removeRound"><img src="../img/svg/remove-lg.svg"></span>
				            				<span class="r_name">Seed:</span> <span class="r_amount">$150,000</span>
				            				<span class="underline"></span>
			            				</h4>
				            			<span class="exp_fund_details" onclick="expandFundDetails()">more info</span>
				            			<div class="fund_details">
					            			<div class="use_of_funds">
					            				<h5>Use of Funds:</h5>
					            				<ul>
							            			<li>buided our MVP</li>
							            			<li>closing deals with 50 clients</li>
						            			</ul>
					            			</div>
					            			<div class="commited_funds">
					            				<h5>Commited Funds:</h5>
					            				<ul>
					            					<li>$200,000, Real Ventures</li>
					            				</ul>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="editMode">
				            			<form action="" method="post">
				            				<div class="edit_round">
				            					<h5>Financing Round</h5>
				            					<div class="name">
				            						<label>Round Name</label>
					            					<input type="text" name="startup_round_text">
				            					</div>
				            					<div class="amount">
				            						<label>Amount</label>
					            					<input type="text" name="startup_round_amount">
				            					</div>
				            				</div>
				            				<div class="edit_funds use">
				            					<h5>Use of Funds</h5>
				            					<div class="added_list">
					            				</div>
					            				<div class="adding_list">
						            				<input class="val_to_list" type="text" name="startup_round">
						            				<button onclick="addDetailToRound(event)" class="add_to_list" type="button">+ Add</button>
					            				</div>
				            				</div>
				            				<div class="edit_funds commited">
				            					<h5>Commited Funds</h5>
				            					<div class="added_list">
					            				</div>
					            				<div class="adding_list">
						            				<input class="val_to_list" type="text" name="startup_customerSegments">
						            				<button onclick="addDetailToRound(event)" class="add_to_list" type="button">+ Add</button>
					            				</div>
				            				</div>
				            				<div class="btnOptions">
				            					<button type="submit">Save</button>
					            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				            				</div>
				            			</form>
				            		</div>
								</div>
								<div class="p-info">
				            		<div class="inves__round seriesA ongoing">
				            			<h4 onclick="editRound()" class="round__name">
				            				<span onclick="removeRound()" class="removeRound"><img src="../img/svg/remove-lg.svg"></span>
				            				<span class="r_name">Series A:</span> <span class="r_amount">$1,000,000</span>
				            				<span class="underline"></span>
			            				</h4>
				            			<span class="exp_fund_details" onclick="expandFundDetails()">more info</span>
				            			<div class="fund_details">
					            			<div class="use_of_funds">
					            				<h5>Use of Funds:</h5>
					            				<ul>
						            				<li>Hire 2 more front-end engineer</li>
						            				<li>Hire Back-end engineer</li>
						            				<li>Build the AI for the software</li>
						            			</ul>
					            			</div>
					            			<div class="commited_funds">
					            				<h5>Commited Funds:</h5>
					            				<ul>
					            					<li>$200,000, Real Ventures</li>
					            				</ul>
					            			</div>
					            		</div>	
				            		</div>
				            		<div class="editMode">
				            			<form action="" method="post">
				            				<div class="edit_round">
				            					<h5>Financing Round</h5>
				            					<div class="name">
				            						<label>Round Name</label>
					            					<input type="text" name="startup_round_text">
				            					</div>
				            					<div class="amount">
				            						<label>Amount</label>
					            					<input type="text" name="startup_round_amount">
				            					</div>
				            				</div>
				            				<div class="edit_funds use">
				            					<h5>Use of Funds</h5>
				            					<div class="added_list">
					            				</div>
					            				<div class="adding_list">
						            				<input class="val_to_list" type="text" name="startup_round">
						            				<button onclick="addDetailToRound(event)" class="add_to_list" type="button">+ Add</button>
					            				</div>
				            				</div>
				            				<div class="edit_funds commited">
				            					<h5>Commited Funds</h5>
				            					<div class="added_list">
					            				</div>
					            				<div class="adding_list">
						            				<input class="val_to_list" type="text" name="startup_customerSegments">
						            				<button onclick="addDetailToRound(event)" class="add_to_list" type="button">+ Add</button>
					            				</div>
				            				</div>
				            				<div class="btnOptions">
				            					<button type="submit">Save</button>
					            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				            				</div>
				            			</form>
				            		</div>
			            		</div>
			            	</div>	
			            	<div class="p-info">
			            		<h3 onclick="editList()">Market</h3>
			            		<div class="list_saved_container">
			            			<ul>
			            				<li>540,000 Personal Trainers World Wide</li>
			            				<li>300,000 Gyms in North America</li>
			            			</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">
			            				</div>
			            				<div class="adding_list">
				            				<input class="val_to_list" type="text" name="startup_market">
				            				<button onclick="addToList(event)" class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>
			            	<div class="p-info">
			            		<h3 onclick="editList()">Achievements to date</h3>
			            		<div class="list_saved_container">
			            			<ul>
			            				<li>YMCA largest and most recignized association realted to the fitness in the world has signed a partnerhsip with us where the Quebec province is using TrainerWorkout</li>
			            				<li>8 Successful product release each moving the needle in the right direction in terms of engagement and product adoption</li>
			            			</ul>
			            		</div>
			            		<div class="editMode">
			            			<form action="" method="post">
			            				<div class="added_list">
			            				</div>
			            				<div class="adding_list">
				            				<input class="val_to_list" type="text" name="startup_achievements">
				            				<button onclick="addToList(event)" class="add_to_list" type="button">+ Add</button>
			            				</div>
			            				<div class="btnOptions">
			            					<button type="submit">Save</button>
				            				<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
			            				</div>
			            			</form>
			            		</div>
			            	</div>
			            </div>
			            <div class="tab" id="startup_media">
			                <div class="p-info facebook">
			                	<h3 onclick="editParagrahAnchors()">Facebook</h3>
			                	<a href="#" target="_blank">www.facebook.com/alainrvaliquette</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_facebook">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
					               		</div>
			            			</form>
			            		</div>
		                	</div>
		                	<div class="p-info twitter">
			                	<h3 onclick="editParagrahAnchors()">Twitter</h3>
			                	<a href="#" target="_blank">@alainrv</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_twitter">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
					               		</div>
			            			</form>
			            		</div>
		                	</div>
		                	<div class="p-info instagram">
			                	<h3 onclick="editParagrahAnchors()">Instagram</h3>
			                	<a href="#" target="_blank">@nolykids</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name=user_instagram>
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
			            			</form>
			            		</div>
		                	</div>
		                	<div class="p-info angel">
			                	<h3 onclick="editParagrahAnchors()">Angel List</h3>
			                	<a href="#" target="_blank">@alainrv</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_angel">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
			            			</form>
			            		</div>
		                	</div>
		                	<div class="p-info linkedin">
			                	<h3 onclick="editParagrahAnchors()">Linked In</h3>
			                	<a href="#" target="_blank">www.linkedin.com/in/alainrv</a>
			                	<div class="editMode">
			            			<form action="" method="post">
				            			<input type="text" name="user_linkedin">
				            			<div class="btnOptions">
					            			<button type="submit">Save</button>
					               			<button onclick="cancelEditParagraphAnchor()" type="reset">Cancel</button>
				               			</div>
			            			</form>
			            		</div>
			                </div>
			            </div>
			            <div class="tab" id="startup_staff">
			            	<div class="team">
				            	<div class="team__founding list_saved_container p-info">
					            	<h3 onclick="searchEmployee()">Founding Team</h3>
					            	<div class="employee_Container">
					            		<span onclick="removeEmployee()" class="removeEmployee"><img src="../img/svg/remove-lg.svg"></span>
					            		<img class="employeeProfile" src="../img/temp/profile.jpg">
					            		<div class="employee_info">
					            			<h4>FirstName LastName</h4>
					            			<p>Job Title</p>
					            		</div>
					            	</div>
					            	<div class="employee_Container">
					            		<span onclick="removeEmployee()" class="removeEmployee"><img src="../img/svg/remove-lg.svg"></span>
					            		<img class="employeeProfile" src="../img/temp/profile.jpg">
					            		<div class="employee_info">
					            			<h4>FirstName LastName</h4>
					            			<p>Job Title</p>
					            		</div>
					            	</div>
					            	<div class="employee_Container">
					            		<span onclick="removeEmployee()" class="removeEmployee"><img src="../img/svg/remove-lg.svg"></span>
					            		<img class="employeeProfile" src="../img/temp/profile.jpg">
					            		<div class="employee_info">
					            			<h4>FirstName LastName</h4>
					            			<p>Job Title</p>
					            		</div>
					            	</div>
					            	<div class="editMode">
					                	<form action="" method="post">
				            				<div class="editInput search">
					            				<input type="search" placeholder="Type Startup Name" name="startup_search">
					            				<img src="../img/svg/loup.svg">
				            				</div>
				            				<div class="search_results">
				            					<div class="search_result_startup employee_Container">
				            						<img class="employeeProfile" src="../img/temp/profile.jpg">
				            						<h4>employee Name</h4>
				            					</div>
				            					<div class="search_result_startup employee_Container">
				            						<img class="employeeProfile" src="../img/temp/profile.jpg">
				            						<h4>employee Name</h4>
				            					</div>
				            				</div>
				            			</form>
					               </div>
					            </div>
					            <div class="team__employees list_saved_container p-info">
					            	<h3 onclick="searchEmployee()"">Joined as employees</h3>
					            	<div class="employee_Container">
						            	<span onclick="removeEmployee()" class="removeEmployee"><img src="../img/svg/remove-lg.svg"></span>
					            		<img class="employeeProfile" src="../img/temp/profile.jpg">
					            		<div class="employee_info">
					            			<h4>FirstName LastName</h4>
					            			<p>Job Title</p>
					            		</div>
					            	</div>
					            	<div class="editMode">
					                	<form action="" method="post">
				            				<div class="editInput search">
					            				<input type="search" placeholder="Type Startup Name" name="startup_search">
					            				<img src="../img/svg/loup.svg">
				            				</div>
				            				<div class="search_results">
				            					<div class="search_result_startup employee_Container">
				            						<img class="employeeProfile" src="../img/temp/profile.jpg">
				            						<h4>Employee Name</h4>
				            					</div>
				            					<div class="search_result_startup employee_Container">
				            						<img class="employeeProfile" src="../img/temp/profile.jpg">
				            						<h4>Employee Name</h4>
				            					</div>
				            				</div>
				            			</form>
					                </div>
				                </div>
				            </div>
				         </div>
			            <!-- Diego end if startup profile -->
			        </div>
			    </div>
      		</div>



















			
      





	    </div><!-- /o-container -->
	</main><!-- /o-content -->

	<footer class="o-footer">
		<div class="o-container">
			
	    </div>
	</footer><!-- /o-footer -->

</div><!-- /o-wrapper -->

<nav id="c-menu--slide-left" class="c-menu c-menu--slide-left">
	<button class="c-menu__close">
		<svg width="25" height="20" viewBox="0 0 25 20" xmlns="http://www.w3.org/2000/svg">
		    <title>
		        Hamburger White
		    </title>
		    <g fill="#FFF" fill-rule="evenodd">
		        <path d="M0 1.342C.696 1.342 1.25.747 1.25 0h22.5c0 .748.554 1.342 1.25 1.342v1.15c-.696 0-1.25.594-1.25 1.34H1.25c0-.746-.554-1.34-1.25-1.34v-1.15zM0 8.842c.696 0 1.25-.595 1.25-1.342h22.5c0 .748.554 1.342 1.25 1.342v1.15c-.696 0-1.25.594-1.25 1.34H1.25c0-.746-.554-1.34-1.25-1.34v-1.15zM1.25 15.833h22.5c0 .748.554 1.342 1.25 1.342v1.15c-.696 0-1.25.594-1.25 1.342H1.25c0-.748-.554-1.342-1.25-1.342v-1.15c.696 0 1.25-.594 1.25-1.342z"/></path>
		    </g>
		</svg>
	</button>
	<ul class="c-menu__items">
		<div class="profile_info">
			<img src="../img/temp/profile.jpg">
			<div class="c-menu__item user"><a href="/views/profile.html"><h3>FirstName lastName</h3></a></div>
		</div>
		<div class="menu_nav">
		    <li class="c-menu__item meeting"><a href="#" class="c-menu__link">My Meetings</a></li>
		    <li class="c-menu__item rooms"><a href="#" class="c-menu__link">My Room Bookings</a></li>
		    <li class="c-menu__item room"><a href="#" class="c-menu__link">Class Room</a></li>
		    <li class="c-menu__item room"><a href="#" class="c-menu__link">by Maker Space</a></li>
		    <li class="c-menu__item room"><a href="#" class="c-menu__link">Window Room</a></li>
		    <li class="c-menu__item availabilities"><a href="#" class="c-menu__link">Room Availabilities</a></li>
		    <li class="c-menu__item search"><a href="#" class="c-menu__link">Advanced Search</a></li>
		    <li class="c-menu__item"><a href="#" class="c-menu__link">Create Startup</a></li>
	    </div>
	    <div class="menu_room">
		    <li class="c-menu__item room_status available"><a href="#" class="c-menu__link">Class Room</a></li>
		    <li class="c-menu__item room_status occupied"><a href="#" class="c-menu__link">by Maker Space</a></li>
		    <li class="c-menu__item room_status occupied"><a href="#" class="c-menu__link">Window Room</a></li>
	    </div>
	</ul>
</nav><!-- /c-menu slide-left -->


<div id="c-mask" class="c-mask"></div>




<!-- menus script -->
<script src="../js/menu.min.js"></script>
<script type="text/javascript">
  /**
   * Slide left instantiation and action.
   */
  var slideLeft = new Menu({
    wrapper: '#o-wrapper',
    type: 'slide-left',
    menuOpenerClass: '.c-button',
    maskId: '#c-mask'
  });

  var slideLeftBtn = document.querySelector('#c-button--slide-left');
  
  slideLeftBtn.addEventListener('click', function(e) {
    e.preventDefault;
    slideLeft.open();
  });

// click handler of the notificaiotn item
$("#notification").click(function() {
	// open close the nav
	$(".notification_menu").toggleClass("notification_menu--active");
});
</script>





<!-- Profile Script -->
<script type="text/javascript">


// Funciton use to open and close the editing tab of each elements in the profile. 
function editMode() {
	$(event.target).closest(".p-info").find(".editMode").toggle();
}


// function used to create elements that will be edited in the editing portion
function newEditingElement(insert) {
	return '<div onclick="removeElement()" class="itemsToEdit"><span>' + insert + '</span></div>';
}


// Remove the selected item from the list it was added to
var removeElement = function() {
	if ($(event.target).parent(".itemsToEdit").length > 0) {
		$(event.target).parent(".itemsToEdit").remove();
	} else {
		$(event.target).remove();
	}
};

function removeRound () {
	$(event.target).closest(".p-info").remove();
};


//Allows for the tabs to switch on the user profile
$(".top_tab").click(function() {
	//remove the active state of the preselected tab
	$(".top_tab").removeClass("active");
	//add the active state to the newly selected tab
	$(this).addClass("active");
});


//Open the editing block 
function editParagrahAnchors() {
	// Variable of the text just below
	var $text = $(event.target).parent(".p-info").find("p");
	var $texta = $(event.target).parent(".p-info").find("a");
	// pick value already save
	var $textVal = $text.text();
	var $textaVal = $texta.text();
	// set value as value in the input
	// check if it is a p or an a
	if ($text.length > 0) {
		// Set the text in the input
		$(event.target).parent(".p-info").find("input").val($textVal);
		$(event.target).parent(".p-info").find("textarea").val($textVal);
		// Hide the paragraphs while editing
		$text.hide();
	} else if ($texta.length > 0) {
		// Set the text of the a in the input
		$(event.target).parent(".p-info").find("input").val($textaVal);
		// Hide the achor until edited.
		$texta.hide();
	} 
	// shows the editing form
	editMode();;
};


//Close the editing block when cancelled
function cancelEditParagraphAnchor() {
	//hide the div containing the ediit fucntionalities
	$(event.target).closest(".editMode").hide();
	// Show the paragraph that was there before
	$(event.target).closest(".p-info").find("p").show();
	// Show the anchor that was there before
	$(event.target).closest(".p-info").find("a").show();
	//Show the saved_container again. 
	$(event.target).closest(".p-info").find(".list_saved_container").show();
};


// Open the editing mode of the search
function editStartupCoach() {
	// Place the current startup coach in the editing mode .list_saved_container adding .edit
	$(event.target).closest(".startup_coached").find(".list_saved_container").addClass("edit");
	// open the search box .editMode
	editMode();
};

function searchEmployee() {
	editMode();
	$(event.target).closest(".list_saved_container").find(".employee_Container").toggleClass("editEmployee");
};

function removeEmployee() {
	$(event.target).closest(".editEmployee").remove();
};


//Opens the search results when the user inputs data in the search box
$(".search input").keydown(function () {
	$(event.target).closest("form").find(".search_results").slideDown();
});


// Open the edit portion of the stage editor
function editStage() {
	editMode();
	$(event.target).closest(".p-info").find(".startup_stage").toggle();
};


function editList() {
	// Select the container of the data already saved
	var $listItemsContainer = $(event.target).closest(".p-info").find(".list_saved_container");
	// Count the number of item in the list
	var $itemsLi = $listItemsContainer.find("li");
	// Select the data in the container previoursly selected and create an array.
	var $ItemsLiContent = $itemsLi.map(function(index) {
		return $(this).text();
	});
	// Select the container in which the new data is going to go.
	var $editingContainer = $(event.target).parent(".p-info").find(".added_list");
	//Variable in which the new HTML will be stored
	var $newItemsToEdit = "";
	// Remove the content if something was previsously added.
	$editingContainer.children().remove();
	// Open the edit box
	editMode();
	// Hide the container that was there before we open the edit funcitons.
	$listItemsContainer.hide();
	// Create the divs from the data previously capture from the li
	 $ItemsLiContent.each(function(index) {
			$newItemsToEdit += newEditingElement($ItemsLiContent[index]);
	 });
	// Insert the divs in the container
	$editingContainer.append($newItemsToEdit);
};


// Opens and closes the details of each funds by a startup
function expandFundDetails(){
	var $details = $(event.target).closest(".inves__round").find(".fund_details");
	//rotate the triangle to show it is now expanded
	$(event.target).toggleClass("expand");
	if ($details.is(':visible')) {
		//change the text from see more to see less
		$(event.target).text("show more");
	} else {
		//change the text from see more to see less
		$(event.target).text("show less");
	}
	//show the details of the fund details
	$details.slideToggle();
};



function editRound() {
	var $fundDetails = $(event.target).closest(".inves__round").find(".fund_details");
	// Round Information
	var $roundName = $(event.target).closest(".inves__round").find(".r_name").text();
	var $roundAmount = $(event.target).closest(".inves__round").find(".r_amount").text();

	// Pick the information in the lists
		// Use of Funds
		var $fundUsesLi = $fundDetails.find(".use_of_funds").find("li");
		var $fundUsesLiContent = $fundUsesLi.map(function(index) {
			return $(this).text();
		});

		// Commitment of funds
		var $fundCommitmentLi = $fundDetails.find(".commited_funds").find("li");
		var $fundCommitmentLiContent = $fundCommitmentLi.map(function(index) {
			return $(this).text();
		});

	// Tag inputs that will be used	
	var $fundNameInput = $(event.target).closest(".p-info").find(".name input");
	var $fundAmountInput = $(event.target).closest(".p-info").find(".amount input");

	// Container where the editing info will be going
	var $fundUsesEditContainer = $(event.target).closest(".p-info").find(".use .added_list");
	var $fundCommitmentEditContainer = $(event.target).closest(".p-info").find(".commited .added_list");

	// Create arrays to store the text of the data to be used
	var $fundUsesEdit = "";
	var $fundCommitmentEdit = "";

	// Open the editing box
	editMode();
	//add the value of the name in the right input
	$fundNameInput.val($roundName);
	//add the value of the amount in the right input
	$fundAmountInput.val($roundAmount);
	// Create the items use of funds in the edit format
	$fundUsesLiContent.each(function(index) {
		$fundUsesEdit += newEditingElement($fundUsesLiContent[index]);
	 });
	// Create the items commitments of funds in the edit format
	$fundCommitmentLiContent.each(function(index) {
		$fundCommitmentEdit += newEditingElement($fundCommitmentLiContent[index]);
	 });

	//remove content from containers
	$fundUsesEditContainer.children().remove();
	$fundCommitmentEditContainer.children().remove();

	// Add the items to be edited in the use of funds
	$fundUsesEditContainer.append($fundUsesEdit);
	// Add the items to be editied in teh commitment of funds
	$fundCommitmentEditContainer.append($fundCommitmentEdit);
};


function editRounds() {
	//show the delete sign and bind the remove funciton to each rounds
	$(event.target).closest(".investment").find(".inves__round").toggleClass("editingRound");
	if ($(event.target).closest(".investment").find(".inves__round").hasClass("editingRound")) {
		var newButton = '<div class="addRound"><button onclick="addRound()">Add Round</button></div>'
		$(event.target).closest(".investment").append(newButton);
	} else {
		$(event.target).closest(".investment").find(".addRound").remove();
	}
}

function addDetailToRound(event) {
	// stop form from submitting
	event.preventDefault();
	// Get the value in the input box 
	var $element = $(event.target).parent(".adding_list").find(".val_to_list").val();
	// Create new tag with the value provided from the input
	var $newTag = newEditingElement($element);
	// Adding the tag to the right div
	$(event.target).closest(".edit_funds").find(".added_list").append($newTag);
	//clean the input from it's previous value
	$(event.target).parent(".adding_list").find(".val_to_list").val("");

};

//Add the item of the list in the 
function addToList(event) {
	// stop form from submitting
	event.preventDefault();
	// Get the value in the input box 
	var $element = $(event.target).parent(".adding_list").find(".val_to_list").val();
	// Create the new tag
	var $newTag = newEditingElement($element);
	// Adding the tag to the right div
	$(event.target).closest(".editMode").find(".added_list").append($newTag);
	//clean the input from it's previous value
	$(event.target).parent(".adding_list").find(".val_to_list").val("");
};

function addRound(){
	var $newRound = $(event.target).parent().prev().clone();
	$newRound.find("input").val("");
	$newRound.find(".round__name .r_amount").text("");
	$newRound.find(".r_name").text("undefined");
	$newRound.find(".fund_details li").remove();
	$newRound.find(".editMode").css("display", "block");
	$(".addRound").before($newRound);
	$(event.target).closest(".investment").find(".inves__round").removeClass("editingRound");
	$(event.target).closest(".investment").find(".addRound").remove();
}

</script>


<!-- Footer Libraries  -->

<!-- Chart JS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js"></script>


</body>
</html>























