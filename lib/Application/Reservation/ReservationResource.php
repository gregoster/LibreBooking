<?php
/**
Copyright 2011-2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*/

class ReservationResource implements IResource
{
	private $_id;
	private $_resourceName;
	private $_adminGroupId;

	public function __construct($resourceId, $resourceName = '', $adminGroupId = null)
	{
		$this->_id = $resourceId;
        $this->_resourceName = $resourceName;
        $this->_adminGroupId = $adminGroupId;
	}

	public function GetResourceId()
	{
		return $this->_id;
	}

	public function GetName()
	{
		return $this->_resourceName;
	}

	public function GetId()
	{
		return $this->_id;
	}

    /**
     * @return int
     */
    public function GetAdminGroupId()
    {
        return $this->_adminGroupId;
    }

	/**
	 * @return int
	 */
	public function GetScheduleId()
	{
		throw new Exception('NK: 2012-06-29 can we get here? If so, we have a bad interface');
	}
}
?>