<title>Processing_Insert_main</title>
</head>

<body>

<?php
// =============== code for Connection_SQLi ==============================      

$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
//check connection
if(mysqli_connect_errno())
{
echo "Cannot connect to mysqli:" . mysqli_connect_error();
}

// =============== code for Submit_input type ================================

    if(!mysqli_query($con,"INSERT INTO pharmacy (pepid, visitdate, patienttype,visittype, pregyn,refillyn,subswitch,tbdrug,tbqty,tbduration,oidrug,oiqty,oiduration,quantitydisp,dispensedate,
otherdrugs,otherquantity,otherduration,orderedby,orderdate,dispensedby,pharmdispensedate,pickedupby,pickupdate,counseledby,counseldate,errordrugname,errornature,
errorconsequence,errorrepdate, drugcode)
VALUES
('$_POST[pepid]','$_POST[visitdate]','$_POST[patienttype]','$_POST[visittype]','$_POST[pregyn]','$_POST[refillyn]',
'$_POST[subswitch]','$_POST[tbdrug]',
'$_POST[tbqty]','$_POST[tbduration]','$_POST[oidrug]','$_POST[oiqty]','$_POST[oiduration]','$_POST[quantitydisp]','$_POST[dispensedate]',
'$_POST[otherdrugs]','$_POST[otherquantity]','$_POST[otherduration]','$_POST[orderedby]','$_POST[orderdate]','$_POST[dispensedby]','$_POST[pharmdispensedate]','$_POST[pickedupby]',
'$_POST[pickupdate]','$_POST[counseledby]','$_POST[counseldate]','$_POST[errordrugname]','$_POST[errornature]','$_POST[errorconsequence]','$_POST[errorrepdate]','$_POST[drugcode1]'),('$_POST[pepid]','$_POST[visitdate]','$_POST[patienttype]','$_POST[visittype]','$_POST[pregyn]','$_POST[refillyn]',
'$_POST[subswitch]','$_POST[tbdrug]',
'$_POST[tbqty]','$_POST[tbduration]','$_POST[oidrug]','$_POST[oiqty]','$_POST[oiduration]','$_POST[quantitydisp]','$_POST[dispensedate]',
'$_POST[otherdrugs]','$_POST[otherquantity]','$_POST[otherduration]','$_POST[orderedby]','$_POST[orderdate]','$_POST[dispensedby]','$_POST[pharmdispensedate]','$_POST[pickedupby]',
'$_POST[pickupdate]','$_POST[counseledby]','$_POST[counseldate]','$_POST[errordrugname]','$_POST[errornature]','$_POST[errorconsequence]','$_POST[errorrepdate]','$_POST[drugcode2]'),('$_POST[pepid]','$_POST[visitdate]','$_POST[patienttype]','$_POST[visittype]','$_POST[pregyn]','$_POST[refillyn]',
'$_POST[subswitch]','$_POST[tbdrug]',
'$_POST[tbqty]','$_POST[tbduration]','$_POST[oidrug]','$_POST[oiqty]','$_POST[oiduration]','$_POST[quantitydisp]','$_POST[dispensedate]',
'$_POST[otherdrugs]','$_POST[otherquantity]','$_POST[otherduration]','$_POST[orderedby]','$_POST[orderdate]','$_POST[dispensedby]','$_POST[pharmdispensedate]','$_POST[pickedupby]',
'$_POST[pickupdate]','$_POST[counseledby]','$_POST[counseldate]','$_POST[errordrugname]','$_POST[errornature]','$_POST[errorconsequence]','$_POST[errorrepdate]','$_POST[drugcode3]')"))

    {
        echo "Not Recorded".mysqli_error($con);
    }
header('Location: ./patpharmview.php');

     //============================================================

   ?>
   <?php if(!mysqli_query($con,"delete from pharmacy where drugcode='' and oidrug='' and tbdrug='' and otherdrugs=''")) ?>
   <?php if(!mysqli_query($con,"insert into visit(visittype,visitdate,pepid) values('Pharmacy Order','$_POST[visitdate]','$_POST[pepid]')")) ?>
   </body>
   </html>