<?php

$taulukko = ['A','B','C','D','E','F','G','H','I','J','K'];

for($i = 0; $i < count($taulukko); $i = $i +1) {
    printf("%s ", $taulukko[$i]);
}
echo "<br>";
for($i = count($taulukko) - 1; $i >= 0; $i = $i -1) {
    printf("%s ", $taulukko[$i]);
}
echo "<br>";
printf("%s %s %s %s %s %s %s %s %s %s %s",
$taulukko[0],
$taulukko[1],
$taulukko[2],
$taulukko[3],
$taulukko[4],
$taulukko[5],
$taulukko[6],
$taulukko[7],
$taulukko[8],
$taulukko[9],
$taulukko[10]);
echo "<br>";
printf("%s %s %s %s %s %s %s %s %s %s %s",
$taulukko[10],
$taulukko[9],
$taulukko[8],
$taulukko[7],
$taulukko[6],
$taulukko[5],
$taulukko[4],
$taulukko[3],
$taulukko[2],
$taulukko[1],
$taulukko[0]);

