<?php
/**
* This file is created by Really Simple Security to test the CSP header length
* It will not load during regular wordpress execution
*/


if ( !headers_sent() ) {
if ( !function_exists("rsssl_is_ssl" ) ) {
  function rsssl_is_ssl() {
    if (    ( isset($_SERVER["HTTPS"]) && ("on" === $_SERVER["HTTPS"] || "1" === $_SERVER["HTTPS"]) )
    || (isset($_ENV["HTTPS"]) && ("on" === $_ENV["HTTPS"]))
    || (isset($_SERVER["SERVER_PORT"]) && ( "443" === $_SERVER["SERVER_PORT"] ) )
    || (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
    || (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
    || (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
    || (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
    || (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
    || (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
    ) {
      return true;
    }
    return false;
  }
}
if ( rsssl_is_ssl() ) header("Strict-Transport-Security: max-age=63072000;");
header("X-XSS-Protection: 0");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("X-Frame-Options: SAMEORIGIN");
header("Content-Security-Policy: frame-ancestors 'self' ; upgrade-insecure-requests;");

}
header("X-REALLY-SIMPLE-SSL-TEST: zD.%F1%3D%95%BF%B0%3F%17%D2%F4P%24%0D%92%8C%D9%E0%03%1Fh%0A%E0TN%C8%29-V3%1E%BA%B7%7F%E1%A7%05%5D%F4%14%09%C7%9Dy%1F3t%1B%40%87N%5D%82a%1B%0C%ECp%EF%3DY6%AD+%3E%3D%40%96%9B%BB%2A%E0%E9%A0%0B%E89%C1%09%80%95%C8P%E8p%D3%8F%AE%7E%E4%92g2Ob%F6%E5%29%E3%AC%DE7%FDf%0AF%E7%82%0Ama%3F%E1xN%BC%E5%BB%9E%01%F8U%EE%07%E4%DA%13%1B%E7j%F9E%CDq9%81%04%9C%81%0A%A1%D7Z%F3%C2%5B%E6b%EAf%D73%BA%0E+%80%24%FDz7k%17%14%F1P%C8%BAV%D1%1D%DF%00%2F%DA%85%8C%3A%FAK%D0T%B6%E7_%C3%D4%3F%3E%87K%03F%17%1B%00%A2%3E%E3%07.%A9%6");

 echo '<html><head><meta charset="UTF-8"><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"></head><body>Really Simple Security headers test page</body></html>';