<?php
/**
 * Template Name: AIAM Homepage
 * Q4 Gems — Full homepage template
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$site_url  = esc_url( home_url( '/' ) );
$logo_url  = content_url( 'uploads/2023/03/q4g-white.png' );
$logo_color = content_url( 'uploads/2023/03/logo-q4gems-01.png' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Q4 Gems — 25 years of enterprise IT excellence. Cybersecurity, Cloud, Managed Services, and Consulting for businesses of every size. Toronto-based, globally trusted.">
<title>Q4 Gems — Enterprise IT Made Simple</title>
<?php wp_head(); ?>
</head>
<body class="q4-page">

<!-- ===== HEADER ===== -->
<header id="q4-header">
  <nav class="q4-nav">
    <a href="<?php echo $site_url; ?>" class="q4-nav__logo" aria-label="Q4 Gems Home">
      <img src="<?php echo $logo_url; ?>" alt="Q4 Gems" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
      <span class="logo-fallback">Q4<span>Gems</span></span>
    </a>
    <ul class="q4-nav__links">
      <li><a href="<?php echo esc_url( home_url('/cyber-security/') ); ?>">Cyber Security</a></li>
      <li><a href="<?php echo esc_url( home_url('/services/') ); ?>">Managed Services</a></li>
      <li><a href="<?php echo esc_url( home_url('/consulting/') ); ?>">Consulting</a></li>
      <li><a href="<?php echo esc_url( home_url('/solutions/') ); ?>">Solutions</a></li>
      <li><a href="<?php echo esc_url( home_url('/pricing/') ); ?>">Pricing</a></li>
      <li><a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a></li>
    </ul>
    <div class="q4-nav__cta">
      <a href="<?php echo esc_url( home_url('/client-support/') ); ?>" class="q4-btn q4-btn--outline q4-btn--sm">Client Support</a>
      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="q4-btn q4-btn--primary q4-btn--sm">Get Started</a>
    </div>
    <button class="q4-nav__toggle" aria-label="Menu" onclick="document.querySelector('.q4-mobile-menu').classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>
  </nav>
  <div class="q4-mobile-menu">
    <a href="<?php echo esc_url( home_url('/cyber-security/') ); ?>">Cyber Security</a>
    <a href="<?php echo esc_url( home_url('/services/') ); ?>">Managed Services</a>
    <a href="<?php echo esc_url( home_url('/consulting/') ); ?>">Consulting</a>
    <a href="<?php echo esc_url( home_url('/solutions/') ); ?>">Solutions</a>
    <a href="<?php echo esc_url( home_url('/pricing/') ); ?>">Pricing</a>
    <a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a>
    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="q4-btn q4-btn--primary" style="justify-content:center;margin-top:8px">Get Started</a>
  </div>
</header>

<!-- ===== HERO ===== -->
<section class="q4-hero">
  <div class="q4-hero__orb-1"></div>
  <div class="q4-hero__orb-2"></div>
  <div class="q4-hero__inner">

    <div class="q4-fade-in">
      <div class="q4-eyebrow">
        <span class="dot"></span>
        Toronto-Based · Est. 1999 · Globally Trusted
      </div>
      <h1 class="q4-hero__title">
        Enterprise IT.<br>
        <span class="q4-gradient">Finally Accessible.</span>
      </h1>
      <p class="q4-hero__subtitle">
        25 years of delivering cybersecurity, cloud, managed services, and consulting to businesses across every industry. We cut through the complexity so you can focus on what you do best.
      </p>
      <div class="q4-hero__actions">
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="q4-btn q4-btn--primary q4-btn--lg">
          Talk to an Expert <span class="arrow">→</span>
        </a>
        <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="q4-btn q4-btn--ghost q4-btn--lg">
          Explore Services
        </a>
      </div>
      <div class="q4-hero__proof">
        <span class="stars">★★★★★</span>
        <span class="proof-label">Trusted by 500+ organizations</span>
        <span class="proof-sep">|</span>
        <span class="proof-label">Microsoft & Dell Partner</span>
      </div>
    </div>

    <!-- Visual: Live dashboard mockup -->
    <div class="q4-fade-in" style="animation-delay:.15s">
      <div class="q4-visual-card">
        <div class="vc-header">
          <div class="vc-dots"><span></span><span></span><span></span></div>
          <span class="vc-title">Q4 Gems Operations Dashboard</span>
        </div>
        <!-- Service status grid -->
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:.75rem;margin-bottom:1rem">
          <?php
          $services_status = [
            ['🛡️', 'Security Operations',  '24/7 Active',     '#34D399'],
            ['☁️', 'Cloud Infrastructure', '99.97% Uptime',   '#60A5FA'],
            ['💻', 'Remote Monitoring',    '450 Endpoints',    '#A78BFA'],
            ['📧', 'Email & M365',         'All Systems Go',   '#34D399'],
          ];
          foreach ( $services_status as $s ) : ?>
          <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07);border-radius:8px;padding:.875rem">
            <div style="font-size:1.25rem;margin-bottom:.25rem"><?php echo $s[0]; ?></div>
            <div style="font-size:.75rem;font-weight:600;color:#fff;margin-bottom:2px"><?php echo esc_html( $s[1] ); ?></div>
            <div style="font-size:.6875rem;color:<?php echo $s[3]; ?>;font-weight:600"><?php echo esc_html( $s[2] ); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <!-- Recent alerts -->
        <?php
        $alerts = [
          ['CRITICAL', '#FCA5A5', 'Ransomware attempt — blocked instantly'],
          ['RESOLVED', '#6EE7B7', 'Cloud backup — completed successfully'],
          ['INFO',     '#93C5FD', 'M365 license renewal — auto-processed'],
        ];
        foreach ( $alerts as $a ) : ?>
        <div style="display:flex;align-items:center;gap:.75rem;padding:.75rem;background:rgba(255,255,255,.03);border-radius:6px;margin-bottom:.375rem;font-size:.75rem">
          <span style="padding:1px 7px;border-radius:100px;font-weight:700;font-size:.625rem;background:rgba(255,255,255,.08);color:<?php echo $a[1]; ?>"><?php echo $a[0]; ?></span>
          <span style="color:var(--q4-grey-light);flex:1"><?php echo esc_html( $a[2] ); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<!-- ===== STATS BAR ===== -->
<section class="q4-stats-bar">
  <div class="q4-stats-bar__inner">
    <div class="q4-stat q4-fade-in">
      <div class="q4-stat__val">25+</div>
      <div class="q4-stat__label">Years in Business</div>
    </div>
    <div class="q4-stat q4-fade-in" style="animation-delay:.08s">
      <div class="q4-stat__val">500+</div>
      <div class="q4-stat__label">Organizations Served</div>
    </div>
    <div class="q4-stat q4-fade-in" style="animation-delay:.16s">
      <div class="q4-stat__val">99.97%</div>
      <div class="q4-stat__label">Uptime SLA</div>
    </div>
    <div class="q4-stat q4-fade-in" style="animation-delay:.24s">
      <div class="q4-stat__val">24/7</div>
      <div class="q4-stat__label">Monitoring & Support</div>
    </div>
  </div>
</section>

<!-- ===== PARTNER LOGOS ===== -->
<section class="q4-trust-bar q4-section--dark">
  <div class="q4-container">
    <p class="q4-trust-bar__label">Trusted technology partners</p>
    <div class="q4-trust-bar__logos">
      <img src="<?php echo content_url('uploads/2023/03/Microsoft_logo.svg'); ?>" alt="Microsoft">
      <img src="<?php echo content_url('uploads/2023/03/Amazon_Web_Services_Logo.svg'); ?>" alt="AWS">
      <img src="<?php echo content_url('uploads/2023/03/Google_2015_logo.svg'); ?>" alt="Google">
      <img src="<?php echo content_url('uploads/2023/03/Microsoft-Azure-Logo.png'); ?>" alt="Azure">
      <img src="<?php echo content_url('uploads/2023/03/Salesforce.com-logo.svg'); ?>" alt="Salesforce">
    </div>
  </div>
</section>

<!-- ===== CORE SERVICES ===== -->
<section class="q4-section q4-section--mid">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow">What We Do</div>
      <h2>One partner for your<br>entire IT landscape.</h2>
      <p>From securing your perimeter to building your cloud strategy, Q4 Gems delivers end-to-end technology management — with the expertise of a global firm and the responsiveness of a local team.</p>
    </div>
    <div class="q4-grid-3" style="gap:1.5rem">

      <div class="q4-card q4-fade-in">
        <div class="q4-card__icon">🛡️</div>
        <div style="display:inline-block;background:rgba(239,68,68,.1);color:#FCA5A5;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Priority Service</div>
        <h3>Cyber Security</h3>
        <p>Proactive threat detection, risk assessments, compliance management, and cloud security across your entire environment — before attackers find the gaps.</p>
        <ul class="q4-check-list">
          <li>Security posture assessment & hardening</li>
          <li>Cloud security & compliance</li>
          <li>Information security programme management</li>
          <li>Risk & compliance (SOC 2, ISO 27001, HIPAA)</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/cyber-security/') ); ?>" class="q4-card__link">Explore Security <span>→</span></a>
      </div>

      <div class="q4-card q4-fade-in" style="animation-delay:.1s">
        <div class="q4-card__icon">⚙️</div>
        <div style="display:inline-block;background:rgba(36,128,191,.12);color:#93C5FD;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Fully Managed</div>
        <h3>Managed IT Services</h3>
        <p>We become your IT department — or extend the one you have. Remote monitoring, service desk, backup, disaster recovery, and cloud management, all under one contract.</p>
        <ul class="q4-check-list">
          <li>24/7 remote monitoring & management (RMM)</li>
          <li>Service desk & end-user support</li>
          <li>Offsite data backup & disaster recovery</li>
          <li>Business continuity planning</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/services/') ); ?>" class="q4-card__link">Explore Managed Services <span>→</span></a>
      </div>

      <div class="q4-card q4-fade-in" style="animation-delay:.2s">
        <div class="q4-card__icon">☁️</div>
        <div style="display:inline-block;background:rgba(16,185,129,.12);color:#6EE7B7;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Cloud-Native</div>
        <h3>Cloud & Infrastructure</h3>
        <p>Whether you're migrating to the cloud, optimising an existing environment, or running a hybrid setup — we design, build, and manage infrastructure that performs.</p>
        <ul class="q4-check-list">
          <li>Go-to-cloud strategy & migration</li>
          <li>Virtual data centre & colocation</li>
          <li>Microsoft Azure, AWS, Google Cloud</li>
          <li>Fully managed cloud services</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/consulting/go-to-cloud-strategy/') ); ?>" class="q4-card__link">Explore Cloud <span>→</span></a>
      </div>

      <div class="q4-card q4-fade-in" style="animation-delay:.1s">
        <div class="q4-card__icon">🧭</div>
        <div style="display:inline-block;background:rgba(245,158,11,.12);color:#FCD34D;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Strategic</div>
        <h3>IT Consulting</h3>
        <p>Technology decisions are business decisions. Our consultants bring 25 years of real-world experience to digital transformation, project delivery, and strategic IT planning.</p>
        <ul class="q4-check-list">
          <li>Digital transformation roadmaps</li>
          <li>Project management & delivery</li>
          <li>Professional services & IT advisory</li>
          <li>Vendor management & procurement</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/consulting/') ); ?>" class="q4-card__link">Explore Consulting <span>→</span></a>
      </div>

      <div class="q4-card q4-fade-in" style="animation-delay:.2s">
        <div class="q4-card__icon">📱</div>
        <div style="display:inline-block;background:rgba(139,92,246,.12);color:#C4B5FD;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Digital Growth</div>
        <h3>Web Solutions</h3>
        <p>Your digital presence is your first impression. We design, build, and optimise websites and mobile apps that generate real business results — not just traffic.</p>
        <ul class="q4-check-list">
          <li>Website design & development</li>
          <li>Mobile app design & creation</li>
          <li>Search engine optimisation (SEO)</li>
          <li>Digital marketing integration</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/web-solutions/') ); ?>" class="q4-card__link">Explore Web Solutions <span>→</span></a>
      </div>

      <div class="q4-card q4-fade-in" style="animation-delay:.3s">
        <div class="q4-card__icon">📋</div>
        <div style="display:inline-block;background:rgba(14,165,233,.12);color:#7DD3FC;font-size:.75rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:2px 10px;border-radius:100px;margin-bottom:12px">Productivity</div>
        <h3>Microsoft 365 & Google Workspace</h3>
        <p>Move to the cloud collaboration platform that fits your team. We handle licensing, migration, configuration, and ongoing support so your people can work from anywhere, securely.</p>
        <ul class="q4-check-list">
          <li>Microsoft 365 Business Premium</li>
          <li>Google Workspace setup & migration</li>
          <li>Email, Teams, SharePoint & OneDrive</li>
          <li>Identity management & MFA enforcement</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/solutions/') ); ?>" class="q4-card__link">Explore Solutions <span>→</span></a>
      </div>

    </div>
  </div>
</section>

<!-- ===== WHY Q4 GEMS ===== -->
<section class="q4-section q4-section--dark">
  <div class="q4-split">
    <div class="q4-fade-in">
      <div class="q4-eyebrow">Why Q4 Gems</div>
      <h2>25 years of getting it right — for clients who can't afford for it to go wrong.</h2>
      <p style="color:var(--q4-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        Founded in Toronto in 1999, Q4 GLOBAL Enterprise Managed Solutions has spent a quarter-century proving that enterprise-grade IT doesn't have to mean enterprise-grade complexity or enterprise-grade cost.
      </p>
      <p style="color:var(--q4-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:2rem">
        We work with SMBs, mid-market companies, and enterprise clients across every industry. Our team of certified specialists — from cybersecurity analysts to cloud architects to project managers — becomes an extension of your business, not a vendor you call when things break.
      </p>
      <div style="display:flex;gap:1rem;flex-wrap:wrap">
        <a href="<?php echo esc_url( home_url('/about/') ); ?>" class="q4-btn q4-btn--primary">About Q4 Gems <span class="arrow">→</span></a>
        <a href="<?php echo esc_url( home_url('/pricing/') ); ?>" class="q4-btn q4-btn--outline">See Pricing</a>
      </div>
    </div>
    <div class="q4-split__visual q4-fade-in" style="animation-delay:.15s">
      <div style="width:100%">
        <div style="font-size:.8125rem;font-weight:600;color:var(--q4-grey-mid);letter-spacing:.08em;text-transform:uppercase;margin-bottom:1rem">Q4 Gems vs. Typical IT Provider</div>
        <?php
        $compare = [
          ['Average response time',        'Hours / Days', '< 1 Hour'],
          ['Contract flexibility',          'Multi-year lock-in', 'Month-to-month'],
          ['Service breadth',              'Single-stack specialist', 'End-to-end IT'],
          ['Industry experience',          '5–10 years', '25+ years'],
          ['Certifications',               'Varies', 'CISSP, SOC 2, ISO 27001'],
          ['Cloud platforms supported',    '1–2',  'Azure, AWS, GCP, M365'],
        ];
        foreach ( $compare as $row ) : ?>
        <div style="display:grid;grid-template-columns:1.5fr 1fr 1fr;gap:.5rem;align-items:center;padding:.625rem;background:rgba(255,255,255,.03);border-radius:6px;margin-bottom:.375rem;font-size:.8125rem">
          <span style="color:var(--q4-grey-mid)"><?php echo esc_html($row[0]); ?></span>
          <span style="color:var(--q4-grey-dark);text-decoration:line-through;text-align:center"><?php echo esc_html($row[1]); ?></span>
          <span style="color:var(--q4-green);font-weight:600;text-align:center"><?php echo esc_html($row[2]); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="q4-section q4-section--mid">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow">Client Stories</div>
      <h2>Results that speak for themselves.</h2>
      <p>From ransomware prevention to full digital transformations — here's what our clients say.</p>
    </div>
    <div class="q4-testimonial-grid">
      <?php
      $testimonials = [
        ['MT', '★★★★★', 'Q4 Gems has been our IT partner for over eight years. They've guided us through two cloud migrations, a security overhaul, and a full M365 deployment. They don't just fix problems — they prevent them.', 'Michael T.', 'COO, Financial Services Firm'],
        ['LP', '★★★★★', 'When we were hit with a ransomware attempt at 2am on a Sunday, Q4 had it contained and our team briefed before the morning shift arrived. That's the difference between a vendor and a real partner.', 'Linda P.', 'VP Operations, Healthcare Group'],
        ['RC', '★★★★★', 'We moved our entire infrastructure to Azure with Q4. Zero downtime, on schedule, under budget. They even handled the vendor negotiations. I honestly don't know how we'd manage without them.', 'Ryan C.', 'Director of IT, Manufacturing Co.'],
      ];
      foreach ( $testimonials as $i => $t ) : ?>
      <div class="q4-testimonial q4-fade-in" style="animation-delay:<?php echo $i*.1; ?>s">
        <div class="q4-testimonial__stars"><?php echo $t[1]; ?></div>
        <p class="q4-testimonial__quote">"<?php echo esc_html($t[2]); ?>"</p>
        <div class="q4-testimonial__author">
          <div class="q4-testimonial__avatar"><?php echo esc_html($t[0]); ?></div>
          <div>
            <div class="q4-testimonial__name"><?php echo esc_html($t[3]); ?></div>
            <div class="q4-testimonial__role"><?php echo esc_html($t[4]); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== CTA BAND ===== -->
<section class="q4-cta-band">
  <div class="q4-cta-band__inner q4-fade-in">
    <div class="q4-eyebrow" style="justify-content:center">Let's talk about your IT</div>
    <h2>Straightforward technology.<br>Exceptional results.</h2>
    <p>Whether you need a full IT department or just one service, we'll build the right solution for your business. Free consultation, no obligation.</p>
    <div class="q4-cta-band__actions">
      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="q4-btn q4-btn--primary q4-btn--lg">Book Free Consultation <span class="arrow">→</span></a>
      <a href="<?php echo esc_url( home_url('/pricing/') ); ?>" class="q4-btn q4-btn--outline q4-btn--lg">View Pricing</a>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer id="q4-footer">
  <div class="q4-footer__inner">
    <div class="q4-footer__top">
      <div class="q4-footer__brand">
        <img src="<?php echo $logo_url; ?>" alt="Q4 Gems" onerror="this.style.display='none'">
        <p>Q4 GLOBAL Enterprise Managed Solutions Inc. — Toronto-based IT excellence since 1999. Cybersecurity, Cloud, Managed Services, and Consulting for businesses worldwide.</p>
        <div style="margin-top:1.5rem">
          <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="q4-btn q4-btn--primary q4-btn--sm">Get in Touch</a>
        </div>
      </div>
      <div class="q4-footer__col">
        <h5>Services</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url( home_url('/cyber-security/') ); ?>">Cyber Security</a></li>
          <li><a href="<?php echo esc_url( home_url('/services/remote-monitoring-and-management/') ); ?>">Remote Monitoring</a></li>
          <li><a href="<?php echo esc_url( home_url('/services/fully-managed-cloud-services/') ); ?>">Managed Cloud</a></li>
          <li><a href="<?php echo esc_url( home_url('/services/disaster-recovery/') ); ?>">Disaster Recovery</a></li>
          <li><a href="<?php echo esc_url( home_url('/infrastructure/') ); ?>">Infrastructure</a></li>
        </ul>
      </div>
      <div class="q4-footer__col">
        <h5>Solutions</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url( home_url('/solutions/microsoft-365-business-premium/') ); ?>">Microsoft 365</a></li>
          <li><a href="<?php echo esc_url( home_url('/solutions/google-workspace/') ); ?>">Google Workspace</a></li>
          <li><a href="<?php echo esc_url( home_url('/web-solutions/') ); ?>">Web Solutions</a></li>
          <li><a href="<?php echo esc_url( home_url('/consulting/') ); ?>">IT Consulting</a></li>
          <li><a href="<?php echo esc_url( home_url('/pricing/') ); ?>">Pricing</a></li>
        </ul>
      </div>
      <div class="q4-footer__col">
        <h5>Company</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url( home_url('/about/') ); ?>">About Q4 Gems</a></li>
          <li><a href="<?php echo esc_url( home_url('/leadership/') ); ?>">Leadership</a></li>
          <li><a href="<?php echo esc_url( home_url('/partnerships/') ); ?>">Partnerships</a></li>
          <li><a href="<?php echo esc_url( home_url('/careers/') ); ?>">Careers</a></li>
          <li><a href="<?php echo esc_url( home_url('/client-support/') ); ?>">Client Support</a></li>
        </ul>
      </div>
    </div>
    <div class="q4-footer__bottom">
      <p class="q4-footer__copy">© <?php echo date('Y'); ?> Q4 GLOBAL Enterprise Managed Solutions Inc. All rights reserved. Toronto, Canada.</p>
      <div class="q4-footer__social">
        <a href="#" aria-label="LinkedIn">in</a>
        <a href="#" aria-label="Twitter">𝕏</a>
        <a href="#" aria-label="YouTube">▶</a>
      </div>
    </div>
  </div>
</footer>

<script>
(function(){
  const h=document.getElementById('q4-header');
  window.addEventListener('scroll',()=>h.classList.toggle('scrolled',scrollY>40),{passive:true});
  const els=document.querySelectorAll('.q4-fade-in');
  const obs=new IntersectionObserver(e=>e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('visible');obs.unobserve(en.target);}}),{threshold:.1});
  els.forEach(el=>obs.observe(el));
})();
</script>
<?php wp_footer(); ?>
</body>
</html>
