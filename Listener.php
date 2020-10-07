<?php namespace Hampel\TemplateParent;

class Listener
{
	public static function templaterGlobalData(\XF\App $app, array &$data, $reply)
	{
		if ($app instanceof \XF\Pub\App && $reply && $reply instanceof \XF\Mvc\Reply\View)
		{
			$controller = $reply->getControllerClass();
			$action = $reply->getAction();

			if ($controller == 'XF:Forum' && $action == 'Forum')
			{
				$data['reply']['templateParent'] = 'forum_view';
			}
			elseif ($controller == 'XF:Thread' && $action == 'Index')
			{
				$data['reply']['templateParent'] = 'thread_view';
			}
		}
	}
}