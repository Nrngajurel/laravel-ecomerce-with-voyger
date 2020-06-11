<?php
require_once 'config.php';
?>
<p>See source HTML of this page to see sample form for eSewa payment.</p>
<form action = "<?php echo $esewa_url; ?>" method="POST">
<input value="20" name="tAmt" type="hidden">
<input value="10" name="amt" type="hidden">
<input value="5" name="txAmt" type="hidden">
<input value="2" name="psc" type="hidden">
<input value="3" name="pdc" type="hidden">
<input value="<?php echo $merchant_id; ?>" name="scd" type="hidden">
<input value="PRD-01" name="pid" type="hidden">
<input value="<?php echo $site_url; ?>success.php/?q=su" type="hidden" name="su">
<input value="<?php echo $site_url; ?>failure.php/?q=fu" type="hidden" name="fu">
<input value="Pay Now" type="submit">
</form>