<?php
/*
 * Copyright (C) 2010 Urban Suppiger, Pirmin Mattmann
 *
 * This file is part of eCamp.
 *
 * eCamp is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * eCamp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with eCamp.  If not, see <http://www.gnu.org/licenses/>.
 */


echo "MySQL-Dump saved in: /home/pfadiluz/tmp/ecamp2/".shell_exec("date +%s_backup_%Y-%m-%d_%H:%M:%S.sql");
//echo shell_exec("man date");

shell_exec("/usr/local/bin/mysqldump -h pfadiluz.mysql.db.internal -u root -p root pfadiluz_ecamp2 > /home/pfadiluz/tmp/ecamp2/$(date +%s_mysqldump_%Y-%m-%d_%H:%M:%S.sql)");

?>