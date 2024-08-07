<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cy', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Digwyddodd eithriad dilysu.',
    'Authentication credentials could not be found.' => 'Ni ellid dod o hyd i ddogfennau dilysu.',
    'Authentication request could not be processed due to a system problem.' => 'Ni ellid prosesu cais dilysu oherwydd problem gyda\'r system.',
    'Invalid credentials.' => 'Dogfennau annilys.',
    'Cookie has already been used by someone else.' => 'Mae rhywun arall eisoes wedi defnyddio\'r cwcis.',
    'Not privileged to request the resource.' => 'Heb y fraint i ofyn am yr adnodd.',
    'Invalid CSRF token.' => 'Tocyn CSRF annilys.',
    'No authentication provider found to support the authentication token.' => 'Heb ddod o hyd i ddarparwr dilysu i gefnogi\'r tocyn dilysu.',
    'No session available, it either timed out or cookies are not enabled.' => 'Dim sesiwn ar gael, naill ai mae wedi dod i ben neu nid yw cwcis wedi\'u galluogi.',
    'No token could be found.' => 'Heb ddod o hyd i docyn.',
    'Username could not be found.' => 'Heb ddod o hyd i enw defnyddiwr.',
    'Account has expired.' => 'Mae\'r cyfrif wedi dod i ben.',
    'Credentials have expired.' => 'Mae\'r dogfennau wedi dod i ben.',
    'Account is disabled.' => 'Mae\'r cyfrif wedi\'i analluogi.',
    'Account is locked.' => 'Mae\'r cyfrif wedi\'i gloi.',
    'Too many failed login attempts, please try again later.' => 'Gormod o ymdrechion mewngofnodi wedi methu, ceisiwch eto\'n hwyrach.',
    'Invalid or expired login link.' => 'Dolen mewngofnodi annilys neu wedi dod i ben.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Gormod o ymdrechion mewngofnodi wedi methu, ceisiwch eto ymhen %minutes% munud.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Gormod o ymdrechion mewngofnodi wedi methu, rhowch gynnig arall arni mewn %minutes% munud.|Gormod o ymdrechion mewngofnodi wedi methu, rhowch gynnig arall arni mewn %minutes% munud.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
