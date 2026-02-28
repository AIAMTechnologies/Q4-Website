<?php

function q4_command_media( $path ) {
    return content_url( '/uploads/' . ltrim( $path, '/' ) );
}

function q4_command_contact_points() {
    return array(
        array(
            'label' => __( 'Email', 'q4-command' ),
            'value' => 'info@q4gems.ca',
            'link'  => 'mailto:info@q4gems.ca',
        ),
        array(
            'label' => __( 'Phone', 'q4-command' ),
            'value' => '647-494-4070',
            'link'  => 'tel:+16474944070',
        ),
        array(
            'label' => __( 'Toll free', 'q4-command' ),
            'value' => '800-930-5442',
            'link'  => 'tel:+18009305442',
        ),
        array(
            'label' => __( 'Office', 'q4-command' ),
            'value' => __( '5800 Ambler Drive, Mississauga, Ontario, L4J 4J4', 'q4-command' ),
        ),
    );
}

function q4_command_home_content() {
    return array(
        'eyebrow' => __( 'Managed IT Services and Cybersecurity for SMB\'s', 'q4-command' ),
        'title'   => __( 'Security-first IT support that helps SMB\'s move faster with fewer surprises.', 'q4-command' ),
        'intro'   => __( 'Q4 GEMS delivers managed IT services, cybersecurity, Microsoft 365 support, cloud guidance, and business continuity planning for organizations that need dependable technology and practical advice.', 'q4-command' ),
        'actions' => array(
            array(
                'label' => __( 'Book a consultation', 'q4-command' ),
                'url'   => home_url( '/contact-us/' ),
                'kind'  => 'primary',
            ),
            array(
                'label' => __( 'Explore services', 'q4-command' ),
                'url'   => home_url( '/services/' ),
                'kind'  => 'secondary',
            ),
        ),
        'signals' => array(
            array(
                'value' => '24/7',
                'label' => __( 'Support, monitoring, and escalation coverage', 'q4-command' ),
            ),
            array(
                'value' => __( 'M365', 'q4-command' ),
                'label' => __( 'Secure collaboration and workplace productivity', 'q4-command' ),
            ),
            array(
                'value' => __( 'Cloud', 'q4-command' ),
                'label' => __( 'Infrastructure, backup, recovery, and modernization', 'q4-command' ),
            ),
            array(
                'value' => __( 'Security', 'q4-command' ),
                'label' => __( 'Layered protection designed for real business risk', 'q4-command' ),
            ),
        ),
        'hero_cards' => array(
            array(
                'title' => __( 'Managed IT that steadies operations', 'q4-command' ),
                'text'  => __( 'Responsive help desk, proactive maintenance, and device support that reduce downtime and ticket churn.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Security that fits your environment', 'q4-command' ),
                'text'  => __( 'Identity, endpoint, email, and cloud protections that help your team prevent, detect, and respond faster.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Roadmaps that support growth', 'q4-command' ),
                'text'  => __( 'Strategic guidance for Microsoft 365, procurement, projects, and technology planning.', 'q4-command' ),
            ),
        ),
        'hero_image' => array(
            'url' => q4_command_media( '2023/06/homehader.webp' ),
            'alt' => __( 'Q4 GEMS team collaborating over managed IT planning', 'q4-command' ),
        ),
        'logo_strip' => array(
            array( 'url' => q4_command_media( '2023/06/microsoft.webp' ), 'alt' => 'Microsoft' ),
            array( 'url' => q4_command_media( '2023/06/googlemedia.webp' ), 'alt' => 'Google' ),
            array( 'url' => q4_command_media( '2023/06/cisco.webp' ), 'alt' => 'Cisco' ),
            array( 'url' => q4_command_media( '2023/06/dell01.webp' ), 'alt' => 'Dell' ),
            array( 'url' => q4_command_media( '2023/06/intel.webp' ), 'alt' => 'Intel' ),
            array( 'url' => q4_command_media( '2023/03/hewlett-packard-enterprise-silver-partner-vector-logo.png' ), 'alt' => 'HPE Silver Partner' ),
        ),
        'services' => array(
            array(
                'slug'        => 'managed-it-services',
                'eyebrow'     => __( 'Managed IT Services', 'q4-command' ),
                'title'       => __( 'Stabilize support, devices, networks, and day-to-day operations.', 'q4-command' ),
                'description' => __( 'Reduce disruption with responsive service desk coverage, monitoring, patching, user support, and practical lifecycle management.', 'q4-command' ),
            ),
            array(
                'slug'        => 'cyber-security',
                'eyebrow'     => __( 'Cybersecurity', 'q4-command' ),
                'title'       => __( 'Strengthen prevention, visibility, and recovery across your environment.', 'q4-command' ),
                'description' => __( 'Q4 GEMS helps businesses improve email security, endpoint protection, access control, risk reviews, and remediation planning.', 'q4-command' ),
            ),
            array(
                'slug'        => 'microsoft-365',
                'eyebrow'     => __( 'Microsoft 365', 'q4-command' ),
                'title'       => __( 'Get more from Microsoft 365 without creating new security gaps.', 'q4-command' ),
                'description' => __( 'From configuration and migration to collaboration governance, Q4 GEMS supports secure, productive hybrid work.', 'q4-command' ),
            ),
            array(
                'slug'        => 'business-continuity',
                'eyebrow'     => __( 'Business Continuity', 'q4-command' ),
                'title'       => __( 'Plan for outages, incidents, and recovery before they become expensive.', 'q4-command' ),
                'description' => __( 'Backup, disaster recovery, offsite protection, and continuity planning keep critical services available when something goes wrong.', 'q4-command' ),
            ),
            array(
                'slug'        => 'procurement',
                'eyebrow'     => __( 'Procurement', 'q4-command' ),
                'title'       => __( 'Choose the right hardware, software, and renewals with less friction.', 'q4-command' ),
                'description' => __( 'Q4 GEMS helps businesses source, standardize, and align technology purchases with budget, compliance, and roadmap priorities.', 'q4-command' ),
            ),
            array(
                'slug'        => 'project-management',
                'eyebrow'     => __( 'Projects and Advisory', 'q4-command' ),
                'title'       => __( 'Execute migrations, upgrades, and strategic initiatives with clearer accountability.', 'q4-command' ),
                'description' => __( 'Use Q4 GEMS for project planning, execution support, stakeholder communication, and implementation guidance that actually lands.', 'q4-command' ),
            ),
        ),
        'platform' => array(
            array(
                'title' => __( 'Responsive support with clear ownership', 'q4-command' ),
                'text'  => __( 'Issues are tracked, communicated clearly, and pushed through to resolution so teams spend less time chasing updates.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Security built into daily operations', 'q4-command' ),
                'text'  => __( 'Support, device management, identity, email, and cloud administration are handled with risk reduction in view, not as disconnected workstreams.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Roadmaps tied to business priorities', 'q4-command' ),
                'text'  => __( 'Q4 GEMS helps leaders improve uptime, resilience, employee productivity, and return on technology spend with practical planning and guidance.', 'q4-command' ),
            ),
        ),
        'process' => array(
            array(
                'step'  => '01',
                'title' => __( 'Assess and align', 'q4-command' ),
                'text'  => __( 'Review support pain points, infrastructure gaps, security exposures, and the business goals behind the engagement.', 'q4-command' ),
            ),
            array(
                'step'  => '02',
                'title' => __( 'Stabilize the core', 'q4-command' ),
                'text'  => __( 'Improve the everyday environment with stronger support coverage, better device standards, and cleaner operational ownership.', 'q4-command' ),
            ),
            array(
                'step'  => '03',
                'title' => __( 'Strengthen resilience', 'q4-command' ),
                'text'  => __( 'Layer in security, backup, recovery, Microsoft 365 governance, and practical safeguards that reduce avoidable risk.', 'q4-command' ),
            ),
            array(
                'step'  => '04',
                'title' => __( 'Plan the next move', 'q4-command' ),
                'text'  => __( 'Use a clearer roadmap for upgrades, procurement, lifecycle planning, and the technology decisions that support growth.', 'q4-command' ),
            ),
        ),
        'industries' => array(
            array(
                'title' => __( 'Professional services', 'q4-command' ),
                'text'  => __( 'Support fast-moving firms that need dependable systems, secure collaboration, and a better client-service experience.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Healthcare and regulated teams', 'q4-command' ),
                'text'  => __( 'Improve continuity, endpoint security, identity controls, and day-to-day support where availability and trust matter.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Construction and field-based operations', 'q4-command' ),
                'text'  => __( 'Keep office and field teams connected with practical device support, Microsoft 365 access, and stronger backup coverage.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Manufacturing and logistics', 'q4-command' ),
                'text'  => __( 'Reduce downtime, coordinate vendors, and build more resilience into the systems that keep operations moving.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Nonprofits and member organizations', 'q4-command' ),
                'text'  => __( 'Get IT support, security guidance, and budget-conscious planning that helps limited internal teams do more.', 'q4-command' ),
            ),
            array(
                'title' => __( 'Growing mid-market companies', 'q4-command' ),
                'text'  => __( 'Use Q4 GEMS as an outsourced IT and security partner when internal teams need more bandwidth, direction, and execution help.', 'q4-command' ),
            ),
        ),
        'testimonials' => array(
            array(
                'quote' => __( 'Q4 GEMS is responsive, knowledgeable, and reliable. They make technical issues easier to manage and communicate clearly throughout the process.', 'q4-command' ),
                'name'  => 'Monika H.',
            ),
            array(
                'quote' => __( 'Their team feels invested in our success. We have seen better follow-through, better support, and better confidence in our systems.', 'q4-command' ),
                'name'  => 'Devin R.',
            ),
            array(
                'quote' => __( 'Q4 GEMS brings practical advice, solid support, and a strong sense of accountability. That combination matters when issues affect the business.', 'q4-command' ),
                'name'  => 'Mike S.',
            ),
        ),
        'faq' => array(
            array(
                'question' => __( 'What does a managed IT services partner help with?', 'q4-command' ),
                'answer'   => __( 'A managed IT partner supports daily user issues, device and network maintenance, monitoring, vendor coordination, planning, and the operational work required to keep business systems stable and secure.', 'q4-command' ),
            ),
            array(
                'question' => __( 'Can Q4 GEMS support both cybersecurity and day-to-day IT?', 'q4-command' ),
                'answer'   => __( 'Yes. Q4 GEMS combines managed IT support with cybersecurity, backup, recovery, Microsoft 365 administration, and practical risk reduction in one service relationship.', 'q4-command' ),
            ),
            array(
                'question' => __( 'Do you help with Microsoft 365 migrations and optimization?', 'q4-command' ),
                'answer'   => __( 'Yes. Q4 GEMS supports Microsoft 365 setup, migrations, collaboration improvements, security configuration, and adoption guidance for teams that want better value from the platform.', 'q4-command' ),
            ),
            array(
                'question' => __( 'Is Q4 GEMS focused on SMB\'s?', 'q4-command' ),
                'answer'   => __( 'Q4 GEMS is built for SMB\'s that need reliable remote, cloud, and security-focused IT services, with delivery shaped around practical support, resilience, and growth.', 'q4-command' ),
            ),
        ),
    );
}

