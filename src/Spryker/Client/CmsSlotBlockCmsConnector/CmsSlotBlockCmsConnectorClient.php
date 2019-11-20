<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CmsSlotBlockCmsConnector;

use Generated\Shared\Transfer\CmsBlockTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Spryker\Client\CmsSlotBlockCmsConnector\CmsSlotBlockCmsConnectorFactory getFactory()
 */
class CmsSlotBlockCmsConnectorClient extends AbstractClient implements CmsSlotBlockCmsConnectorClientInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CmsBlockTransfer $cmsBlockTransfer
     *
     * @return bool
     */
    public function isSlotBlockConditionApplicable(CmsBlockTransfer $cmsBlockTransfer): bool
    {
        return $this->getFactory()
            ->createCmsPageCmsSlotBlockConditionResolver()
            ->isSlotBlockConditionApplicable($cmsBlockTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CmsBlockTransfer $cmsBlockTransfer
     * @param array $cmsSlotParams
     *
     * @return bool
     */
    public function isCmsBlockVisibleInSlot(CmsBlockTransfer $cmsBlockTransfer, array $cmsSlotParams): bool
    {
        return $this->getFactory()
            ->createCmsPageCmsSlotBlockConditionResolver()
            ->isCmsBlockVisibleInSlot($cmsBlockTransfer, $cmsSlotParams);
    }
}