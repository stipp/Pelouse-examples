		
    # Храним адреса в массиве, перебирая до совпадения URI. module и do можно использовать для разделения/подключения файлов в зависимости от нужного раздела сайта. Переменные в URI обозначаем порядковыми числами. 
    
    public function parseComponentRoute(){
			$routes = array(
			
				/* Пример адресов без переменных */
			
				array('_uri'  => '/^yoursiteurl.ru\z/i',														'module' => 'welcome',	'do' => 'welcome'),
				array('_uri'  => '/^yoursiteurl.ru\/welcome\z/i',												'module' => 'welcome',	'do' => 'welcome'),
				array('_uri'  => '/^yoursiteurl.ru\/login\z/i',													'module' => 'welcome',	'do' => 'schools'),
				array('_uri'  => '/^yoursiteurl.ru\/sites\z/i',													'module' => 'welcome',	'do' => 'sites'),
				array('_uri'  => '/^yoursiteurl.ru\/blog\z/i',													'module' => 'welcome',	'do' => 'blog'),
  

				/* Пример адресов с переменными */
				array('_uri'  => '/^yoursiteurl.ru\/group([0-9]+)\z/i',											'module' => 'group',	'do' => 'group',		1 => 'id'),
				array('_uri'  => '/^yoursiteurl.ru\/group([0-9]+)\/join\z/i',									'module' => 'group',	'do' => 'clubjoin',		1 => 'group_id'),
				array('_uri'  => '/^yoursiteurl.ru\/group([0-9]+)\/exit\z/i',									'module' => 'group',	'do' => 'clubexit',		1 => 'group_id'),
				array('_uri'  => '/^yoursiteurl.ru\/group([0-9]+)\/edit\z/i',									'module' => 'group',	'do' => 'club_edit',	1 => 'group_id'),
				array('_uri'  => '/^yoursiteurl.ru\/cours([0-9]+)\z/i',											'module' => 'cours', 	'do' => 'cours',		1 => 'cours_id'),
				array('_uri'  => '/^yoursiteurl.ru\/cours([0-9]+)\/join\z/i',									'module' => 'cours', 	'do' => 'coursjoin',	1 => 'cours_id'),
				array('_uri'  => '/^yoursiteurl.ru\/cours([0-9]+)\/exit\z/i',									'module' => 'cours', 	'do' => 'coursexit',	1 => 'cours_id'),
				array('_uri'  => '/^yoursiteurl.ru\/cours([0-9]+)\/themes\z/i',									'module' => 'cours', 	'do' => 'cours_themes',	'target' => 'view_themes',  1 => 'cours_id'),
				array('_uri'  => '/^yoursiteurl.ru\/cours([0-9]+)\/theme([0-9]+)\z/i',							'module' => 'cours', 	'do' => 'cours_themes',	'target' => 'view_theme',   1 => 'cours_id', 2 => 'theme_id'),
				array('_uri'  => '/^yoursiteurl.ru\/cours([0-9]+)\/theme([0-9]+)\/new_subject\z/i',				'module' => 'cours', 	'do' => 'cours_themes',	'target' => 'new_subject',  1 => 'cours_id', 2 => 'theme_id'),
				array('_uri'  => '/^yoursiteurl.ru\/cours([0-9]+)\/theme([0-9]+)\/subject([0-9]+)\z/i',			'module' => 'cours', 	'do' => 'cours_themes',	'target' => 'view_subject', 1 => 'cours_id', 2 => 'theme_id', 3 => 'subject_id'),
				array('_uri'  => '/^yoursiteurl.ru\/cours([0-9]+)\/theme([0-9]+)\/subject([0-9]+)\/edit\z/i',	'module' => 'cours', 	'do' => 'cours_themes',	'target' => 'edit_subject',	1 => 'cours_id', 2 => 'theme_id', 3 => 'subject_id'),

				
				
				
				/* Рабочий пример для персональных профилей пользователей */
				
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\z/i',						'module' => 'profile',	'do' => 'profile',		1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/collections\z/i',			'module' => 'profile',	'do' => 'user_collections',1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/groups\z/i',				'module' => 'profile',	'do' => 'user_group',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/avatar\z/i',				'module' => 'profile', 	'do' => 'user_avatar',	1 => 'user_id'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/cover\z/i',					'module' => 'profile', 	'do' => 'user_cover',	1 => 'user_id'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/courses\z/i',				'module' => 'profile',	'do' => 'user_courses',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/files\z/i',					'module' => 'profile',	'do' => 'user_files',	1 => 'login'),	
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/delete\z/i',				'module' => 'profile',	'do' => 'user_delete',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/gifts\z/i',					'module' => 'profile',	'do' => 'user_gifts',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/friends\z/i',				'module' => 'profile',	'do' => 'user_friends',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/audio\z/i',					'module' => 'profile',	'do' => 'user_audio',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/videos\z/i',				'module' => 'profile',	'do' => 'user_videos',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/video([0-9]+)\z/i',			'module' => 'profile',	'do' => 'user_videos',	1 => 'login', 2 => 'video_id'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/sendmessage\z/i',			'module' => 'profile',	'do' => 'sendmessage',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/delfriend\z/i',				'module' => 'profile',	'do' => 'delfriend',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/addfriend\z/i',				'module' => 'profile',	'do' => 'addfriend',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/addfans\z/i',				'module' => 'profile',	'do' => 'addfans',		1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/photos\z/i',				'module' => 'profile',	'do' => 'user_photos',	1 => 'login'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/photo([0-9]+)\z/i',			'module' => 'profile',	'do' => 'user_photos',	1 => 'login', 2 => 'photo_id'),
				array('_uri'  => '/^yoursiteurl.ru\/([a-zA-z0-9]+)\/relation\z/i',				'module' => 'profile',	'do' => 'user_relation',1 => 'first_login'),
				
			);

			$is_found = false; 	// Флаг удачного перебора
			foreach($routes as $route_id=>$route){ //перебираем все маршруты
				preg_match($route['_uri'], $this->uri, $matches); //сравниваем шаблон маршрута с текущим URI 
				if ($matches){ //Если найдено совпадение
					unset($route['_uri']); //удаляем шаблон из параметров маршрута, чтобы не мешал при переборе
					foreach($route as $key=>$value){ //перебираем параметры маршрута в виде ключ=>значение
						if (is_integer($key)){
							$_REQUEST[$value] = $matches[$key]; //Если ключ - целое число, то значением является сегмент URI
						}else{
							$_REQUEST[$key]   = $value; //иначе, значение берется из маршрута
						}
					}
					$is_found = true; // совпадение есть
					break; //раз найдено совпадение, прерываем цикл
				}
			}
			if(!$is_found) { return false; } // Если в маршруте нет совпадений
			return true;
		}
