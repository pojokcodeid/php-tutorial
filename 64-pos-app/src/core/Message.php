<?php
namespace MyApp\Core;

class Message
{
	public static function setFlash($icon, $title, $text, $data = [])
	{
		$_SESSION['flash'] = [
			'icon' => $icon,
			'title' => $title,
			'text' => $text,
			'data' => $data
		];
	}

	public static function getData()
	{
		if (isset($_SESSION['flash'])) {
			return $_SESSION['flash']['data'];
		}
		return [];
	}

	public static function flash()
	{
		if (isset($_SESSION['flash'])) {
			echo '
				<script>
				Swal.fire({
						icon: "' . $_SESSION['flash']['icon'] . '",
						title: "' . $_SESSION['flash']['title'] . '",
						text: "' . $_SESSION['flash']['text'] . '",
				});
				</script>
				';
			unset($_SESSION['flash']);
		}
	}
}