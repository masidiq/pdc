<div class="row">

  <div class="col-xs-6">
        <div class="box">
            <div class="box-header">
                <div class="box-tools">
                    <div class="input-group">
                    	<a href="<?php echo base_url() ?>master_data/klasifikasi/add" class="btn btn-sm btn-default">Add Data</a>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered">
                   <thead>
                        <tr>
							<th style="width:10px">#</th>
							<th>Name</th>
							<th style="width:10px"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php 
						GenerateTable($list_klasifikasi, 
						array('id','name'),
						'master_data/klasifikasi'); 
					?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>


    
</div>


 

<?php 
function GenerateTable($list, $db_columns, $master_url){
	foreach ($list as $row) {
		echo '<tr>';
		foreach ($db_columns as $col) {
			echo '<td>'.$row[$col].'</td>';	
		}
		echo '<td style="white-space:nowrap">
                  <a href="'.base_url().$master_url.'/update/'.$row['id'].'" class="btn btn-xs btn-info"><i class="fa fa-edit"></i> Edit</a>  
                  <a href="'.base_url().$master_url.'/delete/'.$row['id'].'" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
              </td>';
        echo '</tr>';
	}
}
?>