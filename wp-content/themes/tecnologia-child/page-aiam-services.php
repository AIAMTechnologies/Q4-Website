<?php
/**
 * Template Name: AIAM Services / Platform
 *
 * Q4 Gems — Services overview page.
 * Covers: Cyber Security, Managed Services, Cloud & Infrastructure,
 * IT Consulting, Productivity Solutions, Web Solutions.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$site_url = esc_url( home_url('/') );
$logo_url = content_url('uploads/2023/03/q4g-white.png');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Q4 Gems services — Cybersecurity, Managed IT, Cloud, Consulting, Web Solutions and more. End-to-end technology management from Toronto's most trusted IT partner.">
<title>Services — Q4 Gems</title>
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
      <li><a href="<?php echo esc_url(home_url('/services/')); ?>" style="color:#fff">Managed Services</a></li>
      <li><a href="<?php echo esc_url(home_url('/consulting/')); ?>">Consulting</a></li>
      <li><a href="<?php echo esc_url(home_url('/solutions/')); ?>">Solutions</a></li>
      <li><a href="<?php echo esc_url(home_url('/pricing/')); ?>">Pricing</a></li>
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
    <a href="<?php echo esc_url(home_url('/consulting/')); ?>">Consulting</a>
    <a href="<?php echo esc_url(home_url('/solutions/')); ?>">Solutions</a>
    <a href="<?php echo esc_url(home_url('/pricing/')); ?>">Pricing</a>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary" style="justify-content:center;margin-top:8px">Get Started</a>
  </div>
</header>

<!-- HERO -->
<section style="padding:140px 0 var(--sp-20);text-align:center;position:relative;overflow:hidden">
  <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:900px;height:500px;background:radial-gradient(ellipse,rgba(36,128,191,.14) 0%,transparent 70%);pointer-events:none"></div>
  <div class="q4-container" style="position:relative;z-index:1">
    <div class="q4-eyebrow q4-fade-in" style="justify-content:center"><span class="dot"></span>End-to-End IT Services</div>
    <h1 style="font-size:clamp(2.75rem,5vw,4.25rem);font-weight:800;letter-spacing:-.035em;margin-bottom:1.25rem" class="q4-fade-in">
      Your entire IT landscape,<br><span class="q4-gradient">one trusted partner.</span>
    </h1>
    <p style="font-size:1.1875rem;color:var(--q4-grey-light);line-height:1.75;max-width:620px;margin:0 auto 2.5rem" class="q4-fade-in">
      From securing your endpoints to building your cloud strategy, Q4 Gems delivers every IT capability your business needs — with 25 years of expertise behind every engagement.
    </p>
    <div style="display:flex;align-items:center;justify-content:center;gap:1rem;flex-wrap:wrap" class="q4-fade-in">
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary q4-btn--lg">Book Free Consultation <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="q4-btn q4-btn--ghost q4-btn--lg">See Pricing</a>
    </div>
  </div>
</section>

<!-- SERVICE NAV -->
<div style="background:var(--q4-navy-mid);border-top:1px solid rgba(255,255,255,.06);border-bottom:1px solid rgba(255,255,255,.06);position:sticky;top:72px;z-index:100">
  <div class="q4-container">
    <div style="display:flex;align-items:center;overflow-x:auto;scrollbar-width:none">
      <?php
      $nav_items = [
        ['#security',   '🛡️', 'Cyber Security'],
        ['#managed',    '⚙️', 'Managed Services'],
        ['#cloud',      '☁️', 'Cloud & Infrastructure'],
        ['#consulting', '🧭', 'Consulting'],
        ['#solutions',  '📋', 'Solutions'],
        ['#web',        '🌐', 'Web Solutions'],
      ];
      foreach ( $nav_items as $n ) : ?>
      <a href="<?php echo $n[0]; ?>" style="display:flex;align-items:center;gap:.5rem;padding:1.125rem 1.5rem;color:var(--q4-grey-mid);font-size:.875rem;font-weight:500;white-space:nowrap;border-bottom:2px solid transparent;transition:all .2s;text-decoration:none" onmouseover="this.style.color='#fff';this.style.borderColor='var(--q4-blue-bright)'" onmouseout="this.style.color='var(--q4-grey-mid)';this.style.borderColor='transparent'"><?php echo $n[1]; ?> <?php echo esc_html($n[2]); ?></a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- CYBER SECURITY -->
<section class="q4-section q4-section--dark" id="security">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow"><span class="dot"></span>Cyber Security</div>
      <h2>Security that's active, not reactive.</h2>
      <p>Threats don't wait for business hours. Our cybersecurity services run continuously — identifying, containing, and eliminating threats before they impact your operations.</p>
    </div>
    <div class="q4-grid-3">
      <?php
      $sec_services = [
        ['🔍', 'Security Posture Assessment', 'A comprehensive review of your current security environment. We identify gaps, misconfigurations, and vulnerabilities — then deliver a prioritised remediation roadmap.', '/cyber-security/security-posture/'],
        ['☁️', 'Cloud Security', 'Secure your AWS, Azure, and GCP environments with continuous misconfiguration detection, access control auditing, and cloud-native threat monitoring.', '/cyber-security/cloud-security/'],
        ['📊', 'Risk & Compliance', 'Navigate SOC 2, ISO 27001, HIPAA, PCI-DSS, and more. We build and maintain your compliance programme so your team spends less time on audits.', '/cyber-security/risk-and-compiliance/'],
        ['🛡️', 'Information Security', 'End-to-end information security management — policy development, access controls, data classification, and employee awareness aligned to industry frameworks.', '/cyber-security/information-security/'],
        ['⚠️', 'Security Services & Risk Assessments', 'Vulnerability scans, penetration testing, and ongoing risk assessments that give you an accurate, current picture of your threat exposure.', '/cyber-security/security-services-and-risk-assessments/'],
        ['🔒', 'Cloud Security Technology', 'Deploy cloud-native security tools — WAFs, CASB, CSPM, and SIEM — configured and managed by our certified security engineers.', '/cyber-security/cloud-security-technology/'],
      ];
      foreach ( $sec_services as $i => $s ) : ?>
      <div class="q4-card q4-fade-in" style="animation-delay:<?php echo $i*.07; ?>s">
        <div class="q4-card__icon"><?php echo $s[0]; ?></div>
        <h3><?php echo esc_html($s[1]); ?></h3>
        <p><?php echo esc_html($s[2]); ?></p>
        <a href="<?php echo esc_url(home_url($s[3])); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MANAGED SERVICES -->
<section class="q4-section q4-section--mid" id="managed">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow"><span class="dot"></span>Managed IT Services</div>
      <h2>Your IT department — or a powerful extension of it.</h2>
      <p>We handle the day-to-day so your team can focus on what matters. From the service desk to offsite backups, we manage the complete IT lifecycle.</p>
    </div>
    <div class="q4-grid-3">
      <?php
      $managed = [
        ['🖥️', 'Remote Monitoring & Management', '24/7 proactive monitoring of all your endpoints, servers, and network devices. We detect and resolve issues — often before you notice them.', '/services/remote-monitoring-and-management/'],
        ['🎧', 'Service Desk', 'A real support team that picks up the phone. Fast, friendly, certified technicians available for your team whenever they need help.', '/services/service-desk/'],
        ['💾', 'Offsite Data Backup', 'Automated, encrypted, off-site backups with verified recovery testing. Your data is safe even if your building isn\'t.', '/services/offsite-data-backup/'],
        ['🔄', 'Disaster Recovery', 'Documented, tested disaster recovery plans with defined RTOs and RPOs. When the worst happens, recovery is measured in hours — not days.', '/services/disaster-recovery/'],
        ['🏢', 'Business Continuity', 'Comprehensive planning and infrastructure to keep your business operational through any disruption — outage, cyberattack, or natural disaster.', '/services/business-continuity/'],
        ['🛒', 'Procurement', 'Hardware, software, and licensing sourced at competitive rates through our vendor partnerships. We handle purchasing, configuration, and deployment.', '/services/procurement/'],
        ['📧', 'Email & Collaboration', 'Management of your entire collaboration stack — Microsoft 365, Google Workspace, Teams, and more — configured, secured, and optimised.', '/services/email-and-collaboration/'],
        ['🛡️', 'Data Protection Services', 'Data loss prevention (DLP), encryption management, and access governance to protect your most sensitive information at rest and in transit.', '/services/data-protection-services/'],
        ['☁️', 'Fully Managed Cloud Services', 'Complete management of your cloud environment — provisioning, cost optimisation, security, and ongoing operations across any cloud platform.', '/services/fully-managed-cloud-services/'],
      ];
      foreach ( $managed as $i => $s ) : ?>
      <div class="q4-card q4-fade-in" style="animation-delay:<?php echo $i*.06; ?>s">
        <div class="q4-card__icon"><?php echo $s[0]; ?></div>
        <h3><?php echo esc_html($s[1]); ?></h3>
        <p><?php echo esc_html($s[2]); ?></p>
        <a href="<?php echo esc_url(home_url($s[3])); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CLOUD & INFRASTRUCTURE -->
<section class="q4-section q4-section--dark" id="cloud">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow"><span class="dot"></span>Cloud & Infrastructure</div>
      <h2>Infrastructure built for how you work today — and tomorrow.</h2>
      <p>Whether you're migrating to the cloud for the first time or optimising a complex multi-cloud environment, our cloud architects design and manage infrastructure that performs.</p>
    </div>
    <div class="q4-grid-3">
      <?php
      $infra = [
        ['🚀', 'Go-to-Cloud Strategy', 'A tailored migration roadmap — assessing your current environment, identifying the right cloud fit (Azure, AWS, GCP, or hybrid), and planning a zero-disruption transition.', '/consulting/go-to-cloud-strategy/'],
        ['🏗️', 'Virtual Data Centre', 'Scalable, secure virtual infrastructure hosted in enterprise-grade Canadian data centres. Full redundancy, guaranteed uptime, and managed operations.', '/infrastructure/virtual-data-center/'],
        ['🏢', 'Colocation Services', 'House your own hardware in our secure, climate-controlled, carrier-neutral colocation facilities with 24/7 physical security and network monitoring.', '/infrastructure/colocation-services/'],
        ['📊', 'Operational Intelligence', 'Real-time visibility into your infrastructure performance — dashboards, alerting, and capacity planning to keep your environment running at peak efficiency.', '/infrastructure/operational-intelligence/'],
        ['☁️', 'Microsoft Azure', 'Architecture, deployment, and ongoing management of Azure workloads by certified Azure engineers with hands-on experience across every Azure service.', '/consulting/go-to-cloud-strategy/'],
        ['🔶', 'AWS & Google Cloud', 'Multi-cloud management across AWS and GCP — from architecture reviews to cost optimisation to 24/7 operations support by certified cloud engineers.', '/consulting/go-to-cloud-strategy/'],
      ];
      foreach ( $infra as $i => $s ) : ?>
      <div class="q4-card q4-fade-in" style="animation-delay:<?php echo $i*.07; ?>s">
        <div class="q4-card__icon"><?php echo $s[0]; ?></div>
        <h3><?php echo esc_html($s[1]); ?></h3>
        <p><?php echo esc_html($s[2]); ?></p>
        <a href="<?php echo esc_url(home_url($s[3])); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CONSULTING -->
<section class="q4-section q4-section--mid" id="consulting">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow"><span class="dot"></span>IT Consulting</div>
      <h2>25 years of experience in every recommendation we make.</h2>
      <p>Technology decisions are business decisions. Our consultants bring deep expertise and a vendor-agnostic perspective to every engagement.</p>
    </div>
    <div class="q4-grid-2" style="max-width:900px;margin:0 auto">
      <?php
      $consulting = [
        ['🔄', 'Digital Transformation', 'We assess your current processes, identify automation and modernisation opportunities, and build a phased transformation roadmap that aligns technology to your business goals.', '/consulting/digital-transformation/'],
        ['📋', 'Project Management', 'Certified project managers who deliver IT projects on time and on budget — from infrastructure upgrades to enterprise software deployments.', '/consulting/project-management/'],
        ['🤝', 'Professional Services', 'Specialist engagements for specific needs — a security audit, an architecture review, a cloud migration, or a vendor evaluation.', '/consulting/professional-services/'],
        ['🏢', 'Enterprise IT Advisory', 'Strategic IT advisory for growing businesses — technology roadmapping, IT governance, vendor management, and CIO-level guidance without the CIO salary.', '/consulting/'],
      ];
      foreach ( $consulting as $i => $s ) : ?>
      <div class="q4-card q4-fade-in" style="animation-delay:<?php echo $i*.08; ?>s">
        <div class="q4-card__icon"><?php echo $s[0]; ?></div>
        <h3><?php echo esc_html($s[1]); ?></h3>
        <p><?php echo esc_html($s[2]); ?></p>
        <a href="<?php echo esc_url(home_url($s[3])); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SOLUTIONS -->
<section class="q4-section q4-section--dark" id="solutions">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow"><span class="dot"></span>Productivity Solutions</div>
      <h2>The right platform — implemented right.</h2>
      <p>Authorised Microsoft and Google partners. Better pricing, direct support escalation, and engineers who know these platforms inside and out.</p>
    </div>
    <div class="q4-grid-3">
      <div class="q4-card q4-fade-in">
        <div class="q4-card__icon">🔷</div>
        <h3>Microsoft 365 Business Premium</h3>
        <p>Teams, SharePoint, OneDrive, Exchange, and advanced security. We handle licensing, migration, configuration, and ongoing management.</p>
        <ul class="q4-check-list">
          <li>Mailbox migration with zero data loss</li>
          <li>Teams & SharePoint architecture</li>
          <li>Conditional Access & MFA enforcement</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/solutions/microsoft-365-business-premium/')); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
      <div class="q4-card q4-fade-in" style="animation-delay:.1s">
        <div class="q4-card__icon">🔵</div>
        <h3>Google Workspace</h3>
        <p>Gmail, Drive, Meet, and the full Google Workspace suite — set up and managed for your team.</p>
        <ul class="q4-check-list">
          <li>Domain setup & email migration</li>
          <li>Drive & shared drive configuration</li>
          <li>Security & compliance settings</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/solutions/google-workspace/')); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
      <div class="q4-card q4-fade-in" style="animation-delay:.2s">
        <div class="q4-card__icon">🪪</div>
        <h3>Azure AD & Identity Management</h3>
        <p>Single sign-on, Conditional Access, Intune device management, and Defender for Business — securing your people and devices.</p>
        <ul class="q4-check-list">
          <li>Azure AD / Entra ID setup</li>
          <li>Intune mobile device management</li>
          <li>Identity governance & access reviews</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/solutions/microsoft-365/')); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- WEB SOLUTIONS -->
<section class="q4-section q4-section--mid" id="web">
  <div class="q4-container">
    <div class="q4-section-hdr q4-fade-in">
      <div class="q4-eyebrow"><span class="dot"></span>Web Solutions</div>
      <h2>A digital presence that works as hard as you do.</h2>
      <p>Your website and online presence are often the first thing clients see. We design, build, and optimise digital experiences that convert visitors into customers.</p>
    </div>
    <div class="q4-grid-3">
      <div class="q4-card q4-fade-in">
        <div class="q4-card__icon">🎨</div>
        <h3>Website Design & Development</h3>
        <p>Custom websites built on modern platforms — fast, mobile-first, and designed to reflect your brand. From landing pages to full enterprise portals.</p>
        <a href="<?php echo esc_url(home_url('/web-solutions/website-design/')); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
      <div class="q4-card q4-fade-in" style="animation-delay:.1s">
        <div class="q4-card__icon">📱</div>
        <h3>Mobile App Design & Creation</h3>
        <p>Native and cross-platform mobile applications for iOS and Android — from concept through to App Store deployment and ongoing updates.</p>
        <a href="<?php echo esc_url(home_url('/web-solutions/mobile-app-design-and-creation/')); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
      <div class="q4-card q4-fade-in" style="animation-delay:.2s">
        <div class="q4-card__icon">📈</div>
        <h3>Search Engine Optimisation</h3>
        <p>Technical SEO, content strategy, and ongoing optimisation that improves your organic search rankings and brings qualified traffic sustainably.</p>
        <a href="<?php echo esc_url(home_url('/web-solutions/search-engine-optimization/')); ?>" class="q4-card__link">Learn more <span>→</span></a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="q4-cta-band">
  <div class="q4-cta-band__inner q4-fade-in">
    <div class="q4-eyebrow" style="justify-content:center">Ready to simplify your IT?</div>
    <h2>One call. One partner. Every IT need covered.</h2>
    <p>Tell us about your business and we'll put together a custom services package — with transparent pricing and no lock-in commitment.</p>
    <div class="q4-cta-band__actions">
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="q4-btn q4-btn--primary q4-btn--lg">Book Free Assessment <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="q4-btn q4-btn--outline q4-btn--lg">View Pricing</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer id="q4-footer">
  <div class="q4-footer__inner">
    <div class="q4-footer__top">
      <div class="q4-footer__brand">
        <img src="<?php echo $logo_url; ?>" alt="Q4 Gems" onerror="this.style.display:'none'">
        <p>Q4 GLOBAL Enterprise Managed Solutions Inc. — Toronto-based IT excellence since 1999.</p>
      </div>
      <div class="q4-footer__col">
        <h5>Services</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url(home_url('/cyber-security/')); ?>">Cyber Security</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Managed Services</a></li>
          <li><a href="<?php echo esc_url(home_url('/infrastructure/')); ?>">Infrastructure</a></li>
          <li><a href="<?php echo esc_url(home_url('/consulting/')); ?>">Consulting</a></li>
          <li><a href="<?php echo esc_url(home_url('/web-solutions/')); ?>">Web Solutions</a></li>
        </ul>
      </div>
      <div class="q4-footer__col">
        <h5>Solutions</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url(home_url('/solutions/microsoft-365-business-premium/')); ?>">Microsoft 365</a></li>
          <li><a href="<?php echo esc_url(home_url('/solutions/google-workspace/')); ?>">Google Workspace</a></li>
          <li><a href="<?php echo esc_url(home_url('/pricing/')); ?>">Pricing</a></li>
        </ul>
      </div>
      <div class="q4-footer__col">
        <h5>Company</h5>
        <ul class="q4-footer__links">
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/leadership/')); ?>">Leadership</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url(home_url('/careers/')); ?>">Careers</a></li>
        </ul>
      </div>
    </div>
    <div class="q4-footer__bottom">
      <p class="q4-footer__copy">© <?php echo date('Y'); ?> Q4 GLOBAL Enterprise Managed Solutions Inc. All rights reserved. Toronto, Canada.</p>
      <div class="q4-footer__social">
        <a href="#" aria-label="LinkedIn">in</a>
        <a href="#" aria-label="Twitter">𝕏</a>
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
