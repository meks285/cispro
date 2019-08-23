<?php
//load the database configuration file
include 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    $csvMimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            //fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether patient already exists in database with same pepid
                $prevQuery = "SELECT pepid FROM migration_data WHERE pepid = '".$line[0]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows < 1){
                    
                    //insert patient data into database
                    $db->query("INSERT INTO `migration_data`(`pepid`, `hospitalid`, `sex`, `age`, `AgeMonths`, `ARTStartDate`, `LastVisitDate`, `MonthsofARVRefill`, `RegimenatARTStart`, `RegimenLineatARTStart`, `CurrentRegimen`, `CurrentRegimenLine`, `pregyn`, `v_load`, `lab_date`)
								VALUES('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."',STR_TO_DATE('".$line[5]."','%m/%d/%Y'),STR_TO_DATE('".$line[6]."','%m/%d/%Y'),'".$line[7]."','".$line[8]."','".$line[9]."','".$line[10]."','".$line[11]."','".$line[12]."','".$line[13]."',STR_TO_DATE('".$line[14]."','%m/%d/%Y'))");
                }else{
				//update patient data
				}
            }
            
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
header("Location: index.php".$qstring);