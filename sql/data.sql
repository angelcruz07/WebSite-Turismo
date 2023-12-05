INSERT INTO `services` (`id`, `type`, `availability`, `scheduls`, `route`, `image`) VALUES
(1, 'Urban', 'Lunes a Domingo', '6:30 a.m - 5:20 p.m', 'SULTEPEC - TEJUPILCO', '1700799065_urban.jpg'),
(2, 'Taxi', 'Lunes a Domingo', '6:30 a.m - 5:20 p.m', 'SULTEPEC - TIXCA', '1700799269_Nissan_Tsuru_Taxi.jpg'),
(3, 'Autobus', 'Lunes a Domingo', '5:00 a.m - 6:30 p-m', 'SULTEPEC - TOLUCA', '1700799511_zinabus.jpeg'),
(4, 'Ruletera', 'Lunes a Viernes', '5:00 a.m - 6:30 p-m', 'SULTEPEC - TIXCA', '1700799716_ruletera.jpeg'),
(5, 'Taxi', 'Lunes a Viernes', '5:00 a.m - 6:30 p-m', 'SULTEPEC - TOLUCA', '1700799781_Nissan_Tsuru_Taxi.jpg');

INSERT INTO `lodging` (`id`, `name`, `description`, `phone_number`, `location`, `image`) VALUES
(1, 'HOTEL 7 ESPADAS', 'Ven y conoce al Hotel 7 Espadas, un hotel con grandes vistas y además el excelente servicio que te ofrecemos, anímate ven y conócenos. ', '+52 7222845100', 'https://maps.app.goo.gl/XCq58P1wf9Qx78f26', '1700792697_7 ESPADAS.jpeg'),
(2, 'HOSPEDAJE EL CONVENTO', 'Acércate y ven a conocer el hospedaje el convento, un hospedaje muy distinto a los demás, muy buenas habitaciones y todos los servicios de calidad. ', '8006967666', 'https://maps.app.goo.gl/Q8bhCVN3Ln5j71zEA', '1700793162_convento.webp'),
(3, 'HOTEL FARAH', 'Conoce el Hotel Farah, uno de los hoteles más modernos del municipio de Sultepec, te ofrecemos un excelente servicio.', '+52 7223667060', 'https://maps.app.goo.gl/VKjAVpgrCzx3HGfg6', '1700793678_farah.jpg'),
(4, 'HOSPEDAJE JUANITA', 'Si quieres quedarte un un hospedaje bastante económico esta es tu mejor opción, con un cuartos muy acogedores y un buen servicio.  ', '+52 7161480116', 'https://maps.app.goo.gl/C3VByJFUZjcH7Z3H9', '1700794604_juanita.jpg');

INSERT INTO `gastronomy` (`id`,`type`,`name`,`description`,`image`) VALUES 
(1,'Mexicana','Mole','El mole, una exquisitez culinaria de la gastronomía mexicana, alcanza su máxima expresión en la variante tradicional de Sultepec. Elaborado con cuidado y devoción por los habitantes de esta región, cada bocado de este manjar para el paladar.','1700798484_mole.jpg'),
(2,'Reposteria','Fruta de Horno ','La fruta de horno, auténtico emblema del municipio, se erige como el icono más representativo gracias a las galletas elaboradas de manera tradicional por sus apasionados habitantes. ','1700798741_descarga.jpeg'),
(3,'Tradicional','Tacos de  Barbacoa ','Los tacos, verdaderos íconos de la gastronomía mexicana, ocupan un lugar destacado entre los platillos por excelencia en Sultepec. Preparados con la maestría y el toque único de los habitantes locales','1700798970_tacos.jpg'),
(4,'Tradicional','Caldo ','El caldo, arraigado como una comida tradicional en nuestras familias mexicanas, se presenta como una auténtica delicia. Este platillo, más que una simple sopa, encapsula el corazón de nuestra cultura culinaria. ','1700799055_caldo.jpg'),
(5,'Oriental','Arroz Chino ','El arroz chino, una deliciosa muestra de la fusión gastronómica que ha enriquecido nuestra culinaria, se ha integrado con maestría en nuestra mesa mexicana. ','1700799213_arroz.jpg'),
(6,'Bebidas','Pulque ','l pulque, una bebida única que tiene sus raíces en tiempos prehispánicos, también encuentra su hogar en Sultepec, donde se elabora con devoción y maestría. Esta antigua tradición mexicana cobra vida en cada sorbo de pulque ','1700799421_pulque.jpeg'),
(7,'Tradicional','Panbazos ','Los panbazos, un deleite en la repostería mexicana, también encuentran su expresión única en Sultepec. ','1700799538_panbazo.jpeg');

