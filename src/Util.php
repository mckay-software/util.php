<?

namespace McKay;

class Util {
	public static function time($datetime = null, $classes = '') {
		if ($datetime === null) { $datetime = time(); }
		return sprintf('<time datetime="%1$s" class="%2$s">%1$s</time>',
			date(\DateTime::RFC3339, $datetime),
			trim('render-time ' . $classes));
	}

	public static function slug($string, $delimiter = '-') {
		static $slugifier = null;
		if ($slugifier === null) {
			$slugifier = new \Cocur\Slugify\Slugify();
		}

		return $slugifier->slugify($string, $delimiter);
	}
}

?>
