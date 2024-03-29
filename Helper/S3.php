<?php
namespace Arkade\S3\Helper;

class S3
{
    /**
     * Determines whether an S3 region code is valid.
     *
     * @param string $regionInQuestion
     * @return bool
     */
    public function isValidRegion($regionInQuestion)
    {
        foreach ($this->getRegions() as $currentRegion) {
            if ($currentRegion['value'] == $regionInQuestion) {
                return true;
            }
        }
        return false;
    }

    public function getRegions()
    {
        return [
            [
                'value' => 'us-east-1',
                'label' => 'US East (N. Virginia)'
            ],
            [
                'value' => 'us-west-2',
                'label' => 'US West (Oregon)'
            ],
            [
                'value' => 'us-west-1',
                'label' => 'US West (N. California)'
            ],
            [
                'value' => 'eu-west-1',
                'label' => 'EU (Ireland)'
            ],
            [
                'value' => 'eu-central-1',
                'label' => 'EU (Frankfurt)'
            ],
            [
                'value' => 'ap-east-1',
                'label' => 'Asia Pacific (Hong Kong)'
            ],
            [
                'value' => 'ap-south-1',
                'label' => 'Asia Pacific (Mumbai)'
            ],
            [
                'value' => 'ap-southeast-1',
                'label' => 'Asia Pacific (Singapore)'
            ],
            [
                'value' => 'ap-northeast-1',
                'label' => 'Asia Pacific (Tokyo)'
            ],
            [
                'value' => 'ap-southeast-2',
                'label' => 'Asia Pacific (Sydney)'
            ],
            [
                'value' => 'ap-northeast-2',
                'label' => 'Asia Pacific (Seoul)'
            ],
            [
                'value' => 'sa-east-1',
                'label' => 'South America (Sao Paulo)'
            ],
            [
                'value' => 'cn-north-1',
                'label' => 'China (Beijing)'
            ],
            [
                'value' => 'cn-northwest-1',
                'label' => 'China (Ningxia)'
            ]
        ];
    }
}
