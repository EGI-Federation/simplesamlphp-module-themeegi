<?php

/**
 * This is example configuration of SimpleSAMLphp themevanila.
 * Copy this file to default config directory and edit the properties.
 *
 * copy command (from SimpleSAML base dir)
 * cp modules/themeegi/module_themeegi.php config/
 */

$config = array(
    'cookiePolicy' => array(
        array(
            'type' => 'Session State',
            'provider' => 'aai.egi.eu',
            'name' => 'egi_proxy_authtoken, egi_google_proxy_authtoken, egi_google_proxy_authtoken,'
                . ' egi_facebook_proxy_authtoken, egi_linkedin_proxy_authtoken, egi_orcid_proxy_authtoken',
            'thirdParty' => false,
            'category' => 'Session',
            'purpose' => 'Preserve user authentication token to prevent session fixation attacks'
        ),
        array(
            'type' => 'Session State',
            'provider' => 'aai.egi.eu',
            'name' => 'egi_proxy_sid, egi_google_proxy_sid, egi_google_proxy_sid, egi_facebook_proxy_sid,'
            , ' egi_linkedin_proxy_sid, egi_orcid_proxy_sid',
            'thirdParty' => false,
            'category' => 'Session',
            'purpose' => 'Preserve user session ID to retrieve session information'
        ),
        array(
            'type' => 'Preferences',
            'provider' => 'aai.egi.eu',
            'name' => 'egi_poweridpdisco_lastidp',
            'thirdParty' => false,
            'category' => 'Persistent',
            'purpose' => 'Preserve preferred IdP selection for SimpleSAMLphp IdP discovery service'
        ),
        array(
            'type' => 'Preferences',
            'provider' => 'aai.egi.eu',
            'name' => 'egi_poweridpdisco_remember',
            'thirdParty' => false,
            'category' => 'Persistent',
            'purpose' => 'Preserve preference whether to remember IdP selection for SimpleSAMLphp IdP discovery service'
        ),
        array(
            'type' => 'Session State',
            'provider' => 'aai.egi.eu',
            'name' => 'egi_co_registry_sid',
            'thirdParty' => false,
            'category' => 'Session',
            'purpose' => 'Preserve user session ID to retrieve session information'
        ),
        array(
            'type' => 'Preferences',
            'provider' => 'aai.egi.eu',
            'name' => 'egi_co_registry_tz',
            'thirdParty' => false,
            'category' => 'Persistent',
            'purpose' => 'Preserve preferred timezone selection for COmanage EGI Account Registry'
        ),
        array(
            'type' => 'Preferences',
            'provider' => 'aai.egi.eu',
            'name' => 'i18next',
            'thirdParty' => false,
            'category' => 'Session',
            'purpose' => 'Preserve preferred language for EGI AAI OpenID Connect Provider'
        ),
        array(
            'type' => 'Session State',
            'provider' => 'aai.egi.eu',
            'name' => 'JSESSIONID',
            'thirdParty' => false,
            'category' => 'Session',
            'purpose' => 'Preserve user session ID to retrieve session information'
        )
    ),
    'views' => array(
        // Terms and Conditions URL. The key MUST BE `aup`
        'aup' => 'https://aai.egi.eu/aup/check-in.html',
        // Privace URL. The key MUST BE `privacy`
        'privacy' => 'https://aai.egi.eu/privacy.html',
    ),
    // Loading Spinner to use. Two options are available `loader` or `cmg_loader`
    'loader' => 'loader',
    'ribbon_text' => '',
);
