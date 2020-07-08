<?php //******************************************************************** ?>
<?php function page_includes() { ?> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/favicon.ico">
<link href="style.css?v=3" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="bower_components/jquery-ui/themes/base/jquery-ui.min.css" />
<script src='bower_components/jquery/dist/jquery.min.js'></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>


<?php } ?>
<?php //******************************************************************** ?>
<?php function page_header($subtitle) { 
   // Note: $subtitle n'est pas utilisé pour l'instant;  // echo $subtitle; 
?> 

<a name="top" id="top"></a>
<div id="header">
   <table style="width:100%">
      <tr>
         <td style="width:10%"><img src="img/Herman_von_Umsprung.png" style="height:100px; padding-top:5px; padding-right: 10px;"></td>
         <td>
            <h1 id="page-title"><a href="index.php">Colonel Herman Von Umsprung</a></h1>
            <h2></h2> 
             <?php?>
         </td>
      </tr>
   </table>
</div>

<?php } ?>
<?php //******************************************************************** ?>
<?php function page_footer() { ?>

<br/>
<br/><br/>

<?php } ?>
