<?php
/**
 * Template Name: AIAM Services / Platform
 *
 * Full-page services overview — platform capabilities page.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$site_url     = esc_url( home_url( '/' ) );
$logo_display = content_url( 'uploads/2023/03/Logo-white.svg' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="AIAM Technologies platform — Managed EDR, SIEM, ITDR, and Security Awareness Training. One platform, complete protection.">
<title>Platform & Services — AIAM Technologies</title>
<?php wp_head(); ?>
</head>
<body class="aiam-page">

<!-- HEADER -->
<header id="aiam-header">
  <nav class="aiam-nav">
    <a href="<?php echo $site_url; ?>" class="aiam-nav__logo" aria-label="Home">
      <img src="<?php echo $logo_display; ?>" alt="AIAM Technologies" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
      <span class="logo-text" style="display:none">AIAM<span>.</span>Technologies</span>
    </a>
    <ul class="aiam-nav__links">
      <li><a href="<?php echo esc_url( home_url('/services/') ); ?>" style="color:#fff">Services</a></li>
      <li><a href="<?php echo esc_url( home_url('/platform/') ); ?>">Platform</a></li>
      <li><a href="<?php echo esc_url( home_url('/pricing/') ); ?>">Pricing</a></li>
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

<!-- HERO -->
<section style="min-height:60vh;display:flex;align-items:center;padding-top:72px;background:var(--aiam-navy);position:relative;overflow:hidden">
  <div style="position:absolute;top:-20%;right:-5%;width:600px;height:600px;background:radial-gradient(circle,rgba(37,99,235,.15) 0%,transparent 65%);border-radius:50%;pointer-events:none"></div>
  <div class="aiam-container" style="padding:var(--sp-20) var(--sp-6);text-align:center;position:relative;z-index:1">
    <div class="aiam-eyebrow aiam-fade-in" style="justify-content:center">
      <span class="dot"></span>The AIAM Platform
    </div>
    <h1 class="aiam-fade-in" style="font-size:clamp(2.5rem,5vw,4rem);font-weight:800;letter-spacing:-.03em;margin-bottom:1.25rem;animation-delay:.05s">
      One Platform.<br><span class="aiam-gradient">Complete Protection.</span>
    </h1>
    <p class="aiam-fade-in" style="font-size:1.1875rem;color:var(--aiam-grey-light);line-height:1.75;max-width:640px;margin:0 auto 2.5rem;animation-delay:.1s">
      Four integrated services, one unified dashboard, and a team of human analysts behind every alert. Deploy quickly, scale effortlessly, sleep soundly.
    </p>
    <div class="aiam-fade-in" style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;animation-delay:.15s">
      <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--lg">Start for Free <span class="arrow">→</span></a>
      <a href="<?php echo esc_url( home_url('/pricing/') ); ?>" class="aiam-btn aiam-btn--ghost aiam-btn--lg">View Pricing</a>
    </div>
  </div>
</section>

<!-- PRODUCT NAV -->
<nav style="background:var(--aiam-navy-mid);border-bottom:1px solid rgba(255,255,255,.07);position:sticky;top:72px;z-index:100">
  <div class="aiam-container">
    <div style="display:flex;gap:0;overflow-x:auto;scrollbar-width:none">
      <?php
      $product_nav = [
        ['#edr',      '🛡️ Managed EDR'],
        ['#siem',     '📊 Managed SIEM'],
        ['#itdr',     '🔐 Identity Protection'],
        ['#training', '🎯 Security Training'],
      ];
      foreach ( $product_nav as $nav ) : ?>
      <a href="<?php echo $nav[0]; ?>" style="display:flex;align-items:center;padding:1rem 1.5rem;color:var(--aiam-grey-mid);font-size:.875rem;font-weight:600;white-space:nowrap;border-bottom:2px solid transparent;transition:all var(--transition);text-decoration:none"
         onmouseover="this.style.color='#fff';this.style.borderBottomColor='var(--aiam-blue)'"
         onmouseout="this.style.color='var(--aiam-grey-mid)';this.style.borderBottomColor='transparent'">
        <?php echo $nav[1]; ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</nav>

<!-- EDR SECTION -->
<section id="edr" class="aiam-section aiam-section--dark" style="scroll-margin-top:140px">
  <div class="aiam-split">
    <div class="aiam-split__content aiam-fade-in">
      <div class="aiam-eyebrow">Managed EDR</div>
      <h2>Endpoint Security.<br>No Alert Fatigue.</h2>
      <p style="color:var(--aiam-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        Most security tools dump thousands of alerts on your team and call it "protection." We do the opposite. Our SOC analysts review every detection, verify every threat, and only escalate what actually matters — with a remediation plan already written.
      </p>
      <ul class="aiam-check-list" style="margin-bottom:2rem">
        <li>4.5M+ endpoints protected globally</li>
        <li>Behavioural detection catches zero-days other tools miss</li>
        <li>Ransomware canaries for early-stage detection</li>
        <li>Persistent foothold detection — attackers can't hide</li>
        <li>Works alongside your existing AV (no rip-and-replace)</li>
        <li>Deploys in hours, not weeks</li>
      </ul>
      <div style="display:flex;gap:1rem;flex-wrap:wrap">
        <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary">Start Free Trial <span class="arrow">→</span></a>
        <a href="<?php echo esc_url( home_url('/pricing/') ); ?>" class="aiam-btn aiam-btn--outline">See Pricing</a>
      </div>
    </div>
    <div class="aiam-split__visual aiam-fade-in" style="animation-delay:.15s">
      <div style="width:100%">
        <div style="font-size:.8125rem;font-weight:600;color:var(--aiam-grey-mid);letter-spacing:.08em;text-transform:uppercase;margin-bottom:1rem">EDR Dashboard — Live Threats</div>
        <?php
        $edr_items = [
          ['HIGH',   '#F87171', '#7F1D1D', 'Suspicious PowerShell — Workstation 14',     'Isolated & Remediated'],
          ['MEDIUM', '#FCD34D', '#78350F', 'Lateral movement attempt — Finance subnet',  'Under Investigation'],
          ['LOW',    '#6EE7B7', '#064E3B', 'USB device plugged in — Executive laptop',   'Logged & Allowed'],
          ['HIGH',   '#F87171', '#7F1D1D', 'Mimikatz-like behaviour — Server DC-01',     'Blocked & Contained'],
        ];
        foreach ( $edr_items as $it ) : ?>
        <div style="display:flex;align-items:center;gap:.75rem;padding:.875rem;background:rgba(255,255,255,.03);border-radius:8px;margin-bottom:.5rem;font-size:.8125rem">
          <span style="padding:2px 8px;border-radius:100px;font-weight:700;font-size:.6875rem;background:rgba(<?php
            echo $it[0]==='HIGH'?'239,68,68':($it[0]==='MEDIUM'?'245,158,11':'16,185,129');
          ?>,.15);color:<?php echo $it[1]; ?>"><?php echo $it[0]; ?></span>
          <span style="color:var(--aiam-grey-light);flex:1"><?php echo esc_html( $it[3] ); ?></span>
          <span style="color:var(--aiam-green);font-size:.6875rem;font-weight:600"><?php echo esc_html( $it[4] ); ?></span>
        </div>
        <?php endforeach; ?>
        <div style="margin-top:1.25rem;padding:1rem;background:rgba(37,99,235,.1);border:1px solid rgba(37,99,235,.2);border-radius:8px">
          <div style="color:var(--aiam-grey-mid);font-size:.75rem;margin-bottom:.25rem">Today's summary</div>
          <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:.5rem;text-align:center">
            <div><div style="font-size:1.5rem;font-weight:800;color:#fff">247</div><div style="font-size:.6875rem;color:var(--aiam-grey-mid)">Events Reviewed</div></div>
            <div><div style="font-size:1.5rem;font-weight:800;color:var(--aiam-green)">4</div><div style="font-size:.6875rem;color:var(--aiam-grey-mid)">Real Threats</div></div>
            <div><div style="font-size:1.5rem;font-weight:800;color:var(--aiam-blue-bright)">100%</div><div style="font-size:.6875rem;color:var(--aiam-grey-mid)">Resolved</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SIEM SECTION -->
<section id="siem" class="aiam-section aiam-section--mid" style="scroll-margin-top:140px">
  <div class="aiam-split aiam-split--rev">
    <div class="aiam-split__content aiam-fade-in">
      <div class="aiam-eyebrow">Managed SIEM</div>
      <h2>Log Everything.<br>Pay Per Endpoint.</h2>
      <p style="color:var(--aiam-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        Traditional SIEMs punish you for logging everything they recommend you log. Per-GB pricing turns compliance into a cost centre. We flipped that model — our SIEM charges per endpoint, not per log volume. Ingest everything. Pay nothing extra.
      </p>
      <ul class="aiam-check-list" style="margin-bottom:2rem">
        <li>Flat per-endpoint pricing — log all you want</li>
        <li>Pre-built compliance reports: SOC 2, ISO 27001, HIPAA, PCI-DSS</li>
        <li>Cloud log ingestion: Azure, AWS, GCP natively supported</li>
        <li>Up to 7-year log retention available</li>
        <li>Automated threat correlation across all sources</li>
        <li>Audit-ready export in minutes, not weeks</li>
      </ul>
      <a href="<?php echo esc_url( home_url('/pricing/') ); ?>" class="aiam-btn aiam-btn--primary">View SIEM Pricing <span class="arrow">→</span></a>
    </div>
    <div class="aiam-split__visual aiam-fade-in" style="animation-delay:.15s">
      <div style="width:100%">
        <div style="font-size:.8125rem;font-weight:600;color:var(--aiam-grey-mid);letter-spacing:.08em;text-transform:uppercase;margin-bottom:1rem">SIEM Pricing Comparison</div>
        <?php
        $siem_compare = [
          ['model' => 'Per GB (Traditional)', 'cost' => '$8,500/mo', 'note' => 'based on 850GB/mo', 'bad' => true],
          ['model' => 'Per User',             'cost' => '$5,200/mo', 'note' => 'based on 200 users', 'bad' => true],
          ['model' => 'AIAM — Per Endpoint',  'cost' => '$1,400/mo', 'note' => 'based on 100 endpoints', 'bad' => false],
        ];
        foreach ( $siem_compare as $c ) :
          $bg = $c['bad'] ? 'rgba(255,255,255,.03)' : 'rgba(16,185,129,.08)';
          $border = $c['bad'] ? 'transparent' : 'rgba(16,185,129,.25)';
        ?>
        <div style="padding:1rem;background:<?php echo $bg; ?>;border:1px solid <?php echo $border; ?>;border-radius:8px;margin-bottom:.75rem;display:flex;align-items:center;justify-content:space-between">
          <div>
            <div style="color:<?php echo $c['bad'] ? 'var(--aiam-grey-mid)' : '#fff'; ?>;font-weight:<?php echo $c['bad'] ? '400' : '700'; ?>;font-size:.875rem"><?php echo esc_html( $c['model'] ); ?></div>
            <div style="color:var(--aiam-grey-mid);font-size:.75rem"><?php echo esc_html( $c['note'] ); ?></div>
          </div>
          <div style="color:<?php echo $c['bad'] ? 'var(--aiam-grey-mid)' : 'var(--aiam-green)'; ?>;font-size:1.125rem;font-weight:700;<?php echo $c['bad'] ? 'text-decoration:line-through' : ''; ?>"><?php echo esc_html( $c['cost'] ); ?></div>
        </div>
        <?php endforeach; ?>
        <p style="color:var(--aiam-grey-mid);font-size:.8125rem;margin-top:.75rem">*Estimates based on mid-market environment. Contact us for a custom quote.</p>
      </div>
    </div>
  </div>
</section>

<!-- ITDR SECTION -->
<section id="itdr" class="aiam-section aiam-section--dark" style="scroll-margin-top:140px">
  <div class="aiam-split">
    <div class="aiam-split__content aiam-fade-in">
      <div class="aiam-eyebrow">Identity & Access Protection</div>
      <h2>Your identities are<br>the new perimeter.</h2>
      <p style="color:var(--aiam-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        Firewalls don't stop an attacker logging in with stolen credentials. Our ITDR solution detects compromised accounts, suspicious access patterns, and business email compromise before attackers pivot or exfiltrate.
      </p>
      <ul class="aiam-check-list" style="margin-bottom:2rem">
        <li>Deep Microsoft 365 & Azure AD integration</li>
        <li>Business Email Compromise (BEC) detection</li>
        <li>Impossible travel & geo-anomaly detection</li>
        <li>Privileged account abuse monitoring</li>
        <li>Adversary-in-the-Middle (AiTM) attack detection</li>
        <li>Average 3-minute response to identity threats</li>
      </ul>
      <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary">Get Protected <span class="arrow">→</span></a>
    </div>
    <div class="aiam-split__visual aiam-fade-in" style="animation-delay:.15s">
      <div style="width:100%">
        <?php
        $identity_signals = [
          ['🌍', 'Impossible Travel',         'Login: Lagos (2:14am) then Sydney (2:19am)', 'Account locked'],
          ['📧', 'BEC Detected',              'CEO email impersonation — wire transfer request', 'Flagged & blocked'],
          ['🔑', 'Privilege Escalation',      'Guest → Global Admin in Azure AD', 'Reverted & alerted'],
          ['📱', 'MFA Fatigue Attack',         '47 MFA push requests in 3 minutes', 'User protected'],
        ];
        foreach ( $identity_signals as $sig ) : ?>
        <div style="display:flex;align-items:flex-start;gap:.75rem;padding:.875rem;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.05);border-radius:8px;margin-bottom:.5rem">
          <span style="font-size:1.25rem;flex-shrink:0"><?php echo $sig[0]; ?></span>
          <div style="flex:1">
            <div style="font-size:.875rem;font-weight:600;color:#fff;margin-bottom:2px"><?php echo esc_html( $sig[1] ); ?></div>
            <div style="font-size:.75rem;color:var(--aiam-grey-mid)"><?php echo esc_html( $sig[2] ); ?></div>
          </div>
          <span style="font-size:.6875rem;font-weight:600;color:var(--aiam-green);white-space:nowrap"><?php echo esc_html( $sig[3] ); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- TRAINING SECTION -->
<section id="training" class="aiam-section aiam-section--mid" style="scroll-margin-top:140px">
  <div class="aiam-split aiam-split--rev">
    <div class="aiam-split__content aiam-fade-in">
      <div class="aiam-eyebrow">Security Awareness Training</div>
      <h2>Your people can be<br>your strongest defence.</h2>
      <p style="color:var(--aiam-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        97% of breaches involve a human element. Our training platform doesn't just tick the compliance box — it changes real behaviour with short, engaging content and targeted simulations based on your actual threat landscape.
      </p>
      <ul class="aiam-check-list" style="margin-bottom:2rem">
        <li>98% course completion rate (industry avg: 42%)</li>
        <li>Automated phishing simulations using real-world lures</li>
        <li>Training triggered by risky behaviours, not a calendar</li>
        <li>Micro-learning modules (under 5 minutes each)</li>
        <li>Compliance training library: HIPAA, GDPR, PCI, SOC 2</li>
        <li>Leadership dashboard and board-ready reporting</li>
      </ul>
      <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary">Start Training Free <span class="arrow">→</span></a>
    </div>
    <div class="aiam-split__visual aiam-fade-in" style="animation-delay:.15s">
      <!-- Training stats -->
      <div style="width:100%;display:grid;grid-template-columns:1fr 1fr;gap:1rem">
        <?php
        $training_stats = [
          ['98%',    'Completion Rate',       'vs 42% industry avg', 'var(--aiam-green)'],
          ['↓ 73%',  'Click-Through Rate',    'after 90 days training', 'var(--aiam-blue-bright)'],
          ['5 min',  'Avg Module Length',     'High completion, zero boredom', 'var(--aiam-cyan)'],
          ['Day 1',  'Active Protection',     'No waiting for "awareness cycles"', '#FBBF24'],
        ];
        foreach ( $training_stats as $s ) : ?>
        <div style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07);border-radius:12px;padding:1.25rem;text-align:center">
          <div style="font-size:1.75rem;font-weight:800;color:<?php echo $s[3]; ?>;line-height:1;margin-bottom:.25rem"><?php echo $s[0]; ?></div>
          <div style="font-size:.875rem;font-weight:600;color:#fff;margin-bottom:.25rem"><?php echo esc_html( $s[1] ); ?></div>
          <div style="font-size:.75rem;color:var(--aiam-grey-mid)"><?php echo esc_html( $s[2] ); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="aiam-cta-band">
  <div class="aiam-cta-band__inner aiam-fade-in">
    <div class="aiam-eyebrow" style="justify-content:center">Deploy today</div>
    <h2>Protection in hours, not months.</h2>
    <p>Start with a free security assessment. We'll identify your gaps, show you our platform in your environment, and get you protected — often the same day.</p>
    <div class="aiam-cta-band__actions">
      <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--lg">Get Started Free <span class="arrow">→</span></a>
      <a href="<?php echo esc_url( home_url('/pricing/') ); ?>" class="aiam-btn aiam-btn--outline aiam-btn--lg">See Pricing</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
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
          <li><a href="#edr">Managed EDR</a></li>
          <li><a href="#siem">Managed SIEM</a></li>
          <li><a href="#itdr">Identity Protection</a></li>
          <li><a href="#training">Security Training</a></li>
        </ul>
      </div>
      <div class="aiam-footer__col">
        <h5>Company</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url('/about/') ); ?>">About AIAM</a></li>
          <li><a href="<?php echo esc_url( home_url('/pricing/') ); ?>">Pricing</a></li>
          <li><a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url( home_url('/blog/') ); ?>">Blog</a></li>
        </ul>
      </div>
      <div class="aiam-footer__col">
        <h5>Legal</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url('/privacy-policy/') ); ?>">Privacy Policy</a></li>
          <li><a href="<?php echo esc_url( home_url('/terms/') ); ?>">Terms of Service</a></li>
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
(function(){
  const h=document.getElementById('aiam-header');
  window.addEventListener('scroll',()=>h.classList.toggle('scrolled',scrollY>40),{passive:true});
  const els=document.querySelectorAll('.aiam-fade-in');
  const obs=new IntersectionObserver(e=>e.forEach(en=>{if(en.isIntersecting){en.target.classList.add('visible');obs.unobserve(en.target);}}),{threshold:.1});
  els.forEach(el=>obs.observe(el));
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
