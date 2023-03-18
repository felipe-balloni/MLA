<?php

function SavePerson(
    string $name,
    int $age,
    string $country,
    int $height,
    string $momName,
    string $preferedIDE,
): string {
    return "Person saved";
}

echo SavePerson(
    "John",
    25,
    "USA",
    180,
    "Mary",
    "VSCode"
);

echo SavePerson(
    age: 55,
    country: "Brazil",
    height: 164,
    preferedIDE: "VSCode",
    name: "Maria",
    momName: "Joana",
);

$person = [
    "momName" => "Mary",
    "name" => "John",
    "preferedIDE" => "VSCode",
    "country" => "USA",
    "age" => 25,
    "height" => 180,
];

echo SavePerson(
    $person["name"],
    $person["age"],
    $person["country"],
    $person["height"],
    $person["momName"],
    $person["preferedIDE"],
);

echo SavePerson(...$person);

//$emptyArray = null;

if (isset($emptyArray)) {
    echo 'Array is set';
}

if (empty($emptyArray)) {
    echo 'Array is empty';
} else {
    echo 'Array is not empty';
}