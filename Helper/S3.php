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
                'value' => 'us-east-2',
                'label' => 'US East (Ohio)'
            ],
            [
                'value' => 'us-west-1',
                'label' => 'US West (N. California)'
            ],
            [
                'value' => 'us-west-2',
                'label' => 'US West (Oregon)'
            ],
            [
                'value' => 'af-south-1',
                'label' => 'Africa (Cape Town)'
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
                'value' => 'ap-southeast-2',
                'label' => 'Asia Pacific (Sydney)'
            ],
            [
                'value' => 'ap-southeast-3',
                'label' => 'Asia Pacific (Jakarta)'
            ],
            [
                'value' => 'ap-northeast-1',
                'label' => 'Asia Pacific (Tokyo)'
            ],
            [
                'value' => 'ap-northeast-2',
                'label' => 'Asia Pacific (Seoul)'
            ],
            [
                'value' => 'ap-northeast-3',
                'label' => 'Asia Pacific (Osaka)'
            ],
            [
                'value' => 'ca-central-1',
                'label' => 'Canada (Central)'
            ],
            [
                'value' => 'eu-central-1',
                'label' => 'EU (Frankfurt)'
            ],
            [
                'value' => 'eu-west-1',
                'label' => 'EU (Ireland)'
            ],
            [
                'value' => 'eu-west-2',
                'label' => 'Europe (London)'
            ],
            [
                'value' => 'eu-west-3',
                'label' => 'Europe (Paris)'
            ],
            [
                'value' => 'eu-south-1',
                'label' => 'Europe (Milan)'
            ],
            [
                'value' => 'eu-north-1',
                'label' => 'Europe (Stockholm)'
            ],
            [
                'value' => 'me-south-1',
                'label' => 'Middle East (Bahrain)'
            ],
            [
                'value' => 'me-central-1',
                'label' => 'Middle East (UAE)'
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
