<?php
namespace Ratchet\WebSocket\Version\RFC6455;


use Ratchet\ConnectionInterface;

interface PingListener
{
  function onPing(ConnectionInterface $from);
}