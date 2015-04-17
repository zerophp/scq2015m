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

function renderForm($formDefinition, $action, $method='post', $data = null)
{
   
	$html = "<form method=\"".$method."\" action=\"".$action."\">"."\n";
    $html.="<ul>";
    foreach ($formDefinition as $key => $value) {

    	switch($value['type']) {
    		case 'text':
    		    $html.="<li>";
    			$html .= "<label>".$value['label']."</label>"."\n";
    			$html .= "<input type=\"text\" name=\"".$key."\" value=\"\" >"."\n";
    			$html.="</li>";
    	    break;
    	    
    	    case 'radio':
    	        $html.="<li>";
    	        $html .= "<label>".$value['label']."</label><br />";
    	        foreach($value['options'] as $key2 => $value2)
    	        {
    	    		$html .= "<input type=\"radio\" name=\"".$key."\" value=\"".$value2."\">";
    				$html .= $key2."<br />"."\n";
    	        }
    	        $html.="</li>";
    	        break;
    	        
    		case 'radio2':
    		    $html.="<li>";
    			$html .= "<label>".$value['label']."</label><br />";
    			foreach($value['options'] as $key2 => $value2) 
    			{

    				$html .= "<input type=\"radio\" name=\"".$key."\" value=\"".$value2."\">".$key2."<";
    				if ($key2 == 'default_option') {
    					$html .= "checked";
    				}

    				$html .= "/><br />"."\n";
    			}
    			$html.="</li>";
    			break;
    		case 'password':
    		    $html.="<li>";
        		    $html .= "<label>".$value['label']."</label>";
        			$html .= "<input type='password' name=\"".$key."\" value=\"\" />"."\n";
    			$html.="</li>";
    			break;
    		case 'textarea':
    		    $html.="<li>";
    			$html .= "<label>".$value['label']."</label>"."\n";
    			$html .= "<textarea name=\"".$key."\" ></textarea>"."\n";
    			$html.="</li>";
    			break;
    		case 'email':
    		    $html.="<li>";
    			$html .= "<label>".$value['label']."</label>";
    			$html .= "<input type=\"email\" name=\"".$key."\" value=\"\" />"."\n";
    			$html.="</li>";
    			break;
            case 'submit':
                $html.="<input type=\"submit\" name=\"submit\"/>"."\n";    		    	
            break;
    			
    		
    	}
    }
    $html.="</ul>";
    $html .= "</form>";
    return $html;
}