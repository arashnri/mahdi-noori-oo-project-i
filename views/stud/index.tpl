<?php include("views/header.tpl"); ?>
	<table width="600" border="1">
  <tbody>
    <tr>
      <td>شماره </td>
      <td>نام دانشجو</td>
      <td>معدل</td>
      <td>رشته</td>
      <td>&nbsp;</td>
    </tr>
    
    <?php foreach($rows as $row) {  ?>
    <tr>
      <td><?php echo $row['sid']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['avgr']; ?></td>
      <td><?php echo $row['fid']; ?></td>
      <td>
		  <a href="index.php?id=stud/delete/<?php echo $row['sid']; ?>" > حذف </a> | 
     	  <a href="index.php?id=stud/edit/<?php echo $row['sid']; ?>" > ویرایش </a>
      	
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php include("views/footer.tpl"); ?>
