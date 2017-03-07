CREATE DATABASE  IF NOT EXISTS `moviehouse` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `moviehouse`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: moviehouse
-- ------------------------------------------------------
-- Server version	5.6.34-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` longtext,
  `date` datetime DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (11,'Siedem minut po północy','<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://klapserka.pl/wp-content/uploads/2016/12/a-monster-calls-tiff-2-600x288.jpg\" alt=\"\" width=\"600\" height=\"288\" /></p>\r\n<p style=\"text-align: justify;\">Film &ndash; jako wyraz wrażliwości tw&oacute;rcy i dzieło sztuki &ndash; pełni niejednokrotnie funkcję oczyszczającą. Pomaga stawić czoła pytaniom, na kt&oacute;re nie umiemy lub nie chcemy odpowiedzieć, zmierzyć się z dylematami, kt&oacute;re nami miotają, wreszcie &ndash; uporać się z emocjami, z kt&oacute;rymi sobie nie radzimy. Taki jest właśnie najnowszy film J.A. Bayony, hiszpańskiego reżysera, kt&oacute;ry po sukcesie&nbsp;<em>Sierocińca</em>,&nbsp;serialu <em>Dom grozy</em> oraz oscarowego dramatu&nbsp;<em>Niemożliwe&nbsp;</em>coraz sprawniej porusza się po pełnym blichtru Hollywood. Nie tracąc, co ważne, tego, co ma najcenniejsze: wyobraźni, kt&oacute;ra pomaga mu tworzyć lub adaptować historie w taki spos&oacute;b, by zachwycały nie tylko formą, ale i przekazem.</p>\r\n<p style=\"text-align: justify;\"><span id=\"more-7019\"></span><em>Siedem minut po p&oacute;łnocy</em>&nbsp;najpierw zaintrygowało mnie zwiastunem. Głęboki, mocny głos Liama Neesona, kt&oacute;ry w filmie &bdquo;użycza&rdquo; sobie tytułowy Potw&oacute;r (ang. tytuł to&nbsp;<em>A Monster Calls</em>) wypowiadający kwestię &bdquo;Wow, indeed&rdquo; (brytyjska klasyka skąpana w potocyzmie, klasa), chłopiec rozmawiający z drzewem, a w tle kadry, efekty i barwy, jakie widzą tylko Hiszpanie. Wyglądało pięknie. I brzmiało pięknie, bo ścieżka dźwiękowa Fernanda Velazqueza, kt&oacute;ra zachwyciła mnie już przed seansem, okazała się idealnie dostrojona do emocji, kt&oacute;re niesie ta historia.</p>\r\n<p style=\"text-align: justify;\">Historia z pozoru prosta, jaką kino nie raz i nie dwa nam pokazywało, a kt&oacute;ra dla wielu z nas jest niepokojąco bliska. Tym, co odr&oacute;żnia ją od dziesiątek podobnych opowieści, jest wplątanie w ten ogromny dramat młodziutkiego chłopca, niedopuszczającego do siebie myśli, że jego chora mama wkr&oacute;tce odejdzie, baśniowej metaforyki. To ona jest tu medium przekazującym uniwersalne prawdy i wartości, o kt&oacute;rych wszyscy doskonale wiemy i kt&oacute;re r&oacute;wnie doskonale chowamy głęboko w sobie, nie potrafiąc, a bardziej nie chcąc przyjąć ich do wiadomości.</p>','2017-01-08 01:51:00','Film','kamilos3092'),(12,'Sully','<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://klapserka.pl/wp-content/uploads/2016/12/10257307_watch-the-trailer-for-sully-a-movie-about_86396936_m.jpg\" alt=\"\" width=\"600\" height=\"288\" /></p>\r\n<p>Nie&nbsp;mogę nazwać się wielką fanką film&oacute;w Clinta Eastwooda. Niby nic do reżysera nie mam, szanuję ogromnie jego pracę i niegasnącą energię do tworzenia,&nbsp;kilka jego film&oacute;w autentycznie mnie poruszyło (<em>Rzece tajemnic&nbsp;</em>dałam nawet najwyższą punktację, a&nbsp;<em>Co się wydarzyło w Madison County</em> uważam za jeden z najlepszych melodramat&oacute;w w historii kina), ale ostatnie tytuły &ndash;&nbsp;<em>Invictus</em>,&nbsp;<em>Medium</em>,&nbsp;<em>J. Edgar</em>,&nbsp;<em>Snajper</em> &ndash; mimo doborowej obsady i świetnej realizacji zupełnie mnie nie porwały. Mimo to do&nbsp;<em>Sully&rsquo;ego</em> podeszłam bez uprzedzeń i także bez oczekiwań.&nbsp;Choć i z nimi, myślę, spodobałby mi się tak bardzo jak się spodobał, bo to naprawdę sensownie pomyślany film.</p>\r\n<p>Najbardziej &ndash; w strukturze. To, w jaki spos&oacute;b Eastwood rozłożył w&nbsp;filmie akcenty, jest dowodem na to, że nadal można bawić się narracją tak, by nie tylko nie skrzywdzić historii, ale i dać pozostałym tw&oacute;rcom &ndash; przede wszystkim montażystom &ndash; ogromne pole manewru. Dzięki zgrabnemu rozplanowaniu poszczeg&oacute;lnych części opowieści widz w tym kluczowym momencie, decydującym o rozproszeniu bądź utrzymaniu uwagi, otrzymuje zaproszenie do akcji właściwej. Akcji, kt&oacute;ra trzyma za gardło i wywołuje silne emocje mimo iż jest tylko retrospekcją, w dodatku z doskonale znanym finałem. To też jest pewna sztuka umieć opowiadać historię, kt&oacute;rej zakończenie jest właściwie punktem wyjścia całego filmu. Łatwo wtedy znużyć, przegadać film, rozwodnić historię. Eastwoodowi udaje się tego uniknąć i nie tylko przełożyć rzeczywistą historię na język filmu, ale i powiedzieć o niej coś więcej. Dzięki temu&nbsp;<em>Sully</em> to nie tylko film o precedensowym, bohaterskim wyczynie pilota samolotu pasażerskiego, ale też głos w dyskusji na temat (niesłusznej) niższości człowieka względem procedur, zaufania nie tyle profesjonalizmowi, co doświadczeniu, intuicji, czynnikowi ludzkiemu.</p>','2017-01-08 01:53:11','Film','kamilos3092'),(13,'Zwierzęta nocy','<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://klapserka.pl/wp-content/uploads/2016/11/nocturnal-animals-600x288.jpg\" alt=\"nocturnal-animals\" /></p>\r\n<p>Czy może być coś piękniejszego od filmu, kt&oacute;ry hipnotyzuje obrazem, czaruje dźwiękiem, zachwyca grą aktorską i jeszcze absorbuje&nbsp;swoją historią? Tom Ford po raz kolejny udowodnił, że sztuka nie kończy się dla niego na modzie, a projektowanie ubrań to doskonały punkt wyjścia do kreowania&nbsp;fikcyjnych świat&oacute;w, w kt&oacute;rych sceneria, kostiumy, charakteryzacja, rekwizyty i światło mają r&oacute;wnorzędne prawo bytu co historia czy jej bohaterowie.&nbsp;<em>Zwierzęta nocy</em> to prawdziwa uczta dla zmysł&oacute;w, choć przyjemność uczestniczenia w niej ma zdecydowanie mało wsp&oacute;lnego z psychicznym, a nawet fizycznym komfortem.</p>\r\n<p><em>Zwierzęta nocy</em> to w zasadzie historia o tym, jak kobieta czyta książkę. Uśmiecham się, gdy to piszę i uśmiechają się pewnie wszyscy, kt&oacute;rzy film już widzieli, bo ten absurdalny i wiejący potworną nudą fakt podany jest przez reżysera w tak wyrafinowany, zgrabny spos&oacute;b, że przyswaja się go z wypiekami na twarzy i niewyobrażalną wręcz ciekawością. Dwutorowość fabuły filmu dostarcza nie tylko kontekstu dla historii gł&oacute;wnej bohaterki, ale i emocji, kt&oacute;rych się zupełnie nie spodziewany. Ten thriller zamknięty w psychologicznym dramacie zmęczonej życiem artystki, kt&oacute;ra odkrywa, że świat jest i będzie dla niej już zawsze miejscem zbyt ciasnym, to pełnokrwisty obraz tego, jak niepostrzeżenie i przypadkowo wkrada się w nasze życie zło, a sprawiedliwość &ndash; w jakiejkolwiek by nie przyszła formie &ndash; nie zawsze daje spełnienie. To dosłowne brzmienie wątku &bdquo;teksańskiego&rdquo; idealnie spaja się przy tym ze znaczeniem historii&nbsp;Susan, sprowadzającym się do smutnej prawdy, że samotność to w przypadku os&oacute;b głodnych bycia raczej stan umysłu niż fizyczności, a zaspokojenie go &ndash; jeśli w og&oacute;le możliwe &ndash; wiąże się z ogromnymi, może zbyt ogromnymi wyrzeczeniami.</p>','2017-01-08 01:54:29','Film','kamilos3092'),(14,'Stranger Things – czy warto oglądać?','<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://klapserka.pl/wp-content/uploads/2016/08/Stranger-Things-600x288.jpg\" /></p>\r\n<p><em>Stranger Things.</em> Nowy tytuł Netflixa, kt&oacute;ry w ciągu zaledwie kilku dni zelektryzował Internet, po trzech tygodniach od premiery ma już miliony fan&oacute;w na całym świecie. I nic dziwnego. Serial braci Duffer to dow&oacute;d na to, że aby zainteresować widza, wcale nie trzeba zaglądać w przyszłość. Wystarczy wziąć go za rękę, zawr&oacute;cić i przenieść do czas&oacute;w, kt&oacute;re wspomina z nostalgią i szerokim uśmiechem na twarzy. Jego dzieciństwa.</p>\r\n<p>Gdy dziś wspominamy, oglądamy lub czytamy o latach 80. i 90., mamy często wrażenie, że to świat z jakiejś innej planety. Dzieci spędzające całe dni na podw&oacute;rku, akrobacje na trzepakach, skakanka i guma, dwa ognie, &bdquo;zośka&rdquo;, podchody. Ogniska na polance w lesie. Wsp&oacute;lne, rodzinne posiłki, lody apacze za 40 gr., smak gumy turbo i historyjki z donalda, piccolo na urodziny, paczki mikołajkowe ze słodyczami z zakładu pracy taty. Walkie-talkie, kasety wideo i nagrywanie piosenek z radia na magnetofon.&nbsp;Dragon Ball, jojo, tamagotchi. Wyszukiwanie informacji w szkolnej bibliotece, tachanie encyklopedii i słownik&oacute;w na lekcje, bo kto tam słyszał o jakimś internecie.&nbsp;To moje dzieciństwo. Było dużo radości, trochę łez i ogromne oczekiwanie na dorosłość. Osiemnastka miała zmienić wszystko. Zmieniła przede wszystkim niecierpliwość &ndash; w tęsknotę za tym, co bezpowrotnie mija.</p>','2017-01-08 01:55:58','Serial','kamilos3092'),(15,'Frank Grillo mówi ','<p>Jeśli liczyliście na to, że Crossbones w kinowym uniwersum Marvela jeszcze pokaże, na co go stać, to niestety musicie przygotować się na poważne rozczarowanie. Postać raczej zniknie z MCU. A w każdym razie nie zagra go już Frang Grilo.</p>\r\n<p style=\"text-align: center;\"><img src=\"http://1.fwcdn.pl/an/np/867323/7085_1.2.jpg\" /></p>\r\n<p>O możliwość kontynuacji wsp&oacute;łpracy z Marvelem aktor został ostatnio zapytany przez dziennikarzy portalu Collider. Grillo nie wydawał się entuzjastą dalszej wsp&oacute;łpracy. Stwierdził, że dla takich postaci jak ta grana przez niego, cykl Marvela to ślepa uliczka. Dodał więc, że nie ma ochoty na powr&oacute;t w roli Crossbonesa i odrzucił ofertę studia.</p>\r\n<p>Grillo studzi też entuzjazm fan&oacute;w jego innej roli &ndash; Leon Barnesa z cyklu \"Noc oczyszczenia\". Aktor powiedział, że wr&oacute;ci do tej serii tylko pod dwoma warunkami. Po pierwsze James DeMonaco zn&oacute;w musi stanąć za kamerą. Po drugie projekt musi mieć fajny pomysł fabularny. W innym przypadku r&oacute;wnie tej serii m&oacute;wi stanowcze \"nie\".</p>','2017-01-08 01:58:26','Informacje','kamilos3092'),(16,'[ZWIASTUN] Piraci z Karaibów. Zemsta Salazara (2017)','<p style=\"text-align: center;\"><iframe src=\"//www.youtube.com/embed/KpFMVcZ4o7U\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p style=\"text-align: center;\">Złowrogi korsarz ucieka z mitycznego więzienia i planuje zgładzić wszystkich pirat&oacute;w na morzach. Aby mu przeszkodzić, Jack Sparrow musi zdobyć Tr&oacute;jząb Posejdona.</p>','2017-01-08 02:12:32','Informacje','kamilos3092');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uzytkownicy`
--

DROP TABLE IF EXISTS `uzytkownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `usergroup` varchar(45) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uzytkownicy`
--

LOCK TABLES `uzytkownicy` WRITE;
/*!40000 ALTER TABLE `uzytkownicy` DISABLE KEYS */;
INSERT INTO `uzytkownicy` VALUES (1,'kamilos3092','$2y$10$Umw9Z9HUO8ldwkqYxdPjlk70OY5PCbN.WXO1lcH73aftBQpq2zAdu','kamil.dolny92@gmail.com','admin','img/avatars/kamilos3092avatar.jpg');
/*!40000 ALTER TABLE `uzytkownicy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-08  2:26:31
