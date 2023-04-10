
GLOBAL_INDEX_PAGE = "/registro/"

function redirect( page ){
		
	if( page == 'REG'  )	
	    location.href = GLOBAL_INDEX_PAGE + 'views/registrar.php';
	    
	if( page == 'LIST' )	
	    location.href = GLOBAL_INDEX_PAGE + 'views/listar.php';
	
	if( page == 'INTRO' )	
	    location.href = GLOBAL_INDEX_PAGE + '';
	    
}







