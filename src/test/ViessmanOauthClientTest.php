<?php
/**
 * Created by PhpStorm.
 * User: clibois
 * Date: 31/08/18
 * Time: 12:43
 */
namespace Viessman\API;
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use PHPUnit\Framework\TestCase;
use Viessman\Oauth\ViessmanOauthClient;

class ViessmanOauthClientTest extends TestCase
{

    public function testAll()
    {
        $params=[
            "user"=>"",
            "password"=>"",
            "uri"=>"vicare://oauth-callback/everest"
        ];

        $viessmanAuthClient=new ViessmanOauthClient($params);
        $code=$viessmanAuthClient->getCode();
        self::assertNotNull($viessmanAuthClient->getToken($code));
    }


}