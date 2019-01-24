<?php 
$title = "Data Pemetaan Sekolah di Batam";
include "header.php";
include "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="30%">Nama Sekolah</th>
                  <th width="20%">Kepala Sekolah</th>
                  <th width="10%">No Telepon</th>
                  <th width="20%">Website</th>
                  <th width="25%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
			
             
				
				$Q = mysql_query("SELECT * FROM jasaweb")or die(mysql_error());
if($Q){
 $posts = array();
      if(mysql_num_rows($Q))
      {
             while($post = mysql_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));
                         
}

				
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td align='center'><?php echo $no; ?></td>
                <td><?php echo $item->nama_sekolah; ?></td>
                <td><?php echo $item->Kepala_Sekolah; ?></td>
                <td><?php echo $item->no_hp; ?></td>
                <td><?php echo $item->website; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a target="_blank" href="detail.php?id=<?php echo $item->id_sekolah; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>