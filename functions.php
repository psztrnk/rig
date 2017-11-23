<?php

/********************************
NATIONALITY *********************
********************************/

// List of European nationalities
$nationalities = array(
  'Danish',
  'British',
  'Estonian',
  'Finnish',
  'Icelandic',
  'Irish',
  'Latvian',
  'Lithuanian',
  'Norwegian',
  'Swedish',
  'Austrian',
  'Belgian',
  'French',
  'German',
  'Dutch',
  'Swiss',
  'Albanian',
  'Croatian',
  'Cypriot',
  'Greek',
  'Italian',
  'Portuguese',
  'Serbian',
  'Slovenian',
  'Spanish',
  'Belarusian',
  'Bulgarian',
  'Czech',
  'Hungarian',
  'Polish',
  'Romanian',
  'Russian',
  'Slovakian',
  'Ukrainian'
);
// check the number of nationalities in the list
$maxnat = count($nationalities) - 1;
// pick a random nationality
$randomNationality = rand(0, 33);
$nationality = $nationalities[$randomNationality];

/********************************
NAME AND RESIDENCE **************
********************************/

// $givenNames is a list of most common given names in the specific country (average: 20 names)
// $familyNames is a list of most common surnames in the specific country (average: 20 names)
// $cities is a list of the (usually) ten largest cities (by population) of the specific country

