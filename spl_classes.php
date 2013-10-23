<?php
// a simple foreach() to traverse the SPL class names
foreach(spl_classes() as $key => $value)
{
echo $key.' -&gt; '.$value.'<br />';
}
?>