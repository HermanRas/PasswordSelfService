<?php

function GenMD5Hash($StartNum,$EndNumb){
    $NumberSet = Array();

    while ($StartNum < $EndNumb){
    $NumberSet[$StartNum] = md5($StartNum);
    $StartNum++;
    }
return $NumberSet;
};

//DO CDM
//echo json_encode(GenMD5Hash(50000000,5000500));
//DO FIN
//echo json_encode(GenMD5Hash(20000000,2000500));
//DO KEM
//echo json_encode(GenMD5Hash(30000000,3000500));
//DO PHQ
//echo json_encode(GenMD5Hash(10000000,1000500));
//DO KOF
//echo json_encode(GenMD5Hash(40000000,4000500));

//Single Unit
//echo json_encode(GenMD5Hash(10000106,1000106));