switch ($nationality) {
  case 'Danish':
    $givenNames = array('William', 'Noah', 'Lucas','Emil', 'Oliver', 'Emma', 'Sofia', 'Ida', 'Freja', 'Clara', 'Oscar', 'Victor', 'Malthe', 'Alfred', 'Carl', 'Laura', 'Anna', 'Ella', 'Isabella', 'Karla');
    $familyNames = array('Jensen', 'Nielsen', 'Hansen', 'Pedersen', 'Andersen', 'Christensen', 'Larsen', 'Sørensen', 'Rasmussen', 'Jørgensen', 'Petersen', 'Madsen', 'Kristensen', 'Olsen', 'Thomsen', 'Christiansen', 'Poulsen', 'Johansen', 'Møller', 'Mortensen');
    $cities = array('Copenhagen', 'Hovedstadsområdet', 'Aarhus', 'Odense', 'Aalborg', 'Esbjerg', 'Randers', 'Kolding', 'Horsens', 'Vejle');
   break;
  case 'British':
    $givenNames = array('Olivia', 'Lily', 'Sophia', 'Emily', 'Amelia', 'Oliver', 'Muhammad', 'Noah', 'Harry', 'Jack', 'Charlie', 'Jacob', 'George', 'Ethan', 'Henry', 'Sophie', 'Ella', 'Mia', 'Poppy', 'Evie');
    $familyNames = array('Smith', 'Jones', 'Williams', 'Taylor', 'Brown', 'Davies', 'Evans', 'Wilson', 'Thomas', 'Johnson', 'Roberts', 'Robinson', 'Thompson', 'Wright', 'Walker', 'White', 'Edwards', 'Hughes', 'Green', 'Hall');
    $cities = array('London', 'Birmingham', 'Leeds', 'Glasgow', 'Sheffield', 'Bradford', 'Manchester', 'Edinburgh', 'Liverpool', 'Bristol');
    break;
  case 'Estonian':
    $givenNames = array('Aleksander', 'Betti', 'Daggi', 'Elts', 'Hele', 'Jaan', 'Kati', 'Kristjan', 'Leena', 'Liisi', 'Marga', 'Mari', 'Matt', 'Mikk', 'Nikolai', 'Olli', 'Peeter', 'Reet', 'Riki', 'Rolli');
    $familyNames = array('Aare', 'Aarma', 'Eenpalu', 'Eskola', 'Härma', 'Ilves', 'Jänes', 'Järvis', 'Kapp', 'Kirsipuu', 'Lass', 'Lippmaa', 'Männik', 'Nurmsalu', 'Peetre', 'Rooba', 'Soosaar', 'Tamm', 'Välbe', 'Visnapuu');
    $cities = array('Tallinn', 'Tartu', 'Narva', 'Kohtla-Järve', 'Pärnu', 'Viljandi', 'Rakvere', 'Sillamäe', 'Maardu', 'Kuressaare');
    break;
  case 'Finnish':
    $givenNames = array('Onni', 'Elias', 'Eetu', 'Leo', 'Aleksi', 'Niilo', 'Veeti', 'Oliver', 'Joona', 'Eino', 'Maria', 'Sofia', 'Emilia', 'Olivia', 'Amanda', 'Aurora', 'Aino', 'Helmi', 'Matilda', 'Ilona');
    $familyNames = array('Korhonen', 'Virtanen', 'Mäkinen', 'Nieminen', 'Mäkelä', 'Hämäläinen', 'Laine', 'Heikkinen', 'Koskinen', 'Järvinen', 'Lehtonen', 'Lehtinen', 'Saarinen', 'Salminen', 'Heinonen', 'Niemi', 'Heikkilä', 'Kinnunen', 'Salonen', 'Turunen');
    $cities = array('Espoo', 'Helsinki', 'Jyvaskyla', 'Lahti', 'Oulu', 'Tampere', 'Turku', 'Vantaa');
    break;
  case 'Icelandic':
    $maleFemale = rand(0,1);
    if ($malefemale = 0) {
      $givenNames = array('Aron', 'Alexander', 'Viktor', 'Kristján', 'Jón', 'Guðmundur', 'Kristófer', 'Gunnar', 'Ólafur', 'Benedikt', 'Dagur', 'Emil');
      $familyNames = array('Aronsson', 'Alexandersson', 'Viktorsson', 'Kristjánsson', 'Jónsson', 'Guðmundursson', 'Kristófersson', 'Gunnarsson', 'Ólafursson', 'Benediktsson', 'Dagursson', 'Emilsson');
    } else {
      $givenNames = array('Margrét', 'Anna', 'Emma', 'Ísabella', 'Eva', 'Hekla', 'Kristín', 'Viktoría', 'Emilía', 'Katrín');
      $familyNames = array('Aronsdóttir', 'Alexandersdóttir', 'Viktorsdóttir', 'Kristjánsdóttir', 'Jónsdóttir', 'Guðmundursdóttir', 'Kristófersdóttir', 'Gunnarsdóttir', 'Ólafursdóttir', 'Benediktsdóttir', 'Dagursdóttir', 'Emilsdóttir');
    }
    $cities = array('Reykjavík', 'Kópavogur', 'Hafnarfjörður', 'Akureyri', 'Keflavík', 'Garðabær', 'Mosfellsbær', 'Akranes', 'Selfoss', 'Seltjarnarnes');
    break;
  case 'Irish':
    $givenNames = array('Jack', 'James', 'Daniel', 'Conor', 'Seán', 'Adam', 'Noah', 'Michael', 'Charlie', 'Luke', 'Emily', 'Emma', 'Ava', 'Sophie', 'Amelia', 'Ella', 'Lucy', 'Grace', 'Chloe', 'Mia');
    $familyNames = array('Murphy', 'Kelly', 'Sullivan', 'Walsh', 'Smith', 'O\'Brien', 'Byrne', 'Ryan', 'O\'Connor', 'O\'Neill', 'Reilly', 'Doyle', 'McCarthy', 'Gallagher', 'Doherty', 'Kennedy', 'Lynch', 'Murray', 'Quinn', 'Moore');
    $cities = array('Dublin', 'Cork', 'Limerick', 'Galway', 'Waterford', 'Drogheda', 'Dundalk', 'Bray', 'Navan', 'Ennis');
    break;
  case 'Latvian':
    $givenNames = array('Roberts', 'Markuss', 'Artjoms', 'Ralfs', 'Gustavs', 'Maksims', 'Artūrs', 'Aleksandrs', 'Emīls', 'Daniels', 'Sofija', 'Emīlija', 'Alise', 'Anna', 'Marta', 'Viktorija', 'Elizabete', 'Estere', 'Anastasija', 'Paula');
    $familyNames = array('Bērziņš', 'Kalniņš', 'Ozoliņš', 'Jansons', 'Ozols', 'Liepiņš', 'Krūmiņš', 'Balodis', 'Eglītis', 'Zariņš', 'Pētersons', 'Vītols', 'Kļaviņš', 'Kārkliņš', 'Vanags');
    $cities = array('Rīga', 'Daugavpils', 'Liepāja', 'Jelgava', 'Jūrmala', 'Ventspils', 'Rēzekne', 'Valmiera', 'Jēkabpils', 'Ogre', 'Tukums');
    break;
  case 'Lithuanian':
    $maleFemale = rand(0,1);
    if ($malefemale = 0) {
      $givenNames = array('Lukas', 'Matas', 'Nojus', 'Dominykas', 'Jokūbas', 'Emilis', 'Jonas', 'Kajus', 'Gabrielius', 'Dovydas');
      $familyNames = array('Kazlauskas', 'Jankauskas', 'Petrauskas', 'Stankevičius', 'Vasiliauskas', 'Butkus', 'Žukauskas', 'Paulauskas', 'Urbonas', 'Kavaliauskas');
    } else {
      $givenNames = array('Emilija', 'Austėja', 'Viltė', 'Gabija', 'Liepa', 'Kamilė', 'Lėja', 'Ugnė', 'Ema', 'Urtė');
      $familyNames = array('Kazlauskienė', 'Jankauskienė', 'Petrauskienė', 'Stankevičienė', 'Vasiliauskienė', 'Butkienė', 'Žukauskienė', 'Paulauskienė', 'Urbonienė', 'Kavaliauskienė');
    }
    $cities = array('Vilnius', 'Kaunas', 'Klaipėda', 'Šiauliai', 'Panevėžys', 'Alytus', 'Marijampolė', 'Mažeikiai', 'Jonava', 'Utena');
    break;
  case 'Norwegian':
    $givenNames = array('William', 'Oskar', 'Lucas', 'Mathias', 'Filip', 'Oliver', 'Jakob', 'Emil', 'Noah', 'Aksel', 'Nora', 'Emma', 'Sara', 'Sofie', 'Sofia', 'Maja', 'Olivia', 'Ella', 'Ingrid', 'Emilie');
    $familyNames = array('Hansen', 'Johansen', 'Olsen', 'Larsen', 'Andersen', 'Pedersen', 'Nilsen', 'Kristiansen', 'Jensen', 'Karlsen', 'Johnsen', 'Pettersen', 'Eriksen', 'Berg', 'Haugen', 'Hagen', 'Johannessen', 'Andreassen', 'Jacobsen', 'Dahl');
    $cities = array('Oslo', 'Bergen', 'Trondheim', 'Stavanger', 'Kristiansand', 'Sandnes', 'Fredrikstad', 'Tromsø', 'Skien', 'Drammen');
    break;
  case 'Swedish':
    $givenNames = array('Oscar', 'Lucas', 'William', 'Liam', 'Oliver', 'Hugo', 'Alexander', 'Elias', 'Charlie', 'Noah', 'Alice', 'Lilly', 'Maja', 'Elsa', 'Ella', 'Alicia', 'Olivia', 'Julia', 'Ebba', 'Wilma');
    $familyNames = array('Andersson', 'Johansson', 'Karlsson', 'Nilsson', 'Eriksson', 'Larsson', 'Olsson', 'Persson', 'Svensson', 'Gustafsson', 'Pettersson', 'Jonsson', 'Jansson', 'Hansson', 'Bengtsson', 'Jönsson', 'Lindberg', 'Jakobsson', 'Magnusson', 'Olofsson');
    $cities = array('Stockholm', 'Gothenburg', 'Malmö', 'Uppsala', 'Västerås', 'Örebro', 'Linköping', 'Helsingborg', 'Jönköping', 'Norrköping');
    break;
  case 'Austrian':
    $givenNames = array('Lukas', 'Maximilian', 'Jakob', 'David', 'Tobias', 'Paul', 'Jonas', 'Felix', 'Alexander', 'Elias', 'Anna', 'Hannah', 'Sophia', 'Emma', 'Marie', 'Lena', 'Sarah', 'Sophie', 'Laura', 'Mia');
    $familyNames = array('Gruber', 'Huber', 'Bauer', 'Wagner', 'Müller', 'Pichler', 'Steiner', 'Moser', 'Mayer', 'Hofer', 'Leitner', 'Berger', 'Fuchs', 'Eder', 'Fischer', 'Schmid', 'Winkler', 'Weber', 'Schwarz', 'Maier');
    $cities = array('Vienna', 'Graz', 'Linz', 'Salzburg', 'Innsbruck', 'Klagenfurt', 'Villach', 'Wels', 'Sankt Pölten', 'Dornbirn');
    break;
  case 'Belgian':
    $givenNames = array('Lucas', 'Louis', 'Noah', 'Nathan', 'Adam', 'Arthur', 'Finn', 'Victor', 'Mathis', 'Liam', 'Emma', 'Louise', 'Olivia', 'Elise', 'Alice', 'Juliette', 'Mila', 'Lucie', 'Marie', 'Camille');
    $familyNames = array('Peeters', 'Janssens', 'Maes', 'Jacobs', 'Mertens', 'Willems', 'Claes', 'Goossens', 'Wouters', 'De Smet', 'Dubois', 'Lambert', 'Dupont', 'Martin', 'Simon');
    $cities = array('Antwerp', 'Ghent', 'Charleroi', 'Liège', 'Brussels', 'Bruges', 'Namur', 'Mons', 'Leuven', 'Mechelen');
    break;
  case 'French':
    $givenNames = array('Gabriel', 'Adam', 'Raphaël', 'Louis', 'Arthur', 'Paul', 'Alexandre', 'Victor', 'Joseph', 'Louise', 'Emma', 'Alice', 'Chloé', 'Jeanne', 'Inès', 'Sarah', 'Léa', 'Charlotte', 'Anna');
    $familyNames = array('Martin', 'Bernard', 'Dubois', 'Thomas', 'Robert', 'Richard', 'Petit', 'Durand', 'Leroy', 'Moreau', 'Simon', 'Laurent', 'Lefebvre', 'Michel', 'Garcia', 'David', 'Bertrand', 'Roux', 'Vincent', 'Fournier');
    $cities = array('Paris', 'Marseille', 'Lyon', 'Toulouse', 'Nice', 'Nantes', 'Strasbourg', 'Montpellier', 'Bordeaux', 'Lille');
    break;
  case 'German':
    $givenNames = array('Ben', 'Jonas', 'Leon', 'Elias', 'Finn', 'Noah', 'Paul', 'Louis', 'Lukas', 'Luca', 'Mia', 'Emma', 'Hanna', 'Sofia', 'Anna', 'Emilia', 'Lina', 'Marie', 'Lena', 'Mila');
    $familyNames = array('Müller', 'Schmidt', 'Schneider', 'Fischer', 'Weber', 'Mayer', 'Wagner', 'Becker', 'Schulz', 'Hoffmann', 'Schäfer', 'Koch', 'Bauer', 'Richter', 'Klein', 'Wolf', 'Schröder', 'Neumann', 'Schwarz', 'Zimmermann');
    $cities = array('Berlin', 'Hamburg', 'Munich', 'Cologne', 'Frankfurt am Main', 'Stuttgart', 'Düsseldorf', 'Dortmund', 'Essen', 'Leipzig');
    break;
  case 'Dutch':
    $givenNames = array('Daan', 'Noah', 'Sem', 'Lucas', 'Jesse', 'Finn', 'Milan', 'Max', 'Levi', 'Luuk', 'Anna', 'Emma', 'Tess', 'Sophie', 'Julia', 'Zoë', 'Evi', 'Mila', 'Sara', 'Eva', 'Fenna', 'Lotte');
    $familyNames = array('De Jong', 'Jansen', 'De Vries', 'Van den Berg', 'Van Dijk', 'Van Dyk', 'Bakker', 'Janssen', 'Visser', 'Smit', 'Meijer', 'Meyer', 'De Boer', 'Mulder', 'De Groot', 'Bos', 'Vos', 'Peters', 'Hendriks', 'Van Leeuwen', 'Dekker', 'Brouwer');
    $cities = array('Amsterdam', 'Rotterdam', 'The Hague', 'Utrecht', 'Eindhoven', 'Tilburg', 'Groningen', 'Almere Stad', 'Breda', 'Nijmegen');
    break;
  case 'Swiss':
    $givenNames = array('Noah', 'Liam', 'Gabriel', 'Luca', 'Leon', 'Elias', 'David', 'Samuel', 'Louis', 'Julian', 'Mia', 'Emma', 'Elena', 'Sofia', 'Lena', 'Emilia', 'Lara', 'Anna', 'Laura', 'Mila');
    $familyNames = array('Müller', 'Meier', 'Schmid', 'Keller', 'Weber', 'Huber', 'Meyer', 'Schneider', 'Steiner', 'Fischer', 'Brunner', 'Baumann', 'Gerber', 'Frei', 'Moser');
    $cities = array('Zürich', 'Geneva', 'Basel', 'Lausanne', 'Bern', 'Winterthur', 'Lucerne', 'St. Gallen', 'Lugano', 'Bienne');
    break;
  case 'Albanian':
    $givenNames = array('Noel', 'Joel', 'Mateo', 'Ergi', 'Luis', 'Aron', 'Samuel', 'Roan', 'Roel', 'Xhoel', 'Amelia', 'Ajla', 'Melisa', 'Amelija', 'Klea', 'Sara', 'Kejsi', 'Noemi', 'Alesia', 'Leandra');
    $familyNames = array('Hoxha', 'Prifti', 'Shehu', 'Dervishi', 'Bektashi', 'Gjoni', 'Gjonaj', 'Dibra', 'Laci', 'Shkodra', 'Prishtina', 'Koroveshi', 'Gashi', 'Krasniqi', 'Berisha', 'Kelmendi', 'Shkreli', 'Kuqi', 'Bardhi', 'Sinani', 'Thanasi');
    $cities = array('Tiranë', 'Durrës', 'Vlorë', 'Elbasan', 'Shkodër', 'Fier', 'Kamëz', 'Korçë', 'Berat', 'Lushnjë');
    break;
  case 'Croatian':
    $givenNames = array('Luka', 'David', 'Ivan', 'Jakov', 'Marko', 'Petar', 'Matej', 'Filip', 'Leon', 'Ivano', 'Mia', 'Lucija', 'Ema', 'Petra', 'Sara', 'Lana', 'Ana', 'Nika', 'Marta', 'Iva');
    $familyNames = array('Horvat', 'Kovačević', 'Babić', 'Marić', 'Jurić', 'Novak', 'Kovačić', 'Knežević', 'Vuković', 'Marković', 'Petrović', 'Matić', 'Tomić', 'Pavlović', 'Kovač', 'Božić', 'Blažević', 'Grgić', 'Pavić', 'Radić');
    $cities = array('Zagreb', 'Split', 'Rijeka', 'Osijek', 'Zadar', 'VelikaGorica', 'SlavonskiBrod', 'Pula', 'Karlovac', 'Sisak');
    break;
  case 'Cypriot':
    $givenNames = array('Andreas', 'Georgios', 'Kostas', 'Christos', 'Nikolaos', 'Michalis', 'Panagiotis', 'Ioannis', 'Marios', 'Dimitrios', 'Maria', 'Eleni', 'Androula', 'Georgia', 'Panagiota', 'Anna', 'Christina', 'Katerina', 'Ioanna', 'Kyriaki');
    $familyNames = array('Spyrou', 'Constantinou', 'Adamou', 'Kyriakou', 'Pavlou', 'Ioannou', 'Christou', 'Antoniou', 'Demitriou', 'Markou', 'Charalambou', 'Stylianou', 'Georgiou');
    $cities = array('Famagusta', 'Kyrenia', 'Limassol', 'Larnaca', 'Nicosia', 'Paphos');
    break;
  case 'Greek':
    $givenNames = array('Georgios', 'Ioannis', 'Konstantinos', 'Kostas', 'Dimitrios', 'Nikolaos', 'Panagiotis', 'Vasileios', 'Christos', 'Athanasios', 'Michail', 'Maria', 'Eleni', 'Aikaterini', 'Vasiliki', 'Sophia', 'Angeliki', 'Georgia', 'Dimitra', 'Konstantina', 'Paraskevi');
    $familyNames = array('Antoniou', 'Areleous', 'Argyris', 'Colonomos', 'Demetriou', 'Dimitriou', 'Floros', 'Ioannidis', 'Iordanou', 'Katsaros', 'Kokinos', 'Marinos', 'Megalos', 'Metaxas', 'Michel', 'Michelakakis', 'Pachis', 'Papadopoulos', 'Simonides', 'Spiros', 'Stavros', 'Stephanidis', 'Xanthopoulos');
    $cities = array('Athens', 'Thessaloniki', 'Patras', 'Heraklion', 'Larissa', 'Volos', 'Rhodes', 'Ioannina', 'Chania', 'Agrinio');
    break;
  case 'Italian':
    $givenNames = array('Francesco', 'Alessandro', 'Mattia', 'Lorenzo', 'Leonardo', 'Andrea', 'Gabriele', 'Matteo', 'Tommaso', 'Riccardo', 'Sofia', 'Aurora', 'Giulia', 'Giorgia', 'Alice', 'Martina', 'Emma', 'Greta', 'Chiara', 'Anna');
    $familyNames = array('Rossi', 'Russo', 'Ferrari', 'Esposito', 'Bianchi', 'Romano', 'Colombo', 'Bruno', 'Ricci', 'Greco', 'Marino', 'Gallo', 'De Luca', 'Conti', 'Costa', 'Mancini', 'Giordano', 'Rizzo', 'Lombardi', 'Barbieri');
    $cities = array('Rome', 'Milan', 'Naples', 'Turin', 'Palermo', 'Genoa', 'Bologna', 'Florence', 'Bari', 'Catania');
    break;
  case 'Portuguese':
    $givenNames = array('João', 'Martim', 'Rodrigo', 'Santiago', 'Francisco', 'Afonso', 'Tomás', 'Miguel', 'Guilherme', 'Gabriel', 'Maria', 'Leonor', 'Matilde', 'Beatriz', 'Carolina', 'Mariana', 'Ana', 'Inês', 'Margarida', 'Sofia');
    $familyNames = array('Silva', 'Santos', 'Ferreira', 'Pereira', 'Oliveira', 'Costa', 'Rodrigues', 'Martins', 'Jesus', 'Sousa', 'Fernandes', 'Gonçalves', 'Gomes', 'Lopes', 'Marques', 'Alves', 'Almeida', 'Ribeiro', 'Pinto', 'Carvalho');
    $cities = array('Lisbon', 'Porto', 'Vila Nova de Gaia', 'Amadora', 'Braga', 'Coimbra', 'Funchal', 'Almada', 'Setúbal', 'Agualva-Cacém');
    break;
  case 'Serbian':
    $givenNames = array('Nikola', 'Luka', 'Stefan', 'Marko', 'Lazar', 'Aleksandar', 'Filip', 'Jovan', 'Nemanja', 'Miloš', 'Milica', 'Anđela', 'Jovana', 'Ana', 'Teodora', 'Katarina', 'Marija', 'Sara', 'Anastasija', 'Aleksandra');
    $familyNames = array('Jovanović', 'Petrović', 'Nikolić', 'Marković', 'Đorđević', 'Stojanović', 'Ilić', 'Stanković', 'Pavlović', 'Milošević');
    $cities = array('Belgrade', 'Novi', 'Sad', 'Niš', 'Kragujevac', 'Leskovac', 'Subotica', 'Kruševac', 'Kraljevo', 'Pančevo', 'Zrenjanin');
    break;
  case 'Slovenian':
    $givenNames = array('Luka', 'Filip', 'Nik', 'Mark', 'Žan', 'Jakob', 'Jaka', 'Žiga', 'David', 'Anže', 'Ema', 'Eva', 'Zala', 'Sara', 'Lara', 'Nika', 'Julija', 'Ana', 'Lana', 'Mia');
    $familyNames = array('Novak', 'Horvat', 'Kovačič', 'Krajnc', 'Zupančič', 'Potočnik', 'Kovač', 'Mlakar', 'Kos', 'Vidmar', 'Golob', 'Turk', 'Božič', 'Kralj', 'Korošec', 'Zupan', 'Bizjak', 'Hribar', 'Kotnik', 'Kavčič');
    $cities = array('Ljubljana', 'Maribor', 'Celje', 'Kranj', 'Velenje', 'Koper', 'Novo Mesto', 'Ptuj', 'Trbovlje', 'Kamnik');
    break;
  case 'Spanish':
    $givenNames = array('Hugo', 'Daniel', 'Martín', 'Pablo', 'Alejandro', 'Lucas', 'Álvaro', 'Adrián', 'Mateo', 'David', 'Lucía', 'Martina', 'María', 'Sofía', 'Paula', 'Daniela', 'Valeria', 'Alba', 'Julia', 'Noa');
    $familyNames = array('García', 'Fernández', 'González', 'Rodríguez', 'López', 'Martínez', 'Sánchez', 'Pérez', 'Martín', 'Gómez', 'Ruiz', 'Hernández', 'Jiménez', 'Díaz', 'Álvarez', 'Moreno', 'Muñoz', 'Alonso', 'Gutiérrez', 'Romero');
    $cities = array('Madrid', 'Barcelona', 'Valencia', 'Sevilla', 'Zaragoza', 'Málaga', 'Las Palmas de Gran Canaria', 'Bilbao', 'Murcia', 'Valladolid');
    break;
  case 'Belarusian':
    $givenNames = array('Maksim', 'Artsiom', 'Ivan', 'Maciej', 'Mikita', 'Tsimafei', 'Aliaksandr', 'Alaksiej', 'Yahor', 'Danyl', 'Illya', 'Raman', 'Yaraslaŭ', 'Kseniya', 'Anastasiya', 'Palina', 'Darya', 'Katsiaryna', 'Marya', 'Safiya', 'Ullyana');
    $familyNames = array('Ivanoŭ', 'Kazloŭ', 'Kavalioŭ', 'Kazloŭski', 'Novik', 'Abramowicz', 'Barysevich', 'Doroshevich', 'Hilevich', 'Ivanovich', 'Kovalevich', 'Lukashevich', 'Pashkevich', 'Sakovich', 'Yatchenko', 'Yushkevich', 'Zhukovsky');
    $cities = array('Minsk', 'Homyel’', 'Mahilyow', 'Vitsyebsk', 'Hrodna', 'Brest', 'Babruysk', 'Baranavichy', 'Barysaw', 'Pinsk');
    break;
  case 'Bulgarian':
    $givenNames = array('Georgi', 'Aleksandar', 'Martin', 'Dimitar', 'Ivan', 'Nikolay', 'Nikola', 'Daniel', 'Viktor', 'Kristian', 'Viktoria', 'Maria', 'Nikol', 'Aleksandra', 'Gabriela', 'Daria', 'Raya', 'Yoana', 'Sofia', 'Simona');
    $familyNames = array('Dimitrov', 'Dzhurov', 'Petrov', 'Ivanov', 'Stoyanov', 'Stefanov', 'Boyanov', 'Trifonov', 'Sofiyanski', 'Tasev', 'Metodiev', 'Katzarov', 'Iliev', 'Gospodinov', 'Apostolov', 'Hristov', 'Hasanov', 'Nikolov', 'Bojidarov', 'Stoichkov');
    $cities = array('Sofia', 'Plovdiv', 'Varna', 'Burgas', 'Ruse', 'Stara Zagora', 'Pleven', 'Dobrich', 'Sliven', 'Shumen');
    break;
  case 'Czech':
  $maleFemale = rand(0,1);
  if ($malefemale = 0) {
    $givenNames = array('Jakub', 'Jan', 'Tomáš', 'David', 'Adam', 'Matyáš', 'Filip', 'Vojtěch', 'Ondřej', 'Lukáš');
    $familyNames = array('Novák', 'Svoboda', 'Novotný', 'Dvořák', 'Černý', 'Procházka', 'Kučera', 'Veselý', 'Horák', 'Němec');
  } else {
    $givenNames = array('Eliška', 'Tereza', 'Anna', 'Adéla', 'Natálie', 'Sofie', 'Kristýna', 'Karolína', 'Viktorie', 'Barbora');
    $familyNames = array('Nováková', 'Svobodová', 'Novotná', 'Dvořáková', 'Černá', 'Procházková', 'Kučerová', 'Veselá', 'Horáková', 'Němcová');
  }
    $cities = array('Prague', 'Brno', 'Ostrava', 'Plzeň', 'Liberec', 'Olomouc', 'Ústínad Labem', 'České Budějovice', 'Hradec Králové', 'Pardubice');
    break;
  case 'Hungarian':
    $givenNames = array('Bence', 'Máté', 'Levente', 'Ádám', 'Dávid', 'Dániel', 'Marcell', 'Balázs', 'Milán', 'Dominik', 'Hanna', 'Anna', 'Jázmin', 'Lili', 'Zsófia', 'Emma', 'Luca', 'Boglárka', 'Zoé', 'Nóra');
    $familyNames = array('Nagy', 'Horváth', 'Kovács', 'Szabó', 'Tóth', 'Varga', 'Kiss', 'Molnár', 'Németh', 'Farkas', 'Balogh', 'Papp', 'Takács', 'Juhász', 'Lakatos', 'Mészáros', 'Oláh', 'Simon', 'Rácz', 'Fekete');
    $cities = array('Budapest', 'Debrecen', 'Szeged', 'Miskolc', 'Pécs', 'Győr', 'Nyíregyháza', 'Kecskemét', 'Székesfehérvár', 'Szombathely');
    break;
  case 'Polish':
    $givenNames = array('Antoni', 'Jakub', 'Szymon', 'Jan', 'Filip', 'Franciszek', 'Mikołaj', 'Aleksander', 'Kacper', 'Wojciech', 'Zuzanna', 'Julia', 'Lena', 'Maja', 'Hanna', 'Zofia', 'Amelia', 'Alicja', 'Aleksandra', 'Natalia');
    $familyNames = array('Nowak', 'Kowalski', 'Wiśniewski', 'Wójcik', 'Kowalczyk', 'Kamiński', 'Lewandowski', 'Zieliński', 'Szymański', 'Woźniak', 'Dąbrowski', 'Kozłowski', 'Jankowski', 'Mazur', 'Kwiatkowski', 'Wojciechowski', 'Krawczyk', 'Kaczmarek', 'Piotrowski', 'Piecyk');
    $cities = array('Warsaw', 'Kraków', 'Łódź', 'Wrocław', 'Poznań', 'Gdańsk', 'Szczecin', 'Bydgoszcz', 'Lublin', 'Katowice');
    break;
  case 'Romanian':
    $givenNames = array('Andrei', 'David', 'Alexandru', 'Gabriel', 'Mihai', 'Cristian', 'Ştefan', 'Luca', 'Ionuţ', 'Darius', 'Maria', 'Elena', 'Ioana', 'Andreea', 'Sofia', 'Alexandra', 'Antonia', 'Daria', 'Ana', 'Gabriela');
    $familyNames = array('Popa', 'Popescu', 'Pop', 'Radu', 'Dumitru', 'Stan', 'Stoica', 'Gheorghe', 'Matei', 'Ciobanu', 'Ionescu', 'Rusu');
    $cities = array('Bucharest', 'Cluj-Napoca', 'Timișoara', 'Iași', 'Constanța', 'Craiova', 'Brașov', 'Galați', 'Ploiești', 'Oradea');
    break;
  case 'Russian':
    $givenNames = array('Alexander', 'Sergei', 'Dmitry', 'Andrei', 'Alexey', 'Maxim', 'Evgeny', 'Ivan', 'Mikhail', 'Artyom', 'Anastasia', 'Yelena', 'Olga', 'Natalia', 'Yekaterina', 'Anna', 'Tatiana', 'Maria', 'Irina', 'Yulia');
    $familyNames = array('Smirnov', 'Ivanov', 'Kuznetsov', 'Popov', 'Sokolov', 'Lebedev', 'Kozlov', 'Novikov', 'Morozov', 'Petrov', 'Volkov', 'Solovyov', 'Vasilyev', 'Zaytsev', 'Pavlov', 'Semyonov', 'Golubev', 'Vinogradov', 'Bogdanov', 'Vorobyov');
    $cities = array('Moscow', 'Saint Petersburg', 'Novosibirsk', 'Yekaterinburg', 'Nizhny Novgorod', 'Kazan', 'Chelyabinsk', 'Omsk', 'Samara', 'Rostov-on-Don');
    break;
  case 'Slovakian':
    $givenNames = array('Jakub', 'Adam', 'Samuel', 'Lukáš', 'Martin', 'Tomáš', 'Michal', 'Filip', 'Matej', 'Matúš', 'Sofia', 'Nina', 'Natália', 'Nela', 'Viktória', 'Ema', 'Laura', 'Michaela', 'Kristína', 'Simona');
    $familyNames = array('Horváth', 'Kováč', 'Varga', 'Tóth', 'Nagy', 'Baláž', 'Szabó', 'Molnár', 'Balog', 'Lukáč');
    $cities = array('Bratislava', 'Košice', 'Prešov', 'Žilina', 'Nitra', 'Banská Bystrica', 'Trnava', 'Trenčín', 'Martin', 'Poprad');
    break;
  case 'Ukrainian':
    $givenNames = array('Artem', 'Denys', 'Daniil', 'Oleksandr', 'Andriy', 'Bohdan', 'Dmytro', 'Nikita', 'Mykyta', 'Nazar', 'Kirill', 'Anna', 'Hanna', 'Darya', 'Sofiya', 'Diana', 'Mariya', 'Viktoriya', 'Tetyana', 'Kristina', 'Khrystyna', 'Yelyzaveta', 'Angelina');
    $familyNames = array('Melnyk', 'Shevchenko', 'Boyko', 'Kovalenko', 'Bondarenko', 'Tkachenko', 'Kovalchuk', 'Kravchenko', 'Oliynyk', 'Shevchuk', 'Koval', 'Polishchuk', 'Bondar', 'Tkachuk', 'Moroz', 'Marchenko', 'Lysenko', 'Rudenko', 'Savchenko', 'Petrenko');
    $cities = array('Kiev', 'Kharkiv', 'Dnipro', 'Odessa', 'Donetsk', 'Zaporizhia', 'Lviv', 'Kryvyi Rih', 'Mykolaiv', 'Mariupol');
    break;
}
// count the number of given names in the list of the previously selected country
$maxgiv = count($givenNames) - 1;
// count the number of surnames in the list of the previously selected country
$maxfam = count($familyNames) - 1;
// count the number of city names in the list of the previously selected country
$maxcity = count($cities) - 1;
// three random numbers:
// $randomOne selects a name from the given names' list
// $randomTwo selects a name from the surnames' list
// $randomThree selects a name from the city names' list
$randomOne = rand(0,$maxgiv);
$randomTwo = rand(0,$maxfam);
$randomThree = rand(0,$maxcity);
// store random given name, surname and city in three variables
$givenName = $givenNames[$randomOne];
$familyName = $familyNames[$randomTwo];
$city = $cities[$randomThree];

