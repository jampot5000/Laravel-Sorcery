<?php
/**
 * User: Rohinigeeks
 * Date: 14/02/15
 * Time: 4:56 PM
 */

namespace Rohinigeeks\Generator\File;


class FileHelper
{
	public function writeFile($file, $contents)
	{
		file_put_contents($file, $contents);
	}

	public function getFileContents($file)
	{
		return file_get_contents($file);
	}
}