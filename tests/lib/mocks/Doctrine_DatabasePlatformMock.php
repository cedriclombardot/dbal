<?php

class Doctrine_DatabasePlatformMock extends Doctrine_DatabasePlatform
{
    public function getNativeDeclaration(array $field) {}
    public function getPortableDeclaration(array $field) {}
}

?>