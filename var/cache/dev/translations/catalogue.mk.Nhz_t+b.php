<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mk', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Настана грешка во автентикацијата.',
    'Authentication credentials could not be found.' => 'Акредитивите за автентикација не се пронајдени.',
    'Authentication request could not be processed due to a system problem.' => 'Барањето за автентикација не можеше да биде процесуирано заради системски проблем.',
    'Invalid credentials.' => 'Невалидни акредитиви.',
    'Cookie has already been used by someone else.' => 'Колачето е веќе користено од некој друг.',
    'Not privileged to request the resource.' => 'Немате привилегии за да го побарате ресурсот.',
    'Invalid CSRF token.' => 'Невалиден CSRF токен.',
    'No authentication provider found to support the authentication token.' => 'Не е пронајден провајдер за автентикација кој го поддржува токенот за автентикација.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесијата е недостапна, или е истечена, или колачињата не се овозможени.',
    'No token could be found.' => 'Токенот не е најден.',
    'Username could not be found.' => 'Корисничкото име не е најдено.',
    'Account has expired.' => 'Корисничката сметка е истечена.',
    'Credentials have expired.' => 'Акредитивите се истечени.',
    'Account is disabled.' => 'Корисничката сметка е деактивирана.',
    'Account is locked.' => 'Корисничката сметка е заклучена.',
    'Too many failed login attempts, please try again later.' => 'Премногу неуспешни обиди за најавување, ве молиме обидете се повторно подоцна.',
    'Invalid or expired login link.' => 'Неважечка или истечена врска за најавување.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Премногу неуспешни обиди за најавување, обидете се повторно за %minutes% минута.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Претерано многу неуспешни обиди за најавување, ве молиме обидете се повторно за %minutes% минута.|Претерано многу неуспешни обиди за најавување, ве молиме обидете се повторно за %minutes% минути.',
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
