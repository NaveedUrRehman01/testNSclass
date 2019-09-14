<?php

namespace Myproject;
namespace Myproject\testing;

include 'TestNSclass.php';
include 'Testclass.php';
include 'testing.php';

$testObj = new \Testclass();
$testObjtwo = new \Myproject\Testclass();
$testObjthree = new \Myproject\testing\Testclass();