<?php
class scooter{
    public $kleur;
    public $merk;
    public $inhoudTank;
}
$piago = new scooter();
$peugeot = new scooter();
$piago->merk='piago';
$piago->kleur='rood';
$piago->inhoudTank='6';
echo $piago->merk , $piago->kleur , $piago->inhoudTank;
?>