function q4_command_page_library() {
    return array(
        'about' => array(
            'aliases' => array( 'about-us', 'about', 'company', 'why-q4-gems', 'leadership', 'our-clientele', 'business-outcomes', 'partnerships' ),
            'keywords' => array( 'about', 'company', 'leadership', 'clientele', 'business outcomes', 'partnership' ),
            'eyebrow' => __( 'About Q4 GEMS', 'q4-command' ),
            'title' => __( 'A practical IT partner built around responsiveness, security, and business fit.', 'q4-command' ),
            'intro' => __( 'Q4 GEMS supports organizations that need tailored IT support, stronger cybersecurity, and technology decisions that make sense operationally and commercially.', 'q4-command' ),
            'highlights' => array(
                __( 'Tailored solutions instead of one-size-fits-all packages.', 'q4-command' ),
                __( '24/7 support and continuity planning kept in view.', 'q4-command' ),
                __( 'Guidance across IT support, cybersecurity, procurement, and projects.', 'q4-command' ),
                __( 'Communication that stays focused on business outcomes.', 'q4-command' ),
            ),
        ),
        'services' => array(
            'aliases' => array( 'services', 'solutions', 'it-services', 'it-services-2', 'enterprise', 'small-and-medium-business' ),
            'keywords' => array( 'services', 'solutions', 'it services', 'enterprise', 'small and medium business' ),
            'eyebrow' => __( 'Services', 'q4-command' ),
            'title' => __( 'Managed IT, security, cloud, and advisory services designed to move the business forward.', 'q4-command' ),
            'intro' => __( 'Explore managed IT services, cybersecurity, Microsoft 365 support, business continuity, procurement, and project delivery built to reduce risk and support growth.', 'q4-command' ),
        ),
        'contact' => array(
            'aliases' => array( 'contact-us', 'contact', 'get-in-touch' ),
            'keywords' => array( 'contact', 'get in touch' ),
            'eyebrow' => __( 'Contact', 'q4-command' ),
            'title' => __( 'Tell Q4 GEMS what is slowing your team down.', 'q4-command' ),
            'intro' => __( 'Use the form below to ask about managed IT services, cybersecurity, Microsoft 365, continuity planning, procurement, or an upcoming project.', 'q4-command' ),
        ),
        'managed-it' => array(
            'aliases' => array( 'managed-it-services', 'managed-it-service', 'managed-services', 'it-support', 'service-desk', 'client-support', 'remote-monitoring-and-management' ),
            'keywords' => array( 'managed it', 'managed services', 'service desk', 'it support', 'remote monitoring' ),
            'eyebrow' => __( 'Managed IT Services', 'q4-command' ),
            'title' => __( 'Managed IT services that reduce downtime, improve support quality, and keep work moving.', 'q4-command' ),
            'intro' => __( 'Q4 GEMS helps organizations reduce downtime with responsive support, proactive maintenance, device management, and clear operational ownership.', 'q4-command' ),
            'highlights' => array(
                __( 'Responsive service desk and user support.', 'q4-command' ),
                __( 'Monitoring, patching, and device lifecycle management.', 'q4-command' ),
                __( 'Vendor coordination, issue ownership, and practical communication.', 'q4-command' ),
                __( 'Clearer standards for reliability, backups, and operational hygiene.', 'q4-command' ),
            ),
        ),
        'security' => array(
            'aliases' => array( 'cyber-security', 'cybersecurity', 'it-security', 'security', 'security-services-and-risk-assessments', 'cloud-security', 'cloud-security-technology', 'risk-and-compiliance', 'information-security', 'security-posture' ),
            'keywords' => array( 'cyber', 'security', 'risk assessment', 'information security', 'security posture', 'cloud security' ),
            'eyebrow' => __( 'Cybersecurity', 'q4-command' ),
            'title' => __( 'Cybersecurity services that help businesses prevent more, respond faster, and recover with less disruption.', 'q4-command' ),
            'intro' => __( 'Q4 GEMS helps organizations strengthen identity, endpoint, email, and cloud security with practical controls and remediation guidance.', 'q4-command' ),
            'highlights' => array(
                __( 'Security reviews, hardening, and gap identification.', 'q4-command' ),
                __( 'Endpoint, email, access, and Microsoft 365 protections.', 'q4-command' ),
                __( 'Backup and continuity measures that support response and recovery.', 'q4-command' ),
                __( 'Guidance that aligns security improvements with business priorities.', 'q4-command' ),
            ),
        ),
        'microsoft-365' => array(
            'aliases' => array( 'microsoft-365', 'office-365', 'microsoft-office-365', 'microsoft-365-business-premium', 'google-workspace', 'email-and-collaboration' ),
            'keywords' => array( 'microsoft 365', 'office 365', 'google workspace', 'email and collaboration' ),
            'eyebrow' => __( 'Microsoft 365', 'q4-command' ),
            'title' => __( 'Microsoft 365 services that improve collaboration without sacrificing control.', 'q4-command' ),
            'intro' => __( 'Q4 GEMS supports Microsoft 365 migration, administration, governance, and security so teams can collaborate with more confidence.', 'q4-command' ),
            'highlights' => array(
                __( 'Migration, configuration, and rollout support.', 'q4-command' ),
                __( 'Secure Teams, SharePoint, Exchange, and identity management.', 'q4-command' ),
                __( 'Governance and access decisions that reduce sprawl and risk.', 'q4-command' ),
                __( 'Productivity guidance for growing and hybrid teams.', 'q4-command' ),
            ),
        ),
        'continuity' => array(
            'aliases' => array( 'business-continuity', 'disaster-recovery', 'offsite-data-backup', 'data-protection-services' ),
            'keywords' => array( 'continuity', 'disaster recovery', 'backup', 'data protection' ),
            'eyebrow' => __( 'Business Continuity', 'q4-command' ),
            'title' => __( 'Backup, disaster recovery, and continuity planning that protect the business when systems fail.', 'q4-command' ),
            'intro' => __( 'Q4 GEMS helps organizations protect critical data, plan recovery, and keep essential operations available during outages or security incidents.', 'q4-command' ),
            'highlights' => array(
                __( 'Risk assessment and continuity planning.', 'q4-command' ),
                __( 'Backup, offsite protection, and recovery workflows.', 'q4-command' ),
                __( 'Testing, maintenance, and readiness validation.', 'q4-command' ),
                __( 'Planning that keeps critical business functions available.', 'q4-command' ),
            ),
        ),
        'procurement' => array(
            'aliases' => array( 'procurement' ),
            'keywords' => array( 'procurement' ),
            'eyebrow' => __( 'Procurement', 'q4-command' ),
            'title' => __( 'Technology procurement that supports standards, budget control, and smarter lifecycle decisions.', 'q4-command' ),
            'intro' => __( 'Q4 GEMS helps organizations source hardware, software, licensing, and renewals with standards, budget, and long-term lifecycle planning in mind.', 'q4-command' ),
            'highlights' => array(
                __( 'Hardware and software sourcing guidance.', 'q4-command' ),
                __( 'Renewal planning and standardization support.', 'q4-command' ),
                __( 'Procurement aligned with security and lifecycle goals.', 'q4-command' ),
                __( 'Commercially sensible decisions without wasted spend.', 'q4-command' ),
            ),
        ),
        'projects' => array(
            'aliases' => array( 'project-management', 'it-consulting-advisory', 'digital-transformation', 'consulting', 'professional-services', 'go-to-cloud-strategy', 'operational-intelligence' ),
            'keywords' => array( 'project management', 'consulting', 'advisory', 'digital transformation', 'professional services', 'cloud strategy', 'operational intelligence' ),
            'eyebrow' => __( 'Projects and Advisory', 'q4-command' ),
            'title' => __( 'Project delivery and IT advisory for upgrades, migrations, and business change.', 'q4-command' ),
            'intro' => __( 'Q4 GEMS supports migrations, rollouts, upgrades, and strategic initiatives with clearer planning, communication, and delivery discipline.', 'q4-command' ),
            'highlights' => array(
                __( 'Project planning, communication, and stakeholder alignment.', 'q4-command' ),
                __( 'Migration, rollout, and implementation support.', 'q4-command' ),
                __( 'Technology roadmaps connected to business outcomes.', 'q4-command' ),
                __( 'Guidance that reduces surprises and rework.', 'q4-command' ),
            ),
        ),
    );
}