INSERT INTO `gallery` (`id`, `type`, `name`, `description`, `location`, `image`) VALUES
(1, 'Mirador', 'EL MIRADOR ', 'Un lugar de tranquilidad, con una excelente vista ', 'https://maps.app.goo.gl/xRKSsP7wLSSMSa3ZA', '1700795074_MIRADOR.jpg'),
(2, 'Mirador', 'EL MIRADOR ', 'Un lugar lleno de paz para disfrutar junto a tu familia', 'https://maps.app.goo.gl/xRKSsP7wLSSMSa3ZA', '1700795344_park_mirador.jpg'),
(3, 'Parroquia', 'PARROQUIA DE SAN JUAN BAUTISTA', 'Una parroquia muy hermosa, una gran arquitectura del siglo XVII.', 'https://maps.app.goo.gl/mAWJqrw1J6Rn8vev8', '1700795652_juan.jpg'),
(4, 'Parroquia', 'SANTUARIO SEÑOR DE LA SANTA VERACRUZ', 'Un santuario que data del siglo XIX y alberga una imagen del Cristo Negro a la que los devotos le atribuyen varios milagros.', 'https://maps.app.goo.gl/T1moKtMuXBactw6g8', '1700795877_veracruz.jpeg'),
(5, 'Monumentos', 'EL MINERO', 'El minero un monumento hecho a reconocimiento del pueblo con encanto Sultepec', 'https://maps.app.goo.gl/HCzjBLE6JaRvukxv5', '1700796262_minero.jpg'),
(6, 'Parques', 'UNIDAD DEPORTIVA EL CHOCOLATE', 'No hay mejor lugar para practicar futbol que el la unidad deportiva el chocolate ', 'https://maps.app.goo.gl/Zt8ZEFd6CKCHBryN7', '1700796603_CHOCOLATE.jpg'),
(7, 'Monumentos', 'LETRAS SULTEPEC ', 'Monumento al  municipio de Sultepec, las letras SULTEPEC ', 'https://maps.app.goo.gl/6xfXrgYa6Y1N2EAG7', '1700797011_LETRAS.jpg'),
(8, 'Parques', 'PARQUE RECREATIVO EL MIRADOR', 'El parque perfecto para venir a disfrutar un día de campo junto a la familia, lugar con muchos arboles y juegos impresionantes. ', 'https://maps.app.goo.gl/7NchJaJ9GqTQn4XQ7', '1700797444_parque.jpeg'),
(9, 'Parroquia', 'IGLESIA DE LA UNION', 'Una iglesia muy antigua con unas grandes decoraciones, una de las iglesias más bellas de Sultepec', 'https://maps.app.goo.gl/sxA9ngqvRfgi3u2t8', '1700798263_UNION.png'),
(12, 'Parques', 'KIOSKO MUNICIPAL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”', 'https://maps.app.goo.gl/o9kJ7jEGgyqqmD6d6', '1701792237_KIOSK.jpg'),
(13, 'Monumentos', 'MUSEO MUNICIPAL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”', '#', '1701792412_MUSEO.jpg'),
(14, 'Parroquia', 'SANTUARIO SEÑOR DE LA SANTA VERACRUZ', 'Un santuario que data del siglo XIX y alberga una imagen del Cristo Negro a la que los devotos le atribuyen varios milagros.', 'https://maps.app.goo.gl/jDK1YovA2P7VLBFM9', '1701792577_igle.jpg'),
(15, 'Mirador', ' EL MIRADOR', 'Un lugar de tranquilidad, con una excelente vista.', 'https://maps.app.goo.gl/xRKSsP7wLSSMSa3ZA', '1701792730_mira.jpg');

