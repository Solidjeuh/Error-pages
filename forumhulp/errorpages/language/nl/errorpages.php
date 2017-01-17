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

// Custom error pages by stoker
$lang = array_merge($lang, array(
	'ERRORPAGESERROR'					=> 'Fout pagina&#39;s',

	'ERROR_BAD_REQUEST' 				=> 'Slechte aanvraag',
	'ERROR_BAD_REQUESTEXPA' 			=> 'De aanvraag heeft een slechte syntaxis of kon onmogelijk samengevoegd worden om afgemaakt te worden.',
	'ERROR_AUTH_REQUIRED' 				=> 'Autorisatie vereist',
	'ERROR_AUTH_REQUIREDEXPA' 			=> 'Dit betekent dat de pagina het nodig vindt dat bezoekers zichzelf aanmelden met hun gebruikersnaam en paswoord. Indien ze dit niet doen zal de server een fout pagina weergeven.',
	'ERROR_FORBIDDEN' 					=> 'Verboden',
	'ERROR_FORBIDDENEXPA' 				=> 'Dit betekent dat toegang tot de pagina die de bezoeker aanvraagt niet toegestaan is. Dit kan zijn door een speciale regels in de configuratie van de web server, of door een specifieke permissie van het bestand.',
	'ERROR_NOT_FOUND' 					=> 'Niet gevonden',
	'ERROR_NOT_FOUNDEXPA'		 		=> 'Dit betekent dat het opgevraagde bestand niet aanwezig is.',
	'PRECONDITION_FAILED'				=> 'Niet voldaan aan vooraf gestelde voorwaarde',
	'PRECONDITION_FAILEDEXPA'			=> 'Deze fout wil zeggen dat de aanvraag een mod_security beveiliging activeerde langs onze kant.',
	'METHOD_NOT_ALLOWED'				=> 'Methode niet toegestaan',
	'METHOD_NOT_ALLOWEDEXPA'			=> '',
	'NOT_ACCEPTABLE'					=> 'Niet acceptabel (encoding)',
	'NOT_ACCEPTABLEEXPA'				=> '',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Proxy authenticatie vereist',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> '',
	'REQUEST_TIMED_OUT'					=> 'Aanvraag Timed Out',
	'REQUEST_TIMED_OUTEXPA'				=> 'Aanvraag Timed Out',
	'CONFLICTING_REQUEST'				=> 'tegenstrijdige aanvraag',
	'CONFLICTING_REQUESTEXPA'			=> '',
	'GONE'								=> 'Verdwenen',
	'GONEEXPA'							=> '',
	'CONTENT_LENGTH_REQUIRED'			=> 'Inhoud lengte verplicht',
	'CONTENT_LENGTH_REQUIREDexpa'		=> '',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Aanvraag te lang',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> '',
	'REQUEST_URI_TOO_LONG'				=> 'Aanvraag-URL te lang',
	'REQUEST_URI_TOO_LONGEXPA'			=> '',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Media-type niet ondersteund',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> '',
	'INTERNAL_SERVER_ERROR'				=> 'Interne Server Fout',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'De server is een onverwachte voorwaarde tegengekomen die verhinderd dat het verzoek vervult kan worden.',
	'NOT_IMPLEMENTED' 					=> 'Niet geïmplementeerd',
	'NOT_IMPLEMENTEDEXPA' 				=> 'De server ondersteund de benodigde faciliteit niet.',
	'BAD_GATEWAY' 						=> 'Bad Gateway',
	'BAD_GATEWAYEXPA' 					=> 'De server kwam een tijdelijke fout tegen en kon uw verzoek niet verwerken.',
	'SERVICE_UNAVAILABLE' 				=> 'Service Niet beschikbaar',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'De server is tijdelijk niet in staat om uw verzoek te verwerken wegens onderhoud downtime of capaciteitsproblemen. Probeer het later opnieuw.',
	'GATEWAY_TIMOUT' 					=> 'Gateway Timeout',
	'GATEWAY_TIMOUTEXPA' 				=> '',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'HTTP-versie wordt niet ondersteund',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> '',
	'ERROR_UNKNOWN'     	  		 	=> 'Onbekende server fout',
	'ERROR_UNKNOWNEXPA'      		 	=> ''
));
