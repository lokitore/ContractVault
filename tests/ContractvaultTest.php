<?php
/**
 * Tests for ContractVault
 */

use PHPUnit\Framework\TestCase;
use Contractvault\Contractvault;

class ContractvaultTest extends TestCase {
    private Contractvault $instance;

    protected function setUp(): void {
        $this->instance = new Contractvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
