<html>
<head>
<title>amca&copy; Repository</title>
<style type="text/css"> 
body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

.block {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}
</style> 

</head>
<body>
<h1>amca&copy; Repository</h1>

<p class="block">
Welcome to amca&copy; Repository site<br />this is part of <a href="http://eamca.com?network">amca&copy; Network</a> which provide any files related to <a href="http://eamca.com">amca&copy;</a>. Feel free to contact us at <a href="mailto:hi@eamca.com">hi@eamca.com</a>
</p>
<?php

function getDirectory( $path = '.', $level = 0 ){

    $ignore = array( 'cgi-bin', '.', '..' );
    // Directories to ignore when listing output. Many hosts
    // will deny PHP access to the cgi-bin.

    $dh = @opendir( $path );
    // Open the directory to the handle $dh
    
    while( false !== ( $file = readdir( $dh ) ) ){
    // Loop through the directory

        echo "<ul>";

        if( !in_array( $file, $ignore ) ){
        // Check that this file is not to be ignored
            
            $spaces = str_repeat( '&nbsp;', ( $level * 4 ) );
            // Just to add spacing to the list, to better
            // show the directory tree.
            
            if( is_dir( "$path/$file" ) ){
            // Its a directory, so we need to keep reading down...
            
                echo "<li><strong>$spaces <a href='$path/$file'>$file</a></strong>";
                getDirectory( "$path/$file", ($level+1) );
                // Re-call this same function but on a new directory.
                // this is what makes function recursive.
            
            } else {
                if($file!="index.php")
                    echo "<li>$spaces <a href='$path/$file'>$file</a></li>";
                    // Just print out the filename
            
            }
            echo "</li>";
        }
        echo "</ul>";
    }
    
    closedir( $dh );
    // Close the directory handle

}


getDirectory( "." );
// Get the current directory

?>
<div style="display:none">
<script type="text/javascript" src="http://feedjit.com/serve/?vv=724&amp;tft=3&amp;dd=0&amp;wid=ff7d7de9d5912870&amp;pid=0&amp;proid=0&amp;bc=FFFFFF&amp;tc=000000&amp;brd1=012B6B&amp;lnk=135D9E&amp;hc=FFFFFF&amp;hfc=2853A8&amp;btn=C99700&amp;ww=200&amp;went=10"></script><noscript><a href="http://feedjit.com/">Feedjit Live Blog Stats</a></noscript>
</div>
</body>
</html>