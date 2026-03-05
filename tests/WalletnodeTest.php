<?php
/**
 * Tests for WalletNode
 */

use PHPUnit\Framework\TestCase;
use Walletnode\Walletnode;

class WalletnodeTest extends TestCase {
    private Walletnode $instance;

    protected function setUp(): void {
        $this->instance = new Walletnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Walletnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
