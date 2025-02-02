<?php
# Generated by the protocol buffer compiler (roadrunner-server/grpc). DO NOT EDIT!
# source: auth/service.proto

namespace Barsam\Auth;

use Spiral\RoadRunner\GRPC;

interface AuthServiceInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "barsam.auth.AuthService";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Auth\Messages\AuthorizeRequest $in
    * @return \Barsam\Auth\Messages\AuthorizeResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function Authorize(GRPC\ContextInterface $ctx, \Barsam\Auth\Messages\AuthorizeRequest $in): \Barsam\Auth\Messages\AuthorizeResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Auth\Messages\IssueTokenRequest $in
    * @return \Barsam\Auth\Messages\IssueTokenResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function IssueToken(GRPC\ContextInterface $ctx, \Barsam\Auth\Messages\IssueTokenRequest $in): \Barsam\Auth\Messages\IssueTokenResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Auth\Messages\ValidateTokenRequest $in
    * @return \Barsam\Auth\Messages\ValidateTokenResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function ValidateToken(GRPC\ContextInterface $ctx, \Barsam\Auth\Messages\ValidateTokenRequest $in): \Barsam\Auth\Messages\ValidateTokenResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Auth\Messages\GetSessionsRequest $in
    * @return \Barsam\Auth\Messages\GetSessionsResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function GetSessions(GRPC\ContextInterface $ctx, \Barsam\Auth\Messages\GetSessionsRequest $in): \Barsam\Auth\Messages\GetSessionsResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Auth\Messages\LogoutSessionRequest $in
    * @return \Barsam\Auth\Messages\LogoutSessionResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function LogoutSession(GRPC\ContextInterface $ctx, \Barsam\Auth\Messages\LogoutSessionRequest $in): \Barsam\Auth\Messages\LogoutSessionResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Auth\Messages\GenerateOtpRequest $in
    * @return \Barsam\Auth\Messages\GenerateOtpResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function GenerateOtp(GRPC\ContextInterface $ctx, \Barsam\Auth\Messages\GenerateOtpRequest $in): \Barsam\Auth\Messages\GenerateOtpResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param \Barsam\Auth\Messages\VerifyOtpRequest $in
    * @return \Barsam\Auth\Messages\VerifyOtpResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function VerifyOtp(GRPC\ContextInterface $ctx, \Barsam\Auth\Messages\VerifyOtpRequest $in): \Barsam\Auth\Messages\VerifyOtpResponse;
}