/********************************
AGE *****************************
********************************/

// pick a random age between 15 and 64
$age = rand(15,64);

/********************************
OCCUPATION **********************
********************************/

// a list of 328 occupations
$occupations = array(
  'Accessory designer',  'Actor',  'Advertising designer',  'Animation director',  'Animator',  'Architect',  'Art administrator',  'Art critic',  'Art director',  'Art historian',  'Artisan',  'Artist',  'Blogger',  'Brand manager',  'Broadcast news analyst',  'Cartoonist',  'Casting director',  'ceramics artist',  'Chief creative officer',  'Choreographer',  'Cinematographer',  'Colorist',  'Comic book creator',  'Compositor',  'Coppersmith', 'Copywriter',  'Creative director',  'Creative professional',  'Creative writer',  'cultural designer',  'Curator Dancer',  'Design director',  'Design strategist',  'Editor',  'Equestrian Engineer',  'Essayist',  'Event planner',  'Fashion designer',  'Film critic',  'Film director',  'Fine artist',  'Flash developer',  'Flatter',  'Floral designer',  'Food stylist',  'Furniture designer',  'Game artist',  'Graphic designer',  'Hairstylist', 'Illustrator',  'Imagineer',  'Industrial designer',  'Interior designer',  'Jewellery designer',  'Journalist',  'Knitwear designer',  'Landscape Architect',  'Leadman',  'Limner',  'Luthier',  'Lyricist',  'Make-up artist', 'Marchand-mercier',  'Marine designer',  'Media designer',  'Model',  ' Multi-media artist',  'Muralist',  'Music artist',  'Party planner',  'Penciller',  'Photographer',  'Photojournalist',  'Playwright',  'Poet',  'Potter',  'Printmaker',  'Production designer',  'Reporter',  'Scenographer',  'Screenwriter',  'Sculptor',  'Set decorator',  'Set dresser',  'Silversmith',  'Sound designer',  'Stage director',  'Teaching artist',  'Theatre consultant',
  'Typeface designer',  'Tattooist',  'Urban planner',  'Web designer',  'Wedding planner',  'Writer',  'Ballet dancer',  'Backup dancer',  'Caller',  'Choreographer',  'Dancer',  'Dance therapist',  'Exotic dancer',  'Répétiteur',
  'dance journalist',  'Chief administrative officer',  'Chief analytics officer',  'Chief brand officer',  'Chief business development officer',  'Chief business officer','Chief commercial officer','Chief communications officer', 'Chief compliance officer', 'Chief creative officer', 'Chief customer officer', 'Chief data officer', 'Chief design officer', 'Chief digital officer', 'Chief diversity officer', 'Chief content officer', 'Chief events officer', 'Chief executive officer', 'Chief experience officer', 'Chief financial officer', 'Chief gaming officer', 'Chief genealogical officer', 'Chief human resources officer', 'Chief information officer', 'Chief information officer', 'Chief information security officer', 'Chief innovation officer', 'Chief investment officer', 'Chief knowledge officer', 'Chief learning officer', 'Chief legal officer', 'Chief marketing officer', 'Chief operating officer', 'Chief privacy officer', 'Chief process officer', 'Chief product officer', 'Chief reputation officer', 'Chief research officer', 'Chief restructuring officer', 'Chief Revenue Officer', 'Chief risk officer', 'Chief science officer', 'Chief Scientific Officer', 'Chief security officer', 'Chief services officer', 'Chief strategy officer', 'Chief sustainability officer', 'Chief technology officer', 'Chief visibility officer', 'Chief visionary officer', 'Chief web officer', 'Auto mechanic', 'Beader', 'Bobbin boy', 'Clerk of the Chapel', 'Filling station attendant', 'Foreman', 'Maintenance engineer', 'Mechanic', 'Miller', 'Moldmaker', 'Panel beater', 'Patternmaker', 'Plant operator', 'Plumber', 'Sawfiler', 'Shop foreman', 'Soaper', 'Stationary engineer', 'Wheelwright', 'Woodworkers', 'Bartender', 'Waiter', 'Construction worker', 'Cashier', 'Factory worker', 'Railroad engineer', 'Chief fireman', 'Conductor', 'Secondman', 'Brakeman', 'Guard', ' Station agent', 'Station master', 'Porter', 'Assistant Station Master', ' Ticket controller', 'Revenue Protection Inspector', 'Ticket inspector', 'Train dispatcher', 'Dispatcher', 'Freight Conductor', 'Signalman', 'Bridge inspector', 'Gandy dancer', 'Length runner', 'Railway lubricator', 'Signal maintainer', 'Track inspector', 'Traquero', 'Platelayer', 'Navigator', ' Bookbinder', 'Cordwainer', 'Corsetier', 'Draper', 'Dressmaker', 'Embroiderer', 'Glover', 'Hatter', 'Leatherworker', 'Milliner', 'Parachute rigger', 'Quilter', 'Sailmaker', 'Seamstress', 'Shoemaker', 'Tailor', 'Taxidermist', 'Upholsterer', 'Bodyguard', 'Bylaw enforcement officer', 'Community Service Officer', 'Conservation officer', 'Constable', 'Correction officer', 'Customs officer', 'Field Training Officer', 'Law enforcement officer', 'Park ranger', 'Parking enforcement officer', 'Police officer', 'Prison officer', 'Prison warden', 'Revenue protection inspector', 'Riding officer', 'Sea Marshal', 'Sky marshal', 'Special constable', 'Special police officer', 'Application analyst', 'Computer operator', 'Computer repair technician', 'Computer scientist', 'Computer analyst', 'Data entry clerk', 'Database administrator', 'Data analyst', 'Data scientist', 'Network analyst', 'Network administrator', 'programmer', 'Security engineer', 'Software analyst', 'Software designer', 'Software engineer', 'Software quality analyst', 'System Administrator', 'web developer', 'Educational technologist', 'Engineer', 'Engineering technician', 'Engineering technologist', 'Chemical engineer', 'Aeronautical engineer', 'Petrochemical engineer', 'Biomedical engineer', 'Mechanical engineer', 'Electrical engineer', 'Computational scientist', 'Mathematician', 'Demographic marketer', 'Statistician', 'Government scientist', 'Healthcare scientist', 'Inventor', 'School science technician', 'Science attaché', 'Scientist', 'Research fellow', 'Psychologist', 'Forensic Scientist', 'Biologist', 'Biomedical scientist', 'Medical laboratory scientist', 'Botanist', 'Microbiologist', 'Neuroscientist', 'Herpetologist', 'Zoologist', 'Astronaut', 'Astronomer', 'Biochemist', 'Ecologist', 'Naturalist', 'Oceanographer', 'Paleontologist', 'Archaeologist', 'Pathologist', 'Geographer', 'Physicist', 'Chemist', 'Geographer', 'Geologist', 'Petroleum geologist', ' Art Therapist', 'Dramatherapist', 'Psychiatric nurse', 'Certified Sex Therapist', 'Licensed behavior analyst', 'Licensed professional counselor', 'Mental health professional', 'Psychiatrist', 'Psychologist', 'School counselor', 'Social Worker', 'Resource Worker', 'Peer', 'Support Worker', 'Grief and Bereavement Therapist', 'Psychotherapists', 'Pastoral Counsellor','Chaplain', 'Taxicab driver','Pilot');

