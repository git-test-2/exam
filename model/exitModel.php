<?php
session_start();
include "../components/QueryBuilder.php";

session_destroy();

QueryBuilder::redirect("../view/home.php");

