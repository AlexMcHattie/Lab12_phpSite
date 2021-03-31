<html>
<head>

<!--  I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
JMCHATTIE1
CSC155201F -->

<title>Godzilla Costume Purchase Page</title>
<?php 
// php library loading first
require("library/commonHeaderFn.php");  // ALEX MOVED THIS TO HERE
require("library/phpfunctions.php");
secure_test();

// local php functions go here 
// local php startup code goes here 
// require("library/commonHeaderFn.php"); COMMENT: ALEX MOVED THIS UP

if (!isset($_SESSION['godzillas']))
    $_SESSION['godzillas']=0;

if (isset($_POST['submit']))
{  // did the page load itself?
    if ($_POST['submit'] == 'Buy One')
    $_SESSION['godzillas']++;
    else if ($_POST['submit'] == 'Buy Ten')
    $_SESSION['godzillas']+=10;
    else if ($_POST['submit'] == 'Drop All')
    $_SESSION['godzillas']=0;
}


?>

</head>
<body>
<p> Welcome to the Godzilla Costume Purchase Page!!! </p>
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Ten'>
<input type='submit' name='submit' value='Drop All'>
</form>

<p> You have selected <?php echo $_SESSION['godzillas'];?> godzilla costumes for your shopping cart </p>
<p> Your godzilla costumes: <?php echo print_creatures('G', $_SESSION['godzillas']);?></p>


<?php header2() ?>
<?php footer() ?>
</body>
</html>
