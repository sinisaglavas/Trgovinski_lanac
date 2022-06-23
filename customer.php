<?php
namespace src;

/*
 * Kupac ima ime, prezime, stanje na računu i listu kupljenih proizvoda. Svaki kupac može kupiti više
proizvoda iz više različitih radnji.
Kupac može da kupuje u isto vreme samo u jednoj radnji. Kupovina može da bude izvršena samo ako
kupac ima na svom racunu iznos veći ili jednak od ukupne cene proizvoda koje hoće da kupi. Nakon
uspešne kupovine, potrebno je smanjiti iznos novca na kupčevom racunu i smanjiti zalihe proizvoda u
prodavnici. Samo zaposleni u toj radnji moze da smanji stanje proizvoda.
1.Kreirati kupca Miloša Miloševića, koji ima 3000 dinara na računu.
2.Kreirati kupca Nikolu Nikolića, koji ima 5000 dinara na računu.
5. Kupac Miloš odlazi da kupi 2 hleba i 3 soka. Nakon toga, odlazi da kupi za svog ljubimca 3 pakovanja
granula i jednu igračku.
6. Kupac Nikola je prehladjen pa odlazi da kupi 3 leka i 2 sirupa. Nakon apoteke, Nikola odlazi do
prodavnice za kucne ljubimce i kupuje 2 pakovanja granula i jedan lek za svog ljubimca.
Prizati stanje proizvoda u svakoj radnji.
Prikazi proizvode koje je svaki od kupaca kupio, i prikazati sumu koju je potrošio za to.
Bonus: Svaku kupovinu (svakog proizvoda bi trebalo logovati, u formatu: tip radnje, tip
proizvoda, cena proizvoda, stanje pre kupovine, stanje posle kupovine, vreme kupovine

 */
