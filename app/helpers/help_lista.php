<?php

function EscribeOferta($ofertas) {
    foreach ($ofertas as $key => $oferta) 
    {

        echo '<tr>'; //Inicio fila
       	    echo '<td>'.$oferta['cod'].'</td>';
        	echo '<td>'.$oferta['descripcion'].'</td>';
        	echo '<td>'.$oferta['persona'].'</td>';
        	echo '<td>'.$oferta['telefono'].'</td>';
        	echo '<td>'.$oferta['email'].'</td>';
        	echo '<td>'.$oferta['direccion'].'</td>';
        	echo '<td>'.$oferta['poblacion'].'</td>';
        	echo '<td>'.$oferta['codigo_p'].'</td>';
        	echo '<td>'.$oferta['estado'].'</td>';
        	echo '<td>'.$oferta['provincia'].'</td>';
        	echo '<td>'.$oferta['fecha_creacion'].'</td>';
        	echo '<td>'.$oferta['fecha_comunicacion'].'</td>';
       
        echo '</tr>'; //Fin fila
    }
}

