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
    foreach ($formDefinition as $k => $v) {

    	switch($v['type']) {
    		case 'text':
    		    $html.="<li>";
    			$html .= "<label>".$v['label']."</label>"."\n";
    			$html .= "<input type='text' name=\"".$k."\" value='' />"."\n";
    			$html.="</li>";
    	    break;
    		case 'radio':
    			$html .= "<label>".$v['label']."</label><br />";
    			foreach($v['options'] as $k2 => $v2) 
    			{

    				$html .= "<input type='radio' name=\"".$k."\" value='".$v2."'>".$k2."<";
    				if ($k2 == 'default_option') {
    					$html .= "checked";
    				}

    				$html .= "/><br />"."\n";    			
    			}
    			
    			break;
    		case 'password':
    		    $html.="<li>";
        		    $html .= "<label>".$v['label']."</label>";
        			$html .= "<input type='password' name=\"".$k."\" value='' />"."\n";
    			$html.="</li>";
    			break;
    		case 'textarea':
    			$html .= "<label>".$v['label']."</label>"."\n";
    			$html .= "<textarea name=\"".$k."\" ></textarea>"."\n";
    			break;
    		case 'email':
    			$html .= "<label>".$v['label']."</label>";
    			$html .= "<input type='email' name=\"".$k."\" value='' />"."\n";
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