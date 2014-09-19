<?php
function no_diagnosa($id)
{
	$prefix = "RES";
	$id++;
	switch (strlen($id))
	{
		case 1:
			$prefix .= "00". $id;  
		break;
		case 2:
			$prefix .= "0". $id;  
		break;
		case 3:
			$prefix .= $id;  
		break;
	}
	return $prefix;
}

function id_gejala($id)
{
	$prefix = "G";
	$id++;
	switch (strlen($id))
	{
		case 1:
			$prefix .= "00". $id;  
		break;
		case 2:
			$prefix .= "0". $id;  
		break;
		case 3:
			$prefix .= $id;  
		break;
	}
	return $prefix;
}

function id_penyakit($id)
{
	$prefix = "P";
	$id++;
	switch (strlen($id))
	{
		case 1:
			$prefix .= "00". $id;  
		break;
		case 2:
			$prefix .= "0". $id;  
		break;
		case 3:
			$prefix .= $id;  
		break;
	}
	return $prefix;
}

?>
