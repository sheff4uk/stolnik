<?

$type = array(
	"table" => array("Столы", "стол", "Столы для кухни от кировской фабрики СТОЛЬНИК", "Каталог столов для кухни от производителя Стольник"),
	"chair" => array("Стулья", "стул", "Стулья и кресла от кировской фабрики СТОЛЬНИК", "Каталог стульев и кресел от производителя Стольник")
);

$products = array(
	"table" => array(
		"charli-s" => array("Чарли-С", "от 80х60 до 150х100 см", "клен ванкувер", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 18500, 2 => 27500, 3 => 39000)),
		"alex" => array("Алекс", "от 110х70 до 150х100 см", "венге", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 25000, 2 => 33000)),
		"alex-prime" => array("Алекс Прайм", "от 110х70 до 150х100 см", "венге", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 32000, 2 => 40000), 1),
		"avatar" => array("Аватар", "от 110х70 до 170х100 см", "венге", "шпон+МДФ", array(1 => 21000, 2 => 29000, 3 => 37000)),
		"johny" => array("Джонни", "от 100х70 до 150х100 см", "беленый дуб", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 18500, 2 => 27500, 3 => 37000)),
		"deni" => array("Дени", "от 100х70 до 120х80 см", "беленый дуб", "массив (ноги)", array(1 => 12000, 3 => 20000), 1),
		"niko" => array("Нико", "от 110х70 до 170х100 см", "венге", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 25000, 2 => 34500, 3 => 43000)),
		"niko-v" => array("Нико-В", "от 110х70 до 170х100 см", "белый", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 29000, 2 => 38000, 3 => 46500)),
		"charli-m" => array("Чарли-М", "от 80х60 до 150х100 см", "белый", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 18500, 2 =>27500, 3 => 39000)),
		"ivan" => array("Иван", "от Ø107 до Ø120 см", "венге", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 26500, 2 => 34500, 3 => 44500)),
		"ivan-d" => array("Иван-Д", "от Ø107 до Ø120 см", "венге", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 26500, 2 => 34500, 3 => 44500), 1),
		"ivan-v" => array("Иван-В", "от Ø115 до Ø120 см", "венге", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 30000, 2 => 38000, 3 => 48000)),
		"vinni" => array("Винни раздвижной", "от Ø70 до Ø100 см", "слоновая кость", "массив (ноги), шпон+МДФ (царговый пояс)", array(2 => 30500)),
		"vinninr" => array("Винни нераздвижной", "от 80х60 до 110х80 см", "вишня моргана", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 22500)),
		"rihard" => array("Рихард", "от 110х70 до 170х100 см", "белый + золотая патина", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 29500, 2 => 42000, 3 => 50000)),
		"ludovikplus" => array("Людовик плюс", "от 130х80 до 190х100 см", "белый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 37500, 2 => 48000, 3 => 56000)),
		"kaizer" => array("Кайзер", "от Ø110 до Ø120 см", "белый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 46000, 2 => 54000)),
		"console" => array("Стол - консоль", "от 50х90 до 50х100 см", "кремовый", "шпон+МДФ", array(3 => 43000)),
		"gulliver-maxi" => array("Гулливер макси", "от 180х100 до 210х110 см", "белый + золотая патина", "МДФ", array(3 => 71500)),
		"gulliver" => array("Гулливер", "от 180х100 до 210х110 см", "белый + золотая патина", "МДФ", array(1 => 49000, 2 => 57000), 1),
		"max" => array("Макс", "от 150х90 до 240х120 см", "венге", "массив", array(1 => 37000, 2 => 45500)),
		"elephant" => array("Элефант", "от 150х90 до 240х120 см", "венге", "массив", array(1 => 37000, 2 => 45500), 1),
		"elvis" => array("Элвис", "от 100х70 до 120х80 см", "", "металл (ноги), МДФ покрытая мебельным пластиком (царговый пояс)", array(1 => 12500, 2 => 19000)),
		"ludovik" => array("Людовик", "от 110х70 до 130х80 см", "черный + серебрянная патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 32000, 2 => 40000)),
		"monarh" => array("Монарх", "260х120 см", "белый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 94500, 3 => 110500), 1),
		"premier" => array("Премьер", "Ø120 см", "белый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 68000, 2 => 76000), 1),
//		"trumo" => array("Трюмо", "100х62 см", "белый + золотая патина", "ABS-пластик", array(1 => 30000), 1),
		"ampir" => array("Ампир журнальный", "от 70х50 до 100х60 см<br>высота 54 см", "кремовый + золотая патина", "ABS-пластик (ноги), шпон+МДФ (царговый пояс)", array(1 => 20500), 1),
		"cesar" => array("Цезарь журнальный", "от 70х50 до 100х60 см<br>высота 60 см", "белый + золотая патина", "массив (ноги), шпон+МДФ (царговый пояс)", array(1 => 16000)),
		"classic" => array("Классик журнальный", "от 70х50 до 100х60 см<br>Высота 64 см", "белый", "массив", array(1 => 15000)),
		"avatarmini" => array("Аватар-мини журнальный", "от 70х50 до 100х60 см", "венге", "шпон+МДФ", array(1 => 12000))
	),
	"chair" => array(
		"valli" => array("Валли", "Ширина: 43 см<br>Высота: 92 см<br>Глубина: 53 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив", 7000),
		"osvald" => array("Освальд", "Ширина: 43 см<br>Высота: 86 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона", 7000, 1),
//		"osvalddot" => array("Освальд пуговицы", "Ширина: 43 см<br>Высота: 86 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона", 7600, 1),
//		"osvaldromb" => array("Освальд ромб", "Ширина: 43 см<br>Высота: 86 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона", 7600, 1),
		"orfey" => array("Орфей", "Ширина: 47 см<br>Высота: 95 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив", 8300, 1),
		"bajun" => array("Баюн", "Ширина: 70 см<br>Высота: 93 см<br>Глубина: 80 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона", 13000, 1),
		"bingo" => array("Бинго", "Ширина: 43 см<br>Высота: 83 см<br>Глубина: 47 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив", 4800, 1),
//		"orfey-t" => array("Орфей-Т", "Ширина: 47 см<br>Высота: 95 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические трубы", 8900, 1),
		"lesley" => array("Лесли", "Ширина: 60 см<br>Высота: 88 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, ABS-пластик (передние ноги)", 10900, 1),
		"lesley2" => array("Лесли 2", "Ширина: 60 см<br>Высота: 88 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив", 9200, 1),
		"ostin" => array("Остин", "Ширина: 60 см<br>Высота: 84 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив", 8300, 1),
//		"ostin-m" => array("Остин-М", "Ширина: 60 см<br>Высота: 84 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические полозья", 6500, 1),
//		"ostin-t" => array("Остин-Т", "Ширина: 60 см<br>Высота: 84 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические трубы", 8900, 1),
		"oskar" => array("Оскар", "Ширина: 58 см<br>Высота: 80 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив", 8300, 1),
//		"oskar-t" => array("Оскар-Т", "Ширина: 58 см<br>Высота: 80 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, металлические трубы", 8900, 1),
		"pegas" => array("Пегас", "Ширина: 60 см<br>Высота: 80 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив", 8300, 1),
		"zhan" => array("Жан", "Ширина: 57 см<br>Высота: 83 см<br>Глубина: 45 см<br>Высота сидения: 45 см", "ольха", "гнутоклееные детали из шпона, массив", 6300, 1),
		"shevalie" => array("Шевалье", "Ширина: 47 см<br>Высота: 91 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "вишня моргана", "массив", 6700),
		"vikont" => array("Виконт", "Ширина: 47 см<br>Высота: 91 см<br>Глубина: 57 см<br>Высота сидения: 45 см", "вишня моргана", "массив", 7900),
		"chester" => array("Честер", "Ширина: 80 см<br>Высота: 81 см<br>Глубина: 74 см<br>Высота сидения: 45 см", "венге", "массив", 15000, 1),
		"chesterfield" => array("Честерфилд", "Ширина: 138 см<br>Высота: 81 см<br>Глубина: 74 см<br>Высота сидения: 45 см", "венге", "массив", 23000, 1),
		"mishel" => array("Мишель", "Ширина: 42 см<br>Высота: 101 см<br>Глубина: 51 см<br>Высота сидения: 45 см", "венге", "массив", 6200),
		"resnichka" => array("Ресничка", "Ширина: 38 см<br>Высота: 92 см<br>Глубина: 48 см<br>Высота сидения: 45 см", "ольха", "массив", 7100),
		"alf" => array("Альф", "Ширина: 38 см<br>Высота: 85 см<br>Глубина: 48 см<br>Высота сидения: 45 см", "орех", "массив", 4800),
//		"medal" => array("Медальон", "Ширина: 49 см<br>Высота: 96 см<br>Глубина: 54 см<br>Высота сидения: 45 см", "белый + золотая патина", "массив бука", 14900, 1),
		"lui" => array("Луи", "Ширина: 48 см<br>Высота: 112 см<br>Глубина: 58 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик", 16900),
		"richard" => array("Ричард", "Ширина: 69 см<br>Высота: 110 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик", 20700, 1),
		"haip" => array("Хайп", "Ширина: 43 см<br>Высота: 95 см<br>Глубина: 49 см<br>Высота сидения: 45 см", "вишня классическая", "массив", 6000),
		"riko" => array("Рико", "Ширина: 44 см<br>Высота: 105 см<br>Глубина: 52 см<br>Высота сидения: 45 см", "венге", "массив", 6300),
		"noi" => array("Ной", "Ширина: 43 см<br>Высота: 99 см<br>Глубина: 50 см<br>Высота сидения: 45 см", "беленный дуб", "массив", 5100),
		"elegant" => array("Элегант", "Ширина: 46 см<br>Высота: 104 см<br>Глубина: 52 см<br>Высота сидения: 45 см", "венге", "массив", 6700),
		"markiz" => array("Маркиз", "Ширина: 48 см<br>Высота: 91 см<br>Глубина: 58 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик (передние ноги), массив", 8700),
		"flash" => array("Флэш", "Ширина: 42 см<br>Высота: 103 см<br>Глубина: 51 см<br>Высота сидения: 45 см", "беленный дуб", "массив", 5100),
		"relax" => array("Релакс", "Ширина: 55 см<br>Высота: 77 см<br>Глубина: 65 см<br>Высота сидения: 45 см", "венге", "массив", 7000),
		"rony" => array("Ронни", "Ширина: 55 см<br>Высота: 77 см<br>Глубина: 65 см<br>Высота сидения: 45 см", "венге", "массив", 7000, 1),
		"orfeybar" => array("Орфей барный", "Ширина: 43 см<br>Высота: 105 см<br>Глубина: 41 см<br>Высота сидения: 70 см", "венге", "гнутоклееные детали из шпона, массив", 10800, 1),
		"mishelbar" => array("Мишель барный", "Ширина: 42 см<br>Высота: 105 см<br>Глубина: 52 см<br>Высота сидения: 70 см", "венге", "массив", 7700),
		"casper" => array("Каспер", "Ширина: 42 см<br>Высота: 93 см<br>Глубина: 38 см<br>Высота сидения: 85 см", "венге", "гнутоклееные детали из шпона, массив", 5500, 1),
		"vikontkr" => array("Виконт кресло", "Ширина: 66 см<br>Высота: 91 см<br>Глубина: 57 см<br>Высота сидения: 45 см<br>Высота подлокотников: 68 см", "венге", "массив", 9500),
		"viola" => array("Виола", "Ширина: 115 см<br>Высота: 98 см<br>Глубина: 46 см<br>Высота сидения: 45 см", "белый", "массив", 16900),
		"haipbar" => array("Хайп барный", "Ширина: 42 см<br>Высота: 103 см<br>Глубина: 44 см<br>Высота сидения: 70 см", "венге", "массив", 8300),
//		"amadei" => array("Амадей", "Ширина: 46 см<br>Высота: 96 см<br>Глубина: 49 см<br>Высота сидения: 45 см", "белый + золотая патина", "массив", 6800),
		"shevaliekr" => array("Шевалье кресло", "Ширина: 66 см<br>Высота: 91 см<br>Глубина: 57 см<br>Высота сидения: 45 см<br>Высота подлокотников: 68 см", "венге", "массив", 8300),
//		"versalplus" => array("Версаль плюс", "Ширина: 52 см<br>Высота: 97 см<br>Глубина: 64 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик, фанера", 13000),
		"markizkr" => array("Маркиз кресло", "Ширина: 66 см<br>Высота: 91 см<br>Глубина: 58 см<br>Высота сидения: 45 см<br>Высота подлокотников: 68 см", "белый + золотая патина", "ABS-пластик (передние ноги), массив", 10300),
//		"emil" => array("Эмиль", "Ширина: 42 см<br>Высота: 91 см<br>Глубина: 53 см<br>Высота сидения: 45 см", "вишня классическая", "массив", 4200),
		"kvadro" => array("Квадро", "Ширина: 34 см<br>Высота сидения: 45 см", "белый", "массив", 2500),
		"jambo" => array("Джамбо", "Ширина: 35 см<br>Высота сидения: 45 см", "венге", "массив", 2800),
		"rondo" => array("Рондо", "Ширина: 35 см<br>Высота сидения: 45 см", "венге", "массив", 2000),
		"rondosoft" => array("Рондо мягкий", "Ширина: 35 см<br>Высота сидения: 45 см", "венге", "массив", 2800, 1),
		"rondobar" => array("Рондо барный", "Ширина: 35 см<br>Высота сидения: 70 см", "белый", "массив", 3600),
		"rondobarsoft" => array("Рондо мягкий барный", "Ширина: 35 см<br>Высота сидения: 75 см", "белый", "массив", 4100, 1),
		"pufik" => array("Пуфик", "Ширина: 54 см<br>Глубина: 42 см<br>Высота сидения: 45 см", "белый", "массив", 6000),
		"exclusive" => array("Эксклюзив", "Ширина: 54 см<br>Глубина: 42 см<br>Высота сидения: 45 см", "белый + золотая патина", "ABS-пластик (ноги), массив", 6900),
		"skamia" => array("Скамья", "Ширина: 65 см<br>Высота: 54 см<br>Глубина: 45 см<br>Высота сидения: 45 см", "белый", "массив", 6000),
		"maestro" => array("Маэстро банкетка", "Ширина: 37 см<br>Высота сидения: 45 см", "белый + золотая патина", "массив", 6300),
		"compliment" => array("Комплимент банкетка", "Ширина: 35 см<br>Высота сидения: 40 см", "белый + золотая патина", "ABS-пластик", 7500),
		"plechnitsa" => array("Плечница", "Ширина: 47 см<br>Высота: 97 см<br>Глубина: 30 см", "венге, белый", "массив", 2500),
		"tsvetochnitsa" => array("Цветочница", "Высота: 110 см", "белый + золотая патина", "ABS-пластик", 13700),
		"podstavka" => array("Подставка для цветов", "Высота: 85 см", "белый + золотая патина", "массив, МДФ", 2800)
	)
);

?>
