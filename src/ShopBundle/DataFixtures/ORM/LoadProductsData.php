<?php
namespace ShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ShopBundle\Entity\Products;

class LoadProductsData implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$product = new Products();
		$product->setName('Samsung S6');
		$product->setCategory('Telefony');
		$product->setQuantity('2300');
		$product->setImg('https://www.o2.co.uk/shop/homepage/images/shop15/brand/samsung/s6-edge/samsung-s6-edge-img-5-device-details-bp3-170315.jpg');
		$product->setDescription('Samsung Galaxy S6 edge to dzieło powstałe z połączenia szkła i metalu. Wyraź siebie zapierającym dech w piersiach, pierwszym na świecie podwójnie zakrzywionym ekranem wkomponowanym w piękne zaokrąglenia i lśniące szkło, mieniące się feerią barw.');

		$product1 = new Products();
		$product1->setName('Lenovo Y580');
		$product1->setCategory('Laptopy');
		$product1->setQuantity('2900');
		$product1->setImg('http://pclab.pl/zdjecia/artykuly/yorobo/2013/lenovo_y580/lenovo_y580.png');
		$product1->setDescription('Notebooki IdeaPad są projektowane z myślą o zastosowaniach stricte multimedialnych. W porównaniu z poprzednim modelem, Y570, obudowa Lenovo Y580 przeszła pewną ewolucję. Niewątpliwą zmianą na lepsze jest kolorystyka. Cała konstrukcja cechuje się eleganckim czarnym kolorem, który wygląda o wiele gustowniej, niż mieszanka różu i fioletu z Y570. Niestety niefajny element w postaci błyszczącej ramki ekranu nie został zmieniony.');
		
		$product2 = new Products();
		$product2->setName('Audi A4');
		$product2->setCategory('Auta');
		$product2->setQuantity('49000');
		$product2->setImg('http://pclab.pl/zdjecia/artykuly/yorobo/2013/lenovo_y580/lenovo_y580.png');
		$product2->setDescription('Notebooki IdeaPad są projektowane z myślą o zastosowaniach stricte multimedialnych. W porównaniu z poprzednim modelem, Y570, obudowa Lenovo Y580 przeszła pewną ewolucję. Niewątpliwą zmianą na lepsze jest kolorystyka. Cała konstrukcja cechuje się eleganckim czarnym kolorem, który wygląda o wiele gustowniej, niż mieszanka różu i fioletu z Y570. Niestety niefajny element w postaci błyszczącej ramki ekranu nie został zmieniony.');

		$product3 = new Products();
		$product3->setName('BMW M3');
		$product3->setCategory('Auta');
		$product3->setQuantity('130000');
		$product3->setImg('http://ocdn.eu/images/pulscms/ZDI7MDMsMzBjLDAsMCwx/54f236b76e59d443acc2c3c665f253ad.jpg');
		$product3->setDescription('Sportowa wersja samochodów BMW oparta na serii 3. Pierwsze BMW M3 pojawiło się w 1985 roku. Obecnie istnieją już 4 generacje tych pojazdów. Moc waha się od 195 KM w najstarszym modelu E30 do 450 KM w modelu M3 GTS (E92). Produkcja została zakończona we wrześniu 2013 roku. BMW ogłosiło, że nazwa M3 w kolejnej generacji odnosić będzie się tylko do wersji sedan, wersja coupé otrzyma nazwę M4');

		$manager->persist($product);
		$manager->persist($product1);
		$manager->persist($product2);
		$manager->persist($product3);
		$manager->flush();
		
	}
}