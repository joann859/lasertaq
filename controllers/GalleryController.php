<?php
include_once ROOT. '/models/products.php';
	require_once ROOT. '/models/user.php';
	require_once ROOT. '/models/cart.php';
	require_once ROOT. '/models/gallery.php';
	require_once ROOT. '/models/search.php';
class GalleryController {
    	public function actionGallery()
	{
	    require_once ROOT. '/views/lasertaq/gallery/gallery.php';
	    return true;
	}
	public function actionAlbum($photoId)
		{
		    $photoId = trim((strip_tags(stripcslashes(htmlspecialchars($photoId)))));
		    $photos = array();
			$photos = Gallery::getPhotoListByAlbum($photoId);
	        require_once ROOT. '/views/lasertaq/gallery/album.php';
		    return true;
		}	
		
		public function actionVideo()
	{
	    require_once ROOT. '/views/lasertaq/gallery/video.php';
	    return true;
	}	

}
?>