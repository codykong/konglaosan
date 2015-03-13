<?php
/**
 * Created by PhpStorm.
 * User: kongqingyu
 * Date: 2015/2/4
 * Time: 19:34
 */


class Static_Test extends CI_Controller {

    public function index()
    {
        $user1 = new user();
        $user2 = new user();
        $user3 = new user();
        echo "now here have " . $user1->getCount() . " user";
        echo "<br />";
        unset($user3);
        echo "now here have " . $user1->getCount() . " user";
    }


}

class user
{
    private static $count = 0 ; //记录所有用户的登录情况.
    public function __construct() {
        self::$count = self::$count + 1;
    }
    public function getCount() {
        return self::$count;
    }
    public function __destruct() {
        self::$count = self::$count - 1;
    }
}

