<?php
echo '<pre>';

$last_line = system('ls', $retval);

echo '
</pre>
<hr />Последняя строка вывода: ' . $last_line . '
<hr />Код возврата: ' . $retval;
?>
