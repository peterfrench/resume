<?php
namespace app;

class View
{
	public $basePath;

	public function __construct($basePath = 'views/')
	{
		$this->basePath = __DIR__.'/../'.$basePath;
	}

	/**
	 * Returns or echos a view.
	 *
	 * @param  string $path    path to view
	 * @param  array $params
	 * @param  boolean $echo   whether to echo the view results instead of returning them as a string
	 * @return string|boolean
	 */
	public function render( $path, $params = [], $echo = false )
	{
		$content = $this->renderPhpFile($this->basePath.$path.'.php', $params);
		if($echo)
		{
			echo $content;
		}
		else
		{
			return $content;
		}
	}

	/**
	  * Renders a view file as a PHP script.
	  *
	  * This method treats the view file as a PHP script and includes the file.
	  * It extracts the given parameters and makes them available in the view file.
	  * The method captures the output of the included view file and returns it as a string.
	  *
	  * @param string $file the view file.
	  * @param array $params the parameters (name-value pairs) that will be extracted and made available in the view file.
	  * @return string the rendering result
	  */
	 public function renderPhpFile( $file, $params = [])
	 {
		  ob_start();
		  ob_implicit_flush(false);
		  extract($params, EXTR_OVERWRITE);
		  require($file);

		  return ob_get_clean();
	 }
}