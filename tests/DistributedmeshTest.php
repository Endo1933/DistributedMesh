<?php
/**
 * Tests for DistributedMesh
 */

use PHPUnit\Framework\TestCase;
use Distributedmesh\Distributedmesh;

class DistributedmeshTest extends TestCase {
    private Distributedmesh $instance;

    protected function setUp(): void {
        $this->instance = new Distributedmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Distributedmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
