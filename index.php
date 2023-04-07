<?php

namespace my_classes;
require_once __DIR__ . '/my_classes/Users.php';
require_once __DIR__ . '/my_classes/SuperUsers.php';

use my_classes\Users;
use my_classes\SuperUsers;

$names = ["Oleksandr", "Nikolay", "Daniil", "Evheniy", "Anton", "Mikita", "Sir♂gay"];
$surnames = ["V", "Jimin", "Jin", "RM", "Suga", "Jongkook", "J-Hope"];

$user1 = new Users($names[array_rand($names)], $surnames[array_rand($surnames)], "12345");
$user2 = new Users($names[array_rand($names)], $surnames[array_rand($surnames)], "6789a");
$user3 = new Users($names[array_rand($names)], $surnames[array_rand($surnames)], "bcdef");
$objects = [$user1, $user2, $user3];

$object1 = clone $user1;
$object2 = clone $user2;
$object3 = clone $user3;
//ededdwweeewfewfewfewfe'
//edwewefe3e4f32fewf22222222222eeeeeeeeeeeeeeeeeeeeeee
$user4 = clone $user1;
$super_user = new SuperUsers("aaa", "bbbb", "cccc");
$super_user->character = "admin";
//echo $super_user->getInfo();
echo $super_user->character;
?>
