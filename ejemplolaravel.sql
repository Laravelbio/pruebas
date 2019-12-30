-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-12-2019 a las 00:19:03
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemplolaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `tipo_documento`, `nro_documento`, `nombres`, `apellidos`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
(2, 'RUC', '25016195', 'ramel', 'ramos', 'comas 2', '951547416', '2019-12-30 23:26:43', '2019-12-30 23:26:43'),
(6, 'CE', '2821876', 'Jesus Ramel', 'Ramos perez', 'urb carabayllo calle 1', '951547416', '2019-12-31 03:37:06', '2019-12-31 03:37:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correctivos`
--

CREATE TABLE `correctivos` (
  `supervisors_id` int(10) UNSIGNED NOT NULL,
  `polizas_id` int(10) UNSIGNED NOT NULL,
  `departamento_id` int(10) UNSIGNED NOT NULL,
  `provincia_id` int(10) UNSIGNED NOT NULL,
  `distrito_id` int(10) UNSIGNED NOT NULL,
  `id_correctivo` int(10) UNSIGNED NOT NULL,
  `documento_cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_instalacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_abonado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_poliza` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asistencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horallamada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechallamada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nro_contacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Amazona', '2019-12-20 06:00:00', NULL),
(2, 'ancash', NULL, NULL),
(3, 'apurimac', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `id` int(10) UNSIGNED NOT NULL,
  `provincia_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `distritos`
--

INSERT INTO `distritos` (`id`, `provincia_id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 1, 'bagua grande', NULL, NULL),
(2, 2, 'chachapoyas', NULL, NULL),
(3, 3, 'chimbote', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `polizas_id` int(10) UNSIGNED NOT NULL,
  `departamentos_id` int(10) UNSIGNED NOT NULL,
  `provincias_id` int(10) UNSIGNED NOT NULL,
  `distritos_id` int(10) UNSIGNED NOT NULL,
  `nro_documento_id` int(10) UNSIGNED NOT NULL,
  `vendedores_id` int(10) UNSIGNED NOT NULL,
  `email_vendedor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordenadas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_19_084435_create_clientes_table', 1),
(5, '2019_12_20_181302_create_departamentos_table', 2),
(6, '2019_12_20_181424_create_provincias_table', 2),
(7, '2019_12_20_181448_create_distritos_table', 2),
(8, '2019_12_21_172259_create_polizas_table', 3),
(9, '2019_12_22_170953_create_evaluacions_table', 3),
(10, '2019_12_22_214608_create_correctivos_table', 3),
(12, '2019_12_23_211017_create_vendedor_ejecutivos_table', 4),
(13, '2019_12_23_221613_create_vendedors_table', 5),
(14, '2019_12_23_222104_create_vendedors_table', 6),
(15, '2019_12_24_170013_create_supervisors_table', 7),
(16, '2019_12_24_171147_create_vendedores_table', 8),
(17, '2019_12_26_165133_create_tipoinstalaciones_table', 8),
(18, '2019_12_26_224151_create_correctivos_table', 0),
(32, '2019_12_23_142025_create_clientes_table', 9),
(36, '2019_12_30_165616_create_evaluaciones_table', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `polizas`
--

CREATE TABLE `polizas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `polizas`
--

INSERT INTO `polizas` (`id`, `nombre`, `codigo`, `created_at`, `updated_at`) VALUES
(1, 'HOGAR', '1', NULL, NULL),
(2, 'EMPRESA', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `departamento_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `departamento_id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 1, 'bagua Gande', NULL, NULL),
(2, 2, 'chachapoyas', NULL, NULL),
(3, 3, 'chimbote', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `din` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `supervisors`
--

INSERT INTO `supervisors` (`id`, `nombres`, `din`, `apellido`, `correo`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'Jesus', '25016195', 'Ramos perez', 'ramelramos25@gmail.com', '951547146', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoinstalaciones`
--

CREATE TABLE `tipoinstalaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipoinstalaciones`
--

INSERT INTO `tipoinstalaciones` (`id`, `nombre`, `nombre2`, `created_at`, `updated_at`) VALUES
(1, 'Alambrico', 'Alambrico', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asignacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `id_user`, `dni`, `nombres`, `apellidos`, `email`, `password`, `perfil`, `asignacion`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'none', 'none', 'none', 'admin@gmail.com', '$2y$10$BO4EBIZMfrGVZX4DhUH0W.dfDip6oRY2DuxyYAuGc0v4IcS9NG33O', 'Administrador', 'Administrador', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `din` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_vendedor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `supervisors_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`din`, `nombres`, `apellidos`, `telefono`, `email_vendedor`, `id`, `supervisors_id`, `created_at`, `updated_at`) VALUES
('25016195', 'Prueba', 'Numero 1', '951547745', 'prueba1@gmail.com', 1, 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`nro_documento`),
  ADD UNIQUE KEY `clientes_nro_documento_unique` (`nro_documento`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `correctivos`
--
ALTER TABLE `correctivos`
  ADD PRIMARY KEY (`id_correctivo`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distritos_provincia_id_foreign` (`provincia_id`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluaciones_polizas_id_foreign` (`polizas_id`),
  ADD KEY `evaluaciones_departamentos_id_foreign` (`departamentos_id`),
  ADD KEY `evaluaciones_provincias_id_foreign` (`provincias_id`),
  ADD KEY `evaluaciones_distritos_id_foreign` (`distritos_id`),
  ADD KEY `evaluaciones_nro_documento_id_foreign` (`nro_documento_id`),
  ADD KEY `evaluaciones_vendedores_id_foreign` (`vendedores_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `polizas`
--
ALTER TABLE `polizas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincias_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supervisors_din_unique` (`din`);

--
-- Indices de la tabla `tipoinstalaciones`
--
ALTER TABLE `tipoinstalaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_user,30_unique` (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendedores_din_unique` (`din`),
  ADD KEY `vendedores_supervisors_id_foreign` (`supervisors_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `correctivos`
--
ALTER TABLE `correctivos`
  MODIFY `id_correctivo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `polizas`
--
ALTER TABLE `polizas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipoinstalaciones`
--
ALTER TABLE `tipoinstalaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `distritos_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD CONSTRAINT `evaluaciones_departamentos_id_foreign` FOREIGN KEY (`departamentos_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `evaluaciones_distritos_id_foreign` FOREIGN KEY (`distritos_id`) REFERENCES `distritos` (`id`),
  ADD CONSTRAINT `evaluaciones_nro_documento_id_foreign` FOREIGN KEY (`nro_documento_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `evaluaciones_polizas_id_foreign` FOREIGN KEY (`polizas_id`) REFERENCES `polizas` (`id`),
  ADD CONSTRAINT `evaluaciones_provincias_id_foreign` FOREIGN KEY (`provincias_id`) REFERENCES `provincias` (`id`),
  ADD CONSTRAINT `evaluaciones_vendedores_id_foreign` FOREIGN KEY (`vendedores_id`) REFERENCES `vendedores` (`id`);

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `provincias_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD CONSTRAINT `vendedores_supervisors_id_foreign` FOREIGN KEY (`supervisors_id`) REFERENCES `supervisors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
