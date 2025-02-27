<?php

header("Content-Type: application/json");

$datos = [
    "addresses" => [
        [
            "country" => "España",
            "province" => "Madrid",
            "population" => "Madrid",
            "zip_code" => "28001",
            "locality" => "Calle Gran Vía 15, Edificio Sol",
            "house_number" => 15
        ],
        [
            "country" => "México",
            "province" => "Jalisco",
            "population" => "Guadalajara",
            "zip_code" => "44100",
            "locality" => "Avenida Vallarta 123, Torre GDL",
            "house_number" => 123
        ],
        [
            "country" => "Argentina",
            "province" => "Buenos Aires",
            "population" => "Buenos Aires",
            "zip_code" => "C1001",
            "locality" => "Avenida Corrientes 2500, Piso 3",
            "house_number" => 2500
        ],
        [
            "country" => "Colombia",
            "province" => "Antioquia",
            "population" => "Medellín",
            "zip_code" => "050021",
            "locality" => "Calle San Juan 45, Apartamento 10B",
            "house_number" => 45
        ],
        [
            "country" => "Chile",
            "province" => "Región Metropolitana",
            "population" => "Santiago",
            "zip_code" => "8320000",
            "locality" => "Avenida Providencia 200, Edificio Andes",
            "house_number" => 200
        ],
        [
            "country" => "Perú",
            "province" => "Lima",
            "population" => "Lima",
            "zip_code" => "15074",
            "locality" => "Jirón Miraflores 55, Casa Verde",
            "house_number" => 55
        ],
        [
            "country" => "Ecuador",
            "province" => "Pichincha",
            "population" => "Quito",
            "zip_code" => "170902",
            "locality" => "Avenida Amazonas 321, Torre Quito",
            "house_number" => 321
        ],
        [
            "country" => "Brasil",
            "province" => "São Paulo",
            "population" => "São Paulo",
            "zip_code" => "01000-000",
            "locality" => "Rua Paulista 800, Bloco B",
            "house_number" => 800
        ],
        [
            "country" => "Estados Unidos",
            "province" => "California",
            "population" => "Los Ángeles",
            "zip_code" => "90001",
            "locality" => "Sunset Boulevard 99, Departamento 7A",
            "house_number" => 99
        ],
        [
            "country" => "Francia",
            "province" => "Île-de-France",
            "population" => "París",
            "zip_code" => "75001",
            "locality" => "Rue de Rivoli 12, Edificio Eiffel",
            "house_number" => 12
        ]
    ]
];

// Verificar si hay un parámetro de búsqueda en la URL
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $resultado = $datos['addresses'][$id] ?? null;
    echo json_encode($resultado);
} else {
    echo json_encode($datos);
}