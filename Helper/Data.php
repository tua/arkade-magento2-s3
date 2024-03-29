<?php
namespace Arkade\S3\Helper;

use Arkade\S3\Model\MediaStorage\File\Storage;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    private $useS3 = null;

    /**
     * Check whether we are allowed to use S3 as our file storage backend.
     *
     * @return bool
     */
    public function checkS3Usage()
    {
        if ($this->useS3 === null) {
            $currentStorage = (int)$this->scopeConfig->getValue(Storage::XML_PATH_STORAGE_MEDIA);
            $this->useS3 = $currentStorage == Storage::STORAGE_MEDIA_S3;
        }
        return $this->useS3;
    }

    public function getAccessKey()
    {
        return $this->scopeConfig->getValue('arkade_s3/general/access_key');
    }

    public function getSecretKey()
    {
        return $this->scopeConfig->getValue('arkade_s3/general/secret_key');
    }

    public function getRegion()
    {
        return $this->scopeConfig->getValue('arkade_s3/general/region');
    }

    public function getBucket()
    {
        return $this->scopeConfig->getValue('arkade_s3/general/bucket');
    }
}
