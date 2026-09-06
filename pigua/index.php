<?php
/**	op-public-uqunie-org:/pigua/index.php
 *
 * @created    2026-09-06
 * @license    Apache-2.0
 * @package    op-skeleton-2030
 * @copyright  Tomoaki Nagahara
 */

/**	Namespace
 *
 */
namespace OP;

//	...
include('config.php');
include('lang.phtml');

//	...
$lang = OP()->Unit()->Router()->Args()[0] ?? '';
$file = "{$lang}.phtml";

//	...
if(!file_exists($file) ){
	$file = "ja.phtml";
}

//	...
OP()->Template($file);

//	...
OP()->Unit()->WebPack()->Auto('style.css');
