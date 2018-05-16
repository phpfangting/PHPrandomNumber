<?php 

	function add(int $left, int $right) {
    return $left + $right;
}

try {
    
} catch (Exception $e) {
    // Handle exception
} catch (Error $e) { // Clearly a different type of object
    // Log error and end gracefully
   echo $e->getMessage();
}catch(Notice $e){
   
}
