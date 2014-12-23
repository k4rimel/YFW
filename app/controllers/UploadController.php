<?php

class UploadController extends BaseController {

	public function HandleImgUpload()
	{
		if (Input::file('fileInput')->isValid() && Input::file('imgText'))
		{
			$destinationPath = storage_path().'\sandbox';
			$name = uniqid('img_');
			$moved = Input::file('fileInput')->move($destinationPath, $name);

			$post = new Post();
			$post->label = Input::file('imgText');
			$post->postUri = uniqid('post_');
			$post->imgUri = uniqid('post_');

			$post->postDate = (new \DateTime())->format('Y-m-d H:i:s');
			$post->isApproved = false;

			$post->save();




		}
		else {
			echo "error";
		}
	}

}