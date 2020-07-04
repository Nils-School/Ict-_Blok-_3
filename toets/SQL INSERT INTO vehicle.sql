SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

INSERT INTO `vehicles` (`id`, `name`, `img`, `color`, `weight`, `price`, `description`, `typeId`) VALUES
(1, 'Ford Fiesta', 'ford_fiesta.jpg', 'grijs', 1063, 19349, 'De Ford Fiesta is als occasion enorm populair. Vooral deze generatie heeft steeds zeer goed gescoord, over de hele productieperiode van het model. Dat gold voor de nieuw-verkoop, maar ook als occasion is en blijft dit nog jaren een bestseller. Op zich is dat ook terecht.', 1),
(2, 'Audi A1', 'audi_a1.jpg', 'wit', 1015, 25995, 'De Audi A1 is als occasion best gewild. Dit is typisch een auto die wordt gekocht op basis van zijn uiterlijk of imago. Audi is gewoon een heel sterk merk. Met de A1 zit Audi in een kleinere occasion klasse dan waarin het merk anders actief is.', 2),
(3, 'Audi 4', 'audi_a4.jpg', 'grijs', 1525, 39490, 'Traditioneel is Audi sterk in de klasse zakelijk inzetbare sedans en stationwagens (''Avant'' in Audi-taal). Deze derde generatie van de A4 past helemaal in die lijn. Zoals bij veel ex-zakenauto''s van dit formaat sluit de vraag als occasion niet helemaal aan bij het aanbod.', 0),
(4, 'Audi Q8', 'audi_q8.jpg', 'goud', 2120, 126330, 'De nieuwe Audi Q8 biedt alles waar Audi bekend om staat: een expressief design, toonaangevende techniek en de kunst om ook de meest veeleisende mensen tevreden te stellen. Zijn sportieve uiterlijk borduurt voort op de lijnen van de oer-quattro en verwijst met de nieuwe octagonale Singleframe-grille tevens naar de toekomst.', 0),
(5, 'Ford Ka', 'ford_ka.jpg', 'groen', 862, 9995, 'Er zijn niet zoveel auto''s die ruim tien jaar vrijwel ongewijzigd in productie blijven. Ford kreeg dat wel voor elkaar met de heerlijk eigenwijze Ka, een van die auto''s met een heel eigen gezicht. Een facelift was nooit nodig, want Kaatje bleef al die jaren goed verkopen.', 1);

INSERT INTO `vehicles_types` (`id`, `name`) VALUES
(1, 'Ford'),
(2, 'Audi'),
(3, 'Opel');


COMMIT;