<?php
/**
 * lorumIpsumDb class file for lorumIpsum extra
 *
 * Copyright 2013 by JM Addington jm@jmaddington.com
 * Created on 05-28-2013
 *
 * lorumIpsum is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * lorumIpsum is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * lorumIpsum; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package lorumIpsum
 */


 class lorumIpsumDb {
    /** @var $modx modX */
    public $modx;
    /** @var $props array */
    public $props;

    function __construct(&$modx, &$config = array())
    {
        $this->modx =& $modx;
        $this->props =& $config;
    }


}