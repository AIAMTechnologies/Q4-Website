<?php
/**
 * Template Name: AIAM Pricing Page
 * Q4 Gems — Pricing page
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$site_url  = esc_url( home_url('/') );
$logo_url  = content_url('uploads/2023/03/q4g-white.png');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Q4 Gems pricing — transparent, predictable IT service packages for SMBs, mid-market, and enterprise. No hidden fees, no surprises.">
<title>Pricing — Q4 Gems</title>
<?php wp_head(); ?>
</head>
<body class="q4-page">

<!-- HEADER -->
<header id="q4-header">
  <nav class="q4-nav">
    <a href="<?php echo $site_url; ?>" class="q4-nav__logo" aria-label="Q4 Gems Home">
      <img src="<?php echo $logo_url; ?>" alt="Q4 Gems" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
      <span class="logo-fallback">Q4<span>Gems</span></span>
    </a>
    <ul class="q4-nav__links">
      <li><a href="<?php echo esc_url(home_url('/cyber-security/')); ?>">Cyber Security</a></li>
      <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Managed Services</a></li>
      <li><a href="<?php echo esc_url(home_url('/consulting/')); ?>">Consulting</a></li>
      <li><a href="<?php echo esc_url(home_url('/solutions/')); ?>">Solutions</a></li>
      <li><a href="<?php echo esc_url(home_url('/pricing/')); ?>" style="color:#fff">Pricing</a></li>
      <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
    </ul>
    <div class="q4-nav__cta">
      <a href="<?php echo esc_url(home_url('/client-support/')); ?>" class="q4-btn q4-btn--outline q4-btn--sm">Client Support</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary q4-btn--sm">Get Started</a>
    </div>
    <button class="q4-nav__toggle" aria-label="Menu" onclick="document.querySelector('.q4-mobile-menu').classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>
  </nav>
  <div class="q4-mobile-menu">
    <a href="<?php echo esc_url(home_url('/cyber-security/')); ?>">Cyber Security</a>
    <a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a>
    <a href="<?php echo esc_url(home_url('/pricing/')); ?>">Pricing</a>
    <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary" style="justify-content:center;margin-top:8px">Get Started</a>
  </div>
</header>

<!-- PRICING HERO -->
<section class="q4-pricing-hero">
  <div class="q4-pricing-hero__inner q4-fade-in">
    <div class="q4-eyebrow" style="justify-content:center">
      <span class="dot"></span>Transparent Pricing — No Hidden Fees
    </div>
    <h1 style="font-size:clamp(2.5rem,5vw,4rem);font-weight:800;margin-bottom:1.25rem;letter-spacing:-.03em">
      IT Pricing That<br><span class="q4-gradient">Makes Sense.</span>
    </h1>
    <p style="font-size:1.1875rem;color:var(--q4-grey-light);line-height:1.75;max-width:600px;margin:0 auto 2.5rem">
      One monthly rate. No surprise invoices. No per-ticket fees. No "that's extra" conversations. Just straightforward IT management priced for how your business actually works.
    </p>
    <div style="display:flex;align-items:center;justify-content:center;gap:1rem;flex-wrap:wrap">
      <a href="#pricing-tiers" class="q4-btn q4-btn--primary q4-btn--lg">See Plans <span class="arrow">↓</span></a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--ghost q4-btn--lg">Talk to an Expert</a>
    </div>
    <div style="display:flex;align-items:center;justify-content:center;gap:2rem;flex-wrap:wrap;margin-top:2.5rem;padding-top:2.5rem;border-top:1px solid rgba(255,255,255,.08)">
      <div style="text-align:center"><div style="font-size:1.5rem;font-weight:800;color:#fff">No setup fee</div><div style="font-size:.875rem;color:var(--q4-grey-mid)">Included in every plan</div></div>
      <div style="width:1px;height:40px;background:rgba(255,255,255,.1)"></div>
      <div style="text-align:center"><div style="font-size:1.5rem;font-weight:800;color:#fff">Month-to-month</div><div style="font-size:.875rem;color:var(--q4-grey-mid)">No lock-in contracts</div></div>
      <div style="width:1px;height:40px;background:rgba(255,255,255,.1)"></div>
      <div style="text-align:center"><div style="font-size:1.5rem;font-weight:800;color:#fff">Same-day support</div><div style="font-size:.875rem;color:var(--q4-grey-mid)">Real humans, fast response</div></div>
    </div>
  </div>
</section>

<!-- PRICING TIERS -->
<section class="q4-section q4-section--mid" id="pricing-tiers">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <h2>Simple, scalable plans</h2>
      <p>All plans include 24/7 monitoring, certified support, and a dedicated account manager. Scale up or down any time.</p>
    </div>
    <!-- Billing toggle -->
    <div style="display:flex;align-items:center;justify-content:center;gap:1rem;margin-bottom:3rem">
      <span style="color:var(--q4-grey-light);font-size:.9375rem">Monthly</span>
      <label style="position:relative;display:inline-block;width:48px;height:26px;cursor:pointer">
        <input type="checkbox" id="billing-toggle" style="opacity:0;width:0;height:0" onchange="toggleBilling(this)">
        <span style="position:absolute;inset:0;background:#162245;border:1px solid rgba(36,128,191,.4);border-radius:100px;transition:.3s"></span>
        <span id="toggle-knob" style="position:absolute;left:4px;top:4px;width:18px;height:18px;background:#fff;border-radius:50%;transition:.3s"></span>
      </label>
      <span style="color:var(--q4-grey-light);font-size:.9375rem">Annual <span style="display:inline-block;background:rgba(16,185,129,.15);color:#34D399;font-size:.75rem;font-weight:600;padding:2px 8px;border-radius:100px;margin-left:.5rem">Save 20%</span></span>
    </div>

    <div class="q4-pricing-grid">

      <!-- Starter -->
      <div class="q4-pricing-card q4-fade-in">
        <div style="font-size:.8125rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--q4-grey-mid);margin-bottom:var(--sp-4)">Starter</div>
        <div style="font-size:.875rem;color:var(--q4-grey-mid);margin-bottom:4px">from</div>
        <div style="margin-bottom:.5rem">
          <span style="font-size:3rem;font-weight:800;letter-spacing:-.04em;color:#fff;line-height:1" data-monthly="$499" data-annual="$399">$499</span>
          <span style="font-size:1rem;color:var(--q4-grey-mid);font-weight:400"> / month</span>
        </div>
        <p style="color:var(--q4-grey-light);font-size:.9375rem;margin:var(--sp-4) 0 var(--sp-8)">Core IT management for small businesses up to 25 users.</p>
        <hr style="border:none;border-top:1px solid rgba(255,255,255,.08);margin:var(--sp-6) 0">
        <div style="flex-grow:1;margin-bottom:var(--sp-8)">
          <ul class="q4-check-list">
            <li>Up to 25 managed endpoints</li>
            <li>24/7 remote monitoring (RMM)</li>
            <li>Service desk — business hours</li>
            <li>Microsoft 365 management</li>
            <li>Offsite backup (250GB included)</li>
            <li>Monthly IT health report</li>
            <li>Basic cybersecurity posture review</li>
          </ul>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?plan=starter')); ?>" class="q4-btn q4-btn--ghost" style="width:100%;justify-content:center">Get Started</a>
      </div>

      <!-- Professional (Featured) -->
      <div class="q4-pricing-card q4-pricing-card--featured q4-fade-in" style="animation-delay:.1s">
        <div class="q4-pricing-badge">Most Popular</div>
        <div style="font-size:.8125rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--q4-grey-mid);margin-bottom:var(--sp-4)">Professional</div>
        <div style="font-size:.875rem;color:var(--q4-grey-mid);margin-bottom:4px">from</div>
        <div style="margin-bottom:.5rem">
          <span style="font-size:3rem;font-weight:800;letter-spacing:-.04em;color:#fff;line-height:1" data-monthly="$1,299" data-annual="$1,039">$1,299</span>
          <span style="font-size:1rem;color:var(--q4-grey-mid);font-weight:400"> / month</span>
        </div>
        <p style="color:var(--q4-grey-light);font-size:.9375rem;margin:var(--sp-4) 0 var(--sp-8)">Full-stack IT management for growing businesses up to 100 users.</p>
        <hr style="border:none;border-top:1px solid rgba(255,255,255,.08);margin:var(--sp-6) 0">
        <div style="flex-grow:1;margin-bottom:var(--sp-8)">
          <ul class="q4-check-list">
            <li><strong style="color:#fff">Everything in Starter, plus:</strong></li>
            <li>Up to 100 managed endpoints</li>
            <li>24/7 service desk & emergency line</li>
            <li>Cybersecurity monitoring & incident response</li>
            <li>Cloud management (Azure / AWS / GCP)</li>
            <li>Disaster recovery & business continuity</li>
            <li>Compliance reporting (SOC 2, HIPAA, PCI)</li>
            <li>Named account manager + quarterly review</li>
            <li>Unlimited backup storage</li>
          </ul>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?plan=professional')); ?>" class="q4-btn q4-btn--primary" style="width:100%;justify-content:center">Get Started <span class="arrow">→</span></a>
      </div>

      <!-- Enterprise -->
      <div class="q4-pricing-card q4-fade-in" style="animation-delay:.2s">
        <div style="font-size:.8125rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--q4-grey-mid);margin-bottom:var(--sp-4)">Enterprise</div>
        <div style="margin-bottom:.5rem;margin-top:1.5rem">
          <span style="font-size:2rem;font-weight:800;letter-spacing:-.03em;color:#fff;line-height:1">Custom</span>
        </div>
        <p style="color:var(--q4-grey-light);font-size:.9375rem;margin:var(--sp-4) 0 var(--sp-8)">Tailored IT programmes for complex, multi-site, or compliance-intensive organizations.</p>
        <hr style="border:none;border-top:1px solid rgba(255,255,255,.08);margin:var(--sp-6) 0">
        <div style="flex-grow:1;margin-bottom:var(--sp-8)">
          <ul class="q4-check-list">
            <li><strong style="color:#fff">Everything in Professional, plus:</strong></li>
            <li>Unlimited endpoints & users</li>
            <li>Dedicated IT team (not shared pool)</li>
            <li>Virtual CISO (vCISO) services</li>
            <li>Penetration testing & red team exercises</li>
            <li>Custom cloud architecture & migration</li>
            <li>Digital transformation consulting</li>
            <li>Board-level reporting & presentations</li>
            <li>Priority SLA — 15-min response guarantee</li>
          </ul>
        </div>
        <a href="<?php echo esc_url(home_url('/contact/?inquiry=enterprise')); ?>" class="q4-btn q4-btn--outline" style="width:100%;justify-content:center">Talk to Sales</a>
      </div>

    </div>
    <p style="text-align:center;color:var(--q4-grey-mid);font-size:.875rem;margin-top:2rem">
      All prices in CAD. GST/HST applicable. Volume discounts available for 100+ endpoint environments. <a href="<?php echo esc_url(home_url('/contact/')); ?>" style="color:var(--q4-blue-bright)">Contact us</a> for a custom quote.
    </p>
  </div>
</section>

<!-- VALUE PILLARS -->
<section class="q4-section q4-section--dark">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow">Always Included</div>
      <h2>What every Q4 Gems plan delivers.</h2>
      <p>These aren't add-ons. They're the baseline — because great IT service shouldn't be a la carte.</p>
    </div>
    <div class="q4-pillars">
      <?php
      $pillars = [
        ['🧾', 'Predictable Monthly Cost',      'One invoice. No ticket fees, no surprise overages, no per-incident charges. Budget with confidence.'],
        ['👤', 'Named Account Manager',         'You have a real person who knows your environment. Not a rotating call centre.'],
        ['⚡', 'Fast Response, Always',          'Critical issues get a human response within the hour — not a ticket acknowledgement.'],
        ['🔒', 'Security Included',              'Every plan includes baseline security monitoring. You shouldn\'t have to choose between IT management and security.'],
        ['📈', 'Scales With You',               'Add users and endpoints as you grow. Pricing scales linearly — no exponential jumps.'],
        ['📋', 'Compliance-Ready Reporting',    'Pre-built audit reports for SOC 2, HIPAA, ISO 27001. Your next audit won\'t require a project.'],
        ['🔄', 'Proactive, Not Reactive',       'We find and fix problems before they become incidents. Your team notices fewer outages because we prevent them.'],
        ['📞', 'No Lock-In Contracts',          'Month-to-month billing on all plans. We earn your business every month.'],
      ];
      foreach ( $pillars as $i => $p ) : ?>
      <div class="q4-pillar q4-fade-in" style="animation-delay:<?php echo $i*.05; ?>s">
        <span class="q4-pillar__icon"><?php echo $p[0]; ?></span>
        <h4><?php echo esc_html($p[1]); ?></h4>
        <p><?php echo esc_html($p[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- COMPARISON TABLE -->
<section class="q4-section q4-section--mid">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in"><div class="q4-eyebrow">Plan Comparison</div><h2>Pick the right fit</h2></div>
    <div style="overflow-x:auto" class="q4-fade-in">
      <table style="width:100%;border-collapse:collapse;min-width:640px">
        <thead>
          <tr style="border-bottom:2px solid rgba(255,255,255,.1)">
            <th style="text-align:left;padding:1rem;color:var(--q4-grey-mid);font-weight:600;font-size:.875rem;width:40%">Feature</th>
            <th style="text-align:center;padding:1rem;color:#fff;font-weight:700">Starter</th>
            <th style="text-align:center;padding:1rem;color:var(--q4-blue-bright);font-weight:700">Professional</th>
            <th style="text-align:center;padding:1rem;color:#fff;font-weight:700">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $rows = [
            ['24/7 Remote Monitoring',        '✓','✓','✓'],
            ['Service Desk',                  'Business hrs','24/7','24/7 + Priority'],
            ['Offsite Backup',               '250GB','Unlimited','Unlimited'],
            ['Microsoft 365 Management',     '✓','✓','✓'],
            ['Cybersecurity Monitoring',     'Basic','Full','Full + Advanced'],
            ['Incident Response',            '—','✓','✓'],
            ['Cloud Management',             '—','✓','✓'],
            ['Disaster Recovery',            '—','✓','✓'],
            ['Compliance Reporting',         '—','✓','✓'],
            ['Named Account Manager',        '—','✓','Dedicated Team'],
            ['vCISO Services',               '—','—','✓'],
            ['Pen Testing / Red Team',       '—','—','✓'],
            ['Custom Cloud Architecture',    '—','—','✓'],
            ['Board-Level Reporting',        '—','—','✓'],
            ['SLA Response Guarantee',       'Best effort','<1 hr','15 min'],
          ];
          foreach ( $rows as $i => $r ) : $bg = $i%2===0?'rgba(255,255,255,.02)':'transparent'; ?>
          <tr style="border-bottom:1px solid rgba(255,255,255,.05);background:<?php echo $bg; ?>">
            <td style="padding:1rem;color:var(--q4-grey-light);font-size:.9375rem"><?php echo esc_html($r[0]); ?></td>
            <?php foreach(array_slice($r,1) as $j=>$v):
              $color = $v==='✓'?'var(--q4-green)':($v==='—'?'var(--q4-grey-dark)':'#fff');
              $hl = $j===1?'background:rgba(36,128,191,.05);':''; ?>
            <td style="text-align:center;padding:1rem;color:<?php echo $color; ?>;font-size:.875rem;font-weight:<?php echo in_array($v,['✓','—'])?'700':'500'; ?>;<?php echo $hl; ?>"><?php echo esc_html($v); ?></td>
            <?php endforeach; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="q4-section q4-section--dark">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in"><div class="q4-eyebrow">FAQ</div><h2>Pricing questions answered.</h2></div>
    <div class="q4-faq q4-fade-in">
      <?php
      $faqs = [
        ['q'=>'What does a "managed endpoint" mean?','a'=>'A managed endpoint is any device under our active monitoring — laptops, desktops, and servers. Mobile devices can be added separately. You\'re billed only for devices we actively manage, not your total headcount.'],
        ['q'=>'Is there a setup or onboarding fee?','a'=>'No. Onboarding, discovery, and initial deployment are included in your monthly fee. Most clients are fully onboarded within 1–3 business days depending on environment size.'],
        ['q'=>'What\'s your response time for critical issues?','a'=>'Professional and Enterprise plans receive a response within 1 hour for critical issues, 4 hours for high priority. Enterprise clients have a 15-minute SLA guarantee. Starter clients receive best-effort response on the same business day.'],
        ['q'=>'Can I add individual services (e.g. just security monitoring) without a full plan?','a'=>'Yes. We offer standalone service engagements for security assessments, cloud migrations, consulting projects, and web solutions. Contact us to discuss a custom scope.'],
        ['q'=>'Do you work with businesses outside Toronto / Canada?','a'=>'Yes. While we\'re headquartered in Toronto, Q4 Gems has been serving clients globally since 1999. Remote management and cloud services have no geographic restrictions.'],
        ['q'=>'What compliance frameworks do you support?','a'=>'Out of the box we support SOC 2, ISO 27001, HIPAA, PCI-DSS, and NIST CSF. Enterprise clients can work with us on custom compliance frameworks or less common regulatory requirements.'],
        ['q'=>'Can I cancel or change plans at any time?','a'=>'Yes. Monthly plans require 30 days notice. Annual plans are invoiced upfront — if you need to scale down, we\'ll work with you on a fair adjustment. We don\'t hide behind contracts.'],
        ['q'=>'Do you provide pricing for M365 or Google Workspace licensing?','a'=>'Yes. We can procure Microsoft 365 and Google Workspace licenses on your behalf, often at competitive rates through our partner relationships. Licensing costs are separate from your management fee.'],
      ];
      foreach ( $faqs as $i => $faq ) : ?>
      <div class="q4-faq__item <?php echo $i===0?'open':''; ?>">
        <button class="q4-faq__q" onclick="toggleFaq(this)">
          <?php echo esc_html($faq['q']); ?><span class="q4-faq__icon">+</span>
        </button>
        <div class="q4-faq__a"><p><?php echo esc_html($faq['a']); ?></p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="q4-section q4-section--mid">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in"><div class="q4-eyebrow">Client Results</div><h2>The ROI our clients see.</h2></div>
    <div class="q4-testimonial-grid">
      <div class="q4-testimonial q4-fade-in">
        <div class="q4-testimonial__stars">★★★★★</div>
        <p class="q4-testimonial__quote">"We switched from a break-fix model to Q4 Gems' Professional plan. IT incidents dropped 70% in the first three months and our per-incident cost went from unpredictable to zero. Best financial decision we made this year."</p>
        <div class="q4-testimonial__author">
          <div class="q4-testimonial__avatar">JK</div>
          <div><div class="q4-testimonial__name">James K.</div><div class="q4-testimonial__role">CEO, Professional Services Firm</div></div>
        </div>
      </div>
      <div class="q4-testimonial q4-fade-in" style="animation-delay:.1s">
        <div class="q4-testimonial__stars">★★★★★</div>
        <p class="q4-testimonial__quote">"Our last IT provider billed us for every ticket, every hour, every update. Q4's flat rate means I can call them every day if I need to and know exactly what it costs. That peace of mind alone is worth the price."</p>
        <div class="q4-testimonial__author">
          <div class="q4-testimonial__avatar">SB</div>
          <div><div class="q4-testimonial__name">Sandra B.</div><div class="q4-testimonial__role">CFO, Healthcare Clinic Group</div></div>
        </div>
      </div>
      <div class="q4-testimonial q4-fade-in" style="animation-delay:.2s">
        <div class="q4-testimonial__stars">★★★★★</div>
        <p class="q4-testimonial__quote">"The compliance reporting in Q4's Professional plan saved us weeks of manual audit prep. Our SOC 2 audit was the smoothest in company history. The compliance value alone justifies the entire annual cost."</p>
        <div class="q4-testimonial__author">
          <div class="q4-testimonial__avatar">AD</div>
          <div><div class="q4-testimonial__name">Amit D.</div><div class="q4-testimonial__role">CTO, Fintech Startup</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="q4-cta-band">
  <div class="q4-cta-band__inner q4-fade-in">
    <div class="q4-eyebrow" style="justify-content:center">Free assessment, no commitment</div>
    <h2>Let us show you what better IT looks like.</h2>
    <p>Start with a free IT assessment. We'll review your current environment, identify risks and inefficiencies, and show you exactly what Q4 Gems would do — and what it would cost.</p>
    <div class="q4-cta-band__actions">
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary q4-btn--lg">Get Free Assessment <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/contact/?inquiry=demo')); ?>" class="q4-btn q4-btn--outline q4-btn--lg">Book a Demo</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer id="q4-footer">
  <div class="q4-footer__inner">
    <div class="q4-footer__top">
      <div class="q4-footer__brand">
        <img src="<?php echo $logo_url; ?>" alt="Q4 Gems" onerror="this.style.display='none'">
        <p>Q4 GLOBAL Enterprise Managed Solutions Inc. — Toronto-based IT excellence since 1999.</p>
      </div>
      <div class="q4-footer__col">
        <h5>Services</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url(home_url('/cyber-security/')); ?>">Cyber Security</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Managed Services</a></li>
          <li><a href="<?php echo esc_url(home_url('/infrastructure/')); ?>">Infrastructure</a></li>
          <li><a href="<?php echo esc_url(home_url('/consulting/')); ?>">Consulting</a></li>
        </ul>
      </div>
      <div class="q4-footer__col">
        <h5>Solutions</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url(home_url('/solutions/microsoft-365-business-premium/')); ?>">Microsoft 365</a></li>
          <li><a href="<?php echo esc_url(home_url('/solutions/google-workspace/')); ?>">Google Workspace</a></li>
          <li><a href="<?php echo esc_url(home_url('/web-solutions/')); ?>">Web Solutions</a></li>
        </ul>
      </div>
      <div class="q4-footer__col">
        <h5>Company</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a></li>
          <li><a href="<?php echo esc_url(home_url('/terms-conditions/')); ?>">Terms</a></li>
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
  // FAQ open first
  const first=document.querySelector('.q4-faq__item');
  if(first)first.classList.add('open');
})();
function toggleFaq(btn){
  const item=btn.closest('.q4-faq__item');
  const open=item.classList.contains('open');
  document.querySelectorAll('.q4-faq__item.open').forEach(el=>el.classList.remove('open'));
  if(!open)item.classList.add('open');
}
function toggleBilling(input){
  const annual=input.checked;
  document.getElementById('toggle-knob').style.left=annual?'26px':'4px';
  document.querySelectorAll('[data-monthly]').forEach(el=>{
    el.textContent=annual?el.dataset.annual:el.dataset.monthly;
  });
}
</script>
<?php wp_footer(); ?>
</body>
</html>
