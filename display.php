//file to display text on click
<?php
  $data=isset($_REQUEST['text'])?$_REQUEST['text']:'';
  if($data!=''){
    echo $data;
    
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>
Display Text !!! title updated
</title>
</head>
<body>
  <form action="#" method="get" >   
    <label>Enter Text here</label>
    <input type="text" name="text">
    <input type="submit" value="click here">
  </form>
</body>

</html>
