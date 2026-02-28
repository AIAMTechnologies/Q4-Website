document.addEventListener('DOMContentLoaded', function () {
  var body = document.body;
  var toggle = document.querySelector('[data-menu-toggle]');
  var panel = document.querySelector('[data-menu-panel]');
  var header = document.querySelector('[data-site-header]');

  if (toggle && panel) {
    toggle.addEventListener('click', function () {
      var expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      body.classList.toggle('nav-open', !expanded);
    });

    panel.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        toggle.setAttribute('aria-expanded', 'false');
        body.classList.remove('nav-open');
      });
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

  var revealTargets = document.querySelectorAll(
    '.hero-copy > *, .hero-stack-card, .signal-card, .section-heading, .service-card, .feature-card, .timeline-card, .industry-card, .testimonial-card, .post-card, .highlight-card, .outcome-card, .contact-point, .faq-item, .contact-form-intro, .form-notice, .q4-contact-form, .footer-cta, .footer-grid > *'
  );

  if (!revealTargets.length) {
    return;
  }

  revealTargets.forEach(function (node, index) {
    node.classList.add('reveal-item');
    node.style.setProperty('--reveal-delay', ((index % 6) * 70) + 'ms');
  });

  if (!('IntersectionObserver' in window)) {
    revealTargets.forEach(function (node) {
      node.classList.add('is-visible');
    });
    return;
  }

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0.12,
      rootMargin: '0px 0px -10% 0px'
    }
  );

  revealTargets.forEach(function (node) {
    observer.observe(node);
  });
});
