<?php
	require 'CHTMLDocumentGenerator.php';

	function main()
	{
		if( isset( $_GET['file'] ) && file_exists( $_GET['file'] ) ) 
			$file = $_GET['file'];
		else
			$file = 'CHTMLDocumentGenerator.php';

		$x = new CHTMLDocumentGenerator( $file );
		echo $x->createHTMLDocument();
	}

	main();

?>
