<?php

/**
 * Return html form by definition
 * 
 * @param array $formDefinition
 * @param array $data 
 * @param string $action
 * @param string $method
 * @return string
 * 
 */

function renderForm($formDefinition, $action, $method='post', $data = array())
{
    //Crear string Html
    //primero construir el form
	$html = "<form method=\"".$method."\" action=\"".$action."\">"."\n";
    $html.="<ul>";
    //recorrer $formDefinition
    foreach ($formDefinition as $key => $value) {
        //Segun el tipo de formulario que recorre lo dibuja 
        //*cada vuelta movemos tambien una posicion el puntero de $data[] para escribir el valor que necesitamos
    	switch($value['type']) {
    	    //dibujar tipo ->nombre=$key,valor=current($data)
    	    case 'hidden':
    	             $html .="<input type=\"hidden\" name=\"".$key."\" value=\"".$data['id']."\">";  
    	        break;
    		case 'text':
    		    $html.="<li>";
    			$html .= "<label>".$value['label']."</label>"."\n";
    			$html .= "<input type=\"text\" name=\"".$key."\" value=\"".current($data)."\" >"."\n";
    			$html.="</li>";
    	    break;
    	    
    	    case 'radio':
    	        $html.="<li>";
    	        $html .= "<label>".$value['label']."</label><br />";
    	        //necesitamos un formulario hidden porque si no se selecciona nada el submit no envia los valores de los radios
    	        //$html .="<input type=\"hidden\" name=\"".$key."\" value=\"\">";
    	        //recorremos las opciones para dibujarlas
    	        foreach($value['options'] as $key2 => $value2)
    	        {   
                    //comprobamos si es un update
    	            if(empty($_GET)=="")
    	            {   
    	                //si es un update seleccionamos los valores antiguos
    	                if(current($data)==$value2)
    	                {
    	                   $html .= "<input type=\"radio\" name=\"".$key."\" value=\"".current($data)."\" checked>";
    	                   $html .= $key2."<br />"."\n";
    	                }
    	                else
    	                {
    	                    $html .= "<input type=\"radio\" name=\"".$key."\" value=\"".$value2."\">";
    	                    $html .= $key2."<br />"."\n";
    	                }
    	            }
    	            //si no es un update comprobamos si es una opcion por defecto para seleccionarla
    	            elseif ($key2 == 'default_option')
    	            {
    	                $html .= "<input type=\"radio\" name=\"".$key."\" value=\"".$value2."\" checked>";
    	                $html .= $key2."<br />"."\n";
    	            }
    	            else
    	            {
    	                $html .= "<input type=\"radio\" name=\"".$key."\" value=\"".$value2."\">";
    	                $html .= $key2."<br />"."\n";
    	            }
    	    		
    	        }
    	        $html.="</li>";
    	        break;

    		case 'password':
    		    $html.="<li>";
        		    $html .= "<label>".$value['label']."</label>";
        			$html .= "<input type='password' name=\"".$key."\" value=\"".current($data)."\" />"."\n";
    			$html.="</li>";
    			break;
    		case 'textarea':
    		    $html.="<li>";
    			$html .= "<label>".$value['label']."</label>"."\n";
    			$html .= "<textarea name=\"".$key."\" >".current($data)."</textarea>"."\n";
    			$html.="</li>";
    			break;
    		case 'email':
    		    $html.="<li>";
    			$html .= "<label>".$value['label']."</label>";
    			$html .= "<input type=\"email\" name=\"".$key."\" value=\"".current($data)."\" />"."\n";
    			$html.="</li>";
    			break;
            
            case 'date':
                $html.="<li>";
    			$html .= "<label>".$value['label']."</label>";
    			
    			$html .= "<input type=\"date\" name=\"".$key."\" value=\"".current($data)."\" />"."\n";
    			$html.="</li>";
    			break;
    		
    		case 'checkbox':
    			$html.="<li>";
    			$html .= "<label>".$value['label']."</label><br />";
    			//necesitamos un formulario hidden porque si no se selecciona nada el submit no envia los valores de los checkbox  
    			//$html .="<input type=\"hidden\" name=\"".$key."[]"."\" value=\"\">";
    			$stringdata=current($data);
    			//necesitamos extraer las opciones entre las /
    			$data2=explode("|", $stringdata);
    			    //recorremos las opciones para dibujarlas
    			    foreach($value['options'] as $key2 => $value2)
    			    {
    			        //comprobamos si es un update
    			        if(empty($_GET)=="")
    			        {   
    			            //si es un update seleccionamos los valores antiguos
    			            if(current($data2)==$value2)
    			            {
    			                $html .= "<input type=\"checkbox\" name=\"".$key."[]"."\" value=\"".current($data2)."\" checked>";
    			                $html .= $key2."<br />"."\n";
    			                next($data2);
    			            }
    			            else
    			            {
    			                $html .= "<input type=\"checkbox\" name=\"".$key."[]"."\" value=\"".$value2."\">";
    			                $html .= $key2."<br />"."\n";
    			            }
    			        }
    			        //si no es un update comprobamos si es una opcion por defecto para seleccionarla
    			        elseif ($key2 == 'default_option')
    			        {
    			            $html .= "<input type=\"checkbox\" name=\"".$key."[]"."\" value=\"".current($data)."\" checked>";
    			            $html .= $key2."<br />"."\n";
    			        }
    			        else
    			        {
    			            $html .= "<input type=\"checkbox\" name=\"".$key."[]"."\" value=\"".$value2."\">";
    			            $html .= $key2."<br />"."\n";
    			        }
    			        
    			         
    			    }
    			    $html.="</li>";
    			    break;
    	    
    		case 'select':
    			 $html.="<li>";
    			 $html .= "<label>".$value['label']."</label><br />";
    			 $html .="<select name=\"".$key."\"><br />";
    			    foreach($value['options'] as $key2 => $value2)
    			    {
    			        //recorremos las opciones para dibujarlas
    			        if(empty($_GET)=="")
    			        {
    			            //comprobamos si es un update
    			            if(current($data)==$value2)
    			            {   
    			                $html .= "<option value=\"".$value2."\"selected=\"selected\">";
    			                $html .= $key2."</option><br />"."\n";
    			            }
    			            else
    			            {
    			                $html .= "<option value=\"".$value2."\">";
    			                $html .= $key2."</option><br />"."\n";
    			            }
    			        }
    			        //si no es un update vemos si hay opciones por defecto
    			        elseif ($key2 == 'default_option')
    			        {
    			            $html .= "<option value=\"".$value2."\"selected=\"selected\">";
    			            $html .= $key2."</option><br />"."\n";
    			        }
    			        else
    			        {
    			            $html .= "<option value=\"".$value2."\">";
    			            $html .= $key2."</option><br />"."\n";
    			        }
    			         
    			    }
    			     $html.="</select></li>";
    			     break;
    	   case 'selectmultiple':
    			 $html.="<li>";
    			 $html .= "<label>".$value['label']."</label><br />";
    			 //necesitamos un formulario hidden porque si no se selecciona nada el submit no envia los valores de los select multiple
    			 //$html .="<input type=\"hidden\" name=\"".$key."[]"."\" value=\"\">";
    			 $html .="<select multiple name=\"".$key."[]"."\"><br />";
    			 $stringdata=current($data);
    			 //necesitamos extraer las opciones entre las /
    			 $data2=explode("|", $stringdata);
    			    foreach($value['options'] as $key2 => $value2)
    			    {
    			        
    			        
    			        //si es un update seleccionamos los valores antiguos
    			         if(empty($_GET)=="")
    			         {
    			                 //Los + S_GET los convierte en espacios,hay que volver a convertirlos en +(c++)
    			                 $selectedOption=str_replace(" ","+",current($data2));
    			                 //si es un update seleccionamos los valores antiguos
    			                 if($selectedOption==$value2)
    			                 {
    			                    $html .= "<option value=\"".$value2."\"selected=\"selected\" >";
    			                    $html .= $key2."</option><br />"."\n";
    			                    next($data2);
    			                    
    			                    
    			                 }
    			                 else
    			                 {
    			                     $html .= "<option value=\"".$value2."\">";
    			                     $html .= $key2."</option><br />"."\n";
    			                     
    			                 }
    			                 
    			              
    			         }  
    			        //si no es un update comprobamos si es una opcion por defecto para seleccionarla
    			        elseif ($key2== 'default_option')
    			        {
    			            $html .= "<option value=\"".$value2."\"selected=\"selected\" >";
    			            $html .= $key2."</option><br />"."\n";
    			        }
    			        else
    			        {
    			                 $html .= "<option value=\"".$value2."\">";
    			                 $html .= $key2."</option><br />"."\n";
    			        } 
    			     }
    			    
    			     $html.="</select></li>";
    			     break;
    		case 'submit':
    		     //necesitamos un boton para enviar los datos a procesa.php
    			 $html.="<input type=\"submit\" name=\"".$value2."\"/>"."\n";
    			 break;
               
                 
    			
    		
    	}  
    	       //nos movemos una posicion dentro del array $data
    	       next($data);

    }
    $html.="</ul>";
    $html .= "</form>";
    return $html;
}