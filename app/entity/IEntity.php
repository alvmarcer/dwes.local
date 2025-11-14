<?php
namespace dwes\app\entity;

Interface IEntity {
    public function toArray() : array;

    public function getId(): ?int;
}