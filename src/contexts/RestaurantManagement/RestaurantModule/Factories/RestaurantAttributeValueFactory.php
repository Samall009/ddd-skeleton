<?php

namespace Contexts\RestaurantManagement\RestaurantModule\Factories;

use Contexts\RestaurantManagement\RestaurantModule\Models\RestaurantAttributeValue;
use Infrastructure\Models\ArraySerializable;
use Infrastructure\Services\BaseFactory;


class RestaurantAttributeValueFactory extends BaseFactory
{
    /**
     * @param array $data
     * @return RestaurantAttributeValue
     */
    public function create(array $data) : ArraySerializable
    {
        return new RestaurantAttributeValue(
            array_key_exists('id', $data) ? $data['id'] : 0, $data['value'], $data['restaurantId']);
    }
}