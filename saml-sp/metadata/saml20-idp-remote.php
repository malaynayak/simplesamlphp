<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['http://local.samlidp.com/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'http://local.samlidp.com/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://local.samlidp.com/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://local.samlidp.com/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIEzzCCAzegAwIBAgIJAJ0GjFERVcDwMA0GCSqGSIb3DQEBCwUAMH4xCzAJBgNVBAYTAklOMRIwEAYDVQQIDAlUZWxhbmdhbmExEjAQBgNVBAcMCUh5ZGVyYWJhZDELMAkGA1UECgwCVEExEDAOBgNVBAMMB3NhbWxpcGQxKDAmBgkqhkiG9w0BCQEWGW1hbGF5Lm5heWFrQHRhZGlnaXRhbC5jb20wHhcNMTkwNjE0MDgyODUxWhcNMjkwNjEzMDgyODUxWjB+MQswCQYDVQQGEwJJTjESMBAGA1UECAwJVGVsYW5nYW5hMRIwEAYDVQQHDAlIeWRlcmFiYWQxCzAJBgNVBAoMAlRBMRAwDgYDVQQDDAdzYW1saXBkMSgwJgYJKoZIhvcNAQkBFhltYWxheS5uYXlha0B0YWRpZ2l0YWwuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAqnjkdLQBeUDNJAxBGnZTTDhABcaTO4u4BWfYdWIOkyE8t+oyrjML8t24LFgpVR7YZvS+YSwAUIP/HQ6zgr5DJm3nu3CwgMDCC8qAVFTGqJ+s2GU/j9T9U5DgksCZyCrfbayRSSTB8YCAJ4qzc0e3oWoQl0gHer5vzxHbialbw/oHP4L6fxv6WSxjKOMKqTHNj++wz5PMf/Z83en+OwcruxdMi3numSB1A5VKrWQa9o7AqL2uyOjt/WMkJ5aXqSKofQFNO7kEuWWVAChCbDa84KcLs4+F+kdZ6Xpcv1quXahV7fca1CEtv5Rp5dxx3odOEw1QKbpHvRta5CuMpcc7DZaUdimhtFhQSWmuqSoReXGFzJq6pNRxqjyVyN7OB/NQo9QXbi818zGwIof5sVMfB0JsQgcWKDyDXJyMxE65QHAs7dF+Kn3K8cvqsVOtqvYDzVE0+mtpye+hDwzre5TunIFpDmTam2uUEb3SQuNPvFk2S4rzOV59LVOHCdbGpqzpAgMBAAGjUDBOMB0GA1UdDgQWBBQtLSFkVxePkjVEtDJ1Ankvnm3ehTAfBgNVHSMEGDAWgBQtLSFkVxePkjVEtDJ1Ankvnm3ehTAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQCqDzxhMdfR1ePCYGr0QKS5UmoYnOofuXiv0t7EUs6uLu5ZFBjRS2q0VXn4p5IUIdYD8FG5j6ihGfEoNCVeDSf+3AzVkPIjlrqAfqtNXPDAu75xVMvZx3FPao7KvHQ8ECqbV3UMGtnPZsd8Kn8wwTq/kqFehA9dCbbiF6etHqayywgZ7f0OZVQqLE825LfcEiO4m95SGCN87Qtw/UiAEWxQXMirNOikzIq3umgXH3vuBDLhT2E/DLVn+QWPQwHdrgTtrPULpMQovPBZL9c/BBTwIVTZYvoDDF5Dpg8dPqpeZVMyUlg/YMQCxE6pe8SbDP1mWFUnWfbArxDomb5ykb68qv2l8LJz15Tc2iDhOU6rdhszMx06JeZLqdyp+gPTo7x9OnSuZS092ZYHrwDrLFR0dzH/DjfoybEKF9p0BqVOQW+hoWXSIk8WbXVXxxFBmqDfdyVHJPJIWq5BmcFL4ahGSQXNaUXz3zctb/BdPJu6D3OyrTqD0OIjalNxM+RvmLg=',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'contacts' =>
  array (
    0 =>
    array (
      'emailAddress' => 'malay.nayak@tadigital.com',
      'contactType' => 'technical',
      'givenName' => 'Administrator',
    ),
  ),
);
