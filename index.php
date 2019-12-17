<?
session_start();
include "info.php";
	mysql_connect( $dbHost,$dbUser,$dbPass ) or die("Error ! Non connect BD"); // eiiiaeo e AA
	mysql_query('SET NAMES cp1251');
	mysql_select_db($dbName); // auai? AA


//������������ ����������
  	$id1 =  $_REQUEST['id1']; $id1 =strip_tags($id1);
  	$id2 =  $_REQUEST['id2']; $id2 =strip_tags($id2);
  	$id3 =  $_REQUEST['id3']; $id3 =strip_tags($id3);
  	$id4 =  $_REQUEST['id4']; $id4 =strip_tags($id4);

//�����������
$query = 'SELECT * FROM `1` WHERE `kod` = "'.$id1.'"';
$res = mysql_query($query) or die("������ ! ������ ��������� ������ ������������");
//��������  �� ������������ �������
	if (!mysql_num_rows($res) > 0 )
	{	//��������� ������� ���������
		$id1=encode2($id1,$Pass);
	}

//�����������
//	$id3=encode2($id3,$Pass);

	if (empty($id1))  {$id1='non';}
	if (empty($id2))  {$id2='non';}
	if (empty($id3))  {$id3='2014-01-01';}
	if (empty($id4))  {$id4='non';}

//$_SESSION['url']="http://".$_SERVER['SERVER_NAME']."?id1=".encode2($id1,$Pass)."&id2=".encode2($id2,$Pass)."&id3=".encode2($id3,$Pass);
$_SESSION['url']="http://".$_SERVER['SERVER_NAME']."?id1=".encode2($id1,$Pass)."&id2=".$id2."&id3=".$id3;



//include "debag.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<meta name="mailru-verification" content="cbffd5dcdee84cd2" />
<title>POSM  в</title>


</head>





<!--<link rel="stylesheet" type="text/css" href="http://sity812.ru/menunew/css/demo.css" />-->
<!--<link rel="stylesheet" type="text/css" href="http://sity812.ru/menunew/css/style1.css" />-->


<link rel="stylesheet" type="text/css" href="css/1.css" />
<!--<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<!--���������� ��������-->
<!--https://daneden.me/animate/-->
<script type="text/javascript" src="css/animate.css"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link  rel="icon" href="img/strkd.png" type="image/png">
<script>
$(function() {

 $('#navigation a').stop().animate({'marginLeft':'-85px'},3000);

 $('#navigation > li').hover(
  function () {
   $('a',$(this)).stop().animate({'marginLeft':'-2px'},500);
  },
  function () {
   $('a',$(this)).stop().animate({'marginLeft':'-85px'},500);
  }
 );
});
</script>
<!--<script>
	$(document).ready(function() {

		$('#navigation > li').hover(
  			function () {
  				 $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
  			},
  			function () {
   				$('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
  			}
 );

		});
</script>
-->

<body>
    <div id="header">
     </div>
			<!--<section class="main">-->
				<!--<img src="/img/star_kids.png" width="150" height="56" />-->
              <!--  <<!--center><h1>8-800-700-81-28 ���������� ������ LV</h1></center>-->
           <!--</section> -->
    </div>

            <div id="container">
                    <div id="content" class="column">
                        <? include "start.php"; ?>
                    </div>
                    <div id="left" class="column">

                                        <ul  class="ca-menu">
                                            <li>
                                                <a href="<? echo $_SESSION['url']."&id4=3"; ?>">
                                                    <span class="ca-icon">&#73;</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">����������</h2>
                                                        <h3 class="ca-sub">������ ��������</h3>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<? echo $_SESSION['url']."&id4=2"; ?>">
                                                    <span class="ca-icon">&#178;</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">��������</h2>
                                                        <h3 class="ca-sub">������ ������</h3>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="ca-icon">&#76;</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">�����</h2>
                                                        <h3 class="ca-sub">����� ������</h3>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<? echo $_SESSION['url']."&id4=1"; ?>">
                                                    <span class="ca-icon">&#64;</span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">�����</h2>
                                                        <h3 class="ca-sub">�������� ���</h3>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                    </div>

                    <div id="right" class="column"></div>
            </div>

    <div id="footer">
        <center>
                <img style="vertical-align: middle" src="img/flash_POSM_16-02-15.png" alt="POSM" width="25" height="25" />
                All rights reserved 2015  POSM v2.
         </center>
     </div>
</body>
</html>
<? mysql_close(); // ioee??aiea io AA ?>
