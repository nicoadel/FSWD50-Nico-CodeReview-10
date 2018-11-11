<?php 

class Media{
	public $media_title;
	public $media_image;
	public $media_isbn;
	public $media_short_description;
	public $media_publish_date;
	public $media_type;

	function __construct($media_title_arg, $media_image_arg, $media_isbn_arg, $media_short_description_arg, $media_publish_date_arg, $media_type_arg)
	{
		
		$this->media_title = $media_title_arg;
		$this->media_image = $media_image_arg;
		$this->media_isbn = $media_isbn_arg;
		$this->media_short_description = $media_short_description_arg;
		$this->media_publish_date = $media_publish_date_arg;
		$this->media_type = $media_type_arg;

	}
}

class Author{
	public $author_first_name;
	public $author_last_name;
	public $author_media;

	function __construct($author_first_name_arg, $author_last_name_arg, $author_media_arg)
	{

		$this->author_first_name = $author_first_name_arg;
		$this->author_last_name = $author_last_name_arg;
		$this->author_media = $author_media_arg;

	}
}

class Publisher{
	public $publisher_name;
	public $publisher_adress;
	public $publisher_media;

	function __construct($publisher_name_arg, $publisher_adress_arg, $publisher_media_arg)
	{
		
		$this->publisher_name = $publisher_name_arg;
		$this->publisher_adress = $publisher_adress_arg;
		$this->publisher_media = $publisher_media_arg;

	}
}


?>