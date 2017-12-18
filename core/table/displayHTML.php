<?php
namespace table;

class displayHTML{
    public static function genarateTableFromMultiArray($array)
    {
        if(!empty($array)) {
            $tableGen = '<table border="2" cellpadding="10">';
            $tableGen .= '<tr>';
            $fieldHeadings = $array[0];
            $fieldHeadings = get_object_vars($fieldHeadings);
            $fieldHeadings = array_keys($fieldHeadings);
            $referingPage = $_REQUEST['page'];
            foreach ($fieldHeadings as $heading) {
                $tableGen .= '<th>' . $heading . '</th>';
            }
            $tableGen .= '</tr>';
            foreach ($array as $record) {
                $tableGen .= '<tr>';
                foreach ($record as $key => $value) {
                    if ($key == 'id') {
                        $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                    } else {
                        $tableGen .= '<td>' . $value . '</td>';
                    }
                }
                $tableGen .= '</tr>';
            }
            $tableGen .= '</table>';
            return $tableGen;
        }
    }
    public static function generateTableFromOneRecord($innerArray)
    {
            if(get_class($innerArray)=='account'){
            if($innerArray->password){
                unset($innerArray->password);
            }
            }
        $tableGen = '<table border="2" cellpadding="10"><tr>';
        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }
        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
    public static function accountValues($innerArray)
	{
    		$Html ="<p>User Name: <strong>" . $innerArray['username'] ."</strong><br>";
		    $Html .="<p>First Name: <strong>" . $innerArray['fname'] ."</strong><br>";
    		$Html .="<p>Last Name: <strong>" . $innerArray['lname'] ."</strong><br>";
		    $Html .="<p>Email: <strong>" . $innerArray['email'] ."</strong><br>";
			return $Html;
		
	}
}
?>
  
