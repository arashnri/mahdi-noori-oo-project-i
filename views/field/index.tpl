<?php include("views/header.tpl"); ?>
	<table width="600" border="1">
  <tbody>
    <tr>
      <td>شماره </td>
      <td>نام رشته</td>
      <td>&nbsp;</td>
    </tr>
    
    <?php foreach($rows as $row) {  ?>
    <tr>
      <td><?php echo $row['fid']; ?></td>
      <td><?php echo $row['fname']; ?></td>
      <td>
		  <a href="index.php?id=field/delete/<?php echo $row['fid']; ?>" > حذف </a> | 
     	  <a href="index.php?id=field/edit/<?php echo $row['fid']; ?>" > ویرایش </a>
      	
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php include("views/footer.tpl"); ?>