if ($age < 23) {
  // if younger than 23, no occupation will be selected, identity becomes a student
  $occupation = 'student';
} else {
  // if age is 23 or above, count elements in the list of occupations
  $maxocc = count($occupations) - 1;
  // and pick a random one
  $randomOcc = rand (0, $maxocc);
  // store it in a variable as a lowercase string
  $occupation = strtolower($occupations[$randomOcc]);
}

/********************************
NUMBER AND NAMES OF CHILDREN ****
********************************/

if ($age < 23) {
  // if age is below 23, identity doesn't have any children
  $chNumber = 'no';
  $chWording = 'children';
} else {
  // if age is 23 or above, pick a random number of children (1, 2 or 3)
  $chNum = rand(1,3);
  if ($chNum == 1) {
    // for one child
    $chNumber = 'one';
    $chWording = 'child';
    // $chRandom selects a name from the given names' list of the same country
    $chRandom = rand(0,$maxgiv);
    $chNameOne = $givenNames[$chRandom];
  } else {
    $chWording = 'children';
    if ($chNum == 2) {
      // for two children
      $chNumber = 'two';
      // $chRandomOne selects a name for the first child from the given names' list of the same country
      $chRandomOne = rand(0,$maxgiv);
      $chNameOne = $givenNames[$chRandomOne];
      // $chRandomTwo selects a name for the second child from the given names' list of the same country
      $chRandomTwo = rand(0,$maxgiv);
      $chNameTwo = $givenNames[$chRandomTwo];
      // randomizer re-runs it the names of the two children are indentical
      if ($chNameOne == $chNameTwo) {
        $chRandomTwo = rand(0,$maxgiv);
        $chNameTwo = $givenNames[$chRandomTwo];
      }
    } else if ($chNum == 3) {
      // for three children
      $chNumber = 'three';
      // $chRandomOne selects a name for the first child from the given names' list of the same country
      $chRandomOne = rand(0,$maxgiv);
      $chNameOne = $givenNames[$chRandomOne];
      // $chRandomTwo selects a name for the second child from the given names' list of the same country
      $chRandomTwo = rand(0,$maxgiv);
      $chNameTwo = $givenNames[$chRandomTwo];
      // randomizer re-runs it the names of the two children are indentical
      if ($chNameOne == $chNameTwo) {
        $chRandomTwo = rand(0,$maxgiv);
        $chNameTwo = $givenNames[$chRandomTwo];
      }
      // $chRandomThree selects a name for the third child from the given names' list of the same country
      $chRandomThree = rand(0,$maxgiv);
      $chNameThree = $givenNames[$chRandomThree];
      // randomizer re-runs it the name of the third child is indentical to any of the previous two cildren's name
      if ($chNameOne == $chNameThree || $chNameTwo == $chNameThree) {
        $chRandomThree = rand(0,$maxgiv);
        $chNameThree = $givenNames[$chRandomThree];
      }
    }
  }
}

