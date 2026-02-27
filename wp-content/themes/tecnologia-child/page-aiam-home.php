<?php
/**
 * Template Name: AIAM Homepage
 *
 * Full-page homepage template — Huntress-inspired layout
 * with AIAM Technologies branding.
 */

// Silence direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Pull site info
$site_url  = esc_url( home_url( '/' ) );
$logo_url  = esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
$logo_white = get_stylesheet_directory_uri() . '/assets/logo-white.svg';

// Fallback logo: use the one already in uploads
$logo_display = $logo_url ? $logo_url : content_url( 'uploads/2023/03/Logo-white.svg' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="AIAM Technologies — Enterprise-grade IT security and managed services for every business. No complexity. No surprises.">
<title>AIAM Technologies — Cybersecurity & IT Services Made Simple</title>
<?php wp_head(); ?>
</head>
<body class="aiam-page">

<!-- ========== HEADER ========== -->
<header id="aiam-header">
  <nav class="aiam-nav">
    <a href="<?php echo $site_url; ?>" class="aiam-nav__logo" aria-label="AIAM Technologies Home">
      <img src="<?php echo $logo_display; ?>" alt="AIAM Technologies" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
      <span class="logo-text" style="display:none">AIAM<span>.</span>Technologies</span>
    </a>
    <ul class="aiam-nav__links">
      <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
      <li><a href="<?php echo esc_url( home_url( '/platform/' ) ); ?>">Platform</a></li>
      <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">Pricing</a></li>
      <li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a></li>
      <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
    </ul>
    <div class="aiam-nav__cta">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="aiam-btn aiam-btn--outline aiam-btn--sm">Contact Us</a>
      <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--sm">Get Started</a>
    </div>
    <button class="aiam-nav__mobile-toggle" aria-label="Toggle navigation" onclick="document.querySelector('.aiam-nav__mobile-menu').classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>
  </nav>
  <div class="aiam-nav__mobile-menu">
    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
    <a href="<?php echo esc_url( home_url( '/platform/' ) ); ?>">Platform</a>
    <a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">Pricing</a>
    <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a>
    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
    <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="aiam-btn aiam-btn--primary" style="justify-content:center;margin-top:8px">Get Started</a>
  </div>
</header>

<!-- ========== HERO ========== -->
<section class="aiam-hero">
  <div class="aiam-hero__orb-1"></div>
  <div class="aiam-hero__orb-2"></div>
  <div class="aiam-hero__inner">

    <!-- Left: Content -->
    <div class="aiam-hero__content aiam-fade-in">
      <div class="aiam-eyebrow">
        <span class="dot"></span>
        Trusted by 500+ businesses across North America
      </div>
      <h1 class="aiam-hero__title">
        Threats Stopped.<br>
        <span class="aiam-gradient">Your Business Protected.</span>
      </h1>
      <p class="aiam-hero__subtitle">
        Enterprise-grade cybersecurity and IT management for every business size — without the enterprise price tag or the headaches. We handle the threats, you run the business.
      </p>
      <div class="aiam-hero__actions">
        <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--lg">
          Start for Free <span class="arrow">→</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/demo/' ) ); ?>" class="aiam-btn aiam-btn--ghost aiam-btn--lg">
          Book a Demo
        </a>
      </div>
      <div class="aiam-hero__proof">
        <span class="stars">★★★★★</span>
        <span class="proof-label">4.9/5 across 300+ reviews</span>
        <span class="proof-sep">|</span>
        <span class="proof-label">SOC 2 Type II Certified</span>
      </div>
    </div>

    <!-- Right: Live dashboard mockup -->
    <div class="aiam-hero__visual aiam-fade-in" style="animation-delay:.2s">
      <div class="aiam-hero__visual-card">
        <div class="card-header">
          <div class="card-dots">
            <span></span><span></span><span></span>
          </div>
          <span class="card-title">AIAM Security Operations Centre — Live</span>
        </div>
        <div class="aiam-metric-row">
          <div class="aiam-metric">
            <div class="aiam-metric__val blue">99.97%</div>
            <div class="aiam-metric__label">Uptime SLA</div>
          </div>
          <div class="aiam-metric">
            <div class="aiam-metric__val up">&lt; 4 min</div>
            <div class="aiam-metric__label">Mean Response</div>
          </div>
          <div class="aiam-metric">
            <div class="aiam-metric__val">24/7</div>
            <div class="aiam-metric__label">SOC Coverage</div>
          </div>
        </div>
        <div class="aiam-alert-items">
          <div class="aiam-alert-item">
            <span class="badge badge-red">CRITICAL</span>
            <span class="alert-text">Lateral movement detected — contained</span>
            <span class="alert-time">just now</span>
          </div>
          <div class="aiam-alert-item">
            <span class="badge badge-yellow">MEDIUM</span>
            <span class="alert-text">Suspicious login — MFA enforced</span>
            <span class="alert-time">2 min</span>
          </div>
          <div class="aiam-alert-item">
            <span class="badge badge-green">RESOLVED</span>
            <span class="alert-text">Ransomware attempt blocked</span>
            <span class="alert-time">8 min</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ========== STATS BAR ========== -->
<section class="aiam-stats-bar">
  <div class="aiam-stats-bar__inner">
    <div class="aiam-stat aiam-fade-in">
      <div class="aiam-stat__val">500+</div>
      <div class="aiam-stat__label">Businesses Protected</div>
    </div>
    <div class="aiam-stat aiam-fade-in" style="animation-delay:.1s">
      <div class="aiam-stat__val">&lt; 4 min</div>
      <div class="aiam-stat__label">Mean Time to Response</div>
    </div>
    <div class="aiam-stat aiam-fade-in" style="animation-delay:.2s">
      <div class="aiam-stat__val">99.97%</div>
      <div class="aiam-stat__label">Uptime Guaranteed</div>
    </div>
    <div class="aiam-stat aiam-fade-in" style="animation-delay:.3s">
      <div class="aiam-stat__val">24/7</div>
      <div class="aiam-stat__label">Human SOC Monitoring</div>
    </div>
  </div>
</section>

<!-- ========== TRUST LOGOS ========== -->
<section class="aiam-trust-bar aiam-section--dark">
  <div class="aiam-container">
    <p class="aiam-trust-bar__label">Technology partners & certifications</p>
    <div class="aiam-trust-bar__logos">
      <img src="<?php echo content_url( 'uploads/2023/03/Amazon_Web_Services_Logo.svg' ); ?>" alt="Amazon Web Services">
      <img src="<?php echo content_url( 'uploads/2023/03/Microsoft_logo.svg' ); ?>" alt="Microsoft">
      <img src="<?php echo content_url( 'uploads/2023/03/Google_2015_logo.svg' ); ?>" alt="Google">
      <img src="<?php echo content_url( 'uploads/2023/03/CISSP.png' ); ?>" alt="CISSP Certified">
    </div>
  </div>
</section>

<!-- ========== SERVICES / PLATFORM ========== -->
<section class="aiam-section aiam-section--mid">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">Our Platform</div>
      <h2>Everything you need.<br>Nothing you don't.</h2>
      <p>Four integrated services, one dashboard. Real humans backing every alert. Built for businesses that care about security but need to stay focused on their core work.</p>
    </div>

    <div class="aiam-grid-2" style="gap:1.5rem">
      <!-- Card 1: EDR -->
      <div class="aiam-card aiam-fade-in">
        <div class="aiam-card__icon">🛡️</div>
        <div style="display:inline-block;background:rgba(16,185,129,.12);color:#34D399;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Active Protection</div>
        <h3>Managed Endpoint Detection & Response</h3>
        <p>Full visibility into every endpoint, 24/7. Our SOC analysts investigate every alert — so you only hear about the real threats, with a remediation plan attached.</p>
        <ul class="aiam-check-list">
          <li>Continuous endpoint monitoring across all devices</li>
          <li>Human-verified threat analysis — zero false-alarm fatigue</li>
          <li>Automated isolation of compromised machines</li>
          <li>Same-day deployment, no rip-and-replace</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/services/edr/' ) ); ?>" class="aiam-card__link">Learn about EDR <span>→</span></a>
      </div>

      <!-- Card 2: SIEM -->
      <div class="aiam-card aiam-fade-in" style="animation-delay:.1s">
        <div class="aiam-card__icon">📊</div>
        <div style="display:inline-block;background:rgba(37,99,235,.12);color:var(--aiam-lavender-dim);font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Compliance Ready</div>
        <h3>Managed SIEM & Log Management</h3>
        <p>Centralised log collection, correlation, and compliance reporting — without the complexity or the per-GB pricing surprises. Flat-rate, predictable, and always audit-ready.</p>
        <ul class="aiam-check-list">
          <li>Per-endpoint pricing — not per log volume</li>
          <li>Pre-built compliance dashboards (SOC 2, ISO 27001, HIPAA)</li>
          <li>7-year retention options available</li>
          <li>Cloud-native: Azure, AWS, GCP supported</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/services/siem/' ) ); ?>" class="aiam-card__link">Learn about SIEM <span>→</span></a>
      </div>

      <!-- Card 3: ITDR -->
      <div class="aiam-card aiam-fade-in" style="animation-delay:.15s">
        <div class="aiam-card__icon">🔐</div>
        <div style="display:inline-block;background:rgba(245,158,11,.12);color:#FCD34D;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Identity Defence</div>
        <h3>Identity & Microsoft 365 Protection</h3>
        <p>Your identities are your biggest attack surface. We detect compromised accounts, business email compromise, and lateral movement before attackers get what they came for.</p>
        <ul class="aiam-check-list">
          <li>Microsoft 365 & Azure AD deep integration</li>
          <li>Business Email Compromise (BEC) detection</li>
          <li>Impossible travel & anomalous login alerting</li>
          <li>3-minute mean time to respond on identity threats</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/services/itdr/' ) ); ?>" class="aiam-card__link">Learn about ITDR <span>→</span></a>
      </div>

      <!-- Card 4: Security Awareness -->
      <div class="aiam-card aiam-fade-in" style="animation-delay:.2s">
        <div class="aiam-card__icon">🎯</div>
        <div style="display:inline-block;background:rgba(6,182,212,.12);color:#67E8F9;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Human Firewall</div>
        <h3>Security Awareness Training</h3>
        <p>Turn your employees from your weakest link into your first line of defence. Engaging, short-form training that actually gets completed — and actually changes behaviour.</p>
        <ul class="aiam-check-list">
          <li>Simulated phishing campaigns with real-world lures</li>
          <li>98% course completion rate</li>
          <li>Automated training triggered by risky behaviours</li>
          <li>Leadership dashboards and compliance reporting</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/services/training/' ) ); ?>" class="aiam-card__link">Learn about Training <span>→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- ========== WHY AIAM (Split section) ========== -->
<section class="aiam-section aiam-section--dark">
  <div class="aiam-split">
    <div class="aiam-split__content aiam-fade-in">
      <div class="aiam-eyebrow">Why AIAM?</div>
      <h2>We do the hard work.<br>You take the credit.</h2>
      <p style="color:var(--aiam-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        Most cybersecurity tools create more noise than clarity. They generate thousands of alerts, require dedicated security staff to manage, and still leave gaps. AIAM is different — we built our platform around the insight that the hardest part of security isn't the technology. It's the people behind it.
      </p>
      <p style="color:var(--aiam-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:2rem">
        Every alert is reviewed by a human analyst. Every threat is investigated. Every remediation step is written in plain English. You get answers, not dashboards.
      </p>
      <div style="display:flex;gap:1rem;flex-wrap:wrap">
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="aiam-btn aiam-btn--primary">About AIAM <span class="arrow">→</span></a>
        <a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="aiam-btn aiam-btn--outline">View Pricing</a>
      </div>
    </div>
    <div class="aiam-split__visual aiam-fade-in" style="animation-delay:.15s">
      <!-- Visual comparison -->
      <div style="width:100%">
        <div style="margin-bottom:1.5rem">
          <div style="font-size:.8125rem;font-weight:600;color:var(--aiam-grey-mid);letter-spacing:.08em;text-transform:uppercase;margin-bottom:1rem">Traditional MSSP vs AIAM</div>
          <?php
          $comparisons = [
            ['label' => 'Alert noise per week', 'them' => '2,000+', 'us' => '12 (verified)'],
            ['label' => 'Response time',        'them' => '24–72 hrs', 'us' => '< 4 min'],
            ['label' => 'Pricing model',        'them' => 'Per GB / opaque', 'us' => 'Flat per endpoint'],
            ['label' => 'Setup time',           'them' => '8–12 weeks', 'us' => 'Same day'],
            ['label' => 'Dedicated analyst',    'them' => 'Shared pool', 'us' => 'Named contact'],
          ];
          foreach ( $comparisons as $row ) : ?>
          <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:.75rem;align-items:center;padding:.75rem;background:rgba(255,255,255,.03);border-radius:8px;margin-bottom:.5rem;font-size:.875rem;">
            <span style="color:var(--aiam-grey-mid)"><?php echo esc_html( $row['label'] ); ?></span>
            <span style="color:var(--aiam-grey-dark);text-decoration:line-through;text-align:center"><?php echo esc_html( $row['them'] ); ?></span>
            <span style="color:var(--aiam-green);font-weight:600;text-align:center"><?php echo esc_html( $row['us'] ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== THREAT SCENARIOS ========== -->
<section class="aiam-section aiam-section--mid">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">Real Threats We Stop</div>
      <h2>Every attack type. One platform.</h2>
      <p>Cyber threats don't wait for business hours. Neither do we.</p>
    </div>
    <div class="aiam-grid-3">
      <?php
      $threats = [
        ['icon' => '📧', 'title' => 'Business Email Compromise', 'stat' => '51% of businesses targeted', 'desc' => 'Attackers impersonate executives to authorise fraudulent transfers. We catch the account takeover before the wire goes out.'],
        ['icon' => '🔒', 'title' => 'Ransomware', 'stat' => 'Avg 17 hrs to full encryption', 'desc' => 'By the time you notice, it's often too late. Our ransomware canaries and behavioural detection stop encryption before it spreads.'],
        ['icon' => '🎣', 'title' => 'Phishing Attacks', 'stat' => '31% of all incidents', 'desc' => 'One click can cost you everything. We detect credential theft in real time and lock compromised accounts before the attacker pivots.'],
        ['icon' => '🔑', 'title' => 'Compromised Credentials', 'stat' => '#1 initial access vector', 'desc' => 'Stolen passwords power most breaches. Our ITDR solution detects impossible logins and unusual access patterns instantly.'],
        ['icon' => '☁️', 'title' => 'Cloud Misconfigurations', 'stat' => 'Source of 82% of breaches', 'desc' => 'Open S3 buckets, excessive permissions, and misconfigured Azure roles are a hacker's best friend. We find them first.'],
        ['icon' => '🕵️', 'title' => 'Insider Threats', 'stat' => 'Average 77-day detection gap', 'desc' => 'Whether malicious or accidental, insider threats are the hardest to detect. Behavioural analytics surface anomalies early.'],
      ];
      foreach ( $threats as $i => $threat ) : ?>
      <div class="aiam-card aiam-fade-in" style="animation-delay:<?php echo $i * 0.08; ?>s">
        <div class="aiam-card__icon"><?php echo $threat['icon']; ?></div>
        <div style="font-size:.75rem;font-weight:700;color:var(--aiam-cyan);letter-spacing:.06em;text-transform:uppercase;margin-bottom:.5rem"><?php echo esc_html( $threat['stat'] ); ?></div>
        <h3><?php echo esc_html( $threat['title'] ); ?></h3>
        <p><?php echo esc_html( $threat['desc'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="aiam-section aiam-section--dark">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">Client Stories</div>
      <h2>Don't take our word for it.</h2>
      <p>Real results from real businesses. No cherry-picked case studies — just what our clients actually say.</p>
    </div>
    <div class="aiam-testimonial-grid">
      <?php
      $testimonials = [
        ['initials' => 'RK', 'stars' => '★★★★★', 'quote' => 'We had a breach attempt last quarter. AIAM contained it in under six minutes and handed us a full incident report before we'd even finished our morning coffee. That's the difference between a partner and a vendor.', 'name' => 'Robert K.', 'role' => 'CEO, Regional Dental Group'],
        ['initials' => 'SM', 'stars' => '★★★★★', 'quote' => 'Switched from our old MSSP after constant alert fatigue. AIAM only pings us when it matters — and when they do, there's always a fix attached. Night and day difference for our lean IT team.', 'name' => 'Sarah M.', 'role' => 'IT Director, Logistics Co.'],
        ['initials' => 'DP', 'stars' => '★★★★★', 'quote' => 'The compliance reporting alone saves us two weeks of prep work before each audit. Clean dashboards, zero scrambling, and our auditors actually commented on how organised everything was.', 'name' => 'David P.', 'role' => 'CTO, FinTech Startup'],
      ];
      foreach ( $testimonials as $i => $t ) : ?>
      <div class="aiam-testimonial aiam-fade-in" style="animation-delay:<?php echo $i * 0.1; ?>s">
        <div class="aiam-testimonial__stars"><?php echo $t['stars']; ?></div>
        <p class="aiam-testimonial__quote">"<?php echo esc_html( $t['quote'] ); ?>"</p>
        <div class="aiam-testimonial__author">
          <div class="aiam-testimonial__avatar"><?php echo esc_html( $t['initials'] ); ?></div>
          <div>
            <div class="aiam-testimonial__name"><?php echo esc_html( $t['name'] ); ?></div>
            <div class="aiam-testimonial__role"><?php echo esc_html( $t['role'] ); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========== CTA BAND ========== -->
<section class="aiam-cta-band">
  <div class="aiam-cta-band__inner aiam-fade-in">
    <div class="aiam-eyebrow" style="justify-content:center">Ready to get protected?</div>
    <h2>Security that works as hard as you do.</h2>
    <p>No long contracts. No complex onboarding. Deploy in hours, not weeks. Start with a free assessment and see exactly what's at risk — before an attacker does.</p>
    <div class="aiam-cta-band__actions">
      <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--lg">Start for Free <span class="arrow">→</span></a>
      <a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>" class="aiam-btn aiam-btn--outline aiam-btn--lg">View Pricing</a>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<footer id="aiam-footer">
  <div class="aiam-footer__inner">
    <div class="aiam-footer__top">
      <div class="aiam-footer__brand">
        <img src="<?php echo $logo_display; ?>" alt="AIAM Technologies" onerror="this.style.display='none'">
        <p>Enterprise-grade cybersecurity and IT management for every business. Human-led, technology-powered, 24/7/365.</p>
        <div style="margin-top:1.5rem">
          <a href="<?php echo esc_url( home_url( '/get-started/' ) ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--sm">Start Free Trial</a>
        </div>
      </div>
      <div class="aiam-footer__col">
        <h5>Platform</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url( '/services/edr/' ) ); ?>">Managed EDR</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/siem/' ) ); ?>">Managed SIEM</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/itdr/' ) ); ?>">Identity Protection</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/training/' ) ); ?>">Security Training</a></li>
          <li><a href="<?php echo esc_url( home_url( '/platform/' ) ); ?>">Platform Overview</a></li>
        </ul>
      </div>
      <div class="aiam-footer__col">
        <h5>Company</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About AIAM</a></li>
          <li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></li>
          <li><a href="<?php echo esc_url( home_url( '/partners/' ) ); ?>">Partners</a></li>
          <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
        </ul>
      </div>
      <div class="aiam-footer__col">
        <h5>Resources</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">Pricing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/resources/case-studies/' ) ); ?>">Case Studies</a></li>
          <li><a href="<?php echo esc_url( home_url( '/resources/guides/' ) ); ?>">Security Guides</a></li>
          <li><a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">Support Docs</a></li>
          <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="aiam-footer__bottom">
      <p class="aiam-footer__copy">© <?php echo date('Y'); ?> AIAM Technologies. All rights reserved.</p>
      <div class="aiam-footer__social">
        <a href="#" aria-label="LinkedIn">in</a>
        <a href="#" aria-label="Twitter / X">𝕏</a>
        <a href="#" aria-label="YouTube">▶</a>
      </div>
    </div>
  </div>
</footer>

<script>
// Sticky header on scroll
(function() {
  const header = document.getElementById('aiam-header');
  const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 40);
  window.addEventListener('scroll', onScroll, { passive: true });
})();

// Intersection Observer for fade-ins
(function() {
  const items = document.querySelectorAll('.aiam-fade-in');
  if (!items.length) return;
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
  }, { threshold: 0.12 });
  items.forEach(el => obs.observe(el));
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
