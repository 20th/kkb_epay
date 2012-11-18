<?php

/**
 * Default real certificate of a private key that is used by the Epay
 * processing center.
 *
 * Normally this certificate must be used to verify all messages from
 * the server.
 *
 * This certificate was obtained from a package that is provided to all
 * Epay clients. The package consisted of this certificate, client's
 * private key, example PHP-code and some documentation.
 *
 * This certificate can be stored in source code because, in essence,
 * it is a public key which can be shared with any party, unlike a private
 * key that must be kept in complete secret.
 */
class KkbEpay_DefaultBankCertificate implements KkbEpay_BankCertificateInterface
{

  public function getCertificate()
  {
    $certificate = <<<EOF
-----BEGIN CERTIFICATE-----
MIIDijCCAnKgAwIBAgIFAMGDJ+gwDQYJKoZIhvcNAQEEBQAwUzELMAkGA1UEBhMC
S1oxDDAKBgNVBAoTA0tLQjELMAkGA1UECxMCQ0ExDzANBgNVBAMTBktLQiBDQTEY
MBYGCSqGSIb3DQEJARYJY2FAa2tiLmt6MB4XDTA0MTAxODEwMzYwNloXDTA5MTAx
NzEwMzYwNlowgYMxCzAJBgNVBAYTAktaMQ8wDQYDVQQHEwZBbG1hdHkxHDAaBgNV
BAoTE0pTQyBLYXprb21tZXJ0c2JhbmsxEzARBgNVBAsTCkhlYWRPZmZpY2UxFDAS
BgNVBAMTC0VQQVkgU1lTVEVNMRowGAYJKoZIhvcNAQkBFgtlcGF5QGtrYi5rejCB
nzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAwNtnbUr82ALmO1E0tQ8Ejp1D+9GH
EKPeqVTokLb95VhvXX3GoYCKPseFvXMD8x+P0I9x03nJnSRyP6hJ85W/jsElkuYj
LzYWFfYhCeCQgit2lbSx9FbGVJ1B7M4ZMYuub4DlgtjQ8ebbqRACZ3Yw7LhciUcS
235c4K+zmL7p5i0CAwEAAaOBtzCBtDAdBgNVHQ4EFgQU+7GVWbXvHRDbdxFSXqc6
vd6VPQcwHwYDVR0jBBgwFoAU712nYyivxvN+d0LbneCElQZ9clMwDAYDVR0TBAUw
AwEBADAOBgNVHQ8BAf8EBAMCBPAwNQYDVR0fBC4wLDAqoCigJoYkaHR0cDovL3d3
dy5ra2Iua3ovY2VydHJvb3Qva2tiY2EuY3JsMB0GA1UdJQQWMBQGCCsGAQUFBwMC
BggrBgEFBQcDBDANBgkqhkiG9w0BAQQFAAOCAQEAB0jZpXUO9O0uWJZAJP28ATnC
PCMYa9jheM8MwKhSqe0m1IQ8mkPBzFnKqgmBdyPSp94Fy6xY2ciEnJ5oCEJGM9Nm
L1kUeg4/HqiTcEUaZWtec4SvwEhKjfoXVwx/teV9KNQoQ8YNyQflEm6DMjiZ6GDM
qLNV2ZLD5RytWKJYzqg/WScKpuGHYBlUmAi75Ew4nNx1PXi0ATZ9wc0aiXYlwAaP
pDhNvvLcVLiBjjs/o/QhBgtKewAbltVnU97gf/+yQErbfrL2z+Hg4hF0R63vkjj5
HsxOZ+pVNi0p+TzKyI1QcS4f53rxo0pMYxHn0LJQquCzbyDKcipkg9qrAFkxoA==
-----END CERTIFICATE-----
EOF;

    return trim($certificate);
  }

}

