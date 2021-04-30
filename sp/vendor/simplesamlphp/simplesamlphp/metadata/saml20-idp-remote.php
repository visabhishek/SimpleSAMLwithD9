<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://idp.lndo.site/simplesaml/saml2/idp/metadata.php'] = [
    'metadata-set' => 'saml20-idp-remote',
    'entityid' => 'https://idp.lndo.site/simplesaml/saml2/idp/metadata.php',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.lndo.site/simplesaml/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://idp.lndo.site/simplesaml/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'certData' => 'MIIE5zCCA0+gAwIBAgIUELHxxVRbJKJxrVF36dz0g+FmvTMwDQYJKoZIhvcNAQELBQAwgYIxCzAJBgNVBAYTAklOMQswCQYDVQQIDAJUUzEMMAoGA1UEBwwDSHlkMQ4wDAYDVQQKDAVBbWVleDEPMA0GA1UECwwGRHJ1cGFsMREwDwYDVQQDDAhBYmhpc2hlazEkMCIGCSqGSIb3DQEJARYVdmlzYWJoaXNoZWtAZ21haWwuY29tMB4XDTIxMDQyNzE2MTUwNFoXDTMxMDQyNzE2MTUwNFowgYIxCzAJBgNVBAYTAklOMQswCQYDVQQIDAJUUzEMMAoGA1UEBwwDSHlkMQ4wDAYDVQQKDAVBbWVleDEPMA0GA1UECwwGRHJ1cGFsMREwDwYDVQQDDAhBYmhpc2hlazEkMCIGCSqGSIb3DQEJARYVdmlzYWJoaXNoZWtAZ21haWwuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEA4h8VtyGK4qxrguqHcEIji3EZWnjKm3ubnFqPfyyvVq5qJzVz/uvQot6bMV2YsL1sLOt5ghIEFE092JJAMiZIHZ/1Kmu35AQXk505KgMMcxak+xbcWB6cYLwxuU1EdTOd8aC3Rc1YZ4qySIE3hH3W9NCYSmY9FCBabFAtugs8FhwpOTqvFxF7798PVR62/5sK1RhtxhQtYTVY/natCgcUtBy6iR6E1vVRGcfvhywOBJg1nRNvgMgPrYlc6lMCH1KUkHdDFVRGOgNJUjFoueN9lQ9kNY1VhiXIJHW7Sf+26mEnLGf2ZNU5famI//t9G3He5F7MByuTacBLj9Yn7dKp3zcfitZlaFLiZwPDd4eRRs7hQi8nnHqlgBVJjRlV12J3CozW5zrWx+263++lFqUd2zm3iJrJQ1Ag5JCk4/i+W4PwCZ7WK53Em3ix2DbUtbwlSPG8PBNgQvlhmI7dc+/zu2+FhSutYGot9tjEZLLm8cO0hjKbPfT8q+S14jbwuBd1AgMBAAGjUzBRMB0GA1UdDgQWBBTOrOQyDJL+DPzcc0LLK0wvCZtrozAfBgNVHSMEGDAWgBTOrOQyDJL+DPzcc0LLK0wvCZtrozAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQAZl9e7LAtuMrVyzSnRmRWJs6eC2phT7AU+8nDgfkUUIGjIF8DU70dgax/JsMRfMv9f/7YRpWAK2hHqopv1ue7Ye9y/7rlizC8aqqYqyiiqP+BCsEo4M64VU1iDKZcaLNh+DUlUPkKPh3zDG8kGa4vleq5m2jJ8nQWqn5O3VogLDzc1aitimKCwNqcniqqyGjcAYdW9irlYGVal4JHl+/X8A0J9T/CSBY/pi2Ssqr3pP3ZQ4wXDHZ86PcrBECPGUkcZ/8xlU7ufWt9+e0FvvThqMoFJ371b0vEbWAusMtO3iC2uI03C8ixqjWFDuG45QO2kgQnXHCQl3b0e0FmmCCgoPstRBRlLN8t4EzZ67mKvCcEp/bQv816Y8ElnMuBikJPgset0R+i6ExlmQ3039cBwd54fsgLfV86f3Km7jf60SYgYOe+nD01iaM1cq/KldbJTRNcTeuUt8/DbVxfReaWPLA+yeyhqk++beT/RP5mD1EmzNLo5qPQWm1f2CCLPKzc=',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
];