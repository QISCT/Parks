<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.9.5
 */

/**
 * Database `parksmgmt_db`
 */

/* `parksmgmt_db`.`car_makes` */
function getOems() {
    return array(
        array('id' => '1','name' => 'Lincoln','logo' => 'lincoln.jpg','created_at' => '2012-03-27 11:11:04','updated_at' => '2013-12-04 12:22:14'),
        array('id' => '2','name' => 'Cadillac','logo' => 'cadillac.jpg','created_at' => '2012-03-27 11:11:11','updated_at' => '2014-01-13 12:16:39'),
        array('id' => '3','name' => 'Chrysler','logo' => 'chrysler.jpg','created_at' => '2013-04-04 12:24:08','updated_at' => '2013-12-04 12:26:58'),
        array('id' => '4','name' => 'Dodge','logo' => 'dodge.png','created_at' => '2014-04-30 09:13:57','updated_at' => '2014-07-15 16:22:07'),
        array('id' => '5','name' => 'Mercedes','logo' => 'mercedes-logo.png','created_at' => '2014-06-02 09:18:12','updated_at' => '2014-06-02 09:34:20'),
        array('id' => '6','name' => 'Chevrolet','logo' => 'chevrolet_logo.jpg','created_at' => '2014-11-03 10:25:22','updated_at' => '2014-11-03 10:25:25'),
        array('id' => '7','name' => 'Buick','logo' => NULL,'created_at' => '2015-02-09 13:01:16','updated_at' => '2015-02-09 13:01:19'),
        array('id' => '8','name' => 'Honda','logo' => NULL,'created_at' => '2015-02-10 10:16:34','updated_at' => '2015-02-10 10:16:34'),
        array('id' => '9','name' => 'Lexus','logo' => NULL,'created_at' => '2015-02-13 08:59:04','updated_at' => '2015-02-13 08:59:04'),
        array('id' => '10','name' => 'BMW','logo' => NULL,'created_at' => '2015-02-13 08:59:42','updated_at' => '2015-02-13 08:59:44'),
        array('id' => '11','name' => 'Volvo','logo' => NULL,'created_at' => '2015-02-13 09:02:25','updated_at' => '2015-02-13 09:02:28'),
        array('id' => '12','name' => 'Ford','logo' => NULL,'created_at' => '2015-02-17 18:02:12','updated_at' => '2015-02-17 18:02:12'),
        array('id' => '13','name' => 'Nissan','logo' => NULL,'created_at' => '2015-02-18 13:32:25','updated_at' => '2015-02-18 13:32:35'),
        array('id' => '14','name' => 'Mercury','logo' => NULL,'created_at' => '2015-02-19 11:14:00','updated_at' => '2015-02-19 11:14:00'),
        array('id' => '15','name' => 'GMC','logo' => NULL,'created_at' => '2015-02-23 09:24:51','updated_at' => '2015-02-23 09:24:51'),
        array('id' => '16','name' => 'Porsche','logo' => NULL,'created_at' => '2015-02-23 09:23:39','updated_at' => '2015-02-23 09:23:39'),
        array('id' => '17','name' => 'Triton','logo' => NULL,'created_at' => '2015-02-23 09:28:56','updated_at' => '2015-02-23 09:28:56'),
        array('id' => '18','name' => 'Oldsmobile','logo' => NULL,'created_at' => '2015-02-23 09:33:55','updated_at' => '2015-02-23 09:33:58'),
        array('id' => '19','name' => 'Jeep','logo' => NULL,'created_at' => '2015-04-10 12:29:01','updated_at' => '2017-05-26 08:49:31'),
        array('id' => '20','name' => 'Land Rover','logo' => 'untitled.png','created_at' => '2015-11-10 13:56:24','updated_at' => '2015-11-10 13:56:24'),
        array('id' => '21','name' => 'Toyota','logo' => NULL,'created_at' => '2016-09-14 13:33:14','updated_at' => '2017-04-18 17:07:20'),
        array('id' => '22','name' => 'Audi','logo' => NULL,'created_at' => '2016-09-14 13:41:21','updated_at' => '2016-09-14 13:41:23'),
        array('id' => '23','name' => 'Kia','logo' => NULL,'created_at' => '2017-04-05 08:38:48','updated_at' => '2017-04-05 08:38:49'),
        array('id' => '24','name' => 'Subaru','logo' => NULL,'created_at' => '2017-04-28 10:07:17','updated_at' => '2017-04-28 10:07:18'),
        array('id' => '25','name' => 'Mazda','logo' => NULL,'created_at' => '2017-08-10 12:22:05','updated_at' => '2017-08-10 12:22:07'),
        array('id' => '26','name' => 'Volkswagen','logo' => NULL,'created_at' => '2017-10-18 12:44:16','updated_at' => '2017-10-18 12:44:18'),
        array('id' => '27','name' => 'Jaguar','logo' => NULL,'created_at' => '2018-04-13 15:54:03','updated_at' => '2018-04-13 15:54:04')
    );
}

// SELECT `old_key`, `new_key` FROM `_ids` WHERE `new_table` LIKE 'oems'
const OEM_KEYS = [
    'z3i87rc8' => 1,
    'zv4krxsn' => 2,
    'kfm1xarc' => 3,
    'mqzr6q6w' => 4,
    'f8wt4g4g' => 5,
    'JUPN7GU1' => 6,
    '5MCZORW2' => 7,
    'OLNJBEDM' => 8,
    '4T9NP97M' => 9,
    'R9GOJPNV' => 10,
    'E64CIDFA' => 11,
    'JQDM5UKW' => 12,
    'KCNVLWBE' => 13,
    '224QO5OH' => 14,
    'S42IBPLB' => 15,
    'UNC4V9AV' => 16,
    'BCQXJHX2' => 17,
    'VG5CTIBO' => 18,
    'Y06I26X3' => 19,
    '6WYA0TL6' => 20,
    'EH0CL0U2' => 21,
    '1YJ19TC3' => 22,
    'XCOWF13G' => 23,
    'JN0VQ8C8' => 24,
    'PWAUK510' => 25,
    '13831TMW' => 26,
    'KODJ8R5Z' => 27,
];