/********************************
SPORTS **************************
********************************/

// list of common sports activities
$sports = array('don\'t care much about sports', 'play soccer', 'play cricket', 'play basketball', 'play baseball', 'play tennis', 'play volleyball', 'play american football', 'play table tennis', 'play golf', 'play ice hockey', 'practice boxing', 'practice gymnastics', 'play team handball', 'go bowling', 'go swimming', 'practice martial arts', 'jog', 'visit the gym', 'do yoga');
// a list of regularity of doing sports
$regularities = array(' once a week', ' twice a week', ' three times a week', ' four times a week', ' as often as you can');
// a list of possible companion when doing sports
if ($age < 23) {
  // if identity is student
  $sportCompanions = array(' with your friends ', ' with your fellow students ');
} else {
  // if identity is employed
  $sportCompanions = array(' with your friends ', ' with your colleagues ');
}
// determine number of sports in the list
$maxsport = count($sports) - 1;
// pick random sport
$randomSport = rand(0,$maxsport);
$sport = $sports[$randomSport];
if ($randomSport == 0) {
    // if identity doesn't care about sports, no regularity and companion is needed
    $regularity = NULL;
    $sportCompanion = NULL;
} else {
    // if identity does sport
    // pick a random regularity
    $randomreg = rand(0,4);
    $regularity = $regularities[$randomreg];
    // pick a random companion
    $randomcomp = rand(0,1);
    $sportCompanion = $sportCompanions[$randomcomp];
}

