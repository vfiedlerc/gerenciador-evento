<?php 
$records = getHolidayRecords();
?>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Lista de eventos</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <th style="width: 10px">#</th>
        <th>Data</th>
        <th>Razao</th>
        <th>Acao</th>
      </tr>
      <?php
	  $idx = 1;
	  foreach($records as $rec) {
	  	extract($rec);
	  ?>
      <tr>
        <td><?php echo $idx++; ?></td>
        <td><?php echo $hdate; ?></a></td>
        <td><?php echo $hreason; ?></td>
        <td><a href="javascript:deleteHoliday('<?php echo $hid ?>');">Deletar</a></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <!-- /.box-body -->
  <div class="box-footer clearfix">
    <?php echo generateHolidayPagination(); ?> </div>
</div>
<!-- /.box -->
<script language="javascript">
function deleteHoliday(hid) {
	if(confirm('Deleting holiday will allows user to book that date.\n\nAre you sure you want to proceed ?')) {
		window.location.href = '<?php echo WEB_ROOT; ?>api/process.php?cmd=hdelete&hId='+hid;
	}
}

</script>
