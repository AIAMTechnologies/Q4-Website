# Q4 Website Plugin Recommendations

## Goal

Replace the current overlapping plugin stack with a smaller, more maintainable setup that supports the custom theme without Elementor or Vamtam dependencies.

## Recommended stack

- SEO: choose one modern SEO plugin only.
  - Recommended: SEOPress or The SEO Framework.
  - Reason: both are cleaner fits for a custom theme than running Yoast and Rank Math together.
- Forms: Fluent Forms or WS Form.
  - Reason: stronger form UX and admin experience than relying on legacy page-builder forms.
- SMTP / email delivery: Post SMTP.
  - Reason: contact forms are only reliable in production when mail delivery is configured correctly.
- Security: choose one primary security control plane.
  - Recommended direction: keep Wordfence if you want a familiar WAF and scan workflow, or replace the overlapping login/security plugins with Solid Security Basic plus server-side hardening.
  - Reason: avoid stacking Wordfence, Loginizer, Limit Login Attempts, and multiple SSL/security plugins unless there is a very specific reason.
- Redirect management: Redirection.
  - Reason: useful when URLs change during the redesign.
- Backup: UpdraftPlus can stay if the backup workflow is already working.
  - Reason: changing backup tooling during a redesign usually adds risk without much upside.

## Plugins to retire when the new theme is live

- Elementor
- PRO Elements
- VamTam Elementor Integration (Tecnologia)
- VamTam Importers
- Theme Editor
- WP File Manager
- One of the duplicate SEO plugins
- One or more of the overlapping security/login plugins

## Cleanup order

1. Activate the `Q4 Command` theme.
2. Verify the homepage, core pages, blog archive, single posts, and contact form flow.
3. Disable Elementor/Vamtam-related plugins.
4. Disable duplicate SEO and security plugins until only one clear stack remains in each category.
5. Re-test navigation, forms, metadata, redirects, and page rendering.

## Notes

- The custom theme added in this project does not require Elementor.
- The contact form included in the theme can work without a form plugin, but production mail delivery should still be handled through SMTP.
- Before removing any plugin, confirm that no critical shortcode or widget from that plugin is still needed on a live page.
