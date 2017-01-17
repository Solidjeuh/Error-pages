<?php
/**
*
* @package Errorpages
* @copyright (c) 2014 ForumHulp.com
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
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

// Custom error pages
$lang = array_merge($lang, array(
	'ERRORPAGESERROR'					=> 'Fout pagina&#39;s',
	'ERRORPAGES_LOG'					=> 'Log Fout Pagina&#39;s',
	'ERRORPAGES_LOG_EXPLAIN'			=> 'Sla alle Fout Pagina&#39;s op in de Fout Log onder de Onderhoud Tab',
	'ERRORPAGES_EXPLAIN'				=> 'Uitleg Fout Pagina&#39;s',
	'ERRORPAGES_EXPLAIN_EXPLAIN'		=> 'Leg de foutmelding uit in het berichten venster',
	'ERROR_BAD_REQUEST' 				=> 'Foute aanvraag',
	'ERROR_BAD_REQUESTEXPA' 			=> 'De aanvraag heeft een slechte syntaxis of kon onmogelijk samengevoegd worden om afgemaakt te worden.',
	'ERROR_AUTH_REQUIRED' 				=> 'Niet geautoriseerd',
	'ERROR_AUTH_REQUIREDEXPA' 			=> 'Dit betekent dat de pagina het nodig vindt dat bezoekers zichzelf aanmelden met hun gebruikersnaam en paswoord. Indien ze dit niet doen zal de server een fout pagina weergeven.',
	'ERROR_FORBIDDEN' 					=> 'Verboden toegang',
	'ERROR_FORBIDDENEXPA' 				=> 'Dit betekent dat toegang tot de pagina die de bezoeker aanvraagt niet toegestaan is. Dit kan zijn door een speciale regels in de configuratie van de web server, of door een specifieke permissie van het bestand.',
	'ERROR_NOT_FOUND' 					=> 'Niet gevonden',
	'ERROR_NOT_FOUNDEXPA'		 		=> 'Dit betekent dat het opgevraagde bestand niet aanwezig is.',
	'PRECONDITION_FAILED'				=> 'Niet voldaan aan vooraf gestelde voorwaarde',
	'PRECONDITION_FAILEDEXPA'			=> 'Deze fout wil zeggen dat de aanvraag een mod_security beveiliging activeerde langs jouw kant.',
	'METHOD_NOT_ALLOWED'				=> 'Methode niet toegestaan',
	'METHOD_NOT_ALLOWEDEXPA'			=> 'Er werd een verzoek gemaakt van een bron met behulp van een verzoek methode die niet wordt ondersteund door die bron. Voorbeeld: Gebruik maken van GET in een formulier dat data nodig heeft dat gepresenteerd word via POST, of PUT gebruikt op een lees-enkel hulpbron.',
	'NOT_ACCEPTABLE'					=> 'Niet aanvaardbaar',
	'NOT_ACCEPTABLEEXPA'				=> 'De opgevraagde bron is alleen geschikt voor het genereren van inhoud die niet acceptabel is volgens de Accept headers verzonden in het verzoek.',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Authenticatie op de proxyserver verplicht',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> 'De client moet zich eerst authenticeren met de proxy.',
	'REQUEST_TIMED_OUT'					=> 'Aanvraagtijd verstreken',
	'REQUEST_TIMED_OUTEXPA'				=> 'De server had een time-out tijdens het wachten op de aanvraag. Volgens de HTTP specificaties: "De client produceerde geen aanvraag in de tijd dat de server nodig had om te wachten. De client mag de aanvraag opnieuw doen zonder modificaties op elk gewenst moment."',
	'CONFLICTING_REQUEST'				=> 'Conflict',
	'CONFLICTING_REQUESTEXPA'			=> 'Geeft aan dat het verzoek niet kon worden verwerkt als gevolg van het conflict in het verzoek, zoals een bewerking conflict in het geval van meerdere updates',
	'GONE'								=> 'Verdwenen',
	'GONEEXPA'							=> 'Geeft aan dat de aangevraagde bron niet meer beschikbaar is en niet meer beschikbaar zal komen. Dit moet worden gebruikt wanneer een bron met opzet is verwijderd en de bron moet worden leeggemaakt. Na het ontvangen van een 410-status code moet de client de bron niet opnieuw opvragen in de toekomst. Clients zoals zoekmachines zouden de bron van hun index moeten verwijderen. [citaat nodig] De meeste gevallen vereisen geen clients en zoekmachines om de bron leeg te maken, en een "404 Not Found" kan in de plaats gebruikt worden.',
	'CONTENT_LENGTH_REQUIRED'			=> 'Inhoud lengte verplicht',
	'CONTENT_LENGTH_REQUIREDexpa'		=> 'Het verzoek heeft de lengte van de inhoud die vereist is door de gevraagde bron niet gespecificeerd',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Aanvraag te groot',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> 'De aanvraag is groter dan de server kan, of bereid is om te verwerken.',
	'REQUEST_URI_TOO_LONG'				=> 'Aanvraag-URL te lang',
	'REQUEST_URI_TOO_LONGEXPA'			=> 'De opgeven URI was te lang voor de server om te verwerken. Vaak het resultaat van te veel data dat wordt gecodeerd als een query-string of een GET aanvraag. In dat geval zou het geconverteerd moeten worden naar een POST aanvraag',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Media-type niet ondersteund',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> 'De aangevraagde entiteit heeft een media-type dat de server of bron niet ondersteund. Als voorbeeld, de client upload een afbeelding als image/svg+xml, maar de server vereist dat afbeeldingen een ander formaat gebruiken.',
	'TEAPOT'							=> 'Ik ben een theepot (RFC 2324)',
	'TEAPOTEXPA'						=> 'Deze code werd gedefinieerd in 1998 als een van de traditionele IETF April Fools grappen, in RFC 2324, Hyper Text Coffee Pot Control protocol en zal naar verwachting niet worden uitgevoerd door de werkelijke HTTP-servers.',
	'INTERNAL_SERVER_ERROR'				=> 'Interne serverfout',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'De server is een onverwachte voorwaarde tegengekomen die verhinderd dat het verzoek vervult kan worden.',
	'NOT_IMPLEMENTED' 					=> 'Niet geïmplementeerd',
	'NOT_IMPLEMENTEDEXPA' 				=> 'De server ondersteund de benodigde faciliteit niet.',
	'BAD_GATEWAY' 						=> 'Bad Gateway',
	'BAD_GATEWAYEXPA' 					=> 'De server fungeerde als een gateway of proxy en kreeg een ongeldige reactie van de upstream-server.',
	'SERVICE_UNAVAILABLE' 				=> 'Dienst niet beschikbaar',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'De server is tijdelijk niet in staat om uw verzoek te verwerken wegens onderhoud downtime of capaciteitsproblemen. Probeer het later opnieuw.',
	'GATEWAY_TIMOUT' 					=> 'Gateway Timeout',
	'GATEWAY_TIMOUTEXPA' 				=> 'De server fungeerde als een gateway of proxy en heeft geen tijdige reactie van de upstream-server ontvangen.',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'HTTP-versie wordt niet ondersteund',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> 'De server biedt geen ondersteuning voor de HTTP-protocol versie die gebruikt wordt in het verzoek.',
	'ERROR_UNKNOWN'     	  		 	=> 'Onbekende Server Fout',
	'ERROR_UNKNOWNEXPA'      		 	=> ''
));
