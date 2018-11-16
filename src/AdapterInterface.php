<?php declare(strict_types=1);

namespace Invia\CMI;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Interface AdapterInterface
 */
interface AdapterInterface
{
    /**
     * @return Credentials
     */
    public function getCredentials(): Credentials;

    /**
     * @return string
     */
    public function getAdapterKey(): string;

    /**
     * @return string
     */
    public function getUrlPath(): string;

    /**
     * @param Request $request
     *
     * @return AdapterInterface
     */
    public function setRequest(Request $request): self;

    /**
     * @param FacadeInterface $facade
     *
     * @return Response
     */
    public function handleRequest(FacadeInterface $facade): Response;

    /**
     * @param CMIException $exception
     *
     * @return Response
     */
    public function handleException(CMIException $exception): Response;
}
