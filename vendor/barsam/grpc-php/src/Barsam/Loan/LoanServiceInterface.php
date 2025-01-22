<?php
# Generated by the protocol buffer compiler (roadrunner-server/grpc). DO NOT EDIT!
# source: loan/service.proto

namespace Barsam\Loan;

use Spiral\RoadRunner\GRPC;

interface LoanServiceInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "barsam.loan.LoanService";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\CreatePlanRequest $in
    * @return \Barsam\Loan\Messages\CreatePlanResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function CreatePlan(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\CreatePlanRequest $in): \Barsam\Loan\Messages\CreatePlanResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\UpdatePlanRequest $in
    * @return \Barsam\Loan\Messages\UpdatePlanResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function UpdatePlan(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\UpdatePlanRequest $in): \Barsam\Loan\Messages\UpdatePlanResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\DeletePlanRequest $in
    * @return \Barsam\Loan\Messages\DeletePlanResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function DeletePlan(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\DeletePlanRequest $in): \Barsam\Loan\Messages\DeletePlanResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\GetPlanRequest $in
    * @return \Barsam\Loan\Messages\GetPlanResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function GetPlan(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\GetPlanRequest $in): \Barsam\Loan\Messages\GetPlanResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\CreateRequest $in
    * @return \Barsam\Loan\Messages\CreateResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Create(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\CreateRequest $in): \Barsam\Loan\Messages\CreateResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\UpdateRequest $in
    * @return \Barsam\Loan\Messages\UpdateResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Update(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\UpdateRequest $in): \Barsam\Loan\Messages\UpdateResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\DeleteRequest $in
    * @return \Barsam\Loan\Messages\DeleteResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Delete(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\DeleteRequest $in): \Barsam\Loan\Messages\DeleteResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\GetRequest $in
    * @return \Barsam\Loan\Messages\GetResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Get(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\GetRequest $in): \Barsam\Loan\Messages\GetResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Loan\Messages\CalculateRequest $in
    * @return \Barsam\Loan\Messages\CalculateResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Calculate(GRPC\ContextInterface $ctx, \Barsam\Loan\Messages\CalculateRequest $in): \Barsam\Loan\Messages\CalculateResponse;
}