/********************************
HOBBIES *************************
********************************/

// list of common hobbies to pick from
$hobbies = array('reading', 'watching TV', 'going to movies', 'fishing', 'computer', 'gardening', 'walking', 'listening to music', 'shopping', 'traveling', 'sleeping', 'socializing', 'sewing', 'relaxing', 'playing music', 'crafts', 'playing cards', 'hiking', 'cooking', 'eating out', 'camping', 'writing a blog', 'motorcycling', 'painting', 'dancing', 'going to the theater', 'volunteer work', 'photography', 'video gaming', 'debunking conspiracy theories', 'playing the piano', 'knitting', 'environmentalism');
// get the number of elements in the hobbies' list
$maxhobbies = count($hobbies) - 1;
// pick a random number of hobbies: no hobbies, one hobby or two hobbies
$randNrOfHobbies = rand(0,2);
if ($randNrOfHobbies == 0){
  // if identity has no hobbies
  $hobbyWording = 'You have no hobbies';
  // we don't need these values
  $hobbyOne = NULL;
  $hobbyTwo = NULL;
  $hobbySeparator = NULL;
} else if ($randNrOfHobbies == 1){
  // if identity has one hobby
  $hobbyWording = 'Your hobby is ';
  // picking a random hobby from the hobbies' list
  $randomHobby = rand(0,$maxhobbies);
  $hobbyOne = $hobbies[$randomHobby];
  // we don't need these values
  $hobbyTwo = NULL;
  $hobbySeparator = NULL;
} else if ($randNrOfHobbies == 2){
  // if identity has two hobby
  $hobbyWording = 'Your hobbies are ';
  // picking first random hobby from the hobbies' list
  $randomHobby = rand(0,$maxhobbies);
  $hobbyOne = $hobbies[$randomHobby];
  // picking second random hobby from the hobbies' list
  $randomHobbyTwo = rand(0,$maxhobbies);
  $hobbyTwo = $hobbies[$randomHobbyTwo];
  // randomizer re-runs it the two hobbies are indentical
  if ($hobbyOne == $hobbyTwo) {
    $randomHobbyTwo = rand(0,$maxhobbies);
    $hobbyTwo = $hobbies[$randomHobbyTwo];
  }
  // for two hobbies, we need an "and" separator
  $hobbySeparator = ' and ';
}

