/**
 * Header phone menu: keep Tab looping inside the open menu (NFR-7).
 *
 * WordPress's Navigation block traps focus using the links that were visible
 * when the menu opened. Groups in the phone menu open on tap, so links shown
 * later (e.g. "Contact Us" > "Our Location") would be skipped. This listener
 * runs first (capture phase) and works from the links visible right now.
 * Esc, open/close and focus return are still handled by WordPress.
 */
( function () {
	var OPEN_MENU = '.site-header .wp-block-navigation__responsive-container.is-menu-open';
	var FOCUSABLE = 'a[href], button:not([disabled]):not([aria-hidden="true"]), [tabindex]:not([tabindex^="-"])';

	function isShown( el ) {
		if ( typeof el.checkVisibility === 'function' ) {
			return el.checkVisibility( { checkVisibilityCSS: true } );
		}
		return el.offsetParent !== null;
	}

	document.addEventListener(
		'keydown',
		function ( event ) {
			if ( event.key !== 'Tab' ) {
				return;
			}
			var menu = document.querySelector( OPEN_MENU );
			if ( ! menu || ! menu.contains( document.activeElement ) ) {
				return;
			}
			var items = Array.prototype.filter.call( menu.querySelectorAll( FOCUSABLE ), isShown );
			if ( ! items.length ) {
				return;
			}
			var first = items[ 0 ];
			var last = items[ items.length - 1 ];

			// From here on this listener owns Tab inside the open menu.
			event.stopPropagation();

			if ( event.shiftKey && document.activeElement === first ) {
				event.preventDefault();
				last.focus();
			} else if ( ! event.shiftKey && document.activeElement === last ) {
				event.preventDefault();
				first.focus();
			}
			// Otherwise the browser moves focus to the next visible item as usual.
		},
		true
	);
} )();
