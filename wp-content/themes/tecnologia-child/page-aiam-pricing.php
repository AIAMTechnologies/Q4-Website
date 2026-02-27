<?php
/**
 * Template Name: AIAM Pricing Page
 *
 * Full-page pricing template — transparent, flat-rate pricing.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$site_url     = esc_url( home_url( '/' ) );
$logo_display = content_url( 'uploads/2023/03/Logo-white.svg' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Simple, predictable pricing for enterprise-grade cybersecurity. No hidden fees, no per-GB surprises. See AIAM Technologies pricing.">
<title>Pricing — AIAM Technologies</title>
<?php wp_head(); ?>
</head>
<body class="aiam-page">

<!-- ========== HEADER ========== -->
<header id="aiam-header">
  <nav class="aiam-nav">
    <a href="<?php echo $site_url; ?>" class="aiam-nav__logo" aria-label="Home">
      <img src="<?php echo $logo_display; ?>" alt="AIAM Technologies" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
      <span class="logo-text" style="display:none">AIAM<span>.</span>Technologies</span>
    </a>
    <ul class="aiam-nav__links">
      <li><a href="<?php echo esc_url( home_url('/services/') ); ?>">Services</a></li>
      <li><a href="<?php echo esc_url( home_url('/platform/') ); ?>">Platform</a></li>
      <li><a href="<?php echo esc_url( home_url('/pricing/') ); ?>" style="color:#fff">Pricing</a></li>
      <li><a href="<?php echo esc_url( home_url('/resources/') ); ?>">Resources</a></li>
      <li><a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a></li>
    </ul>
    <div class="aiam-nav__cta">
      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="aiam-btn aiam-btn--outline aiam-btn--sm">Contact Us</a>
      <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--sm">Get Started</a>
    </div>
    <button class="aiam-nav__mobile-toggle" aria-label="Menu" onclick="document.querySelector('.aiam-nav__mobile-menu').classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>
  </nav>
  <div class="aiam-nav__mobile-menu">
    <a href="<?php echo esc_url( home_url('/services/') ); ?>">Services</a>
    <a href="<?php echo esc_url( home_url('/pricing/') ); ?>">Pricing</a>
    <a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a>
    <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary" style="justify-content:center;margin-top:8px">Get Started</a>
  </div>
</header>

<!-- ========== PRICING HERO ========== -->
<section class="aiam-pricing-hero-wrap">
  <div class="aiam-pricing-hero-wrap__inner aiam-fade-in">
    <div class="aiam-eyebrow" style="justify-content:center">
      <span class="dot"></span>
      Transparent Pricing — No Surprises
    </div>
    <h1 style="font-size:clamp(2.5rem,5vw,4rem);font-weight:800;margin-bottom:1.25rem;letter-spacing:-.03em">
      Security Pricing.<br>
      <span class="aiam-gradient">Finally Simple.</span>
    </h1>
    <p style="font-size:1.1875rem;color:var(--aiam-grey-light);line-height:1.75;max-width:600px;margin:0 auto 2.5rem">
      One flat monthly rate per endpoint. No per-GB log fees. No hidden setup costs. No nasty renewal surprises. Just honest pricing that scales with your business.
    </p>
    <div style="display:flex;align-items:center;justify-content:center;gap:1rem;flex-wrap:wrap">
      <a href="#pricing-tiers" class="aiam-btn aiam-btn--primary aiam-btn--lg">See Plans <span class="arrow">↓</span></a>
      <a href="<?php echo esc_url( home_url('/demo/') ); ?>" class="aiam-btn aiam-btn--ghost aiam-btn--lg">Book a Demo</a>
    </div>
    <!-- Quick proof -->
    <div style="display:flex;align-items:center;justify-content:center;gap:2rem;flex-wrap:wrap;margin-top:2.5rem;padding-top:2.5rem;border-top:1px solid rgba(255,255,255,.08)">
      <div style="text-align:center">
        <div style="font-size:1.5rem;font-weight:800;color:#fff">No setup fee</div>
        <div style="font-size:.875rem;color:var(--aiam-grey-mid)">Included in subscription</div>
      </div>
      <div style="width:1px;height:40px;background:rgba(255,255,255,.1)"></div>
      <div style="text-align:center">
        <div style="font-size:1.5rem;font-weight:800;color:#fff">Month-to-month</div>
        <div style="font-size:.875rem;color:var(--aiam-grey-mid)">No lock-in contracts</div>
      </div>
      <div style="width:1px;height:40px;background:rgba(255,255,255,.1)"></div>
      <div style="text-align:center">
        <div style="font-size:1.5rem;font-weight:800;color:#fff">Same-day</div>
        <div style="font-size:.875rem;color:var(--aiam-grey-mid)">Deployment & onboarding</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== PRICING TIERS ========== -->
<section class="aiam-section aiam-section--mid" id="pricing-tiers">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <h2>Choose the coverage you need</h2>
      <p>All plans include 24/7 SOC monitoring, same-day setup, and a dedicated analyst. Scale up or down any time.</p>
    </div>

    <!-- Billing toggle -->
    <div style="display:flex;align-items:center;justify-content:center;gap:1rem;margin-bottom:3rem">
      <span style="color:var(--aiam-grey-light);font-size:.9375rem">Monthly</span>
      <label class="aiam-toggle" style="position:relative;display:inline-block;width:48px;height:26px;cursor:pointer">
        <input type="checkbox" id="billing-toggle" style="opacity:0;width:0;height:0" onchange="toggleBilling(this)">
        <span style="position:absolute;inset:0;background:#132348;border:1px solid rgba(37,99,235,.4);border-radius:100px;transition:.3s"></span>
        <span id="toggle-knob" style="position:absolute;left:4px;top:4px;width:18px;height:18px;background:#fff;border-radius:50%;transition:.3s"></span>
      </label>
      <span style="color:var(--aiam-grey-light);font-size:.9375rem">
        Annual <span style="display:inline-block;background:rgba(16,185,129,.15);color:#34D399;font-size:.75rem;font-weight:600;padding:2px 8px;border-radius:100px;margin-left:.5rem">Save 20%</span>
      </span>
    </div>

    <div class="aiam-pricing-grid">

      <!-- Plan: Essentials -->
      <div class="aiam-pricing-card aiam-fade-in">
        <div class="aiam-pricing-tier">Essentials</div>
        <div class="aiam-pricing-from">from</div>
        <div style="margin-bottom:.5rem">
          <span class="aiam-pricing-amount" data-monthly="$8" data-annual="$6">$8</span>
          <span class="aiam-pricing-period"> / endpoint / mo</span>
        </div>
        <p class="aiam-pricing-tagline">Core protection for small teams that need solid security without the complexity.</p>
        <hr class="aiam-pricing-divider">
        <div class="aiam-pricing-features">
          <ul class="aiam-check-list">
            <li>Managed EDR — up to 50 endpoints</li>
            <li>24/7 SOC alert monitoring</li>
            <li>Automated threat isolation</li>
            <li>Weekly threat summary reports</li>
            <li>Email & portal support</li>
            <li>Same-day deployment</li>
          </ul>
        </div>
        <a href="<?php echo esc_url( home_url('/get-started/?plan=essentials') ); ?>" class="aiam-btn aiam-btn--ghost">Start Free Trial</a>
      </div>

      <!-- Plan: Professional (Featured) -->
      <div class="aiam-pricing-card aiam-pricing-card--featured aiam-fade-in" style="animation-delay:.1s">
        <div class="aiam-pricing-badge">Most Popular</div>
        <div class="aiam-pricing-tier">Professional</div>
        <div class="aiam-pricing-from">from</div>
        <div style="margin-bottom:.5rem">
          <span class="aiam-pricing-amount" data-monthly="$14" data-annual="$11">$14</span>
          <span class="aiam-pricing-period"> / endpoint / mo</span>
        </div>
        <p class="aiam-pricing-tagline">Full-stack protection — EDR, SIEM, and Identity in one. The choice for growing businesses.</p>
        <hr class="aiam-pricing-divider">
        <div class="aiam-pricing-features">
          <ul class="aiam-check-list">
            <li><strong style="color:#fff">Everything in Essentials, plus:</strong></li>
            <li>Managed SIEM & log management</li>
            <li>Identity & Microsoft 365 protection</li>
            <li>Compliance dashboards (SOC 2, ISO, HIPAA)</li>
            <li>Unlimited endpoints</li>
            <li>Priority phone & email support</li>
            <li>Named security analyst contact</li>
            <li>Monthly executive security briefing</li>
          </ul>
        </div>
        <a href="<?php echo esc_url( home_url('/get-started/?plan=professional') ); ?>" class="aiam-btn aiam-btn--primary">Get Started <span class="arrow">→</span></a>
      </div>

      <!-- Plan: Enterprise -->
      <div class="aiam-pricing-card aiam-fade-in" style="animation-delay:.2s">
        <div class="aiam-pricing-tier">Enterprise</div>
        <div style="margin-bottom:.5rem;margin-top:1.5rem">
          <span class="aiam-pricing-amount" style="font-size:2rem">Custom</span>
        </div>
        <p class="aiam-pricing-tagline">Bespoke security programmes for complex environments, multi-site organisations, and compliance-heavy industries.</p>
        <hr class="aiam-pricing-divider">
        <div class="aiam-pricing-features">
          <ul class="aiam-check-list">
            <li><strong style="color:#fff">Everything in Professional, plus:</strong></li>
            <li>Dedicated security team (not pooled)</li>
            <li>Custom SIEM rules & detection logic</li>
            <li>On-site or virtual CISO services</li>
            <li>Penetration testing & red team exercises</li>
            <li>Custom retention (up to 7 years)</li>
            <li>SLA-backed 15-min response guarantee</li>
            <li>Board-level reporting & presentations</li>
          </ul>
        </div>
        <a href="<?php echo esc_url( home_url('/contact/?inquiry=enterprise') ); ?>" class="aiam-btn aiam-btn--outline">Talk to Sales</a>
      </div>

    </div>

    <p style="text-align:center;color:var(--aiam-grey-mid);font-size:.875rem;margin-top:2rem">
      All prices in USD. Annual billing invoiced upfront. GST/HST may apply. <a href="<?php echo esc_url( home_url('/contact/') ); ?>" style="color:var(--aiam-blue-bright)">Contact us</a> for volume pricing.
    </p>
  </div>
</section>

<!-- ========== PRICING VALUE PILLARS ========== -->
<section class="aiam-section aiam-section--dark">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">What's always included</div>
      <h2>No hidden extras. Ever.</h2>
      <p>Every plan comes with the features that matter most — because security shouldn't be a la carte.</p>
    </div>
    <div class="aiam-pillars">
      <?php
      $pillars = [
        ['icon' => '💰', 'title' => 'Predictable Monthly Cost',    'desc' => 'Flat per-endpoint rate. Not per GB of logs, not per alert, not per detection. You know your number on day one.'],
        ['icon' => '🚀', 'title' => 'Deploy in Hours, Not Weeks',  'desc' => 'Our onboarding team has you protected the same day. No extended professional services engagement required.'],
        ['icon' => '👨‍💻', 'title' => '24/7 Human SOC Coverage',    'desc' => 'Real analysts reviewing every alert, every hour. You're never relying solely on automated rules.'],
        ['icon' => '📋', 'title' => 'Compliance Built In',         'desc' => 'Pre-mapped to SOC 2, ISO 27001, HIPAA, and more. Audit reports generated at a click, not a project.'],
        ['icon' => '📈', 'title' => 'Scales With You',             'desc' => 'Add endpoints as you grow. Pricing scales linearly — growth never triggers exponential cost jumps.'],
        ['icon' => '🔄', 'title' => 'Always Up to Date',           'desc' => 'New detections, compliance mappings, and features included automatically. No upgrade cycles.'],
        ['icon' => '🛡️', 'title' => 'No Vendor Lock-In',          'desc' => 'Month-to-month billing. No multi-year contracts. We earn your business every month.'],
        ['icon' => '📞', 'title' => 'Real Support, Real Fast',     'desc' => 'Named contact, not a ticket queue. Critical issues get a human on the phone within minutes.'],
      ];
      foreach ( $pillars as $i => $p ) : ?>
      <div class="aiam-pillar aiam-fade-in" style="animation-delay:<?php echo $i * 0.05; ?>s">
        <span class="aiam-pillar__icon"><?php echo $p['icon']; ?></span>
        <h4><?php echo esc_html( $p['title'] ); ?></h4>
        <p><?php echo esc_html( $p['desc'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========== COMPARISON TABLE ========== -->
<section class="aiam-section aiam-section--mid">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">Feature Comparison</div>
      <h2>Pick the right plan</h2>
    </div>
    <div style="overflow-x:auto;margin:0 calc(-1 * var(--sp-6))" class="aiam-fade-in">
      <table style="width:100%;border-collapse:collapse;min-width:640px;padding:0 var(--sp-6)">
        <thead>
          <tr style="border-bottom:2px solid rgba(255,255,255,.1)">
            <th style="text-align:left;padding:1rem;color:var(--aiam-grey-mid);font-weight:600;font-size:.875rem;width:40%">Feature</th>
            <th style="text-align:center;padding:1rem;color:#fff;font-weight:700">Essentials</th>
            <th style="text-align:center;padding:1rem;color:var(--aiam-blue-bright);font-weight:700">Professional</th>
            <th style="text-align:center;padding:1rem;color:#fff;font-weight:700">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $rows = [
            ['Managed EDR',                    '✓', '✓', '✓'],
            ['24/7 SOC Monitoring',             '✓', '✓', '✓'],
            ['Automated Threat Isolation',      '✓', '✓', '✓'],
            ['Same-Day Deployment',             '✓', '✓', '✓'],
            ['Managed SIEM & Log Management',   '—', '✓', '✓'],
            ['Identity & M365 Protection',      '—', '✓', '✓'],
            ['Compliance Dashboards',           '—', '✓', '✓'],
            ['Named Security Analyst',          '—', '✓', '✓'],
            ['Monthly Executive Briefing',      '—', '✓', '✓'],
            ['Unlimited Endpoints',             '—', '✓', '✓'],
            ['Dedicated Security Team',         '—', '—', '✓'],
            ['vCISO Services',                  '—', '—', '✓'],
            ['Pen Testing / Red Team',          '—', '—', '✓'],
            ['Custom Log Retention (7yr)',      '—', '—', '✓'],
            ['15-Min SLA Response',             '—', '—', '✓'],
          ];
          foreach ( $rows as $i => $r ) : $bg = $i % 2 === 0 ? 'rgba(255,255,255,.02)' : 'transparent'; ?>
          <tr style="border-bottom:1px solid rgba(255,255,255,.05);background:<?php echo $bg; ?>">
            <td style="padding:1rem;color:var(--aiam-grey-light);font-size:.9375rem"><?php echo esc_html( $r[0] ); ?></td>
            <?php foreach ( array_slice($r,1) as $j => $v ) :
              $color = $v === '✓' ? 'var(--aiam-green)' : 'var(--aiam-grey-dark)';
              $highlight = $j === 1 ? 'background:rgba(37,99,235,.05);' : ''; ?>
            <td style="text-align:center;padding:1rem;color:<?php echo $color; ?>;font-weight:700;font-size:1rem;<?php echo $highlight; ?>"><?php echo esc_html( $v ); ?></td>
            <?php endforeach; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ========== FAQ ========== -->
<section class="aiam-section aiam-section--dark">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">FAQ</div>
      <h2>Pricing questions, answered.</h2>
    </div>
    <div class="aiam-faq aiam-fade-in">
      <?php
      $faqs = [
        ['q' => 'How exactly is pricing calculated?', 'a' => 'You pay a flat monthly rate per protected endpoint. An endpoint is any device we monitor — laptops, desktops, servers. No per-GB log fees, no per-alert charges, no volume tiers that punish growth. Your cost is predictable from day one.'],
        ['q' => 'Is there a setup or onboarding fee?', 'a' => 'No. Setup, onboarding, and initial configuration are included in your subscription. Our team will have your first endpoints protected the same day you sign up, often within a few hours.'],
        ['q' => 'What happens if I add more endpoints mid-month?', 'a' => 'New endpoints are prorated to the day. You\'ll be billed accurately for the exact days each endpoint was protected. No minimums, no surprises on your next invoice.'],
        ['q' => 'Does the Professional plan really include unlimited endpoints?', 'a' => 'Yes. Our per-endpoint pricing is consistent regardless of scale — 50 endpoints or 5,000 endpoints, the rate stays the same. We don\'t penalise you for growing.'],
        ['q' => 'What compliance frameworks are supported?', 'a' => 'Out of the box: SOC 2 Type II, ISO 27001, HIPAA, PCI-DSS, NIST CSF, and CIS Controls. Enterprise plans can also support custom frameworks. Reports are generated automatically — no manual evidence collection required.'],
        ['q' => 'Can I cancel at any time?', 'a' => 'Yes. Monthly plans cancel with 30 days notice. Annual plans are invoiced upfront — if you cancel early, we\'ll work with you on a fair outcome. We don\'t hide behind contracts.'],
        ['q' => 'How does SIEM pricing work compared to traditional vendors?', 'a' => 'Traditional SIEMs charge per GB of log volume ingested. This creates unpredictable bills that balloon as your environment grows. We charge per endpoint regardless of how many logs they generate. You can budget with confidence.'],
        ['q' => 'Do you support cloud environments (AWS, Azure, GCP)?', 'a' => 'Yes. Cloud workloads are supported on all plans. Cloud-native resources like virtual machines, containers, and serverless functions can be monitored and protected. Contact us for cloud-specific pricing details.'],
      ];
      foreach ( $faqs as $i => $faq ) : ?>
      <div class="aiam-faq__item <?php echo $i === 0 ? 'open' : ''; ?>">
        <button class="aiam-faq__q" onclick="toggleFaq(this)">
          <?php echo esc_html( $faq['q'] ); ?>
          <span class="aiam-faq__icon">+</span>
        </button>
        <div class="aiam-faq__a">
          <p><?php echo esc_html( $faq['a'] ); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="aiam-section aiam-section--mid">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">Client Results</div>
      <h2>ROI you can actually measure.</h2>
    </div>
    <div class="aiam-testimonial-grid">
      <div class="aiam-testimonial aiam-fade-in">
        <div class="aiam-testimonial__stars">★★★★★</div>
        <p class="aiam-testimonial__quote">"We were paying our previous vendor twice as much for half the coverage. The switch to AIAM paid for itself in three months. The pricing model is just refreshingly honest."</p>
        <div class="aiam-testimonial__author">
          <div class="aiam-testimonial__avatar">JL</div>
          <div>
            <div class="aiam-testimonial__name">James L.</div>
            <div class="aiam-testimonial__role">CFO, Healthcare Group (Ontario)</div>
          </div>
        </div>
      </div>
      <div class="aiam-testimonial aiam-fade-in" style="animation-delay:.1s">
        <div class="aiam-testimonial__stars">★★★★★</div>
        <p class="aiam-testimonial__quote">"I budgeted for our security spend on day one and that number hasn't changed. No overage bills, no licensing audits, no surprises. That predictability is worth a huge amount to a finance team."</p>
        <div class="aiam-testimonial__author">
          <div class="aiam-testimonial__avatar">AT</div>
          <div>
            <div class="aiam-testimonial__name">Amanda T.</div>
            <div class="aiam-testimonial__role">Controller, Manufacturing SME</div>
          </div>
        </div>
      </div>
      <div class="aiam-testimonial aiam-fade-in" style="animation-delay:.2s">
        <div class="aiam-testimonial__stars">★★★★★</div>
        <p class="aiam-testimonial__quote">"Our compliance audit used to take 6 weeks of prep work. With AIAM's built-in reporting, we walked into our last SOC 2 review with everything ready on day one. The ROI on that alone is massive."</p>
        <div class="aiam-testimonial__author">
          <div class="aiam-testimonial__avatar">MP</div>
          <div>
            <div class="aiam-testimonial__name">Michael P.</div>
            <div class="aiam-testimonial__role">CTO, SaaS Company</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== CTA BAND ========== -->
<section class="aiam-cta-band">
  <div class="aiam-cta-band__inner aiam-fade-in">
    <div class="aiam-eyebrow" style="justify-content:center">No commitment needed</div>
    <h2>See what's at risk — for free.</h2>
    <p>Start with a free security assessment. We'll show you exactly where your gaps are, how our platform addresses them, and what it'll cost. No sales pressure. Just clarity.</p>
    <div class="aiam-cta-band__actions">
      <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--lg">Get Free Assessment <span class="arrow">→</span></a>
      <a href="<?php echo esc_url( home_url('/demo/') ); ?>" class="aiam-btn aiam-btn--outline aiam-btn--lg">Book a Demo</a>
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
      </div>
      <div class="aiam-footer__col">
        <h5>Platform</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url('/services/edr/') ); ?>">Managed EDR</a></li>
          <li><a href="<?php echo esc_url( home_url('/services/siem/') ); ?>">Managed SIEM</a></li>
          <li><a href="<?php echo esc_url( home_url('/services/itdr/') ); ?>">Identity Protection</a></li>
          <li><a href="<?php echo esc_url( home_url('/services/training/') ); ?>">Security Training</a></li>
        </ul>
      </div>
      <div class="aiam-footer__col">
        <h5>Company</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url('/about/') ); ?>">About AIAM</a></li>
          <li><a href="<?php echo esc_url( home_url('/careers/') ); ?>">Careers</a></li>
          <li><a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a></li>
        </ul>
      </div>
      <div class="aiam-footer__col">
        <h5>Legal</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url('/privacy-policy/') ); ?>">Privacy Policy</a></li>
          <li><a href="<?php echo esc_url( home_url('/terms/') ); ?>">Terms of Service</a></li>
          <li><a href="<?php echo esc_url( home_url('/security/') ); ?>">Security</a></li>
        </ul>
      </div>
    </div>
    <div class="aiam-footer__bottom">
      <p class="aiam-footer__copy">© <?php echo date('Y'); ?> AIAM Technologies. All rights reserved.</p>
      <div class="aiam-footer__social">
        <a href="#" aria-label="LinkedIn">in</a>
        <a href="#" aria-label="Twitter">𝕏</a>
        <a href="#" aria-label="YouTube">▶</a>
      </div>
    </div>
  </div>
</footer>

<script>
// Sticky header
(function(){
  const h=document.getElementById('aiam-header');
  window.addEventListener('scroll',()=>h.classList.toggle('scrolled',scrollY>40),{passive:true});
})();

// Fade-in observer
(function(){
  const els=document.querySelectorAll('.aiam-fade-in');
  if(!els.length)return;
  const obs=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);}}),{threshold:.1});
  els.forEach(el=>obs.observe(el));
})();

// FAQ accordion
function toggleFaq(btn) {
  const item = btn.closest('.aiam-faq__item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.aiam-faq__item.open').forEach(el => el.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}

// Billing toggle
function toggleBilling(input) {
  const isAnnual = input.checked;
  const knob = document.getElementById('toggle-knob');
  knob.style.left = isAnnual ? '26px' : '4px';
  document.querySelectorAll('.aiam-pricing-amount[data-monthly]').forEach(el => {
    el.textContent = isAnnual ? el.dataset.annual : el.dataset.monthly;
  });
}

// Open first FAQ by default on load
document.addEventListener('DOMContentLoaded', () => {
  const first = document.querySelector('.aiam-faq__item');
  if (first) first.classList.add('open');
});
</script>

<?php wp_footer(); ?>
</body>
</html>