/********************************
INTERNET USERNAME AND PASSWORD **
********************************/

// construct an internet username for the identity
if (strlen($givenName) < 5) {
  // for identities with a given name less than five characters
  // first part of the username will be the given name, converted to lowercase with all non-English characters stripped
  $userNameFirstPart = strtolower(preg_replace('/[^\00-\255]+/u', '', $givenName));
} else {
  // for identities with a given name equal to or more than five characters
  // first part of the username will be the given name, converted to lowercase with all non-English characters stripped and truncated to five characters
  $userNameFirstPartFull = strtolower(preg_replace('/[^\00-\255]+/u', '', $givenName));
  $userNameFirstPart = substr($userNameFirstPartFull, 0, 5);
}
if (strlen($familyName) < 4) {
  // for identities with a surname less than four characters
  // second part of the username will be the surname, converted to lowercase with all non-English characters stripped
  $userNameSecondPart = strtolower(preg_replace('/[^\00-\255]+/u', '', $familyName));
} else {
  // for identities with a surname equal to or more than four characters
  // second part of the username will be the surname, converted to lowercase with all non-English characters stripped and truncated to three characters
  $userNameSecondPartFull = strtolower(preg_replace('/[^\00-\255]+/u', '', $familyName));
  $userNameSecondPart = substr($userNameSecondPartFull, 0, 3);
}
// pick a random separator to inster between the two parts of the username (none, underscore or period)
$userNameSeparators = array('', '_', '.');
$userNameRandom = rand(0,2);
$userNameSeparator = $userNameSeparators[$userNameRandom];
// build the username: first part + separator + second part
$userName = $userNameFirstPart . $userNameSeparator . $userNameSecondPart;