INSERT INTO `business` (`id`, `type`, `name`, `description`, `phone_number`, `location`, `image`) VALUES
(1, 'Tradicional', 'POZOLERIA DOÑA SABI', 'Pozoleria Doña Sabi un excelente restaurante para venir a comer pozole, con un gran sabor tradicional, al igual un precio bastante conveniente', '+52 7221488122', 'https://maps.app.goo.gl/RD9W9yyz8GCk83XC9', '1700832368_pozole.webp'),
(2, 'Mexicana', 'TAQUERIA CARBAJAL´S', 'Quieres probar uno de los mejores tacos, ven y conoce la Taqueria Carbajal´s con unos tacos con excelente sabor', '+52 7221488122', 'https://maps.app.goo.gl/B62yVksbRdznDmca9', '1700832706_tacos.webp'),
(3, 'Tradicional', 'GALLETAS \"FRUTA DE HORNO\" CASA ARELLANO', 'Ven y conoce una de las principales tradiciones de Sultepec, las galletas de horno, las galletas tienen un gran sabor. ', '+52 7161480050', 'https://maps.app.goo.gl/oquKRRaqjDk6d2Cf7', '1700833043_galletas.jpg'),
(4, 'Mexicana', 'COCINA ECONOMICA DOÑA YOLA', 'Conoce la cocina econmica Doña Yola unos excelentes platillos que puedes disgustar ', '+52 7221488122', 'https://maps.app.goo.gl/SQ39KE1mnt5HeTjC7', '1700833487_chilaquiles-verdes-de-avena.jpg'),
(5, 'Oriental', 'RINCION DEL CHINO', 'Ven a consumir comida Oriental El Chino con una gran variedad de platillos que puedes venir a probar en familia', '+52 7225837321', 'https://maps.app.goo.gl/YqFKT4PiLCM2bbJf8', '1700833771_comida-china-cdmx.webp'),
(6, 'Mexicana', 'RESTAURANTE KARY', 'Ven a disgustar uno de los mejores platillos de la zona en el Resturante Kary con unos muy buenos platillos que puedes venir a probar', '+52 7161480514', 'https://maps.app.goo.gl/7uGhfW4ZVNrVKz8F9', '1700834163_kary.jpg'),
(7, 'Bebidas', 'MICHES EL TAMA', 'Ven a consumir bebidas en uno de los mejores bares del municipio de Sultepec donde puedes venir a divertirte con tus amigos y familiares', '+52 7225508963', 'https://maps.app.goo.gl/TXHiLskyMXAQuSzY8', '1700834554_MICHES_TAMA.webp');

INSERT INTO `blog` (`id`, `title`, `description`, `date`, `image`) VALUES
(1, 'Dia del musico ', '🎵 ¡Feliz Día Internacional del Músico! 🎉🎶 La música es el idioma que todos entendemos, una melodía que une corazones. 💓🌍 En este día especial, rendimos homenaje a esos artistas que convierten las notas en emociones. ¿Cuál es ese tema que te transporta a o', '2023-11-22 15:34:19', '1700667259_dia del musico.jpg'),
(2, '20 Noviembre', '0 de Noviembre | 🌎 113 ANIVERSARIO DE LA REVOLUCIÓN MEXICANA ✨ ¡Conmemoramos con orgullo el Aniversario de la Revolución Mexicana! Recordemos la valentía y sacrificio de aquellos que lucharon por la justicia y la libertad. Que esta fecha nos inspire a con', '2023-11-22 15:37:40', '1700667460_revolucion.jpg'),
(3, '🗓 17 de Noviembre', '17 de Noviembre | 🌎 DÍA INTERNACIONAL DE LOS ESTUDIANTES 📚🌟 A todos los buscadores incansables de conocimiento, ¡felicidades por su dedicación y empeño! Este día es un recordatorio de la importancia de la educación', '2023-11-22 15:39:43', '1700667583_dia_del_estudiante.jpg');
