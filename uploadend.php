<?php
$path_parts = pathinfo($_SERVER['REQUEST_URI']);
$scriptpath = $path_parts['dirname'];
$serverpath = $_SERVER['SERVER_NAME']
?>
<br>
<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button tablink w3-blue" onclick="openLink(event,'duzurl')">Düz URL</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event,'bbcodeimg')">BBCode IMG</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event,'direkurl')">Direk URL</button>
</div>
<div id="duzurl" class="w3-container w3-display-container link">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
<input class="w3-input w3-animate-input w3-round-large w3-light-grey" type="text" id="copyTarget" value="<?php echo $serverpath.$scriptpath."/image/".$fileoutname; ?>">
<button class="w3-tag w3-round-large w3-light-grey" id="copyButton">Kopyala</button>
</div>
<div id="bbcodeimg" class="w3-container w3-display-container link" style="display:none">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
<input class="w3-input w3-animate-input w3-round-large w3-light-grey" type="text" id="copyTarget" value="[url=&quot;<?php echo $serverpath.$scriptpath."/image/".$fileoutname; ?>&quot;][img]<?php echo $serverpath.$scriptpath."/images/".$fileoutname; ?>[/img][/url]">
<button class="w3-tag w3-round-large w3-light-grey" id="copyButton">Kopyala</button>
</div>
<div id="direkurl" class="w3-container w3-display-container link" style="display:none">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
<input class="w3-input w3-animate-input w3-round-large w3-light-grey" type="text" id="copyTarget" value="<?php echo $serverpath.$scriptpath."/images/".$fileoutname; ?>">
<button class="w3-tag w3-round-large w3-light-grey" id="copyButton">Kopyala</button>
</div>
<script>
function openLink(evt, linkName) {
    var i;
    var x = document.getElementsByClassName("link");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
	var tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
  }
    document.getElementById(linkName).style.display = "block";
	evt.currentTarget.className += " w3-blue";
}
</script>
<br>
<br>
<div class="view">
<img class="w3-border" src="<?php echo $filemovedir.$fileoutname; ?>" style="display:block;margin-left:auto;margin-right:auto;width:70%" />
</div>
<hr>

<script>
document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});

function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
</script>