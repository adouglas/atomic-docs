<?php


function renameScssFile($catName, $fileName, $oldName)
{	
    rename ("../scss/$catName/_$oldName.scss", "../scss/$catName/_$fileName.scss");
}

function renameCompFile($catName, $fileName, $oldName)
{	
    rename ("../components/$catName/$oldName.php", "../components/$catName/$fileName.php");
}



	


?>