// generate a nice password for the identity

/**
 * Generate a random string, using a cryptographically secure
 * pseudorandom number generator (random_int)
 *
 * For PHP 7, random_int is a PHP core function
 * For PHP 5.x, depends on https://github.com/paragonie/random_compat
 *
 * @param int $length      How many characters do we want?
 * @param string $keyspace A string of all possible characters
 *                         to select from
 * @return string
 */
function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_?!%/\\\\+=()\'')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

/********************************
CONSTRUCT IDENTITY **************
********************************/

function constructIdentity() {
  // set variables used by the function
  global $givenName;
  global $familyName;
  global $age;
  global $nationality;
  global $occupation;
  global $chNum;
  global $chNumber;
  global $chWording;
  global $chNameOne;
  global $chNameTwo;
  global $chNameThree;
  global $city;
  global $userName;
  global $sport;
  global $regularity;
  global $sportCompanion;
  global $hobbyWording;
  global $hobbyOne;
  global $hobbyTwo;
  global $hobbySeparator;

  echo '<h3><span>Identity:</span> '. $givenName . ' ' . $familyName . ' <span>*</span></h3>';
  echo '<p class="basicInfo"><span>#1 Basic Information</span><br />';
  echo 'You are <strong>';
  echo $givenName .' '. $familyName.'</strong>, a '; // construct name
  echo $age.' years old ';
  echo $nationality . ' ' . $occupation. ', currently living in ' . $city . '. '; // insert nationality, occupation and city
  echo '</p>';
  echo '<p class="children"><span>#2 Family</span><br />';
  echo 'You have '. $chNumber . ' ' . $chWording; // insert number of children the identity has
  if ($chNum == 1) {
    echo ': ' . $chNameOne. '. '; // name, if identity has one child
  } else if ($chNum == 2) {
    echo ': ' . $chNameOne. ' and ' . $chNameTwo. '. '; // names, if identity has two children
  } else if ($chNum == 3) {
      echo ': ' . $chNameOne. ', ' .$chNameTwo. ' and ' . $chNameThree. '. '; // names, if identity has three children
  } else {
      echo '. ';
  }
  echo '</p>';
  echo '<p class="sportsHobbies"><span>#3 Sports and Hobbies</span><br />';
  echo 'You ' . $sport . $sportCompanion . $regularity . '. '; // insert sport along with companion and regularity (if any)
  echo $hobbyWording . $hobbyOne . $hobbySeparator . $hobbyTwo . '.'; // insert hobbies (if any)
  echo '</p>';
  echo '<p class="internet"><span>#4 Online Presence</span><br />';
  echo 'On the Internet, you ususally go by the username <code>' . $userName . '</code>. '; // insert username
  echo 'Here\'s a nice password for you to use: <code>' . random_str(20);
  echo '</code></p>';
}

?>
