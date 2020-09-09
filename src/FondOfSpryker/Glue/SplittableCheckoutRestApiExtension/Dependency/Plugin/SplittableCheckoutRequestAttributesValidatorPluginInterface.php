<?php

namespace FondOfSpryker\Glue\SplittableCheckoutRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\RestCheckoutRequestAttributesTransfer;
use Generated\Shared\Transfer\RestErrorCollectionTransfer;
use Generated\Shared\Transfer\RestSplittableCheckoutRequestAttributesTransfer;

interface SplittableCheckoutRequestAttributesValidatorPluginInterface
{
    /**
     * Specification:
     * - Validates splittable checkout Rest API request attributes.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\RestSplittableCheckoutRequestAttributesTransfer $splittableCheckoutRequestAttributesTransfer
     *
     * @return \Generated\Shared\Transfer\RestErrorCollectionTransfer
     */
    public function validateAttributes(
        RestSplittableCheckoutRequestAttributesTransfer $restSplittableCheckoutRequestAttributesTransfer
    ): RestErrorCollectionTransfer;
}
