<?

$type = array(
	"table" => array("Столы", "стол", "Столы для кухни от кировской фабрики СТОЛЬНИК", "Каталог столов для кухни от производителя Стольник"),
	"chair" => array("Стулья", "стул", "Стулья и кресла от кировской фабрики СТОЛЬНИК", "Каталог стульев и кресел от производителя Стольник")
);

$products = array(
	"table" => array(
		"charli-s" => array("Чарли-С", "от 80х60 до 150х100 см", "клен ванкувер", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 16000, 2 => 24000, 3 => 34000)),
		"alex" => array("Алекс", "от 110х70 до 150х100 см", "венге", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 22000, 2 => 29000)),
		"avatar" => array("Аватар", "от 110х70 до 170х100 см", "венге", "шпон+МДФ", array(1 => 18500, 2 => 25500, 3 => 32500)),
		"johny" => array("Джонни", "от 100х70 до 150х100 см", "беленый дуб", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 16000, 2 => 24000, 3 => 32000)),
		"niko" => array("Нико", "от 110х70 до 170х100 см", "венге", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 22000, 2 => 30000, 3 => 37500)),
		"niko-v" => array("Нико-В", "от 110х70 до 170х100 см", "белый", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 25000, 2 => 33000, 3 => 40500)),
		"charli-m" => array("Чарли-М", "от 80х60 до 150х100 см", "белый", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 16000, 2 =>24000, 3 => 34000)),
		"ivan" => array("Иван", "от Ø107 до Ø120 см", "венге", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 23000, 2 => 30000, 3 => 39000)),
		"ivan-d" => array("Иван-Д", "от Ø107 до Ø120 см", "венге", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 23000, 2 => 30000, 3 => 39000), 1),
		"ivan-v" => array("Иван-В", "от Ø115 до Ø120 см", "венге", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 26000, 2 => 33000, 3 => 42000)),
		"vinni" => array("Винни раздвижной", "от Ø70 до Ø100 см", "слоновая кость", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(2 => 26500)),
		"vinninr" => array("Винни нераздвижной", "от 80х60 до 110х80 см", "вишня моргана", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 19500)),
		"rihard" => array("Рихард", "от 110х70 до 170х100 см", "белый + золотая патина", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 26000, 2 => 37000, 3 => 44000)),
		"ludovikplus" => array("Людовик плюс", "от 130х80 до 190х100 см", "белый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 33000, 2 => 42000, 3 => 49000)),
		"kaizer" => array("Кайзер", "от Ø110 до Ø120 см", "белый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 40000, 2 => 47000)),
		"console" => array("Стол - консоль", "от 50х90 до 50х100 см", "кремовый", "шпон+МДФ", array(3 => 37500)),
		"gulliver-maxi" => array("Гулливер макси", "от 180х100 до 210х110 см", "белый + золотая патина", "МДФ", array(3 => 62500)),
		"gulliver" => array("Гулливер", "от 180х100 до 210х110 см", "белый + золотая патина", "МДФ", array(1 => 43000, 2 => 50000), 1),
		"max" => array("Макс", "от 150х90 до 240х120 см", "венге", "массив березы", array(1 => 32500, 2 => 39500)),
		"elephant" => array("Элефант", "от 150х90 до 240х120 см", "венге", "массив березы", array(1 => 32500, 2 => 39500), 1),
		"elvis" => array("Элвис", "от 100х70 до 120х80 см", "", "металл (ноги), МДФ покрытая мебельным пластиком (царговый пояс)", array(1 => 11000, 2 => 16500)),
		"ludovik" => array("Людовик", "от 110х70 до 150х90 см", "черный + серебрянная патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 28000, 2 => 35000)),
		"monarh" => array("Монарх", "260х120 см", "белый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 82500, 3 => 96500), 1),
		"premier" => array("Премьер", "Ø120 см", "белый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 59500, 2 => 66500), 1),
//		"trumo" => array("Трюмо", "100х62 см", "белый + золотая патина", "ABS-пластик", array(1 => 30000), 1),
		"ampir" => array("Ампир журнальный", "от 70х50 до 100х60 см<br>высота 54 см", "кремовый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 18000), 1),
		"cesar" => array("Цезарь журнальный", "от 70х50 до 100х60 см<br>высота 60 см", "белый + золотая патина", "массив березы (ноги), шпон+МДФ (царговый пояс)", array(1 => 14000)),
		"classic" => array("Классик журнальный", "от 70х50 до 100х60 см<br>Высота 64 см", "белый", "массив березы", array(1 => 13000)),
		"avatarmini" => array("Аватар-мини журнальный", "от 70х50 до 100х60 см", "венге", "шпон+МДФ", array(1 => 10500))
	),
	"chair" => array(
		"valli" => array("Валли", "Ширина: 43 см<br>Высота: 92 см<br>Глубина: 53 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив березы", 6100),
		"osvald" => array("Освальд пуговицы", "Ширина: 43 см<br>Высота: 86 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические трубы", 6600, 1),
		"osvaldromb" => array("Освальд ромб", "Ширина: 43 см<br>Высота: 86 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические трубы", 6600, 1),
		"orfey" => array("Орфей", "Ширина: 47 см<br>Высота: 95 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив березы", 7200, 1),
		"orfey-t" => array("Орфей-Т", "Ширина: 47 см<br>Высота: 95 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические трубы", 7700, 1),
		"ostin" => array("Остин", "Ширина: 60 см<br>Высота: 84 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив березы", 7200, 1),
//		"ostin-m" => array("Остин-М", "Ширина: 60 см<br>Высота: 84 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические полозья", 6500, 1),
		"ostin-t" => array("Остин-Т", "Ширина: 60 см<br>Высота: 84 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические трубы", 7700, 1),
		"oskar" => array("Оскар", "Ширина: 58 см<br>Высота: 80 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив березы", 7200, 1),
		"oskar-t" => array("Оскар-Т", "Ширина: 58 см<br>Высота: 80 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические трубы", 7700, 1),
		"zhan" => array("Жан", "Ширина: 57 см<br>Высота: 83 см<br>Глубина: 45 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив березы", 5500, 1),
		"shevalie" => array("Шевалье", "Ширина: 47 см<br>Высота: 91 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "вишня моргана", "массив березы", 5800),
		"vikont" => array("Виконт", "Ширина: 47 см<br>Высота: 91 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "вишня моргана", "массив березы", 6900),
		"chester" => array("Честер", "Ширина: 80 см<br>Высота: 81 см<br>Глубина: 74 см<br>Высота сидения: 45 см", "венге", "массив березы", 13000, 1),
		"mishel" => array("Мишель", "Ширина: 42 см<br>Высота: 101 см<br>Глубина: 51 см<br>Высота сидения: 45 см", "венге", "массив березы", 5400),
		"resnichka" => array("Ресничка", "Ширина: 38 см<br>Высота: 92 см<br>Глубина: 48 см<br>Высота сидения: 45 см", "ольха", "массив березы", 6200),
		"alf" => array("Альф", "Ширина: 38 см<br>Высота: 85 см<br>Глубина: 48 см<br>Высота сидения: 45 см", "орех", "массив березы", 4200),
		"medal" => array("Медальон", "Ширина: 49 см<br>Высота: 96 см<br>Глубина: 54 см<br>Высота сидения: 45 см", "белый + золотая патина", "массив бука", 13000, 1),
		"lui" => array("Луи", "Ширина: 48 см<br>Высота: 112 см<br>Глубина: 58 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик", 14800),
		"richard" => array("Ричард", "Ширина: 69 см<br>Высота: 110 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик", 18100, 1),
		"haip" => array("Хайп", "Ширина: 43 см<br>Высота: 95 см<br>Глубина: 49 см<br>Высота сидения: 45 см", "вишня классическая", "массив березы", 5200),
		"riko" => array("Рико", "Ширина: 44 см<br>Высота: 105 см<br>Глубина: 52 см<br>Высота сидения: 45 см", "венге", "массив березы", 5500),
		"noi" => array("Ной", "Ширина: 43 см<br>Высота: 99 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "беленный дуб", "массив березы", 4400),
		"elegant" => array("Элегант", "Ширина: 46 см<br>Высота: 104 см<br>Глубина: 52 см<br>Высота сидения: 45 см", "венге", "массив березы", 5800),
		"markiz" => array("Маркиз", "Ширина: 48 см<br>Высота: 91 см<br>Глубина: 58 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик (передние ноги), массив березы", 7600),
		"flash" => array("Флэш", "Ширина: 42 см<br>Высота: 103 см<br>Глубина: 51 см<br>Высота сидения: 45 см", "беленный дуб", "массив березы", 4400),
		"relax" => array("Релакс", "Ширина: 55 см<br>Высота: 77 см<br>Глубина: 65 см<br>Высота сидения: 45 см", "венге", "массив березы", 6100),
		"rony" => array("Рони", "Ширина: 55 см<br>Высота: 77 см<br>Глубина: 65 см<br>Высота сидения: 45 см", "венге", "массив березы", 6100, 1),
		"orfeybar" => array("Орфей барный", "Ширина: 43 см<br>Высота: 105 см<br>Глубина: 41 см<br>Высота сидения: 70 см", "венге", "гнутоклееные детали из шпона, массив березы", 9400, 1),
		"mishelbar" => array("Мишель барный", "Ширина: 42 см<br>Высота: 105 см<br>Глубина: 52 см<br>Высота сидения: 70 см", "венге", "массив березы", 6700),
		"casper" => array("Каспер", "Ширина: 42 см<br>Высота: 93 см<br>Глубина: 38 см<br>Высота сидения: 85 см", "венге", "гнутоклееные детали из шпона, массив березы", 4800, 1),
		"vikontkr" => array("Виконт кресло", "Ширина: 66 см<br>Высота: 91 см<br>Глубина: 57 см<br>Высота сидения: 45 см<br>Высота подлокотников: 68 см", "венге", "массив березы", 8300),
		"viola" => array("Виола", "Ширина: 115 см<br>Высота: 98 см<br>Глубина: 46 см<br>Высота сидения: 45 см", "белый", "массив березы", 14800),
		"haipbar" => array("Хайп барный", "Ширина: 42 см<br>Высота: 103 см<br>Глубина: 44 см<br>Высота сидения: 70 см", "венге", "массив березы", 7200),
		"amadei" => array("Амадей", "Ширина: 46 см<br>Высота: 96 см<br>Глубина: 49 см<br>Высота сидения: 45 см", "белый + золотая патина", "массив березы", 6800),
		"shevaliekr" => array("Шевалье кресло", "Ширина: 66 см<br>Высота: 91 см<br>Глубина: 57 см<br>Высота сидения: 45 см<br>Высота подлокотников: 68 см", "венге", "массив березы", 7200),
//		"versalplus" => array("Версаль плюс", "Ширина: 52 см<br>Высота: 97 см<br>Глубина: 64 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик, фанера", 13000),
		"markizkr" => array("Маркиз кресло", "Ширина: 66 см<br>Высота: 91 см<br>Глубина: 58 см<br>Высота сидения: 45 см<br>Высота подлокотников: 68 см", "белый + золотая патина", "ABS-пластик (передние ноги), массив березы", 9000),
//		"emil" => array("Эмиль", "Ширина: 42 см<br>Высота: 91 см<br>Глубина: 53 см<br>Высота сидения: 45 см", "вишня классическая", "массив березы", 4200),
		"kvadro" => array("Квадро", "Ширина: 34 см<br>Высота сидения: 45 см", "белый", "массив березы", 2200),
		"jambo" => array("Джамбо", "Ширина: 35 см<br>Высота сидения: 45 см", "венге", "массив березы", 2400),
		"rondo" => array("Рондо", "Ширина: 35 см<br>Высота сидения: 45 см", "венге", "массив березы", 1800),
		"rondosoft" => array("Рондо мягкий", "Ширина: 35 см<br>Высота сидения: 45 см", "венге", "массив березы", 2400, 1),
		"rondobar" => array("Рондо барный", "Ширина: 35 см<br>Высота сидения: 70 см", "белый", "массив березы", 3100),
		"rondobarsoft" => array("Рондо мягкий барный", "Ширина: 35 см<br>Высота сидения: 75 см", "белый", "массив березы", 3600, 1),
		"pufik" => array("Пуфик", "Ширина: 54 см<br>Глубина: 42 см<br>Высота сидения: 45 см", "белый", "массив березы", 5200),
		"exclusive" => array("Эксклюзив", "Ширина: 54 см<br>Глубина: 42 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик (ноги), массив березы", 6100),
		"skamia" => array("Скамья", "Ширина: 65 см<br>Высота: 54 см<br>Глубина: 45 см<br>Высота сидения: 45 см", "белый", "массив березы", 5200),
		"maestro" => array("Маэстро банкетка", "Ширина: 37 см<br>Высота сидения: 45 см", "белый + золотая патина", "массив березы", 5500),
		"compliment" => array("Комплимент банкетка", "Ширина: 35 см<br>Высота сидения: 40 см", "белый + золотая патина", "ABS-пластик", 6600),
		"plechnitsa" => array("Плечница", "Ширина: 47 см<br>Высота: 97 см<br>Глубина: 30 см", "венге, белый", "массив березы", 2200),
		"tsvetochnitsa" => array("Цветочница", "Высота: 110 см", "белый + золотая патина", "ABS-пластик", 12000),
		"podstavka" => array("Подставка для цветов", "Высота: 85 см", "белый + золотая патина", "массив березы, МДФ", 2400)
	)
);

?>
