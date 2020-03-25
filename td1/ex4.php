<a href="?message">tableau XS</a><br>
<a href="?message">tableau S</a><br>
<a href="?message">tableau M</a>

<table border='message'>
    <tbody>
        <tr>
            <td>1-1</td>
            <td>1-2</td>
        </tr>
        <tr>
            <td>2-1</td>
            <td>2-2</td>
        </tr>
    </tbody>
</table>

<?php
$size=$_GET["size"]??"XS";
?>
<?php
$size=$_GET["size"]??"XS";
?>
<div style="font-size: <?=$size?>px">
</div>
<form method="GET" action="">
	<input type="size" name="size" value="<?=$size?>"><br>
</form>


