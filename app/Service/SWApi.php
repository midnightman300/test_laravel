<?php
declare(strict_types=1);

namespace App\Service;

use GuzzleHttp\Client;
use Illuminate\Http\Response;

class SWApi
{
    private $url = 'https://swapi.dev/api';
    private $suffixPeople = 'people';

    private function call(string $suffix, int $id = null)
    {
        $url = $this->generateLink($suffix, $id);

        try {
            $client = new Client();
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                ]
            ]);

            if (!in_array($response->getStatusCode(), [Response::HTTP_OK, Response::HTTP_NOT_MODIFIED])) {
                throw new \Exception('SWApi invalid status code');
            }
            $content = json_decode($response->getBody()->getContents(), false);
        } catch(\Throwable $e) {
            throw new \Exception("SWApi invalid response data! " . $e->getMessage());
        }
        return $content;
    }

    public function getPerson(int $personId)
    {
        return $this->call($this->suffixPeople, $personId);
    }

    private function generateLink($suffix, int $id = null): string
    {
        return implode('/', array_filter([$this->url, $suffix, $id]));
    }
}
