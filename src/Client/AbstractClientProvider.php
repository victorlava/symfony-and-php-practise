<?php

namespace App\Client;

abstract class AbstractClientProvider
{
    public function __construct(
        private readonly HttpClientInterface $client,
        protected readonly ClientProviderDto $dto,
    )
    {
    }

    public function request(int $id, string $url): array
    {
        $response = $this->client->request('GET', sprintf($url, $id);

        return json_decode($response->getContent(), 'json');
    }
}
