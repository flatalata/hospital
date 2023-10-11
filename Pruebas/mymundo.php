<?php   
   $status = [
                'name' => 'James Potter',
                'status' => 'dead'
   ];

   unset ($status['status']);
   
   print_r($status);
?>
