<?php
//if we got something through $_POST
if (isset($_POST['search']) && ($_POST['search']=='January'||$_POST['search']=='February'||$_POST['search']=='March'||$_POST['search']=='April'||$_POST['search']=='May'||$_POST['search']=='June'||$_POST['search']=='July'||$_POST['search']=='August'||$_POST['search']=='September'||$_POST['search']=='October'||$_POST['search']=='November'||$_POST['search']=='December') || isset($_POST['search']) && ($_POST['search']=='january'||$_POST['search']=='february'||$_POST['search']=='march'||$_POST['search']=='april'||$_POST['search']=='may'||$_POST['search']=='june'||$_POST['search']=='july'||$_POST['search']=='august'||$_POST['search']=='september'||$_POST['search']=='october'||$_POST['search']=='november'||$_POST['search']=='december')) {
    // here you would normally include some database connection
    include('db.php');
    $db = new db();
    // never trust what user wrote! We must ALWAYS sanitize user input
    $word = mysql_real_escape_string($_POST['search']);
    $word = htmlentities($word);
    // build your search query to the database
    $sql = "SELECT facilityid,rfacility,rmonth,ryear,ind1,ind2,ind3,ind4,ind5,ind6,ind7,ind8,ind9,ind10,ind11,ind12,ind13,ind14,ind15 FROM indicators WHERE lower(rmonth) LIKE lower('%" . $word . "%') ORDER BY rfacility LIMIT 10";
    // get results
    $row = $db->select_list($sql);
    if(count($row)) {
        $end_result = '';
        foreach($row as $r) {
            $result         =  "<br />Facility: ".$r['rfacility']."<br /> Month: ".$r['rmonth']."<br /> Year: ".$r['ryear']."<br />"."<br /> INDICATORS"."<br /> 1.) Individuals HIV CTR: ".$r['ind1']."<br /> 2.) Individuals tested HIV+: ".$r['ind2']."<br /> 3.) Individuals who received SRH/HIV services: ".$r['ind3']."<br /> 4.) New ANC clients: ".$r['ind4']."<br /> 5.) Pregnant women HIV CTR (ANC): ".$r['ind5']."<br /> 6.) Pregnant women HIV CTR (L&D): ".$r['ind6']."<br /> 7.) Women HIV CTR (Post-Partum): ".$r['ind7']."<br /> 8.) Pregnant women tested + (ANC): ".$r['ind8']."<br /> 9.) Pregnant women tested + (L&D): ".$r['ind9']."<br /> 10.) Women tested + (Post-Partum): ".$r['ind10']."<br /> 11.) Pregnant women received triple ARVs: ".$r['ind11']."<br /> 12.) Infants born to HIV+ mothers: ".$r['ind12']."<br /> 13.) Exposed infants who received DNA PCR: ".$r['ind13']."<br /> 14.) Exposed infants who received dNVP+6weeks: ".$r['ind14']."<br /> 15.) Exposed infants DNA PCR +: ".$r['ind15'];
            // we will use this to bold the search word in result
            $bold           = '<span class="found">' . $word . '</span>';    
            $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';            
        }
        echo $end_result;
    } else {
        echo '<li>No results found</li>';
    }
}
elseif (isset($_POST['search']) && ($_POST['search']==2014) || $_POST['search']==2015) {
    // here you would normally include some database connection
    include('db.php');
    $db = new db();
    // never trust what user wrote! We must ALWAYS sanitize user input
    $word = mysql_real_escape_string($_POST['search']);
    $word = htmlentities($word);
    // build your search query to the database
    $sql = "SELECT facilityid,rfacility,rmonth,ryear,ind1,ind2,ind3,ind4,ind5,ind6,ind7,ind8,ind9,ind10,ind11,ind12,ind13,ind14,ind15 FROM indicators WHERE ryear LIKE '%" . $word . "%' ORDER BY rfacility LIMIT 10";
    // get results
    $row = $db->select_list($sql);
    if(count($row)) {
        $end_result = '';
        foreach($row as $r) {
            $result         =  "<br />Facility: ".$r['rfacility']."<br /> Month: ".$r['rmonth']."<br /> Year: ".$r['ryear']."<br />"."<br /> INDICATORS"."<br /> 1.) Individuals HIV CTR: ".$r['ind1']."<br /> 2.) Individuals tested HIV+: ".$r['ind2']."<br /> 3.) Individuals who received SRH/HIV services: ".$r['ind3']."<br /> 4.) New ANC clients: ".$r['ind4']."<br /> 5.) Pregnant women HIV CTR (ANC): ".$r['ind5']."<br /> 6.) Pregnant women HIV CTR (L&D): ".$r['ind6']."<br /> 7.) Women HIV CTR (Post-Partum): ".$r['ind7']."<br /> 8.) Pregnant women tested + (ANC): ".$r['ind8']."<br /> 9.) Pregnant women tested + (L&D): ".$r['ind9']."<br /> 10.) Women tested + (Post-Partum): ".$r['ind10']."<br /> 11.) Pregnant women received triple ARVs: ".$r['ind11']."<br /> 12.) Infants born to HIV+ mothers: ".$r['ind12']."<br /> 13.) Exposed infants who received DNA PCR: ".$r['ind13']."<br /> 14.) Exposed infants who received dNVP+6weeks: ".$r['ind14']."<br /> 15.) Exposed infants DNA PCR +: ".$r['ind15'];
            // we will use this to bold the search word in result
            $bold           = '<span class="found">' . $word . '</span>';    
            $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';            
        }
        echo $end_result;
    } else {
        echo '<li>No results found</li>';
    }
}
elseif (isset($_POST['search'])) {
    // here you would normally include some database connection
    include('db.php');
    $db = new db();
    // never trust what user wrote! We must ALWAYS sanitize user input
    $word = mysql_real_escape_string($_POST['search']);
    $word = htmlentities($word);
    // build your search query to the database
    $sql = "SELECT facilityid,rfacility,rmonth,ryear,ind1,ind2,ind3,ind4,ind5,ind6,ind7,ind8,ind9,ind10,ind11,ind12,ind13,ind14,ind15 FROM indicators WHERE rfacility LIKE '%" . $word . "%' ORDER BY rfacility LIMIT 10";
    // get results
    $row = $db->select_list($sql);
    if(count($row)) {
        $end_result = '';
        foreach($row as $r) {
            $result         =  "<br />Facility: ".$r['rfacility']."<br /> Month: ".$r['rmonth']."<br /> Year: ".$r['ryear']."<br />"."<br /> INDICATORS"."<br /> 1.) Individuals HIV CTR: ".$r['ind1']."<br /> 2.) Individuals tested HIV+: ".$r['ind2']."<br /> 3.) Individuals who received SRH/HIV services: ".$r['ind3']."<br /> 4.) New ANC clients: ".$r['ind4']."<br /> 5.) Pregnant women HIV CTR (ANC): ".$r['ind5']."<br /> 6.) Pregnant women HIV CTR (L&D): ".$r['ind6']."<br /> 7.) Women HIV CTR (Post-Partum): ".$r['ind7']."<br /> 8.) Pregnant women tested + (ANC): ".$r['ind8']."<br /> 9.) Pregnant women tested + (L&D): ".$r['ind9']."<br /> 10.) Women tested + (Post-Partum): ".$r['ind10']."<br /> 11.) Pregnant women received triple ARVs: ".$r['ind11']."<br /> 12.) Infants born to HIV+ mothers: ".$r['ind12']."<br /> 13.) Exposed infants who received DNA PCR: ".$r['ind13']."<br /> 14.) Exposed infants who received dNVP+6weeks: ".$r['ind14']."<br /> 15.) Exposed infants DNA PCR +: ".$r['ind15'];
            // we will use this to bold the search word in result
            $bold           = '<span class="found">' . $word . '</span>';    
            $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';            
        }
        echo $end_result;
    } else {
        echo '<li>No results found</li>';
    }
}
?>