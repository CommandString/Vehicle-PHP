<?php

#############
#   ENUMS   #
#############
require_once "./Vehicle/Enums/Brands.php";
require_once "./Vehicle/Enums/Components.php";
require_once "./Vehicle/Enums/Types.php";

###############
#   VEHICLE   #
###############
require_once "./Vehicle/Vehicle.php";

#####################
#   VEHICLE TYPES   #
#####################
require_once "./Vehicle/Types/Truck.php";

##################
#   COMPONENTS   #
##################
require_once "./Vehicle/Components/OpenableComponent.php";

###########################
#   OPENABLE COMPONENTS   #
###########################
require_once "./Vehicle/Components/Openable/Window.php";
require_once "./Vehicle/Components/Openable/Door.php";
require_once "./Vehicle/Components/Openable/Trunk.php";
require_once "./Vehicle/Components/Openable/Hood.php";

$truck = new Truck("F-150", 2022, 4021, Brands::Ford, 4);

$truck->openAll()->doors[1]->window->closeBy(100);

var_dump($truck);