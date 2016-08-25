<?php
@mysql_connect('localhost','root','') or die('please cheak username or password');
@mysql_select_db('imsproject')or die('not connected to database');
?>