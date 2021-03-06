<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="description" CONTENT="Music, Folk, Tim Watson">
<META NAME="author" CONTENT="James Hood">
<META NAME="ROBOTS" CONTENT="ALL">
<title>The Music of Timothy Watson</title>
<link rel="stylesheet" type="text/css" href="design.php" />
<script type="text/javascript" src="swfobject.js"></script>
<script src="http://www.gstatic.com/swiffy/v3.6/runtime.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
<!--

function validate_form ( )
{
    valid = true;

    if ( document.contact_form.name.value == "" )
    {
        alert ( "Please fill in the 'Name' box." );
        valid = false;
    }
	    if ( document.contact_form.email.value == "" )
    {
        alert ( "Please fill in the 'Email' box." );
        valid = false;
    }
	    if ( document.contact_form.subject.value == "" )
    {
        alert ( "Please fill in the 'Subject' box." );
        valid = false;
    }
	    if ( document.contact_form.message.value == "" )
    {
        alert ( "Please fill in the 'Message' box." );
        valid = false;
    }

    return valid;
}

//-->
</script>
<link rel="stylesheet" type="text/css" href="css/mp3-player-button.css" />

<!-- soundManager.useFlashBlock: related CSS -->

<link rel="stylesheet" type="text/css" href="demo/flashblock/flashblock.css" />

<script type="text/javascript" src="script/soundmanager2.js"></script>

<script type="text/javascript" src="script/mp3-player-button.js"></script>

<script>

soundManager.useFlashBlock = true; // optional - if used, required flashblock.css

soundManager.url = 'swf/'; // required: path to directory containing SM2 SWF files

soundManager.debugMode = false

</script>

</head>
<body>
<div id="wrap">

<div id="header">

        <?php 
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {



?> 

<?php include("menu.php");?>



<?php  } 

else {  ?>


<div class="lcr"><a href="index.php?action=home"><img src="images/menu/LCR.png" width="767" height="104"></a></div>
<div class="home"><a href="index.php?action=home"><img src="images/menu/home.png" width="192" height="97"></a></div>
<div class="music"><a href="musicplayer2.php"><img src="images/menu/music.png" width="192" height="139"></a></div>
<div class="photos"><a href="gallery.php"><img src="images/menu/photos.png" width="205" height="139"></a></div>
<div class="shop"><a href="shop.php"><img src="images/menu/shop.png" width="181" height="139"></a></div>
<div class="contact"><a href="index.php?action=contact"><img src="images/menu/contact.png" width="226" height="139"></a></div>
<div class="links"><a href="index.php?action=links"><img src="images/menu/links.png" width="177" height="139"></a></div>
<br />
</div>


<?php  } ?>