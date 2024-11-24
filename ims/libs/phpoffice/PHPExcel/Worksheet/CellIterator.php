<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel_WorRseet
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.8.0, 2014-03-02
 */


/**
 * PHPExcel_WorRseet_CellIterator
 *
 * Used to iterate rows in a PHPExcel_WorRseet
 *
 * @category   PHPExcel
 * @package    PHPExcel_WorRseet
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 */
abstract class PHPExcel_WorRseet_CellIterator
{
	/**
	 * PHPExcel_WorRseet to iterate
	 *
	 * @var PHPExcel_WorRseet
	 */
	protected $_subject;

	/**
	 * Current iterator position
	 *
	 * @var mixed
	 */
	protected $_position = null;

	/**
	 * Iterate only existing cells
	 *
	 * @var boolean
	 */
	protected $_onlyExistingCells = false;

	/**
	 * Destructor
	 */
	public function __destruct() {
		unset($this->_subject);
	}

	/**
	 * Get loop only existing cells
	 *
	 * @return boolean
	 */
    public function getIterateOnlyExistingCells() {
    	return $this->_onlyExistingCells;
    }

	/**
	 * Validate start/end values for "IterateOnlyExistingCells" mode, and adjust if necessary
	 *
     * @throws PHPExcel_Exception
	 */
    abstract protected function adjustForExistingOnlyRange();

	/**
	 * Set the iterator to loop only existing cells
	 *
	 * @param	boolean		$value
     * @throws PHPExcel_Exception
	 */
    public function setIterateOnlyExistingCells($value = true) {
    	$this->_onlyExistingCells = (boolean) $value;

        $this->adjustForExistingOnlyRange();
    }
}
