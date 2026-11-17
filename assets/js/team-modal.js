// Meet the Team profile modal. Uses native <dialog>: Esc closes it and
// focus is trapped while open. We add close-on-backdrop and focus return.
document.addEventListener('click', function (e) {
  var opener = e.target.closest('[data-team-dialog]');
  if (opener) {
    var dialog = document.getElementById(opener.getAttribute('data-team-dialog'));
    if (!dialog || typeof dialog.showModal !== 'function') return;
    dialog.showModal();
    dialog.addEventListener('close', function () { opener.focus(); }, { once: true });
    return;
  }

  var closer = e.target.closest('[data-team-close]');
  if (closer) {
    closer.closest('dialog').close();
    return;
  }

  // A click on the backdrop lands on the <dialog> itself, not its inner box.
  if (e.target.matches('dialog.team-modal')) {
    e.target.close();
  }
});
