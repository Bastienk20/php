<ul>
    <li><a href="?message=Hi&qui=world&fontSize=22&color=%232a10ad&bgColor=%239c1616">En anglais</a></li>
    <li><a href="?message=Salut&qui=à+tous&fontSize=17&color=%23e60000&bgColor=%23380fcc">En Français</a></li>
</ul>
<?php
$message=$_GET['message'];
$qui=$_GET['qui']??'Tout le monde !';
$color='black';
$bgColor='white';
$fontSize='14';
extract($_GET);
?>
<form method="get" action="hello.php">
    <fieldset>
    <legend>Styles :</legend>
        <input type="text" name="message" value="<?=$message?>" placeholder="saisir un message">
        <input type="text" name="qui" value="<?=$qui?>" placeholder="saisir à qui">
        <input type="number" name="fontSize" min="5" max="120" value="<?=$fontSize?>">
    </fieldset>
    <fieldset>
        <legend>Message :</legend>
            <input type="color" name="color" value="<?=$color?>">
            <input type="color" name="bgColor" value="<?=$bgColor?>">
    </fieldset>    
    <button type="submit">Valider</button>
</form>
<h1><?=$message?></h1>
<p style="color: <?=$color?>;background-color:<?=$bgColor?>;font-size: <?=$fontSize?>"><?=$qui?></p>