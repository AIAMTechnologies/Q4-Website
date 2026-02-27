<?php
/**
 * Template Name: AIAM About Page
 *
 * About AIAM Technologies — story, values, team, and why we exist.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$site_url     = esc_url( home_url( '/' ) );
$logo_display = content_url( 'uploads/2023/03/Logo-white.svg' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="About AIAM Technologies — who we are, what drives us, and why we built a different kind of cybersecurity company.">
<title>About Us — AIAM Technologies</title>
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
      <li><a href="<?php echo esc_url( home_url('/services/') ); ?>">Services</a></li>
      <li><a href="<?php echo esc_url( home_url('/platform/') ); ?>">Platform</a></li>
      <li><a href="<?php echo esc_url( home_url('/pricing/') ); ?>">Pricing</a></li>
      <li><a href="<?php echo esc_url( home_url('/resources/') ); ?>">Resources</a></li>
      <li><a href="<?php echo esc_url( home_url('/about/') ); ?>" style="color:#fff">About</a></li>
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
<section style="padding:160px 0 var(--sp-24);background:var(--aiam-navy);position:relative;overflow:hidden">
  <div style="position:absolute;top:-10%;left:50%;transform:translateX(-50%);width:800px;height:600px;background:radial-gradient(ellipse,rgba(37,99,235,.12) 0%,transparent 70%);pointer-events:none"></div>
  <div class="aiam-container" style="text-align:center;position:relative;z-index:1">
    <div class="aiam-eyebrow aiam-fade-in" style="justify-content:center">
      <span class="dot"></span>Who We Are
    </div>
    <h1 class="aiam-fade-in" style="font-size:clamp(2.5rem,5vw,4rem);font-weight:800;letter-spacing:-.03em;margin-bottom:1.5rem;animation-delay:.05s">
      We built the security firm<br>
      <span class="aiam-gradient">we wished existed.</span>
    </h1>
    <p class="aiam-fade-in" style="font-size:1.25rem;color:var(--aiam-grey-light);line-height:1.75;max-width:680px;margin:0 auto;animation-delay:.1s">
      AIAM Technologies was founded on one conviction: enterprise-grade security should be accessible to every business — not just the ones with eight-figure IT budgets.
    </p>
  </div>
</section>

<!-- MISSION SECTION -->
<section class="aiam-section aiam-section--mid">
  <div class="aiam-split">
    <div class="aiam-split__content aiam-fade-in">
      <div class="aiam-eyebrow">Our Mission</div>
      <h2>Security for everyone.<br>Not just the enterprise.</h2>
      <p style="color:var(--aiam-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.25rem">
        The gap between what large enterprises can afford and what small-to-mid businesses actually get has always bothered us. A 50-person company faces the same ransomware groups, the same phishing campaigns, and the same credential theft as a Fortune 500. They just don't have the same resources to fight back.
      </p>
      <p style="color:var(--aiam-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:2rem">
        We built AIAM to close that gap. Same technology. Same human analysts. Same 24/7 coverage. At a price point that makes sense.
      </p>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
        <?php
        $mission_stats = [
          ['500+', 'Businesses Protected'],
          ['99.97%', 'SLA Uptime'],
          ['< 4 min', 'Mean Response Time'],
          ['24/7', 'Human SOC Coverage'],
        ];
        foreach ( $mission_stats as $s ) : ?>
        <div style="background:rgba(37,99,235,.08);border:1px solid rgba(37,99,235,.15);border-radius:12px;padding:1.25rem;text-align:center">
          <div style="font-size:1.5rem;font-weight:800;color:#fff;letter-spacing:-.02em"><?php echo $s[0]; ?></div>
          <div style="font-size:.8125rem;color:var(--aiam-grey-mid);margin-top:4px"><?php echo esc_html( $s[1] ); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="aiam-split__visual aiam-fade-in" style="animation-delay:.15s">
      <div style="width:100%">
        <!-- Values blocks -->
        <?php
        $values = [
          ['🔍', 'Radical Transparency',    'No hidden fees, no jargon, no black-box alerts. You get full visibility into everything we do and why.'],
          ['👥', 'Humans First',            'Technology is a tool. Our analysts are the product. Every alert gets a human eye before it reaches you.'],
          ['⚡', 'Speed Matters',           'In security, minutes count. We\'ve built our entire operation around responding faster than any attacker can move.'],
          ['📐', 'Simple by Design',        'Complexity kills security programmes. We build for simplicity — in our pricing, our dashboards, and our communication.'],
        ];
        foreach ( $values as $v ) : ?>
        <div style="display:flex;align-items:flex-start;gap:1rem;padding:1.25rem;background:rgba(255,255,255,.04);border-radius:10px;margin-bottom:.75rem">
          <span style="font-size:1.375rem;flex-shrink:0"><?php echo $v[0]; ?></span>
          <div>
            <div style="font-weight:700;color:#fff;font-size:.9375rem;margin-bottom:.25rem"><?php echo esc_html( $v[1] ); ?></div>
            <div style="color:var(--aiam-grey-mid);font-size:.875rem;line-height:1.6"><?php echo esc_html( $v[2] ); ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- HOW WE'RE DIFFERENT -->
<section class="aiam-section aiam-section--dark">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">Why AIAM is Different</div>
      <h2>Built different. On purpose.</h2>
      <p>Three things we'll never compromise on — no matter how large we grow.</p>
    </div>
    <div class="aiam-grid-3">
      <?php
      $differentiators = [
        [
          'icon'  => '👁️',
          'title' => 'Human Review. Always.',
          'body'  => 'We don\'t fire off automated alerts and call it done. Every detection is reviewed by a certified analyst who decides if it\'s real, how serious it is, and what to do about it. You only hear about threats — with the remediation step already written.',
        ],
        [
          'icon'  => '💳',
          'title' => 'Pricing You Can Budget For.',
          'body'  => 'Per-endpoint, flat-rate pricing. No surprises. No volume tiers that punish growth. No separate charges for detection, response, reporting, or compliance. One number, one invoice, every month.',
        ],
        [
          'icon'  => '📅',
          'title' => 'No Lock-In. Ever.',
          'body'  => 'We run month-to-month. We\'d rather earn your business every month than trap you in a contract. Exceptional service is the only retention strategy we believe in.',
        ],
      ];
      foreach ( $differentiators as $i => $d ) : ?>
      <div class="aiam-card aiam-fade-in" style="animation-delay:<?php echo $i * .1; ?>s">
        <div class="aiam-card__icon"><?php echo $d['icon']; ?></div>
        <h3><?php echo esc_html( $d['title'] ); ?></h3>
        <p><?php echo esc_html( $d['body'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CERTIFICATIONS & TRUST -->
<section class="aiam-section aiam-section--mid">
  <div class="aiam-container">
    <div class="aiam-section-hdr aiam-fade-in">
      <div class="aiam-eyebrow">Certifications & Compliance</div>
      <h2>We hold ourselves to the<br>same standard we set for you.</h2>
    </div>
    <div class="aiam-grid-4">
      <?php
      $certs = [
        ['SOC 2 Type II',         'Independently audited annually. Our controls, not just our claims.'],
        ['ISO 27001',             'Internationally recognised information security management.'],
        ['CISSP Certified',       'Our analysts hold the industry\'s most respected credential.'],
        ['24/7 Ops Centre',       'Human-staffed, never automated-only, always available.'],
      ];
      foreach ( $certs as $i => $c ) : ?>
      <div class="aiam-card aiam-fade-in" style="animation-delay:<?php echo $i * .08; ?>s;text-align:center">
        <div style="font-size:2rem;margin-bottom:1rem">🏆</div>
        <h4 style="font-size:1rem;margin-bottom:.5rem;color:#fff"><?php echo esc_html( $c[0] ); ?></h4>
        <p style="font-size:.875rem;color:var(--aiam-grey-mid)"><?php echo esc_html( $c[1] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="aiam-cta-band">
  <div class="aiam-cta-band__inner aiam-fade-in">
    <div class="aiam-eyebrow" style="justify-content:center">Let's talk</div>
    <h2>Ready to meet your security team?</h2>
    <p>Start with a free security assessment. We'll show you what you're exposed to, what we'd do about it, and exactly what it costs. No pressure, no fluff.</p>
    <div class="aiam-cta-band__actions">
      <a href="<?php echo esc_url( home_url('/get-started/') ); ?>" class="aiam-btn aiam-btn--primary aiam-btn--lg">Start Free Assessment <span class="arrow">→</span></a>
      <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="aiam-btn aiam-btn--outline aiam-btn--lg">Contact the Team</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer id="aiam-footer">
  <div class="aiam-footer__inner">
    <div class="aiam-footer__top">
      <div class="aiam-footer__brand">
        <img src="<?php echo $logo_display; ?>" alt="AIAM Technologies" onerror="this.style.display:'none'">
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
        <h5>Resources</h5>
        <ul class="aiam-footer__links">
          <li><a href="<?php echo esc_url( home_url('/pricing/') ); ?>">Pricing</a></li>
          <li><a href="<?php echo esc_url( home_url('/resources/case-studies/') ); ?>">Case Studies</a></li>
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
