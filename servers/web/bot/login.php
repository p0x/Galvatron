<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="stile.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
include ("funct.php");
@$error=$_GET['error'];
echo '
<div id="apDiv1">
  <table width="200" border="0" cellspacing="0" class="fondo">
    <tr>
      <th scope="row"><p>&nbsp;</p>
        <table width="200" border="0">
          <tr>
            <th class="fondo" scope="row"><div align="right">user:</div></th>
            <td><form id="form1" name="form1" method="post" action="login2.php">
              <label>
                <input name="user" type="text" class="ver" id="user" />
                </label>
                       </td>
          </tr>
          <tr>
            <th class="fondo" scope="row"><div align="right">password:</div></th>
            <td><label>
              <input name="password" type="password" class="ver" id="password" />
            </label></td>
          </tr>
        </table>        <p>
          <label>
          <input name="go" type="submit" class="ver" id="go" value="Login" />
          </label>
          
      </p></th>
    </tr>
    <tr>
      <th scope="row">';
      if($error!=NULL)
      {
     echo ' <table width="305" height="30" border="0" class="comando">
        <tr>
          <th scope="row">'; 
		  error($error);
		  echo '
		  </th>
        </tr>
      </table>';
	   }
     echo '
      </th>
    </tr>
  </table>
  </form> 
</div>
<p class="verhead">Galvatron Botnet</p>
</body>
</html>';
?>

