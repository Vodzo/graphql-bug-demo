<?php

namespace App\GraphQL\Resolver;

use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class TestResolver implements ResolverInterface
{
    public function test()
	{
	return 'test';
        }

}
