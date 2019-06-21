<?php
/**
 * SAML 1.1 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * This is just an example:
 */
$metadata['https://sp.shiblab.feide.no'] = [
    'AssertionConsumerService' => 'http://sp.shiblab.feide.no/Shibboleth.sso/SAML/POST',
    'audience' => 'urn:mace:feide:shiblab',
    'base64attributes' => false,
];
$metadata['http://drupal8.local/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = array (
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://drupal8.local/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
    ),
  ),
  'AssertionConsumerService' =>
  array (
    0 =>
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://drupal8.local/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    1 =>
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'http://drupal8.local/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
    ),
    2 =>
    array (
      'index' => 2,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'http://drupal8.local/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    3 =>
    array (
      'index' => 3,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'http://drupal8.local/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
    ),
  ),
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
