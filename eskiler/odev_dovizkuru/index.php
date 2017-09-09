<?php
$adres = "http://www.tcmb.gov.tr/yeni/tablolar.php";
$kaynak = file_get_contents($adres);

$kurlar = '#<td class=\"degerler\" >(.*?)</td>#si';
preg_match_all($kurlar,$kaynak,$kur);

// dolar alış - satış
$d_alis = $kur[1][0];
$d_satis = $kur[1][1];
//euro alış - satış
$e_alis = $kur[1][2];
$e_satis = $kur[1][3];

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<style type="text/css">

.tablo{
font-family:Arial, Helvetica, sans-serif;
position: absolute;
vertical-align:middle;
text-align:center;
top:0px;
}

table.veriler{
    border: 0px ridge #CEEFFF;
    background-color: #EFEFF7;
    color: #000000;
    font-size:11px;
    text-align:center;
    font-weight:bolder;
    margin: 0px;
    vertical-align: middle;
    padding: 0px;
    width: 18%;
    
}
tr.veriler{
    border: 0.3px  #CEEFFF;
    background-color: #FEEDD6;
    font-size:11px;

}
td.veriler{
    border: 0.3px #CEEFFF;
    background-color: #FFFFF7;
    font-size:11px;
    color:#444952;
        font-weight:normal;

}
td.baslik{
       background-image:url(http://www.tcmb.gov.tr/yeni/pictures/sagbaslikbg.gif);
    border: 0.3px #A72C31;
    font-size:12px;
    font-weight:bolder;
    text-align:left;
    color:#000000;
}

td.degerler{
        border: 0.3px #CEEFFF;
        background-color: #FFFFF7;
        font-size:11px;
        color:#444952;
        font-weight:normal;

}

img#money{
    border: 0px;
    width: 10px; 
    height: 16px;
    vertical-align: middle;
}
</style>
</head>

<body background="pictures/bgtest.gif" class="tablo">

<table class="veriler">
    <tr> 
    <td class="baslik" colspan="3">TCMB Döviz Kurları</td>
    </tr>
    <tr class="veriler">
    <td class="veriler" width=68px>Döviz</td>
    <td class="veriler" colspan="1">Döviz Alış</td>
    <td class="veriler" colspan="1">Döviz Satış</td>
    </tr>
    <tr class="veriler">
<td class="veriler"  align="left"><img id="money" src="http://www.tcmb.gov.tr/yeni/pictures/dollar.gif"> Dolar</td>
<td class="degerler" ><?= $d_alis;?></td>
<td class="degerler" ><?= $d_satis;?></td>
</tr>
<tr class="veriler">
<td class="veriler"  align="left"><img id="money" src="http://www.tcmb.gov.tr/yeni/pictures/euro.gif"> Euro</td>
<td class="degerler" ><?= $e_alis;?></td>
<td class="degerler" ><?= $e_satis;?></td>
</tr>
</table>
</body>         
</html>