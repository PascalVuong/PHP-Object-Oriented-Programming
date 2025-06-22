<?php

# geldige variabel namen:

$voornaam;                  # uiteraard mogen letters.
$Achternaam; $achternaam;   # hoofdletters maken uit ($Achternaam is iets anders dan $achternaam).
$_vijftien_15;              # de eerste teken na $ mag een letter of underscore zijn, daarna mogen ook cijfers voorkomen.
$account_id; 
$resultaat_2025;

# ongeldige variabel namen:

$1steVoornaam;              # mag niet beginnen met cijfer.
$vijf-tien;                 # mag geen "min" teken bevatten.
$emailadres@;               # mag geen speciale tekens bevatten.
$!prijs;                    # mag dus ook niet beginnen met een speciale teken.
$e-mail;                    # mag ook geen koppeltekens bevatten.

# gecorrigeerde variabel namen:

$voornaam1;                 # cijfer aan het eind gezet.
$vijf_min_tien;             # min teken weggehaald en duidelijk gemaakt met verwoording en underscores.
$emailadres;                # speciale teken weggehaald.
$prijs;                     # speciale teken weggehaald.
$email;                     # koppelteken weggehaald.

?>