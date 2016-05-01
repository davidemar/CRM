-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 01, 2016 at 11:32 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`) VALUES
('david', 'david');

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `factura_id` varchar(6) NOT NULL DEFAULT '',
  `usuario_id` varchar(6) NOT NULL DEFAULT '',
  `orden_id` varchar(6) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE `orden` (
  `orden_id` varchar(6) NOT NULL,
  `idproduct` varchar(6) NOT NULL,
  `producto` varchar(20) NOT NULL,
  `usuario` varchar(6) NOT NULL,
  `impuesto` decimal(3,2) DEFAULT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `subtotal` decimal(9,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `cant` decimal(6,2) DEFAULT NULL,
  `total` decimal(9,2) DEFAULT NULL,
  `costo_envio` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orden`
--

INSERT INTO `orden` (`orden_id`, `idproduct`, `producto`, `usuario`, `impuesto`, `precio`, `subtotal`, `fecha`, `cant`, `total`, `costo_envio`) VALUES
('1', '', '', 'mrilyn', '9.99', '100.00', '110.00', '2016-04-14', '1.00', '210.00', '100.00'),
('10', 'hazTub', 'hazTubular', 'mrilyn', '0.10', '10000.00', '11000.00', '2016-04-30', '1.00', '12000.00', '999.99'),
('11', 'hazTub', 'hazTubular', 'mrilyn', '0.10', '10000.00', '11000.00', '2016-04-30', '1.00', '12000.00', '999.99'),
('12', 'rodill', 'rodillo', 'mrilyn', '0.10', '50000.00', '55000.00', '2016-05-01', '1.00', '56000.00', '999.99'),
('13', 'Lecho_', 'Lecho_Fluido', 'mrilyn', '0.10', '0.00', '0.00', '2016-05-01', '1.00', '1000.00', '999.99'),
('14', 'Flash', 'Flash', 'mrilyn', '0.10', '0.00', '0.00', '2016-05-01', '1.00', '1000.00', '999.99'),
('15', 'hazTub', 'hazTubular', 'mrilyn', '0.10', '10000.00', '11000.00', '2016-05-01', '1.00', '12000.00', '999.99'),
('16', 'Lecho_', 'Lecho_Fluido', 'mrilyn', '0.10', '0.00', '0.00', '2016-05-01', '1.00', '1000.00', '999.99'),
('17', 'Tambor', 'TamboresRotativos', 'mrilyn', '0.10', '0.00', '0.00', '2016-05-01', '1.00', '1000.00', '999.99'),
('18', 'Escama', 'EscamadoraDeRodillo', 'mrilyn', '0.10', '0.00', '0.00', '2016-05-01', '1.00', '1000.00', '999.99'),
('19', 'dobleE', 'dobleEjeDepalas', 'mrilyn', '0.10', '0.00', '0.00', '2016-05-01', '1.00', '1000.00', '999.99'),
('2', '', '', 'mrilyn', '9.99', '100.00', '110.00', '2016-04-13', '1.00', '210.00', '100.00'),
('20', 'Pastil', 'Pastilladora_De_Disc', 'mrilyn', '0.10', '50000.00', '55000.00', '2016-05-01', '1.00', '56000.00', '999.99'),
('21', 'Pastil', 'Pastilladora_De_Disc', 'mrilyn', '0.10', '50000.00', '55000.00', '2016-05-01', '1.00', '56000.00', '999.99'),
('22', 'Banda_', 'Banda_De_Cepillado', 'mrilyn', '0.10', '0.00', '0.00', '2016-05-01', '1.00', '1000.00', '999.99'),
('23', 'Doble_', 'Doble_Eje', 'mrilyn', '0.10', '90000.00', '99000.00', '2016-05-01', '1.00', '100000.00', '999.99'),
('24', 'Dester', 'Dester', 'mrilyn', '0.10', '70000.00', '77000.00', '2016-05-01', '1.00', '78000.00', '999.99'),
('25', 'Compen', 'Compen', 'mrilyn', '0.10', '30000.00', '33000.00', '2016-05-01', '1.00', '34000.00', '999.99'),
('26', 'Lecho_', 'Lecho_Fluido', 'mrilyn', '0.10', '90000.00', '99000.00', '2016-05-01', '1.00', '100000.00', '999.99'),
('27', 'Banda_', 'Banda_De_Cepillado', 'mrilyn', '0.10', '60000.00', '66000.00', '2016-05-01', '1.00', '67000.00', '999.99'),
('28', 'Ciclon', 'Ciclon', 'mrilyn', '0.10', '45000.00', '49500.00', '2016-05-01', '1.00', '50500.00', '999.99'),
('3', '', '', 'mrilyn', '9.99', '100.00', '110.00', '2016-03-13', '1.00', '120000.00', '100.00'),
('4', '', '', 'LKNLK', '8.00', '9.00', '78.00', '2016-12-13', '7.00', '7.00', '2.00'),
('5', '', '', 'David', '9.99', '100.00', '110.40', '2016-07-15', '1.00', '310.40', '200.00'),
('6', '', '', 'LKNLK', '9.99', '21.00', '21.00', '2016-09-16', '100.00', '120000.00', '200.00'),
('7', '', 'hola', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('8', '', '', 'kjnkjn', '7.00', '87.00', '100.00', '2016-11-27', '600.00', '700.00', '80.00'),
('9', '', 'rodill', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `producto_id` varchar(6) NOT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `ncompania` varchar(15) DEFAULT NULL,
  `enstock` decimal(8,2) DEFAULT NULL,
  `descripcion` longtext CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`producto_id`, `precio`, `ncompania`, `enstock`, `descripcion`) VALUES
('Banda_', '60000.00', 'DavidMarts', '200.00', 'Banda de Cepillado\r\n\r\nDesde que Royal GMF-Gouda comenzó a desarrollar esta máquina en 1975 se han instalado más de 300 separadoras en seco Brush-‘n-Belt. La mayoría de estas máquinas están integradas en líneas industriales de pelado a vapor, que pueden estar compuestas por un pelador a vapor Sepa-Stator de Royal GMF-Gouda, una separadora de mondas en seco Brush’n-Belt, una bomba para los residuos (mondas) y un sistema de lavado final. En la peladora a vapor el producto se somete a un tratamiento intensivo y extremadamente corto.'),
('Ciclon', '45000.00', 'compat', '100.00', 'Ciclones de Alta Eficiencia\r\nEl equipo de recolección de polvo que se usa con mayor frecuencia es el ciclón. Los ciclones remueven el material particulado de la corriente gaseosa, basándose en el principio de impactación inercial, generado por la fuerza centrífuga. La figura 1 muestra el movimiento de las partículas mayores hacia las paredes del ciclón debido a la fuerza centrífuga.\r\n'),
('Cocedo', '2000.00', 'DavidMarts', '100.00', 'Cocedor de Inyección\r\n\r\nEl Cocedor de Inyección de Royal GMF-Gouda sirve para cocer o hidrolizar pastas viscosas mediante inyección directa de vapor en un mezclador estático. Diseñado para la industria alimentaria, destaca su simplicidad conceptual, ausencia de partes en movimiento y facilidad de limpieza.'),
('Compen', '30000.00', 'senseye', '100.00', 'Compensadores de dilatación\r\nAxiales\r\n• Para calefacción, aire acondicionado, agua caliente sanitaria y vapor de baja presión.\r\n• Polivalentes para aplicaciones industriales.\r\n• Para conductos a baja presión.\r\n• Con fuelle de onda gigante. Para caldereria pesada.\r\n• Para aplicaciones industriales. Grandes diametros.\r\nAngulares y Cardán\r\nPolivalentes para aplicaciones industriales\r\nLaterales de Caucho\r\nAntivibratorio de fuelle en elastómero\r\nEn PTFE (Teflón)\r\nTextiles\r\nCarretes de desmontaje telescópicos\r\n'),
('Cuchil', '70000.00', 'senseye', '100.00', 'Cuchillas rascadoras\r\nIndicadas para eliminar revestimientos como alfombras, fieltro de aguja, PVC y planchas de corcho en paredes y suelos, restos de pegamento en moquetas, pegamentos elásticos, restos de yeso y de revoques\r\nHCS, extra afilado con protección de las cuchillas\r\nAdecuados para GSE 300 E Professional; PSE 150; PSE 180 E; PSE 220 E'),
('Dester', '70000.00', 'acme', '120.00', 'Desterronador\r\n\r\nEl desterronador de Ingetecsa está pensado para eliminar los apelmazamientos y aglomerados generados en cierto tipo de productos y procesos, y reducirlos en un producto de más fácil manejo sin molerlos. Originalmente fueron diseñados para romper los terrones de polímero que aparecen en la descarga de algunos secaderos de banda, pero rápidamente se le descubrieron otras aplicaciones y actualmente se utilizan para desapelmazar todo tipo de tortas de filtro.\r\n'),
('Doble_', '90000.00', 'altar', '60000.00', 'Secadero/Enfriador de Doble Eje de Palas GPD\r\n\r\nEl secadero/enfriador de doble eje de palas de Royal GMF-Gouda es una máquina que tiene mucho que ofrecer a casi todo tipo de materiales. ¿secar o enfriar? La transmisión térmica indirecta en continuo que tiene lugar en el interior del secadero de palas permite producir un producto de calidad con una eficiencia sorprendente y unos costes de mantenimiento mínimos. ¿Materiales pulverulentos, granulados o pastosos? El secadero de doble eje de palas esta construido para tratar cualquier producto con el máximo cuidado - hasta incluso materiales tóxicos.\r\n'),
('Enfria', '90000.00', 'Alto', '6000.00', 'Enfriador Multicámara\r\n\r\nEl enfriador multi-cámara de INGETECSA es un equipo capaz de enfriar grandes caudales y de manejar temperaturas hasta 1000ºC. Admite grandes saltos térmicos y absorbe fluctuaciones en caudal y propiedades de producto. Se trata de un tambor rotativo subdividido en secciones de circulación de producto rodeadas de una cámara de agua. La rotación transporta el producto y cucharea el agua en película delgada sobre las paredes de las cámaras. Gracias al sofisticado sistema de conducción del agua y al diseño de las cámaras de producto, no son necesarios materiales refractarios incluso con temperaturas muy elevadas. Enfriamiento por agua a presión atmosférica. Construcción compacta y muy robusta. Admite inertización.'),
('Escama', '10000.00', 'altar', '200.00', 'Escamadora de Rodillo\r\n\r\nLa escamadora de rodillos de Royal GMF-Gouda se utiliza principalmente en las industrias química y alimentaria para convertir una fusión en un producto sólido. Además, gracias a su diseño hermético este equipo es ideal para el procesamiento de productos tóxicos o de mal olor.\r\n'),
('Flash', '80000.00', 'Tecsa', '200.00', 'Spiral Flash (Flash Toroidal)\r\n\r\nEl Spiral Flash Dryer desarrollado por Torftech es un secadero convectivo altamente eficiente que une las ventajas de un Secadero Flash a las de un Lecho Fluido. El breve tiempo de permanencia y la elevada turbulencia aseguran un tratamiento cuidadoso del producto, unido a una alta velocidad de evaporación. Además, la elevada velocidad de transferencia de calor y masa permite fabricar unidades excepcionalmente compactas. Otras características del Spiral Flash dryer son la total ausencia de piezas en movimiento, facilidad de mantenimiento, exactitud en el control de proceso y buena eficiencia térmica también con productos heterogéneos.\r\n'),
('Haztub', '10000.00', 'Asupplier', '200.00', 'Secadero de Haz Tubular\r\n\r\nEl diseño del tambor de haz tubular de Ingetecsa ofrece grandes superficies interiores de secado y un excelente factor de transferencia entre el fluido térmico y el producto. La gran ventaja frente a los tambores rotativos convencionales consiste en el hecho de que es indirecto y no utiliza gases calientes. Los vahos que salen del secadero son casi en su totalidad el agua evaporada del producto. Esto reduce enormemente el caudal de vahos y, por tanto, los equipos de depuración de gases. Este aspecto es mucho más importante cuando se manejan productos que desprenden olores o componentes nocivos, y requieren un tratamiento de gases costoso.'),
('Lavado', '45000.00', 'logia', '1000.00', 'Lavador Tipo Venturi\r\nLavador de gases tipo Venturi es un depurador de tipo húmedo de alta eficiencia, particularmente adecuada cuando la materia particulada es pegajosa, inflamable o altamente corrosiva. Lavadores venturi se utilizan sobre todo para limpiar gases de combustión procedentes de la incineración de residuos y procesos en los cuales se tratan o reciclan suspensiones de alto contenido de sólidos, como por ejemplo en el procesamiento de minerales, la desulfuración, generación de energía térmica etc. Disponible en diferentes tamaños y una amplia gama de materiales de construcción. Según el consumo de energía para la limpieza de gas (velocidad del gas en la garganta del tubo Venturi y el consumo específico de agua) lavadores venturi pueden ser '),
('Lecho_', '90000.00', 'Tesla', '100.00', 'Lecho Fluido\r\n\r\nLos Lechos Fluidos estáticos de Ingetecsa están diseñados para proporcionar elevados rendimientos de evaporación con tiempos de permanencia relativamente cortos, un tratamiento mecánico sumamente cuidadoso por ausencia de piezas en movimiento y de roce entre partículas, una alta flexibilidad y adaptabilidad. Al ser diseñados a medida, nuestros lechos fluidos permiten gran variedad de configuraciones y combinaciones con otros equipos.\r\n'),
('Mezcla', '30000.00', 'Benq', '100.00', 'Mezclador/Granulador de Doble Eje DWG\r\n\r\nEl Mezclador/Granulador de doble eje de palas Ingetecsa es un equipo diseñado a medida. Se trata de un aparato robusto y de bajo mantenimiento para trabajo en contínuo, que permite generar gránulos de entre 1,5 y 4mm y cuyas capacidades van desde los 5m3/h hasta los 200m3/h. Para casos especiales se pueden fabricar de mayor tamaño. Al estar hecho a medida, el Mezclador granulador Ingetecsa se adecúa a las características y necesidades de cada cliente y producto. Entre las muchas adaptaciones de nuestros equipos destacan las cunas calefactadas o enfriadas, la inclusión de toberas de pulverización, las ejecuciones estancas o los detalles de diseño para reducir mantenimiento.'),
('Molino', '65000.00', 'acme', '200.00', 'Molino Tamizador\r\n\r\nEl rascado del producto que ha pasado por un proceso de secado de rodillo suele resultar en una película o en escamas gruesas. El molino tamizador de Royal GMF-Gouda puede ser instalado al final de la línea de secado para transformar éstas en partículas de granulometría uniformes. A menudo se emplea para el procesamiento completo de alimentos para bebés o líneas de procesamiento de patatas.'),
('Pastil', '50000.00', 'davidSales', '400.00', 'Escamadora de Rodillo\r\n\r\nLa escamadora de rodillos de Royal GMF-Gouda se utiliza principalmente en las industrias química y alimentaria para convertir una fusión en un producto sólido. Además, gracias a su diseño hermético este equipo es ideal para el procesamiento de productos tóxicos o de mal olor.\r\n'),
('Pelado', '10000.00', 'Davidmarts', '300.00', 'El pelador a vapor Odyssey \r\n\r\nes la última incorporación a la cartera de peladores a vapor de TOMRA. Es la solución de pelado a vapor más rentable e ideal para empresas de procesamiento de temporada y para los mercados emergentes. \r\n\r\nEs un pelador de alta calidad que está diseñado específicamente para los procesadores de temporada de fruta y verduras como las patatas, remolacha roja, calabaza, apio, coles, papaya, mango y chiles.'),
('Rodill', '50000.00', 'Asupplier', '200.00', 'Secador de rodillo\r\nEl proceso de secado industrial de alimentos existe desde hace más de un siglo. ANDRITZ Gouda se ha especializado desde sus inicios en líneas de procesamiento de alimentos, en base a la tecnología avanzada del secado de rodillo. Hoy en día se utiliza para una amplia gama de productos, desde comida para bebés hasta productos químicos. Este método de secado indirecto y en continuo permite cortos periodos de exposición al calor, evaporándose todo el líquido durante un único giro del rodillo. Como resultado, el riesgo de daños en el producto queda prácticamente eliminado a la vez que se mantienen las propiedades únicas del producto, como sabor, olor, textura, etc.'),
('SecEnd', '40000.00', 'Asupplier', '200.00', 'El secadero/enfriador de doble eje de palas\r\nEl secadero/enfriador de doble eje de palas ANDRITZ Gouda es una máquina que tiene mucho que ofrecer a casi todo tipo de materiales. ¿secar o enfriar? La transmisión térmica indirecta en continuo que tiene lugar en el interior del secadero de palas permite producir un producto de calidad con una eficiencia sorprendente y unos costes de mantenimiento mínimos. ¿Materiales pulverulentos, granulados o pastosos? El secadero de doble eje de palas esta construido para tratar cualquier producto con el máximo cuidado - hasta incluso materiales tóxicos.'),
('Silo_d', '60000.00', 'acme', '500.00', 'Silo Dosificador\r\n\r\nLa amplia experiencia de Ingetecsa en la industria azucarera nos ha permitido desarrollar silos de pulpa especiales para conseguir una alimentación contínua a los secaderos. Los silos dosificadores convierten una llegada irregular de producto descargado de prensas en alimentación regular, haciendo de pulmón de hasta 80 m3de capacidad, y transformando en continuos procesos con cierta discontinuidad. El silo puede ser también empleado como pulmón dosificador para otros productos fibrosos y apelmazantes.'),
('Tambor', '60000.00', 'ventasrodriguez', '100.00', 'Tambores Rotativos\r\n\r\nLos tambores Ingetecsa son de construcción sencilla y robusta, de fácil manejo y con capacidad para adaptarse a caudales y condiciones fluctuantes. Los tambores rotativos pueden, según requiera el proceso, funcionar con calentamiento directo o indirecto. El equipo interior se adapta a la reología del producto con el objetivo de maximizar el intercambio de calor y masa, repartiendo el producto de forma homogénea y consiguiendo un llenado máximo sin incurrir en aglomeraciones. Ofrecemos un amplio abanico de elementos de alimentación, dosificación, estanqueización y transporte, que unen los aparatos integrantes del sistema.'),
('Valvul', '20000.00', 'Benq', '100.00', 'Válvulas Rotativas Autolimpiantes\r\n\r\nLas válvulas rotativas de Ingetecsa son equipos robustos especialmente indicados para manejar productos de reología difícil. El diseño se adapta a las propiedades de cada producto. Entre nuestras válvulas rotativas de bajo mantenimiento para aplicaciones especiales destacan las alveolares con escarbador (vaciador de alvéolos), apropiadas para productos adherentes o pastosos. Habitualmente nuestras válvulas se utilizan para diferencias de presión de hasta 60 mbar, temperaturas de producto hasta 250°C y caudales hasta 300 m3/h. Los materiales, cierres de eje y otros detalles constructivos son adaptables a los requerimientos especiales de cada aplicación.'),
('Vises_', '40000.00', 'acme', '60.00', 'Vises de Transporte Especiales\r\n\r\nINGETECSA ofrece soluciones a productos o procesos complejos para los que los visinfines de transporte convencionales no son aptos. Nuestros vises especiales están indicados para procesos de tratamiento térmico y se adaptan a las necesidades del cliente: vises de calentamiento, vises de enfriamiento, vises de disgregación, vises de vacío...\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE `proveedor` (
  `proveedor_id` varchar(6) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `horario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `queja`
--

CREATE TABLE `queja` (
  `queja_id` varchar(6) DEFAULT NULL,
  `usuario_id` varchar(6) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `queja` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queja`
--

INSERT INTO `queja` (`queja_id`, `usuario_id`, `fecha`, `queja`) VALUES
('1', 'mrilyn', '2016-04-22', 'esta muy feo el sistema'),
('2', 'mrilyn', '2016-04-22', 'se ve mal'),
('3', 'fresen', '2016-04-22', 'feo sistema\r\n'),
('4', 'mrilyn', '2016-04-30', 'asdasdasdasd'),
('5', 'mrilyn', '2016-04-30', 'esta muy bonito'),
('6', 'mrilyn', '2016-04-30', 'esta muy bonito'),
('7', 'mrilyn', '2016-05-01', 'hola'),
('8', 'mrilyn', '2016-05-01', 'Huele feo la pagina'),
('9', 'mrilyn', '2016-05-01', 'Huele mal la pagina');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` varchar(6) NOT NULL,
  `ncompania` varchar(15) DEFAULT NULL,
  `contrasena` varchar(14) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pnombre` varchar(15) DEFAULT NULL,
  `papellido` varchar(15) DEFAULT NULL,
  `sapellido` varchar(15) DEFAULT NULL,
  `calle` varchar(10) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `colonia` varchar(10) DEFAULT NULL,
  `ciudad` varchar(15) DEFAULT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `ncompania`, `contrasena`, `email`, `pnombre`, `papellido`, `sapellido`, `calle`, `numero`, `colonia`, `ciudad`, `dia`) VALUES
('asdasd', 'lkamsd', 'lknasd', 'lknasd@hotmail.com', 'klasnd', 'lknad', 'lknas', 'lknasd', 4, 'lknasd', 'lknasd', '2016-05-01'),
('d1234', 'pemex', 'hola1234', 'jeje@hotmail.com', 'david', 'martinez', 'hernandez', 'oaxaca', 103, 'asda', 'lkasnd', '2016-01-14'),
('david', 'lkasd', 'lknasd', 'lknasd@hotmail.com', 'lknasd', 'knasd', 'lknasd', 'lknasd', 6, 'as', 'lkansd', '2016-05-01'),
('fabian', 'lknasd', 'hola', 'fbian@hotmail.com', 'lkansd', 'lknasd', 'lknasd', 'lknad', 4, 'lkansd', 'lknasda', '2016-02-09'),
('jeje', 'lkansd', 'lknasd', 'jeje@hotmail.com', 'lkansd', 'lknasd', 'lknasd', 'kansd', 12, 'lkansd', 'lknasd', '2016-04-26'),
('juana', 'telcel', 'hola', 'juana@hotmail.com', 'juana', 'lacubana', 'jeje', '9', 9, 'jeje', 'jiji', '2016-05-01'),
('lalo12', 'asda', 'lknasd', 'lalo@hotmail.com', 'lkansd', 'lknasd', 'lknasd', 'lknasd', 4, 'lknasd', 'lknasda', '2014-06-17'),
('lkasa', 'jeje', ';mlas', 'lkamsda@hotmail.com', 'lasd', 'lkmas', 'lknas', 'lknas', 8, 'lkasd', 'lknad', '2016-05-01'),
('luisa', 'pemex', 'hola', 'luisa@hotmail.com', 'luisa', 'fer', 'jeje', '9', 2, 'uni', 'aldama', '2016-05-01'),
('mariel', 'zetas', 'hola', 'mariel@hotmail.com', 'alskdna', 'lknas', 'lkasd', 'lknasd', 145, 'lkasd', 'lknasda', '2016-04-20'),
('martin', 'paperinc', 'hola', 'paperinc@hotmail.com', 'martin', 'gonzalez', 'gonzalez', '34', 5, 'Unidad Nac', 'madero', '2016-05-01'),
('mrilyn', 'cdg', 'hola', 'marilyn@hotmail.com', 'marilyn', 'garcia', 'medina', 'morelos', 898, 'morelos', 'aldama', '2016-04-13'),
('mtrx', 'avon', 'hola', 'jabon@hotmail.com', 'lkasd', 'lkas', 'llkansd', 'lknaas', 9, 'llknsdl', 'lknasda', '2016-05-01'),
('sas', 'aasd', 'asdasd', 'asdasd@hotmail.com', 'asdasd', 'aads', 'asasd', 'asasd', 25, 'asdad', '2asdasd', '2016-05-01'),
('sasd', 'asdas', 'sd', 'ass@hotmail.com', 'lakms', 'lkamsa', 'lkmsdasd', '8', 8, 'laksldmas', 'lkamdas', '2016-05-01'),
('tajr', 'lkansd', 'lknasd', 'lknasd@hotmail.com', 'lknasd', 'lknasd', 'lknasd', 'lknasd', 4, 'kansd', 'lknasda', '2016-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `vipUsuario`
--

CREATE TABLE `vipUsuario` (
  `usuarioid` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vipUsuario`
--

INSERT INTO `vipUsuario` (`usuarioid`) VALUES
('LKNLK'),
('mrilyn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`factura_id`,`usuario_id`,`orden_id`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`orden_id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indexes for table `vipUsuario`
--
ALTER TABLE `vipUsuario`
  ADD PRIMARY KEY (`usuarioid`);