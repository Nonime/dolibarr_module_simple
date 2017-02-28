<?php
/*
 * Script créant et vérifiant que les champs requis s'ajoutent bien
 */


dol_include_once('/simple/class/simple.class.php');

$PDOdb=new TPDOdb;
global $db;

$o=new TSimple208000;
$o->init_db_by_vars($PDOdb);

  
  
dol_include_once('/core/class/extrafields.class.php');
$extraFields = new ExtraFields($db);
$extraFields->addExtraField('Risque', 'risque', 'int', 0, 10, 'societe');
$extraFields->addExtraField('NomPDG', 'nompdg', 'varchar', 0, 250, 'societe');

 