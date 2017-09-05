<?php
/**
 * mysqli替换mysql,兼容php7
 * User: peter.lee
 * Date: 2017-9-5
 */
 
function mysql_connect($dbhost, $dbuser, $dbpw, $new_link)
{
 return mysqli_connect($dbhost, $dbuser, $dbpw);
}
 
function mysql_pconnect($dbhost, $dbuser, $dbpw)
{
 return mysqli_connect($dbhost, $dbuser, $dbpw);
}
 
function mysql_get_server_info($link_id)
{
 return mysqli_get_server_info($link_id);
}
 
function mysql_query($sql, $link_id)
{
 return mysqli_query($link_id, $sql);
}
 
function mysql_fetch_assoc($result)
{
 return mysqli_fetch_assoc($result);
}
 
function mysql_select_db($dbname, $link_id)
{
 return mysqli_select_db($link_id, $dbname);
}
 
function mysql_fetch_array($result)
{
 return mysqli_fetch_array($result);
}
 
function mysql_ping($link_identifier = null)
{
 return mysqli_ping($link_identifier);
}
 
function mysql_error($link_identifier = null)
{
 return mysqli_error($link_identifier);
}
 
function mysql_errno($link_identifier = null)
{
 return mysqli_errno($link_identifier);
}
 
function mysql_affected_rows($link_identifier = null)
{
 return mysqli_affected_rows($link_identifier);
}
 
function mysql_result($res, $row, $field = 0)
{
 $res->data_seek($row);
 $datarow = $res->fetch_array();
 return $datarow[$field];
}
 
function mysql_num_fields($query)
{
 return mysqli_num_fields($query);
}
 
function mysql_free_result($query)
{
 return mysqli_free_result($query);
}
 
function mysql_insert_id($link_id)
{
 return mysqli_insert_id($link_id);
}
 
 
function mysql_fetch_field($query)
{
 return mysql_fetch_field($query);
}
 
 
function mysql_real_escape_string($sql, $link = null)
{
 return mysqli_real_escape_string($link, $sql);
}
 
 
function mysql_escape_string($sql, $link = null)
{
 return mysqli_escape_string($link, $sql);
}
 
 
function mysql_close($link = null)
{
 return mysqli_close($link);
}
 
 
function mysql_fetch_row($result)
{
 return mysqli_fetch_row($result);
}
 
function mysql_field_table($result, $field_offset)
{
 return mysqli_fetch_field_direct($result, $field_offset)['table'];
}
 
function mysql_field_name($result, $row_number)
{
 return mysqli_fetch_field_direct($result, $row_number)['name'];
}
 
function mysql_data_seek($result, $row_number)
{
 return mysqli_data_seek($result, $row_number);
}
 
function mysql_info($link)
{
 return mysqli_info($link);
}
 
define('MYSQL_ASSOC', 1);
define('MYSQL_NUM', 2);
