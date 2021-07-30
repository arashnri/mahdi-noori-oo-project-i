<?php include("views/header.tpl"); ?>
<form action="index.php?id=field/save" id="form1" name="form1" method="post">
  <table width="466" border="0" align="center">
    <tbody>
      <tr>
        <td>شماره رشته</td>
        <td><input readonly value="<?php echo $row['fid']; ?>" type="text" name="fid" id="sid"></td>
      </tr>
      <tr>
        <td width="112">نام رشته</td>
        <td width="344"><input value="<?php echo $row['fname']; ?>" type="text" name="fname" id="name"></td>
      </tr>
     
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="  ثبت تغییرات ">
          <input type="reset" name="reset" id="reset" value="  بازنویسی "></td>
      </tr>
    </tbody>
  </table>
</form>
<?php include("views/footer.tpl"); ?>
