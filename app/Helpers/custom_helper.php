<?php

function match_selected( $single_id, $id ) {
    $ids = explode( ',', $id );
    for ( $i = 0; $i<count( $ids );
    $i++ ) {
        if ( $single_id == $ids[ $i ] ) {
            return true;
            break;
        }
    }
}

function getUser( $id ) {
    $db = \Config\Database::connect();
    $builder = $db->table( 'admin_users' );
    $output = $builder->select( 'user_name' )->where( 'id', $id )->get();
    $output = $output->getRow();
    print_r( $output->user_name );
}

function getStatus( $id ) {
    if ( $id ) {
        print_r( 'Published' );
    } else {
        print_r( 'Unpublished' );
    }
}

function uploadFile( $image, $path ) {
    $imageName = $image->getName();
    $newName = substr( $imageName, 0, strrpos( $imageName, '.' ) );

    $ext = $image->getClientExtension();

    if ( $image->isValid() && !$image->hasMoved() ) {
        switch ( $ext ) {
            case 'png':
            $originalImage = imagecreatefrompng( $image );
            break;
            case 'jpeg':
            $originalImage = imagecreatefromjpeg( $image );
            break;
            case 'jpg':
            $originalImage = imagecreatefromjpeg( $image );
            break;
            case 'webp':
            $originalImage = imagecreatefromwebp( $image );
            break;
            default:
            return false;
        }

        imagewebp( $originalImage, $path.$newName.'.webp' );
        imagepng( $originalImage, $path.$newName.'.png' );

        return $path.$newName;
    }
}

function truncate_description( $string, $length ) {
    $string = strip_tags( $string );
    if ( strlen( $string ) > $length ) {
        // truncate string
        $stringCut = substr( $string, 0, $length );
        $endPoint = strrpos( $stringCut, ' ' );
        //if the string doesn't contain any space then it will cut without word basis.
        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        $string .= '...';
    }
    echo $string;
}

function uploadDocument( $document, $path ) {
    if ( $document->isValid() && !$document->hasMoved() ) {
        $documentName = $document->getName();
        $document = $document->move( $path, $documentName );
        $document_path = $path.$documentName;
        return $document_path;
    }
}
?>