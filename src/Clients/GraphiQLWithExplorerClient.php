<?php

declare(strict_types=1);

namespace GraphQLByPoP\GraphQLClientsForWP\Clients;

class GraphiQLWithExplorerClient extends GraphiQLClient
{
    protected function getClientRelativePath(): string
    {
        // This is where the files are generated when running `npm run build`
        return '/clients/graphiql-with-explorer/build';
    }
    protected function getJSFilename(): string
    {
        return 'main.6a4c46b0.chunk.js';
    }
    /**
     * Assets folder name
     */
    protected function getAssetDirname(): string
    {
        // Please notice! GraphiQL Explorer loads under "/assets...",
        // that's why the dirname starts with "/"
        return '/static';
    }
}
