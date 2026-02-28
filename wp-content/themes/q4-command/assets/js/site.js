document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.querySelector('[data-menu-toggle]');
  var panel = document.querySelector('[data-menu-panel]');
  var header = document.querySelector('[data-site-header]');

  if (toggle && panel) {
    toggle.addEventListener('click', function () {
      var expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      document.body.classList.toggle('nav-open', !expanded);
    });
  }

  document.querySelectorAll('[data-faq-toggle]').forEach(function (button) {
    button.addEventListener('click', function () {
      var expanded = button.getAttribute('aria-expanded') === 'true';
      var panelId = button.getAttribute('aria-controls');
      var target = panelId ? document.getElementById(panelId) : null;
      button.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      if (target) {
        target.hidden = expanded;
      }
    });
  });

  var syncHeader = function () {
    if (!header) {
      return;
    }

    if (window.scrollY > 16) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
  };

  syncHeader();
  window.addEventListener('scroll', syncHeader, { passive: true });
});
