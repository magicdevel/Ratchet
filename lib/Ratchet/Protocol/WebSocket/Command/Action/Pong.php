<?php
namespace Ratchet\Command;
use Ratchet\SocketInterface;

/**
 * @todo Move this command to the WebSocket protocol namespace
 */
class Pong implements CommandInterface {
    public function __construct(SocketInterface $socket) {
    }

    public function execute() {
    }
}