-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2018 at 12:59 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Virus`
--

-- --------------------------------------------------------

--
-- Table structure for table `Registro`
--

CREATE TABLE `Registro` (
  `Id` int(20) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Forma de limpieza` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Registro`
--

INSERT INTO `Registro` (`Id`, `Nombre`, `Descripcion`, `Forma de limpieza`) VALUES
(1, 'Troyanos o caballos de Troya', 'Se oculta en otro programa legítimo, y  produce sus efectos perniciosos al ejecutarse. No es capaz de infectar otros archivos o soportes, y sólo se ejecuta una vez,  cuando se activa, provoca pérdidas o incluso robo de datos.', 'Descarga e instala un antivirus actualizado.'),
(2, 'Gusanos o worms', 'Es un programa cuya única finalidad es la de ir consumiendo la memoria del sistema, se copia así mismo sucesivamente, hasta que desborda la RAM, siendo ésta su única acción maligna.', 'Para eliminarlos debes de utilizar una herramienta de desifección, dependiendo del gusano, esto si el antivirus no lo reconoce. También puedes instalar un programa para que te escane la memoria RAM.'),
(3, 'Virus de macros', 'Infectan documentos de MS-Word o Ami Pro, hojas de cálculo de MS-Excel y archivos de bases de datos en MS-Access. Capacidad de infectar y auto-copiarse en un mismo sistema, o en red.', 'Desplegar los ítems  para ver el código de las macros. Al hacer doble click sobre ellos, se abrirá una nueva ventana con código. Se debe marcar el texto que aparece en la nueva ventana, y eliminarlo como se haría con cualquier texto. Al hacer esto se eliminan las macros que contiene el documento, eliminando por completo el macrovirus.  '),
(4, 'Virus de Boot', 'Infecta la partición de inicialización del sistema operativo. El virus se activa cuando la computadora es encendida y el sistema operativo carga.', '1) Mantener el antivirus actualizado\r\n2) Instalar todas las actualizaciones del  windows\r\n3) No abrir archivos adjuntos de correos electronicos'),
(5, 'Time Bomb', 'Son programados para que se activen en determinados momentos, definido por su creador. Una vez infectado un determinado sistema, el virus solamente se activará y causará algún tipo de daño el día o el instante previamente definido.', 'Para eliminar este tipo de archivo es necesario formatear el disco duro ya que tratar de arrancar un escaneo con un antivirus no lograría eliminarlo debido a que éste se aloja dentro de otro programa el cual Windows tal vez necesita activarlo en determinadas veces'),
(6, 'Spyware', 'Son programas que  están “espiando” las actividades de los internautas o capturan informacion de ellos. Pueden estar metidos en softwares desconocidos o que sean bajados automáticamente cuando el internauta visita sitios webs de contenido dudoso.', 'Instalar un software anti –espias.'),
(7, 'Hijackers', 'Secuestran” navegadores de Internet, principalmente el Internet Explorer. Cuando eso pasa, el hijacker altera la página inicial del browser e impide al usuario cambiarla, muestra publicidad en pop-ups o ventanas nuevas, instala barras de herramientas en el navegador y pueden impedir el acceso a determinadas webs.', '1) Activa Mostrar todos los archivos y carpetas ocultos. \r\n2) Desactiva Restaurar Sistema.\r\n3) Iniciá tu PC en Modo Seguro'),
(8, 'Keylogger', 'Pueden venir incrustados en virus, spywares o softwares sospechosos, destinados a capturar todo lo que es tecleado en el teclado. ', 'Realice una limpieza completa de archivos en desuso del sistema con algún programa como CCleaner o similar eliminando cookies, cache, temporales, etc..\r\nLuego para eliminar amenazas de keyloggers podemos usar este programa: Anti-Keylogger Elite 3.3.3.'),
(9, 'Zombie', 'Ocurre cuando es infectada y está siendo controlada por terceros. Pueden usarlo para diseminar virus, keyloggers, y procedimientos invasivos en general. Usualmente esta situación ocurre porque la computadora tiene su Firewall y/o sistema operativo desactualizado.', 'Si su equipo muestra síntomas de infección de virus zombie, en primer lugar, deberá asegurarse de que el software está actualizado. A continuación, ejecute la Herramienta de eliminación de software malintencionado de Microsoft.'),
(10, 'Virus falso o Hoax', 'Son cadenas de mensajes distribuidas a través del correo electrónico y las redes, falsos mensajes de alerta sobre virus, Su finalidad es generar alarma y confusión entre los usuarios.', 'Se deben eliminar  inmediatamente, sin reenviárselo a nadie para evitar su expansión.'),
(11, 'Virus polimorfos o mutantes', 'Poseen la capacidad de encriptar el cuerpo del virus para que no pueda ser detectado fácilmente por un antivirus. Solo deja disponibles unas cuantas rutinas que se encargaran de desencriptar el virus para poder propagarse. Una vez desencriptado el virus intentará alojarse en algún archivo de la computadora.', 'Las últimas versiones de los programas antivirus ya cuentan con detectores de este tipo de virus, por eso es muy importante mantener el antivirus actualizado.'),
(12, 'Backdoors “puerta trasera”', 'Programas similares al caballo de Troya. Abren una puerta de comunicación escondida en el sistema. Esta puerta sirve como un canal entre la máquina afectada y el intruso, que puede, así, introducir archivos maléficos en el sistema o robar información privada de los usuarios.', '1) Actualice su antivirus. \r\n2) Borre los archivos temporales (ejecutar: %temp%). \r\n3) Borre los temporales de internet. \r\n4) Mostrar extensiones y archivos ocultos y borrar los Backdoors.Si esto no te funciona descarga un software antiespias y escanea tu PC.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Registro`
--
ALTER TABLE `Registro`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
