<?php


namespace Bitmovin\api\container;


use Bitmovin\api\model\outputs\Output;
use Bitmovin\configs\JobConfig;
use Bitmovin\output\GcsOutput;

class JobContainer
{

    /**
     * @var JobConfig
     */
    public $job;

    /**
     * @var EncodingContainer[]
     */
    public $encodingContainers = array();

    /**
     * @var Output
     */
    public $apiOutput;

    /**
     * @param $prefix
     * @return string
     */
    private function addTrailingSlash($prefix)
    {
        if (substr($prefix, -1) != '/')
        {
            $prefix .= '/';
        }
        return $prefix;
    }

    /**
     * @param $prefix
     * @return string
     */
    private function stripSlashes($prefix)
    {
        if (substr($prefix, 0, 1) == '/')
        {
            $prefix = substr($prefix, 1);
        }
        if (substr($prefix, -1) == '/')
        {
            $prefix = substr($prefix, 0, -1);
        }
        return $prefix;
    }

    public function getOutputPath()
    {
        $output = $this->job->output;
        if ($output instanceof GcsOutput)
        {
            $prefix = $this->stripSlashes($output->prefix);
            return $this->addTrailingSlash($prefix);
        }
        throw new \InvalidArgumentException();
    }


}