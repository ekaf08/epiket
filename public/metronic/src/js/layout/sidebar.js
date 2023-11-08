"use strict";

// Class definition
var KTAppSidebar = function () {
	// Private variables
	var navWrapper;
	var projectsCollapse;
	var sidebar;

	var handleToggle = function () {
		var toggleObj = KTToggle.getInstance(toggle);

		if ( toggleObj === null) {
			return;
		}

		// Add a class to prevent sidebar hover effect after toggle click
		toggleObj.on('kt.toggle.change', function() {
			// Set animation state
			sidebar.classList.add('animating');
			
			// Wait till animation finishes
			setTimeout(function() {
				// Remove animation state
				sidebar.classList.remove('animating');
			}, 300);
		});

		// Store sidebar minimize state in cookie
		toggleObj.on('kt.toggle.changed', function() {
			// In server side check sidebar_minimize_state cookie 
			// value and add data-kt-app-sidebar-minimize="on" 
			// attribute to Body tag and "active" class to the toggle button
			var date = new Date(Date.now() + 30 * 24 * 60 * 60 * 1000); // 30 days from now

			KTCookie.set("sidebar_minimize_state", toggleObj.isEnabled() ? "on" : "off", {expires: date}); 
		});
	}

	var handleMenuScroll = function() {
		var menuActiveItem = navWrapper.querySelector(".menu-link.active");

		if ( !menuActiveItem ) {
			return;
		} 

		if ( KTUtil.isVisibleInContainer(menuActiveItem, navWrapper) === true) {
			return;
		}

		navWrapper.scroll({
			top: KTUtil.getRelativeTopPosition(menuActiveItem, navWrapper),
			behavior: 'smooth'
		});
	}

	// Public methods
	return {
		init: function () {
			// Elements
			toggle = document.querySelector('#kt_app_sidebar_toggle');
			navWrapper = document.querySelector('#kt_app_sidebar_navs_wrappers');
			sidebar = document.querySelector('#kt_app_sidebar');

			if ( toggle ) {
				handleToggle();	
			}
			
			if ( navWrapper ) {
				handleMenuScroll();
			}
		}
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTAppSidebar.init();
});