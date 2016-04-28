<?php
	$data = array(
		'modal' => array(
			array(
				'title'    => 'Колбаски Сырые', //Заголовок
				'subtitle' => 'с луком и грибами', //Подзаголовок
				'image'    => $path.'img/sausage/Картинка-Колбаски-сырые-с-грибами-и-луком.png', //Ссылка на картинку
				'price'    => '189', //Цена 
				'oldprice' => '215', //Старая цена
				'discount' => '', //Скидка. Указывается без процентов
			),

			array(
				'title'    => 'Колбаски Сырые', //Заголовок
				'subtitle' => 'с пряностями', //Подзаголовок
				'image'    => $path.'img/sausage/Картинка-Колбаски-сырые-с-пряностями.png', //Ссылка на картинку
				'price'    => '189', //Цена 
				'oldprice' => '215', //Старая цена
				'discount' => '', //Скидка. Указывается без процентов
			),

			array(
				'title'    => 'Колбаски Сырые', //Заголовок
				'subtitle' => 'классические', //Подзаголовок
				'image'    => $path.'img/sausage/Картинка-Колбаски-сырые-классические.png', //Ссылка на картинку
				'price'    => '189', //Цена 
				'oldprice' => '215', //Старая цена
				'discount' => '', //Скидка. Указывается без процентов
			),

		),


		'modal2' => array(
			array(
				'title'    => 'Мясо для шашлыка', //Заголовок
				'subtitle' => 'из свинной шейки', //Подзаголовок
				'image'    => $path.'img/fry/Картинка-Шашлык-из-свинной-шейкиpng.png', //Ссылка на картинку
				'price'    => '409', //Цена 
				'oldprice' => '520', //Старая цена
				'discount' => '', //Скидка. Указывается без процентов
			),

			array(
				'title'    => 'Мясо для шашлыка', //Заголовок
				'subtitle' => 'в пикантном соусе Ткемали', //Подзаголовок
				'image'    => $path.'img/fry/Картинка-Шашлык-с-соусом-ткемали.png', //Ссылка на картинку
				'price'    => '399', //Цена 
				'oldprice' => '515', //Старая цена
				'discount' => '', //Скидка. Указывается без процентов
			),

			array(
				'title'    => 'Мясо для шашлыка', //Заголовок
				'subtitle' => 'из окорока с лимоном', //Подзаголовок
				'image'    => $path.'img/fry/Картинка-Шашлык-из-окорока-с-лимоном.png', //Ссылка на картинку
				'price'    => '369', //Цена 
				'oldprice' => '470', //Старая цена
				'discount' => '', //Скидка. Указывается без процентов
			),

		),

		'path' => $path,
		
		//Заголовок закладки страницы
		'title'       => 'Обнинский колбасный завод',

		//Текст хедера
		'header'      => 'Специальная программа «Большемясов по лучшей цене»',

		//[SEO] Описание страницы
		'description' => 'SEO описание страницы', 

		//[SEO] Ключевые слова страницы
		'keywords'    => 'SEO ключевые слова страницы', 

		//Ссылка на иконку вкладки браузера
		'favicon'     => $path.'img/logo.png',

		//Ссылка на изображение логотипа
		'logopic'     => $path.'img/logo.png',

		//[SEO] Альтернативный текст картинки-логотипа
		'logoalt'     => 'Большемясов',

		//Промо-картинка, которая располагается справа от логотипа
		'promopic'    => $path.'img/promo.png',

		//[SEO] Альтернативный текст для промо-картинки
		'promoalt'    => 'Большемясов по лучшей цене',

		//Дата левой колонки
		'leftdate'    => 'с 4 апреля по 30 сентября',

		//Подзаголовок левой колонки
		'lefttitle'   => 'Цены снижены на:',

		//Дата правой колонки
		'rightdate'   => 'Со 2 по 15 мая',

		//Подзаголовок правой колонки
		'righttitle'  => 'Большие скидки на:',

		//Картинка внизу страницы
		'image'       => $path.'img/collage.png',

		//[SEO] Альтернативный текст для картинки внизу страницы
		'imagealt'    => 'Большемясов. Мясо со скидкой',

		//Текст внизу
		'text'        => 
							'
								 В программе БОЛЕЕ 700 магазинов региона!<br>
								 СПРАШИВАЙТЕ В МАГАЗИНАХ ВАШЕГО ГОРОДА!<br>
								 Покупайте по лучшей цене!
							 ',

		'product'     => array(

			//Первый продукт в левой колонке
			array(
				'title'    => 'Колбаски Сырые', //Заголовок
				'subtitle' => '', //Подзаголовок
				'image'    => $path.'img/Колбаски-с-главной-стр.png', //Ссылка на картинку
				'price'    => '189', //Цена 
				'oldprice' => '215', //Старая цена
				'discount' => '', //Скидка. Указывается без процентов
			),

			//Второй продукт в левой колонке
			array(
				'title'    => 'Мясо для шашлыка', //Заголовок
				'subtitle' => 'в брусничном соусе', //Подзаголовок
				'image'    => $path.'img/Шашлык-с-главной-стр.png', //Ссылка на картинку
				'price'    => '399', //Цена 
				'oldprice' => '515', //Старая цена
				'discount' => '', //Скидка. Указывается без процентов
			),

			//Первый продукт в правой колонке
			array(
				'title'    => 'Сосиски', //Заголовок
				'subtitle' => 'докторские', //Подзаголовок
				'image'    => $path.'img/Сосиски-докторские-с-главной-стр.png', //Ссылка на картинку
				'price'    => '', //Цена 
				'oldprice' => '', //Старая цена
				'discount' => '25', //Скидка. Указывается без процентов
			),

			//Второй продукт в правой колонке
			array(
				'title'    => 'Сардельки', //Заголовок
				'subtitle' => 'Традиционные свинные', //Подзаголовок
				'image'    => $path.'img/Сардельки-традиц-с-главной-стр.png', //Ссылка на картинку
				'price'    => '', //Цена 
				'oldprice' => '', //Старая цена
				'discount' => '25', //Скидка. Указывается без процентов
			),

			//Третий продукт в правой колонке
			array(
				'title'    => 'Боярская', //Заголовок
				'subtitle' => 'традиция', //Подзаголовок
				'image'    => $path.'img/Колбаса-Боярская-тр-с-главной-стръ.png', //Ссылка на картинку
				'price'    => '', //Цена 
				'oldprice' => '', //Старая цена
				'discount' => '33', //Скидка. Указывается без процентов
			),

			//Четвёртый продукт в правой колонке
			array(
				'title'    => 'Столичная в/к', //Заголовок
				'subtitle' => '', //Подзаголовок
				'image'    => $path.'img/Колбаса-столичная-с-главной-стр.png', //Ссылка на картинку
				'price'    => '', //Цена 
				'oldprice' => '', //Старая цена
				'discount' => '20', //Скидка. Указывается без процентов
			),

			//Пятый продукт в правой колонке
			array(
				'title'    => 'Свинина', //Заголовок
				'subtitle' => 'По-домашнему', //Подзаголовок
				'image'    => $path.'img/Свинина-по-дом-с-главной-стр.png', //Цена 
				'price'    => '', //Цена 
				'oldprice' => '', //Старая цена
				'discount' => '20', //Скидка. Указывается без процентов
			),



		)
	);
?>