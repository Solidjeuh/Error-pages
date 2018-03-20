<?php
/**
*
* @package Errorpages
* @copyright (c) 2014 ForumHulp.com
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE!
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

// Custom error pages
$lang = array_merge($lang, array(
	'ERRORPAGESERROR'					=> 'Error Pagina’s',
	'ERRORPAGES_LOG'					=> 'Log Error Pagina’s',
	'ERRORPAGES_LOG_EXPLAIN'			=> 'Sla alle Error Pagina’s op in de Error Log onder de Onderhoud Tab',
	'ERRORPAGES_EXPLAIN'				=> 'Uitleg Error Pagina’s',
	'ERRORPAGES_EXPLAIN_EXPLAIN'		=> 'Leg de foutmelding uit in het berichten venster',
	'ERRORPAGE_NOTICE'					=> '<div class="phpinfo"><p class="entry">Configuratie instellingen zitten in %1$s » %2$s » %3$s.</p></div>',
	'ERROR_BAD_REQUEST' 				=> 'Foutieve aanvraag',
	'ERROR_BAD_REQUESTEXPA' 			=> 'De aanvraag had een slechte syntax of kon onmogelijk worden uitgevoerd.',
	'ERROR_AUTH_REQUIRED' 				=> 'Niet geautoriseerd',
	'ERROR_AUTH_REQUIREDEXPA' 			=> 'Dit betekent dat de pagina vereist dat de bezoekers zich authenticeren met hun gebruikersnaam en wachtwoord. Als de gebruikers dit niet doen geeft de server deze foutmelding weer.',
	'ERROR_FORBIDDEN' 					=> 'Verboden toegang',
	'ERROR_FORBIDDENEXPA' 				=> 'Dit betekent dat de toegang tot de pagina die de bezoeker vraagt ​​niet is toegestaan. Dit kan door een bijzondere regel in de configuratie van de webserver of de specifieke bestand systeem permissies van het bestand.',
	'ERROR_NOT_FOUND' 					=> 'Niet gevonden',
	'ERROR_NOT_FOUNDEXPA'		 		=> 'Het gevraagde bestand bestaat niet op de server.',
	'PRECONDITION_FAILED'				=> 'Niet voldaan aan vooraf gestelde voorwaarde',
	'PRECONDITION_FAILEDEXPA'			=> 'De fout betekent dat het verzoek leidde tot een mod_security bescherming aan de server kant.',
	'METHOD_NOT_ALLOWED'				=> 'Methode niet toegestaan',
	'METHOD_NOT_ALLOWEDEXPA'			=> 'Een verzoek werd gemaakt van een bron met behulp van een verzoek methode die niet wordt ondersteund door die bron. Bijvoorbeeld met behulp van GET op een formulier dat de gegevens nodig heeft om via POST worden voorgelegd',
	'NOT_ACCEPTABLE'					=> 'Niet aanvaardbaar',
	'NOT_ACCEPTABLEEXPA'				=> 'De opgevraagde bron is alleen geschikt voor het genereren van content niet aanvaardbaar volgens de Accept headers verzonden in het verzoek.',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Authenticatie op de proxyserver verplicht',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> 'De gebruiker moet zich eerst verifiëren bij de proxyserver.',
	'REQUEST_TIMED_OUT'					=> 'Aanvraagtijd verstreken',
	'REQUEST_TIMED_OUTEXPA'				=> 'De server is gestopt met de aanvraag. Volgens HTTP specificaties: "De gebruiker deed geen aanvraag binnen de gestelde tijd van de server."',
	'CONFLICTING_REQUEST'				=> 'Conflict',
	'CONFLICTING_REQUESTEXPA'			=> 'Geeft aan dat het verzoek niet kon worden verwerkt, vanwege het conflict in het verzoek, zoals een bewerkingsconflict in het geval van meerdere updates',
	'GONE'								=> 'Verdwenen',
	'GONEEXPA'							=> 'Geeft aan dat de gevraagde bron niet langer beschikbaar is en niet opnieuw beschikbaar zal zijn. Dit moet worden gebruikt wanneer een resource opzettelijk is verwijderd en de resource moet worden opgeschoond. Bij ontvangst van een 410-statuscode moet de cliënt de bron in de toekomst niet opnieuw aanvragen. Cliënten zoals zoekmachines moeten de bron uit hun index verwijderen. [nodig citaat] De meeste gebruik cases vereisen geen cliënten en onderzoek motoren om de hulpbron te zuiveren, en een "404 niet gevonden" kan in plaats daarvan worden gebruikt.',
	'CONTENT_LENGTH_REQUIRED'			=> 'Lengte benodigd',
	'CONTENT_LENGTH_REQUIREDexpa'		=> 'Het verzoek specificeerde niet de lengte van de inhoud, die vereist is door de gevraagde bron',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Aanvraag te groot',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> 'Het verzoek is groter dan de server bereid of in staat is om te verwerken.',
	'REQUEST_URI_TOO_LONG'				=> 'Aanvraag-URL te lang',
	'REQUEST_URI_TOO_LONGEXPA'			=> 'De opgegeven URI was te lang voor de server om te verwerken. Vaak is het resultaat van te veel gegevens gecodeerd als een queryreeks van een GET-aanvraag, in welk geval het moet worden geconverteerd naar een POST-aanvraag.',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Media-type niet ondersteund',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> 'De aanvraagentiteit heeft een media type dat de server of bron niet ondersteunt. De cliënt upload bijvoorbeeld een afbeelding als / svg + xml, maar de server vereist dat afbeeldingen een ander formaat gebruiken.',
	'TEAPOT'							=> 'Ik ben een theepot (RFC 2324)',
	'TEAPOTEXPA'						=> 'Deze code werd in 1998 gedefinieerd als een van de traditionele grapjes van IETF April Fools, in RFC 2324, Hyper Text Coffee Pot Control Protocol, en zal naar verwachting niet door echte HTTP-servers worden geïmplementeerd..',
	'INTERNAL_SERVER_ERROR'				=> 'Interne server fout',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'De server heeft een onverwachte situatie aangetroffen waardoor deze niet aan de aanvraag kon voldoen.',
	'NOT_IMPLEMENTED' 					=> 'Niet geïmplementeerd',
	'NOT_IMPLEMENTEDEXPA' 				=> 'De server ondersteunt de vereiste installatie niet.',
	'BAD_GATEWAY' 						=> 'Bad Gateway',
	'BAD_GATEWAYEXPA' 					=> 'De server fungeerde als een gateway of proxy en ontving een ongeldig antwoord van de upstream-server.',
	'SERVICE_UNAVAILABLE' 				=> 'Dienst niet beschikbaar',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'De server kan uw verzoek tijdelijk niet uitvoeren vanwege onderhoud storingen of capaciteitsproblemen. Probeer het later opnieuw.',
	'GATEWAY_TIMOUT' 					=> 'Gateway Time-out',
	'GATEWAY_TIMOUTEXPA' 				=> 'De server fungeerde als gateway of proxy en ontving geen tijdig antwoord van de upstream-server.',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'HTTP-versie wordt niet ondersteund',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> 'De server ondersteunt de HTTP-protocolversie die in de aanvraag wordt gebruikt niet.',
	'ERROR_UNKNOWN'     	  		 	=> 'Onbekende Server Fout',
	'ERROR_UNKNOWNEXPA'      		 	=> '',
	'FH_HELPER_NOTICE'		=> 'Forumhulp helper applicatie bestaat niet!<br />Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> en kopieer de helper map naar uw forumhulp extensie folder.',
));
