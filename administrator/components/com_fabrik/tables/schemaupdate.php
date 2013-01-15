<?php
/**
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * DB changeset schema update
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @since       3.0.8
 */

class FabrikTableSchemaupdate extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   object  &$db  database object
	 */

	public function __construct(&$db)
	{
		parent::__construct('#__{package}_schema_updates', 'id', $db);
	}

}
