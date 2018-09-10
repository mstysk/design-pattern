<?php
require __DIR__ . '/../bootstrap.php';

use Pattern\AbstractFactory\Factory\Factory;
use Pattern\AbstractFactory\ListFactory\ListFactory;
use Pattern\AbstractFactory\TableFactory\TableFactory;

class Main
{
    public function __construct()
    {
        $factory = Factory::getFactory(TableFactory::class);

        $asahi = $factory->createLink('asahi', 'http://www.asahi.com/');
        $yomiuri = $factory->createLink('yomiuri', 'http://www.yomiuri.co.jp/');

        $us_yahoo = $factory->createLink('Yahoo!', 'http://www.yahoo.com/');
        $jp_yahoo = $factory->createLink('Yahoo!Japan', 'http://www.yahoo.co.jp/');
        $excite = $factory->createLink('Excite', 'http://www.excite.com/');
        $google = $factory->createLink('Google', 'http://www.google.com/');

        $trayNews = $factory->createTray('新聞');
        $trayNews->add($asahi);
        $trayNews->add($yomiuri);

        $trayYahoo = $factory->createTray('Yahoo!');
        $trayYahoo->add($us_yahoo);
        $trayYahoo->add($jp_yahoo);

        $traySearch = $factory->createTray('サーチエンジン');
        $traySearch->add($trayYahoo);
        $traySearch->add($excite);
        $traySearch->add($google);

        $page = $factory->createPage('LinkPage', 'Sample太郎');
        $page->add($trayNews);
        $page->add($traySearch);

        $page->output();           
    }
}

$main = new Main();
