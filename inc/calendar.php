<?php


	require_once($_SERVER['DOCUMENT_ROOT'].'/company/MySqlConnection.php');

	$calendarEvent = intval( $_GET['calendarevent']);

	if($calendarEvent === 1) //Salons list
	{
		$sqlText="select id, name from s_automated_point ORDER BY name";
		sqlExec($sqlText);
	}
	elseif($calendarEvent === 2)//User fio
	{
		print json_encode($_SESSION['fio']);
	}
	elseif($calendarEvent === 3)//Masters list
	{
		$salon_id = intval ($_GET['salon_id']);
		if($salon_id != 0)
		{
			$sqlText="select e.id, e.fio
				from s_employee e 
				LEFT JOIN t_employee_workplace ew ON e.id = ew.employeeid
				where e.mark_deleted = '0' AND e.parentid = '1'  AND ew.wpid = '$salon_id'
				ORDER BY fio";
			sqlExec($sqlText);
		}
	}
	elseif($calendarEvent === 4)//Exit
	{
		//setcookie("PHPSESSID", "", time() - 24*3600);
	}
	elseif($calendarEvent === 5)//Booking list
	{
		$master_id = intval ($_GET['master_id']);
		if($master_id != 0)
		{
			$sqlText="SELECT id, dtstart,dtend,employee_id, client_id,note FROM d_journal where employee_id = $master_id";
			sqlExec($sqlText);
			$execSQL =  mysql_query($sqlText); 
			$i=0;
			while ($row =  mysql_fetch_assoc($execSQL))
			{
				$row1['id'] = $row['id'];
				$row1['master_id'] = $row['employee_id'];
				$row1['dtstart'] = $row['dtstart'];
				$row1['dtend'] = $row['dtend'];
				$row1['client_id'] = $row['client_id'];
				$row1['note'] = $row['note'];
				$optgroup = $row['id'];
				
				$sqlText2 = "SELECT si.id, si.name, si.price
				FROM t_order_items oi 
				LEFT JOIN s_items si ON oi.item_id = si.id
				WHERE oi.order_id = 1";
				$execSQL2 =  mysql_query($sqlText2); 
				while ($row2 =  mysql_fetch_assoc($execSQL2))
				{
					$row1['items'][] = $row2;
				}	
				$rows[] = $row1;
				unset($row1); 
				$row1 = array();
				$i=$i+1;
			}
		print json_encode($rows);
		}
	}
	elseif($calendarEvent === 6)//Items list
	{
		$sqlText="select i.id, i.name, i.price, i.parentid
			from s_items i 
			where parentid = '0'
			ORDER BY i.id";
		$execSQL =  mysql_query($sqlText); 
		$i=0;
		while ($row =  mysql_fetch_assoc($execSQL))
		{
			$row1['id'] = $row['id'];
			$row1['groupname'] = $row['name'];
			$optgroup = $row['id'];
			$sqlText2="select i.id, i.name, i.price, i.parentid
				from s_items i 
				where parentid = '$optgroup'
				ORDER BY i.name";
			$execSQL2 =  mysql_query($sqlText2); 
			while ($row2 =  mysql_fetch_assoc($execSQL2))
			{
				$row1['items'][] = $row2;
			}	
			$rows[] = $row1;
			unset($row1); // $foo is gone
			$row1 = array();

		}
		print json_encode($rows);
	}


	function sqlExec($sqlText)
	{
		$execSQL =  mysql_query($sqlText); 
		while ($row =  mysql_fetch_assoc($execSQL))
		{
			$rows[] = $row;
		}
		print json_encode($rows);
	}
