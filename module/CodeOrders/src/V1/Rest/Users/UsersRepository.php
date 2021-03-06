<?php
/**
 * Created by PhpStorm.
 * User: terainfor
 * Date: 29/09/16
 * Time: 13:59
 */

namespace CodeOrders\V1\Rest\Users;


use Zend\Db\TableGateway\TableGatewayInterface;

class UsersRepository
{

    /**
     * @var TableGatewayInterface
     */
    private $tablegateway;

    public function __construct(TableGatewayInterface $tablegateway)
    {

        $this->tablegateway = $tablegateway;
    }

    public function findAll(){
        return $this->tablegateway->select();
    }
}