<script>
    var ua = navigator.userAgent.toLowerCase();
    var url;
        
    if (ua.indexOf("iphone") > -1 || ua.indexOf("ipad") > -1)
        url = "sms:;body=" + encodeURIComponent("I'm at " + mapUrl + " @ " + pos.Address);
    else
        url = "sms:?body=" + encodeURIComponent("I'm at " + mapUrl + " @ " + pos.Address);

    location.href = url;
</script>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
