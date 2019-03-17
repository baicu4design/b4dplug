<?php
/*
Plugin Name: B4DPlug
Description: Welcome to my b4dplugin
Plugin URI:  https://www.catalinbaicu.co.uk
Author: Catalin Baicu
Version: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/license/gpl-2.0.txt


This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/


function b4dplug_action_hook(){
    wp_mail('baicu4design@gmail.com','Subject','Here goes the message');
}

add_action('init', 'b4dplug_action_hook');
/*Here below is going to be the rest of the code*/
