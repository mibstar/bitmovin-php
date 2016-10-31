<?php

namespace Bitmovin\api\resource\encodings\streams\muxings;

use Bitmovin\api\model\encodings\muxing\TSMuxing;

class TsMuxingResource extends MuxingResource
{

    /**
     * TsMuxingResource constructor.
     *
     * @param string $baseUri
     * @param string $modelClassName
     * @param string $apiKey
     */
    public function __construct($baseUri, $modelClassName, $apiKey)
    {
        parent::__construct($baseUri, $modelClassName, $apiKey);
    }

    /**
     * @param TSMuxing $tsMuxing
     *
     * @return TSMuxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function create(TSMuxing $tsMuxing)
    {
        return parent::createMuxing($tsMuxing);
    }

    /**
     * @param TSMuxing $tsMuxing
     *
     * @return TSMuxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function delete(TSMuxing $tsMuxing)
    {
        return parent::deleteMuxing($tsMuxing);
    }

    /**
     * @param TSMuxing $tsMuxing
     *
     * @return TSMuxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function get(TSMuxing $tsMuxing)
    {
        return parent::getMuxing($tsMuxing);
    }

    /**
     * @return TSMuxing[]
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function listAll()
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return parent::listAllMuxings();
    }

    /**
     * @param $tsMuxingId
     *
     * @return TSMuxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function getById($tsMuxingId)
    {
        return parent::getMuxingById($tsMuxingId);
    }

    /**
     * @param $tsMuxingId
     *
     * @return TSMuxing
     * @throws \Bitmovin\api\exceptions\BitmovinException
     */
    public function deleteById($tsMuxingId)
    {
        return parent::deleteMuxingById($tsMuxingId);
    }
}