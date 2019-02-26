<?php
    namespace app\views\page;
    use app\library\Util;

    class Index{
        private static $_data;

        public static function load($data =[]){
            self::$_data = $data;
            self::buildPage();
        }

        public static function buildPage(){
            self::writeHeader();
            self::writeH1();
            self::writeDIV();
            self::writeFooter();
        }

        // functions to build your pages.
        
        public static function writeH1(){
        echo '<h1>' . self::$_data['title'] . '</h1>';
        }
        public static function writeDIV(){
            echo '<div>'.Util::getUrlRoot().'</div>';

        }
        public static function writeHeader(){
            require Util::getAppRoot() . '/views/inc/header.php';
        }

        public static function writeFooter(){
            require Util::getAppRoot() . '/views/inc/footer.php';
        }


    }


?>

