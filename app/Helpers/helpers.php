<?php
function menu()
{
	if (auth()->id())
	{
		return config('menu.admin');
	}

	return config('menu.users');
}

function isActive($url)
{
	if (is_array($url))
	{
		$url = collect($url)->pluck('url');

		return $url->contains(request()->segment(1)) ? 'active' : null;
	}
	return request()->segment(1) == $url ? 'active' : null;
}