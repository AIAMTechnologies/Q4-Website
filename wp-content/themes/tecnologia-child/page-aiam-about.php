<?php
/**
 * Template Name: AIAM About Page
 *
 * About Q4 Gems — company story, mission, values, team, and why Q4 Gems.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$site_url  = esc_url( home_url('/') );
$logo_url  = content_url('uploads/2023/03/q4g-white.png');
$logo_color = content_url('uploads/2023/03/logo-q4gems-01.png');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="About Q4 Gems — Q4 GLOBAL Enterprise Managed Solutions Inc., Toronto-based IT management and technology consulting firm established in 1999. 25+ years of enterprise IT excellence.">
<title>About Us — Q4 Gems</title>
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
      <li><a href="<?php echo esc_url(home_url('/pricing/')); ?>">Pricing</a></li>
      <li><a href="<?php echo esc_url(home_url('/about/')); ?>" style="color:#fff">About</a></li>
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
    <a href="<?php echo esc_url(home_url('/consulting/')); ?>">Consulting</a>
    <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary" style="justify-content:center;margin-top:8px">Get Started</a>
  </div>
</header>

<!-- HERO -->
<section style="padding:140px 0 var(--sp-20);text-align:center;position:relative;overflow:hidden">
  <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:900px;height:500px;background:radial-gradient(ellipse,rgba(36,128,191,.14) 0%,transparent 70%);pointer-events:none"></div>
  <div class="q4-container" style="position:relative;z-index:1;max-width:800px">
    <div class="q4-eyebrow q4-fade-in" style="justify-content:center"><span class="dot"></span>Toronto · Est. 1999 · Global</div>
    <h1 style="font-size:clamp(2.75rem,5vw,4.25rem);font-weight:800;letter-spacing:-.035em;margin-bottom:1.25rem" class="q4-fade-in">
      Built on trust.<br><span class="q4-gradient">Driven by results.</span>
    </h1>
    <p style="font-size:1.1875rem;color:var(--q4-grey-light);line-height:1.75;max-width:680px;margin:0 auto" class="q4-fade-in">
      Q4 GLOBAL Enterprise Managed Solutions Inc. has been the trusted technology partner for businesses across every industry since 1999. We started in Toronto and grew into a global operation — always guided by the same principle: technology should help your business succeed, not slow it down.
    </p>
  </div>
</section>

<!-- STATS BAR -->
<section class="q4-stats-bar">
  <div class="q4-stats-bar__inner">
    <div class="q4-stat q4-fade-in"><div class="q4-stat__val">1999</div><div class="q4-stat__label">Year Founded</div></div>
    <div class="q4-stat q4-fade-in" style="animation-delay:.08s"><div class="q4-stat__val">500+</div><div class="q4-stat__label">Clients Served Worldwide</div></div>
    <div class="q4-stat q4-fade-in" style="animation-delay:.16s"><div class="q4-stat__val">25+</div><div class="q4-stat__label">Years of IT Excellence</div></div>
    <div class="q4-stat q4-fade-in" style="animation-delay:.24s"><div class="q4-stat__val">6</div><div class="q4-stat__label">Core Service Pillars</div></div>
  </div>
</section>

<!-- ORIGIN STORY -->
<section class="q4-section q4-section--dark">
  <div class="q4-split">
    <div class="q4-fade-in">
      <div class="q4-eyebrow">Our Story</div>
      <h2>Started in Toronto. Trusted around the world.</h2>
      <p style="color:var(--q4-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        Q4 Gems was founded in 1999 with a clear conviction: that small and mid-sized businesses deserve the same quality of technology management as the world's largest enterprises. Back then, "managed IT" meant calling someone when things broke. We had a different idea.
      </p>
      <p style="color:var(--q4-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        Over 25 years, we've built a team of specialists across every IT discipline — from certified cybersecurity analysts and cloud architects to project managers and web developers. We've grown from a local Toronto firm to a global operation serving clients across North America, Europe, and beyond.
      </p>
      <p style="color:var(--q4-grey-light);font-size:1.0625rem;line-height:1.75">
        But our approach hasn't changed: we take the time to understand your business, align technology to your goals, and take full ownership of your IT — so you can focus on what you actually do best.
      </p>
    </div>
    <div class="q4-split__visual q4-fade-in" style="animation-delay:.15s;flex-direction:column;justify-content:flex-start;gap:1.5rem;padding:2rem">
      <?php
      $milestones = [
        ['1999', 'Founded in Toronto, Ontario'],
        ['2003', 'Expanded into full managed services'],
        ['2008', 'Launched cloud infrastructure practice'],
        ['2013', 'ISO 27001 & CISSP certifications achieved'],
        ['2018', 'Microsoft Gold Partner status earned'],
        ['2023', 'Serving 500+ clients across 3 continents'],
      ];
      foreach ( $milestones as $m ) : ?>
      <div style="display:flex;align-items:flex-start;gap:1rem">
        <div style="min-width:52px;font-size:.8125rem;font-weight:700;color:var(--q4-blue-bright);padding-top:2px"><?php echo $m[0]; ?></div>
        <div style="flex:1;padding-bottom:1.25rem;border-bottom:1px solid rgba(255,255,255,.06);font-size:.9375rem;color:var(--q4-grey-light)"><?php echo esc_html($m[1]); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MISSION & VISION -->
<section class="q4-section q4-section--mid">
  <div class="q4-container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;max-width:900px;margin:0 auto" class="q4-grid-2">
      <div class="q4-fade-in" style="background:var(--q4-navy);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius-md);padding:2.5rem">
        <div style="font-size:2.5rem;margin-bottom:1rem">🎯</div>
        <h3 style="font-size:1.5rem;margin-bottom:1rem;color:#fff">Our Mission</h3>
        <p style="color:var(--q4-grey-light);font-size:1rem;line-height:1.75">
          To empower businesses with innovative technology solutions that drive growth, improve efficiency, and enhance productivity — treating technology as a business enabler, not a business overhead.
        </p>
      </div>
      <div class="q4-fade-in" style="animation-delay:.1s;background:var(--q4-navy);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius-md);padding:2.5rem">
        <div style="font-size:2.5rem;margin-bottom:1rem">🌐</div>
        <h3 style="font-size:1.5rem;margin-bottom:1rem;color:#fff">Our Vision</h3>
        <p style="color:var(--q4-grey-light);font-size:1rem;line-height:1.75">
          To be a global leader in enterprise-grade technology solutions — enabling businesses of every size to succeed in the digital landscape through continuous innovation and emerging technology adoption.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section class="q4-section q4-section--dark">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow">Core Values</div>
      <h2>How we work. Every client, every day.</h2>
      <p>These aren't words on a wall. They're the standards we hold ourselves to in every engagement — from a 5-minute support call to a multi-year transformation project.</p>
    </div>
    <div class="q4-pillars">
      <?php
      $values = [
        ['💡', 'Innovation',     'We push boundaries, explore new possibilities, and continuously adopt technologies that keep our clients ahead of the curve.'],
        ['🤝', 'Integrity',      'We maintain the highest ethical standards in every recommendation and every interaction. If it\'s not the right answer for you, we\'ll say so.'],
        ['🔗', 'Collaboration',  'We work as an extension of your team — not a vendor. Your goals become our goals, and we succeed when you succeed.'],
        ['✅', 'Accountability', 'We take full ownership of what we commit to. No finger-pointing, no excuses. If something goes wrong, we fix it.'],
        ['⭐', 'Excellence',     'We commit to superior quality across all work — from the architecture of a cloud migration to the speed of a support response.'],
        ['🔒', 'Security-First', 'Security isn\'t an add-on at Q4 Gems — it\'s embedded in everything we design, build, and manage from day one.'],
        ['📞', 'Responsiveness', 'We believe fast communication is a form of respect. Every question, every issue, every concern gets a prompt, substantive response.'],
        ['🌱', 'Long-Term Focus', 'We build relationships for decades, not projects. Our best clients have been with us for 10, 15, even 20+ years.'],
      ];
      foreach ( $values as $i => $v ) : ?>
      <div class="q4-pillar q4-fade-in" style="animation-delay:<?php echo $i*.05; ?>s">
        <span class="q4-pillar__icon"><?php echo $v[0]; ?></span>
        <h4><?php echo esc_html($v[1]); ?></h4>
        <p><?php echo esc_html($v[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TEAM EXPERTISE -->
<section class="q4-section q4-section--mid">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow">Our Expertise</div>
      <h2>Every discipline. Every certification. One team.</h2>
      <p>Our specialists keep current with industry trends and technological advancements — because standing still in IT means falling behind.</p>
    </div>
    <div class="q4-grid-4">
      <?php
      $expertise = [
        ['🛡️', 'Cybersecurity', 'CISSP, CISM, CEH certified analysts and engineers'],
        ['☁️', 'Cloud Architecture', 'Azure, AWS, GCP certified architects and engineers'],
        ['📋', 'Project Management', 'PMP certified project and programme managers'],
        ['💻', 'Software & Web', 'Full-stack developers for web and mobile platforms'],
        ['🔒', 'Compliance', 'SOC 2, ISO 27001, HIPAA, PCI-DSS specialists'],
        ['📊', 'Data & Analytics', 'Business intelligence and operational insights'],
        ['🌐', 'Networking', 'Enterprise networking and infrastructure engineers'],
        ['🤝', 'IT Advisory', 'CIO/vCISO level strategic technology consultants'],
      ];
      foreach ( $expertise as $i => $e ) : ?>
      <div style="background:var(--q4-navy);border:1px solid rgba(255,255,255,.07);border-radius:var(--radius-md);padding:1.5rem;text-align:center;transition:all .2s" class="q4-fade-in" style="animation-delay:<?php echo $i*.05; ?>s">
        <div style="font-size:2rem;margin-bottom:.75rem"><?php echo $e[0]; ?></div>
        <div style="font-weight:700;color:#fff;font-size:.9375rem;margin-bottom:.5rem"><?php echo esc_html($e[1]); ?></div>
        <div style="font-size:.8125rem;color:var(--q4-grey-mid);line-height:1.5"><?php echo esc_html($e[2]); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CERTIFICATIONS & PARTNERSHIPS -->
<section class="q4-section q4-section--dark">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow">Certifications & Partnerships</div>
      <h2>Independent validation of our standards.</h2>
      <p>Our certifications aren't marketing — they're audited, maintained, and renewed every year. They represent the baseline our clients expect and that we hold ourselves to.</p>
    </div>
    <div class="q4-grid-3" style="max-width:900px;margin:0 auto">
      <?php
      $certs = [
        ['🔒', 'SOC 2 Type II',       'Independently audited annually. Our security controls, availability, and confidentiality practices are verified by a third-party auditor — not self-declared.'],
        ['📋', 'ISO 27001',            'International standard for information security management. We\'re certified and maintain full compliance with all controls and risk management processes.'],
        ['🛡️', 'CISSP Certified Team', 'Our security analysts and architects hold the Certified Information Systems Security Professional designation — the gold standard in cybersecurity credentials.'],
        ['🔷', 'Microsoft Partner',    'Authorised Microsoft partner with certified expertise in Azure, Microsoft 365, and Dynamics. We have direct access to Microsoft engineering and support.'],
        ['🔶', 'AWS Partner',          'Amazon Web Services partner with certified cloud architects. We have access to AWS partner resources, training, and co-sell opportunities.'],
        ['🔵', 'Google Partner',       'Authorised Google Cloud and Google Workspace reseller and implementation partner — direct support escalation and access to partner-only resources.'],
      ];
      foreach ( $certs as $i => $c ) : ?>
      <div class="q4-card q4-fade-in" style="animation-delay:<?php echo $i*.07; ?>s">
        <div class="q4-card__icon"><?php echo $c[0]; ?></div>
        <h3><?php echo esc_html($c[1]); ?></h3>
        <p><?php echo esc_html($c[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CLIENT COMMITMENT -->
<section class="q4-section q4-section--mid">
  <div class="q4-split">
    <div class="q4-fade-in">
      <div class="q4-eyebrow">Our Client Commitment</div>
      <h2>We earn your business every month.</h2>
      <p style="color:var(--q4-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:1.5rem">
        No lock-in contracts. No "that's out of scope." No rotating call centres where no one knows your name. When you work with Q4 Gems, you get a named account manager who knows your environment, your team, and your goals.
      </p>
      <p style="color:var(--q4-grey-light);font-size:1.0625rem;line-height:1.75;margin-bottom:2rem">
        Our best client relationships span 10 to 20 years — not because we lock people in, but because we consistently deliver results that make staying the obvious choice.
      </p>
      <ul class="q4-check-list" style="margin-bottom:2rem">
        <li>Dedicated account manager for every client</li>
        <li>Monthly reporting and quarterly strategy reviews</li>
        <li>Direct access to senior engineers and leadership</li>
        <li>Month-to-month billing — no penalty to leave</li>
        <li>Custom solutions, not off-the-shelf packages</li>
      </ul>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary">Talk to Our Team <span class="arrow">→</span></a>
    </div>
    <div class="q4-split__visual q4-fade-in" style="animation-delay:.15s;align-items:flex-start;flex-direction:column;gap:1rem;padding:2rem">
      <div style="font-size:.8125rem;font-weight:600;color:var(--q4-grey-mid);letter-spacing:.08em;text-transform:uppercase;margin-bottom:.5rem">Client satisfaction metrics</div>
      <?php
      $metrics = [
        ['Client retention rate',      '96%',   '#34D399'],
        ['Average client tenure',      '7.2 yrs', '#60A5FA'],
        ['SLA achievement rate',       '99.4%',   '#A78BFA'],
        ['Support satisfaction score', '4.9/5',   '#FBBF24'],
        ['First call resolution rate', '87%',     '#34D399'],
      ];
      foreach ( $metrics as $m ) : ?>
      <div style="width:100%;display:flex;align-items:center;justify-content:space-between;background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.07);border-radius:8px;padding:.875rem 1.25rem">
        <span style="color:var(--q4-grey-light);font-size:.9rem"><?php echo esc_html($m[0]); ?></span>
        <span style="font-weight:700;font-size:1.125rem;color:<?php echo $m[2]; ?>"><?php echo esc_html($m[1]); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="q4-section q4-section--dark">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in"><div class="q4-eyebrow">Client Voices</div><h2>In their own words.</h2></div>
    <div class="q4-testimonial-grid">
      <div class="q4-testimonial q4-fade-in">
        <div class="q4-testimonial__stars">★★★★★</div>
        <p class="q4-testimonial__quote">"We've been with Q4 Gems for over twelve years. They've been there for every major technology change in our business — from moving to the cloud to our recent SOC 2 audit. They don't feel like a vendor; they feel like part of our team."</p>
        <div class="q4-testimonial__author">
          <div class="q4-testimonial__avatar">DM</div>
          <div><div class="q4-testimonial__name">David M.</div><div class="q4-testimonial__role">Managing Director, Law Firm</div></div>
        </div>
      </div>
      <div class="q4-testimonial q4-fade-in" style="animation-delay:.1s">
        <div class="q4-testimonial__stars">★★★★★</div>
        <p class="q4-testimonial__quote">"What sets Q4 apart is that they actually push back when they think you're making the wrong technology choice. They care more about getting it right for your business than just closing a sale."</p>
        <div class="q4-testimonial__author">
          <div class="q4-testimonial__avatar">NS</div>
          <div><div class="q4-testimonial__name">Nadia S.</div><div class="q4-testimonial__role">CTO, Real Estate Group</div></div>
        </div>
      </div>
      <div class="q4-testimonial q4-fade-in" style="animation-delay:.2s">
        <div class="q4-testimonial__stars">★★★★★</div>
        <p class="q4-testimonial__quote">"We've worked with four IT companies before Q4 Gems. None of them came close to this level of expertise and responsiveness. Switching to Q4 was the best IT decision we've ever made."</p>
        <div class="q4-testimonial__author">
          <div class="q4-testimonial__avatar">TC</div>
          <div><div class="q4-testimonial__name">Thomas C.</div><div class="q4-testimonial__role">CEO, Manufacturing SMB</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="q4-cta-band">
  <div class="q4-cta-band__inner q4-fade-in">
    <div class="q4-eyebrow" style="justify-content:center">Let's work together</div>
    <h2>25 years of expertise, working for your business.</h2>
    <p>Start with a free IT assessment and discover what a long-term technology partnership actually looks like.</p>
    <div class="q4-cta-band__actions">
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary q4-btn--lg">Book Free Consultation <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/services/')); ?>" class="q4-btn q4-btn--outline q4-btn--lg">Explore Services</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer id="q4-footer">
  <div class="q4-footer__inner">
    <div class="q4-footer__top">
      <div class="q4-footer__brand">
        <img src="<?php echo $logo_url; ?>" alt="Q4 Gems" onerror="this.style.display:'none'">
        <p>Q4 GLOBAL Enterprise Managed Solutions Inc. — Toronto-based IT excellence since 1999. Serving 500+ organizations worldwide.</p>
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
          <li><a href="<?php echo esc_url(home_url('/pricing/')); ?>">Pricing</a></li>
        </ul>
      </div>
      <div class="q4-footer__col">
        <h5>Company</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/leadership/')); ?>">Leadership</a></li>
          <li><a href="<?php echo esc_url(home_url('/partnerships/')); ?>">Partnerships</a></li>
          <li><a href="<?php echo esc_url(home_url('/careers/')); ?>">Careers</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
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
