						<style>
	.qrcode{
		height:100px;
		width:100px;
	}
</style>

<table class="voucher" style=" width: 180px;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <td style="text-align: center; font-size: 14px; font-weight:bold;"><img src="<?= $logo; ?>" alt="logo" style="height:44px;border:0;"></td>
    </tr>
    <tr>
      <td style="text-align: center; font-size: 14px; font-weight:bold; border-bottom: 1px black solid;"><?= $hotspotname; ?><br><?= date("Y-m-d h:i:sa") ?></td>
    </tr>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 170px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if ($usermode == "vc") { ?>
        <tr>
          <td font-size: 12px;>Username and Password</td>
        </tr>
        <tr>
          <td style="width:100%; border: 1px solid black; font-weight:bold; font-size:16px;"><?= $username; ?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php 
} elseif ($usermode == "up") { ?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 14px;">
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
} ?>
<!-- /  -->
    </tr>
      </td>
<!-- QR Code    -->
<?php if ($qr == "yes") { ?>
      <td colspan="2">
	<?= $qrcode ?>
      </td>
      </tr>
<?php 
} ?>

<!-- /  -->
<?php if($timelimit == 0){?>
           <tr>
			   <td colspan="2" style="border-top: 1px solid black;font-weight:bold; font-size:16px">Exp:<?= $validity; ?> Price: <?= $price; ?></td>
			
<?php }else{?>
		  <tr>
			   <td colspan="2" style="border-top: 1px solid black;font-weight:bold; font-size:16px">Exp:<?= $validity; ?> Limit:<?= $timelimit; ?> Price: <?= $price; ?></td>
		  	
<?php 
}?>		

<!-- /  -->
    </tr>
    <tr>
      <!-- Note  -->
      <td colspan="2" style="font-weight:bold; font-size:12px">Login: http://<?= $dnsname; ?></td>
<!-- /  -->
    </tr>
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>
	        	        	        	        