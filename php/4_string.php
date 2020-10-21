<?php
  $text = <<< T
      zsl - Zespół
      szkół
      łączności
    T;
  echo "$text<br>";
  echo nl2br($text),"<br>" ;   /* wyświetli dokladnie tak jak zapisaliśmy w heredoc (będą <br>) */
  $name=' jaNUsZ';

// zamiana na małe litery

  $name= strtolower($name); // janusz
  echo strlen($name),"<br>"; // wyświetlenie ilości znaków
  echo "$name<br>";


// zamiana na duże litery

  $name= 'kRYstynA';
  echo strtoupper($name),"<br>"; // KRYSTYNA
  "<br>";
  echo "$name<br>";


// zamiana pierwszej litery na dużą

  $name= 'aNNa noWak';
  echo ucfirst($name), "<br>"; // ANNa noWak


// zamiana wszystkich pierwszych liter w wyrazach

  echo ucwords($name),"<br>";


// zad. 1
// Zamień $name, aby wyglądała w następujący sposób: Anna Nowak

  echo ucwords(strtolower($name)),"<br>"; // Anna Nowak


// LOREM IPSUM

  $lorem= <<<LOREM
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
    nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
  LOREM;

  echo "$lorem<br>";
  $col= wordwrap($lorem, 40, "<hr>");
  echo $col;

// czyszczenie buforu


  ob_clean();

// usuwanie białych znaków


  $name= 'Anna';
  $name1= '  Anna ';
  echo 'Długość $name:', strlen($name),"<br>";  //4
  echo 'Długość $name1:', strlen($name1),"<br>";  //7

  echo strlen(ltrim($name1)),"<br>"; //5
  echo strlen(rtrim($name1)),"<br>"; //6
  echo strlen(trim($name1)),"<br>"; //4

  echo strlen($name1),"<br>"; //7
  $name1= trim($name1);
  echo strlen($name1),"<br>"; //4


// przeszukiwanie ciągów znaków


  $address= "Poznań, ul. Polna 2, tel. (61)123-45-67";
  $search= strstr($address, "tel"); // wypisze stringa od momentu napotkania frazy tel
  echo "$search<br>";  // tel. (61)123-45-67

  $address= "Poznań, ul. Polna 2, tel. (61)123-45-67";
  $search= strstr($address, "tel",true); // wypisze stringa do momentu napotkania frazy tel
  echo "$search<br>";  // Poznań, ul. Polna 2,

  $address= "Poznań, ul. Polna 2, tel. (61)123-45-67";
  $search= stristr($address, "Tel",true); // stristr nie patrzy na wielkość liter
  echo "$search<br>"; // Poznań, ul. Polna 2,

  echo strstr('zsl@gmail.com', '@'),"<br>"; // @gmail.com
  echo strstr('zsl@gmail.com', 64),"<br>"; // @gmail.com

  $domain= substr(strstr('zsl@gmail.com', '@'), 1); // ucina litery od momentu znalezienia danego znaku w zaleznosci od liczby (ilosc ucinana)
  echo "$domain<br>"; // gmail.com
