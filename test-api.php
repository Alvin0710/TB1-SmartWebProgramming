<!-- <?php
	$data = file_get_contents("data/doaharian.json");
	$data = json_decode($data);
	// print_r($data);


	// foreach ($data as $value){
	// ?>

	<!-- <div class="col-lg-5 col-sm-1 col-md-5 doa-box pointer" data-toggle="modal" data-target="#myModal">
      <h4 class="name-doa"><b><?=$value->title?></b></h4>
    </div> -->

	<?php
		// echo $value->title;
		// echo "title : ".$value->title."<br>";
		// echo "arabic : ".$value->arabic."<br>";
		// echo "latin : ".$value->latin."<br>";
		// echo "translation : ".$value->translation."<br>";
		
	//}
?> -->





<?php
    	foreach ($data as $value){
        ?> 
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?=$value->title?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p align="right"><?=$value->arabic?></p>
          <p><i><?=$value->latin?></i></p>
        <p><?=$value->translation?></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      
        <?php
      }
      ?>