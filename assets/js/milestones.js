// Milestones page: opens a milestone in a native <dialog>.
// Esc closes it (built in) and focus stays inside while it is open.
// We add: close on backdrop click, previous / next, and focus back on the card.
(function () {
  var opener = null;
  var skipReturn = false;

  function openDialog(id, from) {
    var dialog = document.getElementById(id);
    if (!dialog || typeof dialog.showModal !== 'function') return;
    if (from) opener = from;
    dialog.showModal();
    var close = dialog.querySelector('[data-ms-close]');
    if (close) close.focus();
  }

  document.addEventListener('click', function (e) {
    var card = e.target.closest('[data-ms-open]');
    if (card) {
      openDialog(card.getAttribute('data-ms-open'), card);
      return;
    }

    var closer = e.target.closest('[data-ms-close]');
    if (closer) {
      closer.closest('dialog').close();
      return;
    }

    var step = e.target.closest('[data-ms-go]');
    if (step) {
      var current = step.closest('dialog');
      var target = step.getAttribute('data-ms-go');
      // Moving to another milestone: keep the original card as the place focus returns to.
      skipReturn = true;
      current.close();
      openDialog(target, null);
      return;
    }

    // A click on the backdrop lands on the <dialog> itself, not its inner box.
    if (e.target.matches('dialog.ms-dialog')) {
      e.target.close();
    }
  });

  // The close event does not bubble, so listen in the capture phase.
  document.addEventListener('close', function (e) {
    if (!e.target.matches || !e.target.matches('dialog.ms-dialog')) return;
    if (skipReturn) { skipReturn = false; return; }
    if (opener) opener.focus();
  }, true);
})();
