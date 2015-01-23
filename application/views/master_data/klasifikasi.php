<div class="row">
	<div class="col-xs-6">
		<a href="<?php echo base_url() ?>master_data/klasifikasi/add" class="btn btn-sm btn-default">Add</a>
	</div>	
</div>




	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th style="width:1px">Id</th>
				<th>Name</th>
				<th style="width:1%;white-space:nowrap"></th>
			</tr>
		</thead>

		<?php 
			GenerateTable($list_klasifikasi, 
			array('id','name'),
			'master_data/klasifikasi'); ?>
		</table>
	</div>






<?php 
function GenerateTable($list, $db_columns, $master_url){
	foreach ($list as $row) {
		echo '<tr>';
		foreach ($db_columns as $col) {
			echo '<td>'.$row[$col].'</td>';	
		}
		echo '<td style="white-space:nowrap">
                  <a href="'.base_url().$master_url.'/update/'.$row['id'].'" class="btn btn-xs btn-info">Edit</a>  
                  <a href="'.base_url().$master_url.'/delete/'.$row['id'].'" class="btn btn-xs btn-danger">Delete</a>
              </td>';
        echo '</tr>';
	}
}
?>