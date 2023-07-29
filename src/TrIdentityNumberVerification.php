<?php

namespace NetkodBilisim;

class TrIdentityNumberVerification
{
    public const API_URL = 'https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL';
    private static ?object $client = null;

    public static function verify(int $citizen_number, int $birth_year, string $name, string $surname): bool
    {
        if (!TrIdentityNumberValidation::validate($citizen_number)) {
            return false;
        }

        if ($birth_year < 1900 || $birth_year > date('Y')) {
            return false;
        }

        if (static::$client === null) {
            static::$client = new \SoapClient(static::API_URL);
        }

        $response = static::$client->TCKimlikNoDogrula([
            'TCKimlikNo' => $citizen_number,
            'Ad' => tr_strtoupper($name),
            'Soyad' => tr_strtoupper($surname),
            'DogumYili' => $birth_year
        ]);

        return $response->TCKimlikNoDogrulaResult;
    }
}
