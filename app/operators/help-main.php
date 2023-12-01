<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@enginx.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 *
 * Authors:    Liran Tal <liran@enginx.com>
 *             Filippo Lauria <filippo.lauria@iit.cnr.it>
 *
 *********************************************************************************************************
 */

    include ("library/checklogin.php");
    $operator = $_SESSION['operator_user'];

    include_once('../common/includes/config_read.php');
    $log = "visited page: ";

    include_once("lang/main.php");

    include("../common/includes/layout.php");

    // print HTML prologue
    $title = "Help";
    $help = "";

    print_html_prologue($title, $langCode);

    print_title_and_help($title, $help);

?>

    <p>There are several communication media available at your disposal:</p>
    <ul>
        <li><p><strong>FreeIspRadius website:</strong> <a class="text-decoration-none" href="http://www.freeispradius.com" target="_blank">FreeIspRadius</a>.</p></li>

        <li><p><strong>FreeIspRadius Mailing List:</strong> you can send an email to <a class="text-decoration-none" href="mailto:contact@freeispradius.com">contact@freeispradius.com</a>,<br>
        but registration to the mailing list is required first. You can register <a class="text-decoration-none" href="https://freeispradius.com" target="_blank">here</a>.</p></li>
        <li><strong>FreeIspRadius:</strong> You can find us at <a class="text-decoration-none" href="irc://irc.freeispradius.com" target="_blank"><div id="FreeIspRadius" class="com"></div></a> on x.com.</li>
    </ul>

<?php

    include('include/config/logging.php');
    print_footer_and_html_epilogue();
