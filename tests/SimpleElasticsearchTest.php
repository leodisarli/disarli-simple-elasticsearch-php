<?php

namespace SimpleElasticsearch;

use GuzzleHttp\Client as Guzzle;
use Mockery;
use PHPUnit\Framework\TestCase;
use SimpleElasticsearch\SimpleElasticsearch;

class SimpleElasticsearchTest extends TestCase
{
    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::__construct
     */
    public function testSimpleElasticsearchCanBeInstanciated()
    {
        $SimpleElasticsearch = new SimpleElasticsearch();
        $this->assertInstanceOf(SimpleElasticsearch::class, $SimpleElasticsearch);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::sql
     */
    public function testSql()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('POST')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->sql(
            'query'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::sqlCursor
     */
    public function testSqlCursor()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('POST')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->sqlCursor(
            'cursor'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::sql
     */
    public function testSqlJson()
    {
        $response = '{}';
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('POST')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);


        $result = $simpleElasticsearch->sql(
            'query'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::translate
     */
    public function testTranslate()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('POST')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->translate(
            'query'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::deleteIndex
     */
    public function testDeleteIndex()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('DELETE')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->deleteIndex(
            'index'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::listDocuments
     */
    public function testListDocuments()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('POST')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->listDocuments(
            'index',
            2
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::searchDocuments
     */
    public function testSearchDocuments()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('POST')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->searchDocuments(
            'index',
            [],
            2
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::aggregateDocuments
     */
    public function testAggregateDocuments()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('POST')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->aggregateDocuments(
            'index',
            [],
            ['query']
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::postDocument
     */
    public function testPostDocument()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('POST')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->postDocument(
            'index',
            [],
            '1'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::getDocument
     */
    public function testGetDocument()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('GET')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->getDocument(
            'index',
            '1'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::putIndex
     */
    public function testPutIndex()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('PUT')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->putIndex(
            'index'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::putMapping
     */
    public function testPutMapping()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('PUT')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->putMapping(
            'index',
            []
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::getIndex
     */
    public function testGetIndex()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('GET')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->getIndex(
            'index'
        );
        $this->assertInternalType('array', $result);
    }

    /**
     * @covers SimpleElasticsearch\SimpleElasticsearch::getMapping
     */
    public function testGetMapping()
    {
        $response = [];
        $guzzleMock = Mockery::mock(Guzzle::class);
        $guzzleMock->shouldReceive('GET')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();

        $guzzleMock->shouldReceive('getBody')
            ->once()
            ->withAnyArgs()
            ->andReturnSelf();
        
        $guzzleMock->shouldReceive('getContents')
            ->once()
            ->withAnyArgs()
            ->andReturn($response);
            
        $host = 'http://localhost:9200/';
        $simpleElasticsearch = Mockery::mock(SimpleElasticsearch::class, [$host])
            ->makePartial();

        $simpleElasticsearch->shouldReceive('newGuzzle')
            ->once()
            ->andReturn($guzzleMock);

        $result = $simpleElasticsearch->getMapping(
            'index'
        );
        $this->assertInternalType('array', $result);
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
