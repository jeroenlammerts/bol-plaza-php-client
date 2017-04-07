<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 4/1/17
 * Time: 5:13 PM
 */

namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaRetailerOffer
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @property string $EAN
 * @property string $Condition
 * @property string $Price
 * @property string $DeliveryCode
 * @property string $QuantityInStock
 * @property string $Publish
 * @property string $ReferenceCode
 * @property string $Description
 * @property string $Title
 * @property string $Fulfillment
 */
class BolPlazaRetailerOffer extends BaseModel
{
    protected $xmlEntityName = 'RetailerOffer';

    protected $attributes = [
        'EAN',
        'Condition',
        'Price',
        'DeliveryCode',
        'QuantityInStock',
        'Publish',
        'ReferenceCode',
        'Description',
        'Title',
        'Fulfillment'
    ];
}