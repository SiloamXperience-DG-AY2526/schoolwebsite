// Shared accordion for Policies, Conduct, Assessments and Fees.
// Markup comes from svlti_accordion() in functions.php. One panel open per accordion.
(function () {
  function setOpen(button, open) {
    button.setAttribute('aria-expanded', open ? 'true' : 'false');
    button.closest('[data-svlti-acc-item]').classList.toggle('is-open', open);
    var panel = document.getElementById(button.getAttribute('aria-controls'));
    if (panel) panel.hidden = !open;
  }

  document.addEventListener('click', function (e) {
    var button = e.target.closest('.svlti-acc__toggle');
    if (!button) return;
    var accordion = button.closest('[data-svlti-accordion]');
    var wasOpen = button.getAttribute('aria-expanded') === 'true';
    accordion.querySelectorAll('.svlti-acc__toggle[aria-expanded="true"]').forEach(function (b) {
      setOpen(b, false);
    });
    if (!wasOpen) setOpen(button, true);
  });

  // Search box from svlti_accordion_search(): hides items that do not match.
  document.addEventListener('input', function (e) {
    var input = e.target.closest('[data-svlti-acc-search]');
    if (!input) return;
    var targetId = input.getAttribute('data-svlti-acc-search');
    var accordion = document.getElementById(targetId);
    var status = document.getElementById(targetId + '-status');
    var query = input.value.trim().toLowerCase();
    var matches = 0;

    accordion.querySelectorAll('[data-svlti-acc-item]').forEach(function (item) {
      var match = !query || item.textContent.toLowerCase().indexOf(query) !== -1;
      item.hidden = !match;
      if (match) matches++;
    });

    if (status) {
      status.textContent = !query ? '' :
        matches === 0 ? 'No results for "' + input.value.trim() + '". Try another word.' :
        matches + (matches === 1 ? ' result' : ' results');
    }
  });
})();
