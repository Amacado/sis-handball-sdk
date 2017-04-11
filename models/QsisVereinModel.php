<?php


namespace Contao;


/**
 * Reads and writes Verein
 *
 * @property integer $id
 * @property string  $name
 * @property integer  $code
*/

class QsisVereinModel extends \Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_qSIS_verein';

}