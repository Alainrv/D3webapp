	    

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
