<?php

namespace App\Support;

/**
 * Fixe Testdaten – es gibt (noch) keine Datenbank-Tabelle für Kunden.
 */
class Kundenliste
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'name' => 'Bäckerei Huber', 'ort' => 'Zürich', 'branche' => 'Gastronomie'],
            ['id' => 2, 'name' => 'Garage Meier AG', 'ort' => 'Winterthur', 'branche' => 'Auto'],
            ['id' => 3, 'name' => 'Physiotherapie Keller', 'ort' => 'Bern', 'branche' => 'Gesundheit'],
            ['id' => 4, 'name' => 'Schreinerei Brunner', 'ort' => 'Luzern', 'branche' => 'Handwerk'],
            ['id' => 5, 'name' => 'Hotel Alpenblick', 'ort' => 'Interlaken', 'branche' => 'Gastronomie'],
            ['id' => 6, 'name' => 'Treuhand Steiner GmbH', 'ort' => 'Zürich', 'branche' => 'Finanzen'],
            ['id' => 7, 'name' => 'Velo Gerber', 'ort' => 'Basel', 'branche' => 'Handel'],
            ['id' => 8, 'name' => 'Zahnarztpraxis Frei', 'ort' => 'St. Gallen', 'branche' => 'Gesundheit'],
            ['id' => 9, 'name' => 'Malergeschäft Baumann', 'ort' => 'Bern', 'branche' => 'Handwerk'],
            ['id' => 10, 'name' => 'Blumen Schmid', 'ort' => 'Aarau', 'branche' => 'Handel'],
            ['id' => 11, 'name' => 'Restaurant Sonne', 'ort' => 'Luzern', 'branche' => 'Gastronomie'],
            ['id' => 12, 'name' => 'Elektro Widmer AG', 'ort' => 'Winterthur', 'branche' => 'Handwerk'],
            ['id' => 13, 'name' => 'Optik Zimmermann', 'ort' => 'Basel', 'branche' => 'Gesundheit'],
            ['id' => 14, 'name' => 'Versicherung Moser', 'ort' => 'Zürich', 'branche' => 'Finanzen'],
            ['id' => 15, 'name' => 'Metzgerei Fischer', 'ort' => 'Thun', 'branche' => 'Gastronomie'],
        ];
    }
}