function q4_command_page_key( $slug = '', $title = '' ) {
    $slug    = strtolower( (string) $slug );
    $title   = strtolower( (string) $title );
    $library = q4_command_page_library();

    foreach ( $library as $key => $item ) {
        foreach ( $item['aliases'] as $alias ) {
            if ( $slug === strtolower( $alias ) ) {
                return $key;
            }
        }

        foreach ( $item['keywords'] as $keyword ) {
            if ( false !== strpos( $title, strtolower( $keyword ) ) || false !== strpos( $slug, strtolower( str_replace( ' ', '-', $keyword ) ) ) ) {
                return $key;
            }
        }
    }

    return '';
}

function q4_command_page_data( $slug = '', $title = '' ) {
    $key     = q4_command_page_key( $slug, $title );
    $library = q4_command_page_library();

    if ( $key && isset( $library[ $key ] ) ) {
        return $library[ $key ];
    }

    return null;
}

function q4_command_page_sections( $slug = '', $title = '' ) {
    $key = q4_command_page_key( $slug, $title );

    switch ( $key ) {
        case 'about':
            return array(
                'panel_title' => __( 'Why organizations stay with Q4 GEMS', 'q4-command' ),
                'panel_text'  => __( 'Clients want fast support, practical guidance, and a partner that can align day-to-day IT with security and growth.', 'q4-command' ),
                'overview'    => array(
                    'eyebrow' => __( 'Who we are', 'q4-command' ),
                    'title'   => __( 'Built for organizations that need more than basic IT support.', 'q4-command' ),
                    'text'    => __( 'Q4 GEMS supports SMB\'s with managed IT, cybersecurity, Microsoft 365, continuity planning, procurement, and project delivery. The focus is straightforward: keep systems dependable, reduce avoidable risk, and help leadership make better technology decisions.', 'q4-command' ),
                    'details' => array(
                        __( 'Tailored support models aligned to your environment, users, and priorities.', 'q4-command' ),
                        __( 'An operating style that values responsiveness, communication, and follow-through.', 'q4-command' ),
                        __( 'Security-minded administration across support, cloud, identity, and continuity.', 'q4-command' ),
                        __( 'Guidance that connects technology choices to business outcomes and budget reality.', 'q4-command' ),
                    ),
                ),
                'capabilities' => array(
                    array(
                        'title' => __( 'Tailored service design', 'q4-command' ),
                        'text'  => __( 'Q4 GEMS works with organizations that need service shaped around their current setup, internal capacity, and growth plans.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Operational ownership', 'q4-command' ),
                        'text'  => __( 'Problems are tracked clearly, communicated well, and managed through resolution instead of being passed around.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Business-first guidance', 'q4-command' ),
                        'text'  => __( 'Recommendations are grounded in uptime, resilience, employee productivity, and better use of technology spend.', 'q4-command' ),
                    ),
                ),
                'outcomes' => array(
                    'eyebrow' => __( 'What clients value', 'q4-command' ),
                    'title'   => __( 'A partner that can support today while planning for what comes next.', 'q4-command' ),
                    'cards'   => array(
                        array(
                            'title' => __( 'Faster issue resolution', 'q4-command' ),
                            'text'  => __( 'Day-to-day problems are addressed faster when support ownership, escalation, and communication are consistent.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Clearer technology planning', 'q4-command' ),
                            'text'  => __( 'Leadership gets more clarity on priorities, upcoming risks, and where IT investment will have the most impact.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Less vendor friction', 'q4-command' ),
                            'text'  => __( 'Q4 GEMS can coordinate suppliers, renewals, and implementation work so internal teams spend less time brokering issues.', 'q4-command' ),
                        ),
                    ),
                ),
                'journey' => array(
                    'eyebrow' => __( 'How engagements begin', 'q4-command' ),
                    'title'   => __( 'Start with what is slowing the business down, then build from there.', 'q4-command' ),
                    'steps'   => array(
                        array(
                            'step'  => '01',
                            'title' => __( 'Understand the environment', 'q4-command' ),
                            'text'  => __( 'Review support pain points, infrastructure gaps, cybersecurity concerns, and current vendor dependencies.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '02',
                            'title' => __( 'Prioritize the essentials', 'q4-command' ),
                            'text'  => __( 'Stabilize the systems, users, and workflows that create the most day-to-day friction or business risk.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '03',
                            'title' => __( 'Improve and plan ahead', 'q4-command' ),
                            'text'  => __( 'Build a more resilient operating model with better standards, documentation, security controls, and roadmap decisions.', 'q4-command' ),
                        ),
                    ),
                ),
                'cta' => array(
                    'title' => __( 'Talk to Q4 GEMS about your current environment.', 'q4-command' ),
                    'text'  => __( 'If support quality, cybersecurity, or technology planning needs work, start with a short conversation about what is happening today.', 'q4-command' ),
                ),
            );

        case 'services':
            return array(
                'panel_title' => __( 'One partner across support, security, cloud, and advisory work', 'q4-command' ),
                'panel_text'  => __( 'Q4 GEMS covers the operational core that most growing organizations need from a modern MSP.', 'q4-command' ),
                'overview'    => array(
                    'eyebrow' => __( 'What Q4 GEMS covers', 'q4-command' ),
                    'title'   => __( 'Services designed around uptime, protection, and operational clarity.', 'q4-command' ),
                    'text'    => __( 'Q4 GEMS brings together the services most mid-market teams need from a modern MSP: responsive support, practical cybersecurity, Microsoft 365 administration, recovery planning, procurement guidance, and delivery help for key projects.', 'q4-command' ),
                    'details' => array(
                        __( 'Managed IT services for users, devices, infrastructure, and daily support requests.', 'q4-command' ),
                        __( 'Cybersecurity services focused on identity, endpoint, email, cloud, and risk reduction.', 'q4-command' ),
                        __( 'Microsoft 365 migration, administration, governance, and collaboration support.', 'q4-command' ),
                        __( 'Continuity, procurement, and project services that support smarter long-term decisions.', 'q4-command' ),
                    ),
                ),
                'capabilities' => array(
                    array(
                        'title' => __( 'Operational support', 'q4-command' ),
                        'text'  => __( 'Keep users productive and the core environment stable with service desk support, monitoring, patching, and device management.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Security and resilience', 'q4-command' ),
                        'text'  => __( 'Improve security posture and recovery readiness without forcing teams to manage a disconnected stack of vendors.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Strategic execution', 'q4-command' ),
                        'text'  => __( 'Plan and deliver upgrades, rollouts, renewals, and procurement decisions with clearer accountability and structure.', 'q4-command' ),
                    ),
                ),
                'outcomes' => array(
                    'eyebrow' => __( 'Business impact', 'q4-command' ),
                    'title'   => __( 'The goal is a more reliable environment and a better use of internal time.', 'q4-command' ),
                    'cards'   => array(
                        array(
                            'title' => __( 'Reduce downtime', 'q4-command' ),
                            'text'  => __( 'Improve support responsiveness, device standards, and maintenance so recurring disruption affects fewer people.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Improve protection', 'q4-command' ),
                            'text'  => __( 'Strengthen security, backup, and recovery planning so incidents are less likely to escalate into business interruptions.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Use budget more effectively', 'q4-command' ),
                            'text'  => __( 'Make technology decisions with better visibility into priorities, renewals, lifecycle timing, and business tradeoffs.', 'q4-command' ),
                        ),
                    ),
                ),
                'journey' => array(
                    'eyebrow' => __( 'How Q4 GEMS works', 'q4-command' ),
                    'title'   => __( 'A practical sequence from support stabilization to long-term improvement.', 'q4-command' ),
                    'steps'   => q4_command_home_content()['process'],
                ),
                'cta' => array(
                    'title' => __( 'Need a more dependable IT partner?', 'q4-command' ),
                    'text'  => __( 'Share where support, security, or planning is breaking down and Q4 GEMS can recommend a practical next step.', 'q4-command' ),
                ),
            );

        case 'contact':
            return array(
                'panel_title'    => __( 'Start the conversation', 'q4-command' ),
                'panel_text'     => __( 'Share the challenge, timeline, or current environment and Q4 GEMS can recommend the right next step.', 'q4-command' ),
                'overview'       => array(
                    'eyebrow' => __( 'How to reach us', 'q4-command' ),
                    'title'   => __( 'Start with the problem you want solved.', 'q4-command' ),
                    'text'    => __( 'Whether you need managed IT services, cybersecurity, Microsoft 365 support, business continuity planning, procurement help, or project delivery, Q4 GEMS can direct the conversation quickly.', 'q4-command' ),
                    'details' => array(
                        __( 'Use the form for new service inquiries, project planning, or technology reviews.', 'q4-command' ),
                        __( 'Include your current setup, timeline, and biggest pain point for a faster response.', 'q4-command' ),
                        __( 'Q4 GEMS supports SMB\'s and remote environments that need reliable day-to-day coverage.', 'q4-command' ),
                    ),
                ),
                'contact_points' => q4_command_contact_points(),
            );

        case 'managed-it':
            return array(
                'panel_title' => __( 'Managed IT coverage that keeps teams productive', 'q4-command' ),
                'panel_text'  => __( 'From user support to vendor coordination, Q4 GEMS helps keep the environment stable, secure, and easier to manage.', 'q4-command' ),
                'overview'    => array(
                    'eyebrow' => __( 'Service scope', 'q4-command' ),
                    'title'   => __( 'Day-to-day IT support without the chaos.', 'q4-command' ),
                    'text'    => __( 'Q4 GEMS helps organizations reduce downtime with responsive support, proactive maintenance, device management, monitoring, and clear ownership across vendors and systems.', 'q4-command' ),
                    'details' => array(
                        __( 'Service desk support for day-to-day user issues and escalations.', 'q4-command' ),
                        __( 'Monitoring, patching, and endpoint maintenance that reduce recurring problems.', 'q4-command' ),
                        __( 'Device lifecycle planning, onboarding, offboarding, and standards support.', 'q4-command' ),
                        __( 'Vendor coordination so internal teams spend less time chasing accountability.', 'q4-command' ),
                    ),
                ),
                'capabilities' => array(
                    array(
                        'title' => __( 'End-user support', 'q4-command' ),
                        'text'  => __( 'Help users faster with a responsive service desk, clearer triage, and better communication throughout the ticket lifecycle.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Endpoint and patch management', 'q4-command' ),
                        'text'  => __( 'Keep devices healthier and more consistent with proactive maintenance, software updates, and lifecycle planning.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Infrastructure and vendor coordination', 'q4-command' ),
                        'text'  => __( 'Support networks, shared platforms, and third-party providers without leaving internal teams to manage every handoff.', 'q4-command' ),
                    ),
                ),
                'outcomes' => array(
                    'eyebrow' => __( 'What clients gain', 'q4-command' ),
                    'title'   => __( 'A steadier environment and a better support experience.', 'q4-command' ),
                    'cards'   => array(
                        array(
                            'title' => __( 'Fewer recurring tickets', 'q4-command' ),
                            'text'  => __( 'Better standards and proactive maintenance reduce repeat issues that waste internal time.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Less downtime', 'q4-command' ),
                            'text'  => __( 'Faster support and stronger operational hygiene help teams stay productive when issues appear.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Clearer accountability', 'q4-command' ),
                            'text'  => __( 'A single support partner makes it easier to manage escalations, vendors, and day-to-day ownership.', 'q4-command' ),
                        ),
                    ),
                ),
                'journey' => array(
                    'eyebrow' => __( 'How the work starts', 'q4-command' ),
                    'title'   => __( 'Move from reactive support to better operating standards.', 'q4-command' ),
                    'steps'   => array(
                        array(
                            'step'  => '01',
                            'title' => __( 'Assess support friction', 'q4-command' ),
                            'text'  => __( 'Review ticket patterns, device issues, vendor dependencies, and the support requests that create the most disruption.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '02',
                            'title' => __( 'Stabilize the environment', 'q4-command' ),
                            'text'  => __( 'Improve maintenance, patching, device standards, user workflows, and escalation ownership.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '03',
                            'title' => __( 'Improve long-term reliability', 'q4-command' ),
                            'text'  => __( 'Use better documentation, lifecycle planning, backup discipline, and operating standards to reduce future issues.', 'q4-command' ),
                        ),
                    ),
                ),
                'cta' => array(
                    'title' => __( 'Talk to Q4 GEMS about managed IT support.', 'q4-command' ),
                    'text'  => __( 'If downtime, slow support, or vendor sprawl is affecting the business, start with a short conversation about the current environment.', 'q4-command' ),
                ),
            );

        case 'security':
            return array(
                'panel_title' => __( 'Cybersecurity that supports prevention, visibility, and recovery', 'q4-command' ),
                'panel_text'  => __( 'Reduce the chance of disruption and improve your response when something goes wrong.', 'q4-command' ),
                'overview'    => array(
                    'eyebrow' => __( 'Security focus', 'q4-command' ),
                    'title'   => __( 'Practical cybersecurity for real business risk.', 'q4-command' ),
                    'text'    => __( 'Q4 GEMS helps organizations improve identity, endpoint, email, and cloud security with recommendations that match business priorities, user workflows, and available resources.', 'q4-command' ),
                    'details' => array(
                        __( 'Security reviews and gap identification across users, devices, and cloud platforms.', 'q4-command' ),
                        __( 'Identity, access, endpoint, and email controls that reduce common attack paths.', 'q4-command' ),
                        __( 'Microsoft 365 and cloud hardening where collaboration and security need to work together.', 'q4-command' ),
                        __( 'Backup and continuity measures that support response and recovery planning.', 'q4-command' ),
                    ),
                ),
                'capabilities' => array(
                    array(
                        'title' => __( 'Identity and access controls', 'q4-command' ),
                        'text'  => __( 'Strengthen user access, administrative controls, and authentication practices to reduce exposure.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Endpoint and email protection', 'q4-command' ),
                        'text'  => __( 'Improve coverage against the most common business threats across user devices and inboxes.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Remediation and recovery planning', 'q4-command' ),
                        'text'  => __( 'Pair technical hardening with backup, response planning, and practical steps that reduce business impact.', 'q4-command' ),
                    ),
                ),
                'outcomes' => array(
                    'eyebrow' => __( 'What clients gain', 'q4-command' ),
                    'title'   => __( 'More control over risk without slowing the business down.', 'q4-command' ),
                    'cards'   => array(
                        array(
                            'title' => __( 'Smaller attack surface', 'q4-command' ),
                            'text'  => __( 'Tighter controls across users, devices, and cloud systems reduce common points of exposure.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Better visibility', 'q4-command' ),
                            'text'  => __( 'Security reviews and clearer operational ownership make it easier to see what needs attention first.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Faster response', 'q4-command' ),
                            'text'  => __( 'When backup, continuity, and remediation plans are in place, teams recover faster with less confusion.', 'q4-command' ),
                        ),
                    ),
                ),
                'journey' => array(
                    'eyebrow' => __( 'How security work begins', 'q4-command' ),
                    'title'   => __( 'Assess risk, harden the environment, and keep improving.', 'q4-command' ),
                    'steps'   => array(
                        array(
                            'step'  => '01',
                            'title' => __( 'Review the current risk profile', 'q4-command' ),
                            'text'  => __( 'Identify gaps in identity, endpoint, email, Microsoft 365, backup, and operating processes.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '02',
                            'title' => __( 'Prioritize the highest-value controls', 'q4-command' ),
                            'text'  => __( 'Focus first on the improvements that reduce risk fastest without creating unnecessary friction.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '03',
                            'title' => __( 'Build resilience over time', 'q4-command' ),
                            'text'  => __( 'Layer in monitoring, backup discipline, response planning, and governance as the environment matures.', 'q4-command' ),
                        ),
                    ),
                ),
                'cta' => array(
                    'title' => __( 'Need help tightening your cybersecurity posture?', 'q4-command' ),
                    'text'  => __( 'Share the biggest risk or recent incident and Q4 GEMS can outline a practical next step for your environment.', 'q4-command' ),
                ),
            );

        case 'microsoft-365':
            return array(
                'panel_title' => __( 'Microsoft 365 support across migration, administration, and governance', 'q4-command' ),
                'panel_text'  => __( 'Get more value from Microsoft 365 while keeping collaboration, identity, and data better controlled.', 'q4-command' ),
                'overview'    => array(
                    'eyebrow' => __( 'Microsoft 365 services', 'q4-command' ),
                    'title'   => __( 'Make collaboration easier without opening new security gaps.', 'q4-command' ),
                    'text'    => __( 'Q4 GEMS supports Microsoft 365 migration, tenant configuration, administration, and governance so teams can use Exchange, Teams, SharePoint, and identity services with more confidence.', 'q4-command' ),
                    'details' => array(
                        __( 'Migration planning, rollout support, and tenant configuration.', 'q4-command' ),
                        __( 'Exchange, Teams, SharePoint, and Microsoft identity administration.', 'q4-command' ),
                        __( 'Governance and access decisions that reduce sprawl and permission risk.', 'q4-command' ),
                        __( 'Security-minded collaboration practices for hybrid and growing teams.', 'q4-command' ),
                    ),
                ),
                'capabilities' => array(
                    array(
                        'title' => __( 'Migration and rollout support', 'q4-command' ),
                        'text'  => __( 'Move users, email, files, and collaboration workflows with a plan that reduces disruption and confusion.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Governance and collaboration', 'q4-command' ),
                        'text'  => __( 'Improve how Teams, SharePoint, and Microsoft 365 are structured so collaboration stays useful and manageable.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Identity and security alignment', 'q4-command' ),
                        'text'  => __( 'Connect Microsoft 365 administration to stronger access control, device policy, and user protection.', 'q4-command' ),
                    ),
                ),
                'outcomes' => array(
                    'eyebrow' => __( 'What clients gain', 'q4-command' ),
                    'title'   => __( 'A Microsoft 365 environment that is easier to adopt, manage, and secure.', 'q4-command' ),
                    'cards'   => array(
                        array(
                            'title' => __( 'Smoother rollout', 'q4-command' ),
                            'text'  => __( 'Structured planning and clearer configuration reduce migration pain and support noise.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Better user experience', 'q4-command' ),
                            'text'  => __( 'Teams collaborate more effectively when tools, permissions, and workflows are organized intentionally.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Stronger control', 'q4-command' ),
                            'text'  => __( 'Governance and security decisions help reduce oversharing, sprawl, and avoidable identity risk.', 'q4-command' ),
                        ),
                    ),
                ),
                'journey' => array(
                    'eyebrow' => __( 'How engagements begin', 'q4-command' ),
                    'title'   => __( 'Plan the rollout, secure the setup, and keep governance in place.', 'q4-command' ),
                    'steps'   => array(
                        array(
                            'step'  => '01',
                            'title' => __( 'Review tenant goals and current setup', 'q4-command' ),
                            'text'  => __( 'Understand current licensing, collaboration needs, migration scope, and user access challenges.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '02',
                            'title' => __( 'Configure and migrate carefully', 'q4-command' ),
                            'text'  => __( 'Move data, users, and services into a cleaner structure with better controls and less disruption.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '03',
                            'title' => __( 'Govern for the long term', 'q4-command' ),
                            'text'  => __( 'Keep permissions, collaboration patterns, and security settings aligned as the environment grows.', 'q4-command' ),
                        ),
                    ),
                ),
                'cta' => array(
                    'title' => __( 'Talk to Q4 GEMS about Microsoft 365 support.', 'q4-command' ),
                    'text'  => __( 'If migration, governance, or Microsoft 365 security needs work, start with a conversation about your current tenant and goals.', 'q4-command' ),
                ),
            );

        case 'continuity':
            return array(
                'panel_title' => __( 'Business continuity planning that prepares you for outages and incidents', 'q4-command' ),
                'panel_text'  => __( 'Keep critical systems and data recoverable when disruptions happen.', 'q4-command' ),
                'overview'    => array(
                    'eyebrow' => __( 'Continuity and recovery', 'q4-command' ),
                    'title'   => __( 'Protect the business before something goes wrong.', 'q4-command' ),
                    'text'    => __( 'Q4 GEMS helps organizations protect data, design recovery workflows, and build continuity plans that reduce operational disruption during outages, mistakes, or security events.', 'q4-command' ),
                    'details' => array(
                        __( 'Backup strategy aligned to critical systems, recovery needs, and business risk.', 'q4-command' ),
                        __( 'Offsite protection and recovery workflows that support resilience when local systems fail.', 'q4-command' ),
                        __( 'Continuity planning for the functions that matter most to the business.', 'q4-command' ),
                        __( 'Testing and maintenance that help recovery plans stay credible over time.', 'q4-command' ),
                    ),
                ),
                'capabilities' => array(
                    array(
                        'title' => __( 'Backup architecture', 'q4-command' ),
                        'text'  => __( 'Design backup and retention practices that reflect what the business can and cannot afford to lose.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Recovery planning', 'q4-command' ),
                        'text'  => __( 'Define practical recovery workflows so teams know what to restore first and how to proceed under pressure.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Readiness testing', 'q4-command' ),
                        'text'  => __( 'Validate recovery assumptions through testing and review instead of relying on unproven backup promises.', 'q4-command' ),
                    ),
                ),
                'outcomes' => array(
                    'eyebrow' => __( 'What clients gain', 'q4-command' ),
                    'title'   => __( 'More confidence that essential operations can recover.', 'q4-command' ),
                    'cards'   => array(
                        array(
                            'title' => __( 'Faster recovery', 'q4-command' ),
                            'text'  => __( 'Clearer priorities and better-tested recovery workflows reduce the time it takes to restore critical services.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Lower business disruption', 'q4-command' ),
                            'text'  => __( 'Continuity planning helps teams protect revenue, service quality, and internal productivity during incidents.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Better readiness', 'q4-command' ),
                            'text'  => __( 'Backup and recovery planning becomes a maintained operational practice instead of an unchecked assumption.', 'q4-command' ),
                        ),
                    ),
                ),
                'journey' => array(
                    'eyebrow' => __( 'How the work starts', 'q4-command' ),
                    'title'   => __( 'Identify what matters most, then build recovery around it.', 'q4-command' ),
                    'steps'   => array(
                        array(
                            'step'  => '01',
                            'title' => __( 'Identify critical systems', 'q4-command' ),
                            'text'  => __( 'Determine which services, data, and workflows the business cannot afford to lose for long.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '02',
                            'title' => __( 'Design backup and recovery', 'q4-command' ),
                            'text'  => __( 'Set retention, offsite protection, recovery priorities, and escalation paths that match the environment.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '03',
                            'title' => __( 'Test and refine', 'q4-command' ),
                            'text'  => __( 'Review assumptions, run validations, and keep the plan aligned with infrastructure and business changes.', 'q4-command' ),
                        ),
                    ),
                ),
                'cta' => array(
                    'title' => __( 'Need stronger backup or disaster recovery planning?', 'q4-command' ),
                    'text'  => __( 'Share the systems that matter most to the business and Q4 GEMS can outline a practical continuity next step.', 'q4-command' ),
                ),
            );

        case 'procurement':
            return array(
                'panel_title' => __( 'Procurement support that improves standards, budget control, and planning', 'q4-command' ),
                'panel_text'  => __( 'Make smarter buying decisions without adding more vendor friction or lifecycle waste.', 'q4-command' ),
                'overview'    => array(
                    'eyebrow' => __( 'Procurement services', 'q4-command' ),
                    'title'   => __( 'Choose hardware, software, and renewals with a clearer plan.', 'q4-command' ),
                    'text'    => __( 'Q4 GEMS helps organizations source hardware, software, licenses, and renewals with better standards, lifecycle timing, and security alignment so purchasing decisions support the broader roadmap.', 'q4-command' ),
                    'details' => array(
                        __( 'Hardware and software sourcing based on standards, compatibility, and business fit.', 'q4-command' ),
                        __( 'Licensing and renewal planning that avoids avoidable waste and rushed decisions.', 'q4-command' ),
                        __( 'Lifecycle guidance for device refreshes, standardization, and future supportability.', 'q4-command' ),
                        __( 'Vendor coordination that keeps procurement connected to implementation and support realities.', 'q4-command' ),
                    ),
                ),
                'capabilities' => array(
                    array(
                        'title' => __( 'Hardware and software sourcing', 'q4-command' ),
                        'text'  => __( 'Select equipment and platforms with stronger alignment to your operating requirements, users, and long-term support needs.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Licensing and renewals', 'q4-command' ),
                        'text'  => __( 'Bring more structure to subscription renewals, licensing choices, and the commercial side of technology management.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Standards and lifecycle control', 'q4-command' ),
                        'text'  => __( 'Reduce sprawl by aligning purchases to a clearer device, software, and support standard.', 'q4-command' ),
                    ),
                ),
                'outcomes' => array(
                    'eyebrow' => __( 'What clients gain', 'q4-command' ),
                    'title'   => __( 'Better purchasing decisions and fewer downstream surprises.', 'q4-command' ),
                    'cards'   => array(
                        array(
                            'title' => __( 'Less wasted spend', 'q4-command' ),
                            'text'  => __( 'Smarter timing and clearer standards help reduce rushed buys, unused tools, and duplicate spending.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Better standardization', 'q4-command' ),
                            'text'  => __( 'Purchases become easier to support when hardware, software, and renewals follow a cleaner standard.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Cleaner forecasting', 'q4-command' ),
                            'text'  => __( 'Leadership gets better visibility into refresh cycles, renewals, and the budget implications of IT decisions.', 'q4-command' ),
                        ),
                    ),
                ),
                'journey' => array(
                    'eyebrow' => __( 'How the work starts', 'q4-command' ),
                    'title'   => __( 'Review standards, buy more intelligently, and manage lifecycle with intent.', 'q4-command' ),
                    'steps'   => array(
                        array(
                            'step'  => '01',
                            'title' => __( 'Review the current stack', 'q4-command' ),
                            'text'  => __( 'Assess existing hardware, software, renewals, and support standards to see where waste or inconsistency is building up.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '02',
                            'title' => __( 'Source with standards in mind', 'q4-command' ),
                            'text'  => __( 'Make buying decisions that support compatibility, security, and easier long-term support.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '03',
                            'title' => __( 'Track lifecycle and renewal timing', 'q4-command' ),
                            'text'  => __( 'Use better visibility into device refreshes, subscriptions, and vendor commitments so budget planning is less reactive.', 'q4-command' ),
                        ),
                    ),
                ),
                'cta' => array(
                    'title' => __( 'Need help with a procurement decision or renewal cycle?', 'q4-command' ),
                    'text'  => __( 'Share what you are evaluating and Q4 GEMS can help align the decision to supportability, security, and budget.', 'q4-command' ),
                ),
            );

        case 'projects':
            return array(
                'panel_title' => __( 'Project delivery and advisory support with clearer planning and accountability', 'q4-command' ),
                'panel_text'  => __( 'Keep migrations, upgrades, and strategic initiatives moving with better structure and follow-through.', 'q4-command' ),
                'overview'    => array(
                    'eyebrow' => __( 'Projects and advisory', 'q4-command' ),
                    'title'   => __( 'Execute technology change with less confusion and fewer surprises.', 'q4-command' ),
                    'text'    => __( 'Q4 GEMS supports organizations through migrations, rollouts, upgrades, and roadmap initiatives with practical planning, implementation support, and communication that keeps stakeholders aligned.', 'q4-command' ),
                    'details' => array(
                        __( 'Project planning, scope definition, and stakeholder alignment before execution starts.', 'q4-command' ),
                        __( 'Migration, rollout, and implementation support tied to business priorities and real constraints.', 'q4-command' ),
                        __( 'Communication and progress visibility that reduce confusion during major changes.', 'q4-command' ),
                        __( 'Advisory guidance for technology decisions that affect growth, resilience, or modernization.', 'q4-command' ),
                    ),
                ),
                'capabilities' => array(
                    array(
                        'title' => __( 'Project planning and scope control', 'q4-command' ),
                        'text'  => __( 'Start with clearer requirements, responsibilities, timing, and dependencies so delivery has a stronger foundation.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Migration and rollout execution', 'q4-command' ),
                        'text'  => __( 'Coordinate implementation work across users, vendors, and technical teams without losing momentum or accountability.', 'q4-command' ),
                    ),
                    array(
                        'title' => __( 'Stakeholder communication', 'q4-command' ),
                        'text'  => __( 'Keep decision makers informed with practical updates, risk visibility, and next-step clarity throughout delivery.', 'q4-command' ),
                    ),
                ),
                'outcomes' => array(
                    'eyebrow' => __( 'What clients gain', 'q4-command' ),
                    'title'   => __( 'More predictable delivery and a clearer path through change.', 'q4-command' ),
                    'cards'   => array(
                        array(
                            'title' => __( 'Fewer surprises', 'q4-command' ),
                            'text'  => __( 'Better planning and communication reduce avoidable rework, confusion, and late-stage issues.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Clearer ownership', 'q4-command' ),
                            'text'  => __( 'Defined responsibilities and stronger coordination make it easier to keep delivery moving.', 'q4-command' ),
                        ),
                        array(
                            'title' => __( 'Stronger delivery confidence', 'q4-command' ),
                            'text'  => __( 'Leadership gets more visibility into progress, risks, dependencies, and what is needed next.', 'q4-command' ),
                        ),
                    ),
                ),
                'journey' => array(
                    'eyebrow' => __( 'How the work starts', 'q4-command' ),
                    'title'   => __( 'Define scope, execute in stages, and support adoption.', 'q4-command' ),
                    'steps'   => array(
                        array(
                            'step'  => '01',
                            'title' => __( 'Define the objective', 'q4-command' ),
                            'text'  => __( 'Clarify what the project needs to accomplish, what success looks like, and where dependencies or constraints already exist.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '02',
                            'title' => __( 'Execute with structure', 'q4-command' ),
                            'text'  => __( 'Move through implementation in clear stages with better communication, accountability, and risk management.', 'q4-command' ),
                        ),
                        array(
                            'step'  => '03',
                            'title' => __( 'Support transition and next steps', 'q4-command' ),
                            'text'  => __( 'Close the loop with adoption support, documentation, and operational handoff so the project outcome actually sticks.', 'q4-command' ),
                        ),
                    ),
                ),
                'cta' => array(
                    'title' => __( 'Planning a migration, rollout, or infrastructure upgrade?', 'q4-command' ),
                    'text'  => __( 'Tell Q4 GEMS what is changing and what is at risk, and we can help map the next step.', 'q4-command' ),
                ),
            );
    }

    return array();
}
