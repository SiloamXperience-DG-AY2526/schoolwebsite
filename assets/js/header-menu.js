/**
 * Header phone menu: groups that expand/collapse on tap (agreed 4 Nov, plan Q2).
 *
 * WordPress 7.x always shows every group open inside the full-screen phone
 * panel and reports them as open (aria-expanded="true"). This script, only
 * while that panel is open:
 *   - starts every group collapsed and toggles one group per tap / Enter / Space,
 *     keeping aria-expanded in step with what is shown;
 *   - keeps Tab / Shift+Tab looping over the items visible right now
 *     (WordPress's own loop only knows the items visible when the panel opened).
 * Escape-to-close, the Close button and focus return to the menu button are
 * left to WordPress. Desktop dropdowns are untouched.
 * Without this script the CSS falls back to WordPress's all-open panel.
 */
( function () {
	var panel = document.querySelector( '.site-header .wp-block-navigation__responsive-container' );
	if ( ! panel ) {
		return;
	}

	var TOGGLE = '.wp-block-navigation-submenu__toggle';
	var FOCUSABLE = 'a[href], button:not([disabled]):not([aria-hidden="true"]), [tabindex]:not([tabindex^="-"])';

	// Turns on the collapsed-by-default CSS (see "SITE HEADER (Asher)" in custom.css).
	document.documentElement.classList.add( 'svlti-menu-accordion' );

	function isOpen() {
		return panel.classList.contains( 'is-menu-open' );
	}

	function isShown( el ) {
		if ( typeof el.checkVisibility === 'function' ) {
			return el.checkVisibility( { checkVisibilityCSS: true } );
		}
		return el.offsetParent !== null;
	}

	function setExpanded( button, expanded ) {
		button.setAttribute( 'aria-expanded', expanded ? 'true' : 'false' );
		var item = button.closest( '.has-child' );
		if ( item ) {
			item.classList.toggle( 'is-expanded', expanded );
		}
	}

	function collapseAll() {
		Array.prototype.forEach.call( panel.querySelectorAll( TOGGLE ), function ( button ) {
			setExpanded( button, false );
		} );
	}

	// Panel opened: start collapsed (after WordPress has marked every group open).
	// Panel closed: clear our classes; WordPress resets aria-expanded itself.
	new MutationObserver( function () {
		if ( isOpen() ) {
			collapseAll();
			window.requestAnimationFrame( collapseAll );
		} else {
			Array.prototype.forEach.call( panel.querySelectorAll( '.has-child.is-expanded' ), function ( item ) {
				item.classList.remove( 'is-expanded' );
			} );
		}
	} ).observe( panel, { attributes: true, attributeFilter: [ 'class' ] } );

	// Tap, click, Enter or Space on a group name inside the open panel.
	document.addEventListener(
		'click',
		function ( event ) {
			if ( ! isOpen() || ! event.target.closest ) {
				return;
			}
			var button = event.target.closest( TOGGLE );
			if ( ! button || ! panel.contains( button ) ) {
				return;
			}
			event.preventDefault();
			event.stopPropagation(); // WordPress would otherwise keep the group open.
			setExpanded( button, button.getAttribute( 'aria-expanded' ) !== 'true' );
		},
		true
	);

	// Tab / Shift+Tab loop over the items visible right now.
	document.addEventListener(
		'keydown',
		function ( event ) {
			if ( event.key !== 'Tab' || ! isOpen() || ! panel.contains( document.activeElement ) ) {
				return;
			}
			var items = Array.prototype.filter.call( panel.querySelectorAll( FOCUSABLE ), isShown );
			if ( ! items.length ) {
				return;
			}
			event.stopPropagation(); // This listener owns Tab while the panel is open.
			var first = items[ 0 ];
			var last = items[ items.length - 1 ];
			if ( event.shiftKey && document.activeElement === first ) {
				event.preventDefault();
				last.focus();
			} else if ( ! event.shiftKey && document.activeElement === last ) {
				event.preventDefault();
				first.focus();
			}
		},
		true
	);
} )();
