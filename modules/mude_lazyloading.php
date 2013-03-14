<?php
/**
 *    This file is part of Musterdenker Lazy loading for OXID eShop.
 *
 *    MusterdenkerLazy loading for OXID eShop is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with Musterdenker Lazy loading for OXID eShop.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link http://www.musterdenker.de
 */

/**
 * class to activate lazy loading for each oxbase class in eShop
 * Simply add "CLASSNAME => mude_lazyloading" in admin to activate lazy loadig for each class you want
 */
class mude_lazyloading extends mude_lazyloading_parent
{
	public function __construct()
	{
		$this->_blUseLazyLoading = true;
		self::$_blDisableFieldCaching[get_class($this)] = true;
		parent::__construct();
		
	}
}