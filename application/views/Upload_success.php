<html>
 
   <head> 
      <title>Upload Form</title> 
   </head>
	
   <body>  
      <h3>Your file was successfully uploaded!</h3>  
		
      <ul> 
         <?php
         foreach ($upload_data as $item => $value){
            echo "<li> $item :  $value</li>";
         }
         ?> 
          
         
      </ul>  
		
      <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>  
   </body>
	
</html>