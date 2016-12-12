<?php
function CreaSelect($name, $Provincias, $valorDefecto='')
{
		
	$html="\n".'<select  class="form-control" name="'.$name.'">';
	foreach($Provincias as $value=>$text)
	{
		if ($value==$valorDefecto)
			$select='selected="selected"';
		else
			$select="";
			$html.= "\n\t<option  value=\"$value\" $select>$text</option>";
	}
		$html.="\n</select>";
	
	return $html;
}



function VP($nombreCampo, $valorporDefecto='') 
{
	if (isset($_POST[$nombreCampo])) 
	{
		return $_POST[$nombreCampo];
	}
	else 
	{
		return $valorporDefecto;
	}
}

