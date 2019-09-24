<?php

use Guzzle\Http\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;

class StaticAPITest extends PHPUnit_Framework_TestCase {

    protected $client;

    public function setUp() {
		static $content_type = 'application/json';
        $this->client = new GuzzleHttp\Client(['base_uri' => 'https://www.trasers.com']);
    }

    public function testGet_staticPages() {
        // Request for Term Of Use API 
        $response = $this->client->get("/api_trasers/legal-static-page/?nid=9902", array('Content-Type' => $content_type));
        $this->assertEquals(200, $response->getStatusCode());
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('title', $data[0]);
        $this->assertArrayHasKey('banner_image', $data[0]);
        $this->assertArrayHasKey('body', $data[0]);

        // Request for Privacy Policy API 
        $privacy_response = $this->client->get("/api_trasers/legal-static-page/?nid=9903", array('Content-Type' => $content_type));
        $this->assertEquals(200, $privacy_response->getStatusCode());
        $privacy_data = json_decode($privacy_response->getBody(), true);
        $this->assertArrayHasKey('title', $privacy_data[0]);
        $this->assertArrayHasKey('banner_image', $privacy_data[0]);
        $this->assertArrayHasKey('body', $privacy_data[0]);

        // Request for COOKIE POLICY API 
        $policy_response = $this->client->get("/api_trasers/legal-static-page/?nid=9904", array('Content-Type' => $content_type));
        $this->assertEquals(200, $policy_response->getStatusCode());
        $policy_data = json_decode($policy_response->getBody(), true);
        $this->assertArrayHasKey('title', $policy_data[0]);
        $this->assertArrayHasKey('banner_image', $policy_data[0]);
        $this->assertArrayHasKey('body', $policy_data[0]);

        // Request for COPYRIGHT AND QUOTE POLICY API 
        $copyright_response = $this->client->get("/api_trasers/legal-static-page/?nid=9906", array('Content-Type' => $content_type));
        $this->assertEquals(200, $copyright_response->getStatusCode());
        $copyright_data = json_decode($copyright_response->getBody(), true);
        $this->assertArrayHasKey('title', $copyright_data[0]);
        $this->assertArrayHasKey('banner_image', $copyright_data[0]);
        $this->assertArrayHasKey('body', $copyright_data[0]);

        // Request for Disclaimer API 
        $disclaimer_response = $this->client->get("/api_trasers/legal-static-page/?nid=10420", array('Content-Type' => $content_type));
        $this->assertEquals(200, $disclaimer_response->getStatusCode());
        $disclaimer_data = json_decode($disclaimer_response->getBody(), true);
        $this->assertArrayHasKey('title', $disclaimer_data[0]);
        $this->assertArrayHasKey('banner_image', $disclaimer_data[0]);
        $this->assertArrayHasKey('body', $disclaimer_data[0]);

        // Request for About US API 
        $aboutus_response = $this->client->get("/api_trasers/legal-static-page/?nid=10402", array('Content-Type' => $content_type));
        $this->assertEquals(200, $aboutus_response->getStatusCode());
        $aboutus_data = json_decode($aboutus_response->getBody(), true);
        $this->assertArrayHasKey('title', $aboutus_data[0]);
        $this->assertArrayHasKey('banner_image', $aboutus_data[0]);
        $this->assertArrayHasKey('body', $aboutus_data[0]);

        // Request for The trasers story API 
        $story_response = $this->client->get("/api_trasers/legal-static-page/?nid=10403", array('Content-Type' => $content_type));
        $this->assertEquals(200, $story_response->getStatusCode());
        $story_data = json_decode($story_response->getBody(), true);
        $this->assertArrayHasKey('title', $story_data[0]);
        $this->assertArrayHasKey('banner_image', $story_data[0]);
        $this->assertArrayHasKey('body', $story_data[0]);

        // Request for Our Values API 
        $values_response = $this->client->get("/api_trasers/legal-static-page/?nid=10405", array('Content-Type' => $content_type));
        $this->assertEquals(200, $values_response->getStatusCode());
        $values_data = json_decode($values_response->getBody(), true);
        $this->assertArrayHasKey('title', $values_data[0]);
        $this->assertArrayHasKey('banner_image', $values_data[0]);
        $this->assertArrayHasKey('body', $values_data[0]);

        // Request for ab-initio API 
        $avinitio_response = $this->client->get("/api_trasers/legal-static-page/?nid=10405", array('Content-Type' => $content_type));
        $this->assertEquals(200, $avinitio_response->getStatusCode());
        $avinitio_data = json_decode($avinitio_response->getBody(), true);
        $this->assertArrayHasKey('title', $avinitio_data[0]);
        $this->assertArrayHasKey('banner_image', $avinitio_data[0]);
        $this->assertArrayHasKey('body', $avinitio_data[0]);

        // Request for Term of Use-IOS API 
        $terms_response = $this->client->get("/api_trasers/legal-static-page/?nid=11989", array('Content-Type' => $content_type));
        $this->assertEquals(200, $terms_response->getStatusCode());
        $terms_data = json_decode($terms_response->getBody(), true);
        $this->assertArrayHasKey('title', $terms_data[0]);
        $this->assertArrayHasKey('banner_image', $terms_data[0]);
        $this->assertArrayHasKey('body', $terms_data[0]);

        // Request for COPYRIGHT AND QUOTE POLICY-IOS API 
        $copyrightp_response = $this->client->get("/api_trasers/legal-static-page/?nid=11990", array('Content-Type' => $content_type));
        $this->assertEquals(200, $copyrightp_response->getStatusCode());
        $copyrightp_data = json_decode($copyrightp_response->getBody(), true);
        $this->assertArrayHasKey('title', $copyrightp_data[0]);
        $this->assertArrayHasKey('banner_image', $copyrightp_data[0]);
        $this->assertArrayHasKey('body', $copyrightp_data[0]);

        // Request for PRIVACY POLICY - IOS API 
        $ppolicy_response = $this->client->get("/api_trasers/legal-static-page/?nid=11992", array('Content-Type' => $content_type));
        $this->assertEquals(200, $ppolicy_response->getStatusCode());
        $ppolicy_data = json_decode($ppolicy_response->getBody(), true);
        $this->assertArrayHasKey('title', $ppolicy_data[0]);
        $this->assertArrayHasKey('banner_image', $ppolicy_data[0]);
        $this->assertArrayHasKey('body', $ppolicy_data[0]);

        // Request for Disclaimer - IOS API 
        $idisclaimer_response = $this->client->get("/api_trasers/legal-static-page/?nid=11993", array('Content-Type' => $content_type));
        $this->assertEquals(200, $idisclaimer_response->getStatusCode());
        $idisclaimer_data = json_decode($idisclaimer_response->getBody(), true);
        $this->assertArrayHasKey('title', $idisclaimer_data[0]);
        $this->assertArrayHasKey('banner_image', $idisclaimer_data[0]);
        $this->assertArrayHasKey('body', $idisclaimer_data[0]);
    }

}
